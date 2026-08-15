<?php
// One-off diagnostic query helper, same tunnel pattern as import_via_tunnel.php.
// Usage: php query_via_tunnel.php <port> <user> <password> <database> "<SELECT ...>"

if ($argc < 6) {
    fwrite(STDERR, "Usage: php query_via_tunnel.php <tunnel_port> <user> <password> <database> \"<SELECT ...>\"\n");
    exit(1);
}

[$script, $port, $user, $password, $database, $sql] = $argv;
$port = (int)$port;

$mysqli = mysqli_init();
$mysqli->real_connect('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_errno) {
    fwrite(STDERR, "Connect failed: {$mysqli->connect_error}\n");
    exit(1);
}

$result = $mysqli->query($sql);
if ($result === false) {
    fwrite(STDERR, "Query failed: {$mysqli->error}\n");
    exit(1);
}

if ($result === true) {
    echo "OK, {$mysqli->affected_rows} row(s) affected.\n";
    exit(0);
}

$fields = $result->fetch_fields();
$names = array_map(fn($f) => $f->name, $fields);
echo implode(" | ", $names) . "\n";

while ($row = $result->fetch_assoc()) {
    echo implode(" | ", array_map(fn($v) => $v === null ? 'NULL' : $v, $row)) . "\n";
}

$mysqli->close();
