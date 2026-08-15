<?php
header('Content-Type: application/json');

$province = trim($_GET['province'] ?? '');
$city     = trim($_GET['city'] ?? '');

if (empty($province) || empty($city)) {
    echo json_encode([]);
    exit;
}

$cacheDir = __DIR__ . '/../uploads/barangay_cache/';
if (!is_dir($cacheDir)) {
    @mkdir($cacheDir, 0755, true);
}

$cacheKey  = md5(strtolower($province . '|' . $city));
$cacheFile = $cacheDir . $cacheKey . '.json';

// Serve from cache (30-day TTL)
if (file_exists($cacheFile) && (time() - filemtime($cacheFile)) < 86400 * 30) {
    readfile($cacheFile);
    exit;
}

function psgc_fetch($url) {
    if (function_exists('curl_init')) {
        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT        => 15,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_USERAGENT      => 'AlrexSystem/1.0',
        ]);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result ?: false;
    }
    return @file_get_contents($url);
}

$baseUrl = 'https://psgc.cloud/api';

// Step 1: Find province code by name
$provJson  = psgc_fetch($baseUrl . '/provinces/');
$provinces = json_decode($provJson, true);

if (!$provinces) {
    echo json_encode([]);
    exit;
}

$provCode = null;
// Exact match first
foreach ($provinces as $p) {
    if (strcasecmp(trim($p['name']), $province) === 0) {
        $provCode = $p['code'];
        break;
    }
}
// Partial match fallback
if (!$provCode) {
    foreach ($provinces as $p) {
        $pName = strtolower(trim($p['name']));
        $qName = strtolower($province);
        if (strpos($pName, $qName) !== false || strpos($qName, $pName) !== false) {
            $provCode = $p['code'];
            break;
        }
    }
}

if (!$provCode) {
    echo json_encode([]);
    exit;
}

// Step 2: Find city/municipality code within that province
$cityJson = psgc_fetch($baseUrl . '/provinces/' . $provCode . '/cities-municipalities/');
$cities   = json_decode($cityJson, true);

if (!$cities) {
    echo json_encode([]);
    exit;
}

$cityCode = null;
foreach ($cities as $c) {
    if (strcasecmp(trim($c['name']), $city) === 0) {
        $cityCode = $c['code'];
        break;
    }
}
if (!$cityCode) {
    foreach ($cities as $c) {
        $cName = strtolower(trim($c['name']));
        $qName = strtolower($city);
        if (strpos($cName, $qName) !== false || strpos($qName, $cName) !== false) {
            $cityCode = $c['code'];
            break;
        }
    }
}

if (!$cityCode) {
    echo json_encode([]);
    exit;
}

// Step 3: Fetch barangays for this city/municipality
$bgJson  = psgc_fetch($baseUrl . '/cities-municipalities/' . $cityCode . '/barangays/');
$bgData  = json_decode($bgJson, true);

if (!$bgData) {
    echo json_encode([]);
    exit;
}

$barangays = array_map(function ($b) { return $b['name']; }, $bgData);
sort($barangays);

$result = json_encode($barangays);
@file_put_contents($cacheFile, $result);
echo $result;
