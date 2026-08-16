<?php
// One-off cleanup: fix `users.address` rows saved by the old admin/save.php bug,
// which re-appended barangay/city/province onto an already-combined address,
// producing "A, B, C, A, B, C". Detects an exact repeated-halves pattern and
// truncates to the first half. Safe no-op on anything that doesn't match.
//
// Usage (local):   php dedupe_address.php --local [--apply]
// Usage (tunnel):  php dedupe_address.php <port> <user> <password> <database> [--apply]
//
// Without --apply, only prints what WOULD change (dry run).

$args = $argv;
array_shift($args);

$apply = false;
$args = array_values(array_filter($args, function ($a) use (&$apply) {
    if ($a === '--apply') { $apply = true; return false; }
    return true;
}));

if (isset($args[0]) && $args[0] === '--local') {
    $host = '127.0.0.1';
    $port = 3306;
    $user = 'root';
    $password = '';
    $database = 'alrexx_db';
} elseif (count($args) >= 4) {
    [$port, $user, $password, $database] = $args;
    $host = '127.0.0.1';
    $port = (int)$port;
} else {
    fwrite(STDERR, "Usage: php dedupe_address.php --local [--apply]\n");
    fwrite(STDERR, "   or: php dedupe_address.php <port> <user> <password> <database> [--apply]\n");
    exit(1);
}

$mysqli = mysqli_init();
$mysqli->real_connect($host, $user, $password, $database, $port);
if ($mysqli->connect_errno) {
    fwrite(STDERR, "Connect failed: {$mysqli->connect_error}\n");
    exit(1);
}

$result = $mysqli->query("SELECT id, username, address FROM users WHERE address IS NOT NULL AND address <> ''");

$changed = 0;
while ($row = $result->fetch_assoc()) {
    $parts = array_map('trim', explode(',', $row['address']));
    $count = count($parts);

    if ($count < 4 || $count % 2 !== 0) {
        continue;
    }

    $half = $count / 2;
    $firstHalf = array_slice($parts, 0, $half);
    $secondHalf = array_slice($parts, $half);

    if ($firstHalf !== $secondHalf) {
        continue;
    }

    $fixed = implode(', ', $firstHalf);
    $changed++;

    echo "id={$row['id']} ({$row['username']})\n";
    echo "  before: {$row['address']}\n";
    echo "  after:  $fixed\n";

    if ($apply) {
        $escaped = $mysqli->real_escape_string($fixed);
        $mysqli->query("UPDATE users SET address = '$escaped' WHERE id = {$row['id']}");
    }
}

echo $changed === 0
    ? "No duplicated addresses found.\n"
    : ($apply ? "Fixed $changed row(s).\n" : "$changed row(s) WOULD be fixed (dry run - rerun with --apply).\n");

$mysqli->close();
