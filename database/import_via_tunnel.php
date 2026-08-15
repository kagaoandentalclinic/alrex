<?php
// One-off import helper: run the alrexx_db.sql dump against a Railway MySQL
// instance reached through `railway connect MySQL --tunnel-only` (127.0.0.1 + printed port).
// Usage: php import_via_tunnel.php <port> <user> <password> <database>

if ($argc < 5) {
    fwrite(STDERR, "Usage: php import_via_tunnel.php <tunnel_port> <user> <password> <database>\n");
    exit(1);
}

[$script, $port, $user, $password, $database] = $argv;
$port = (int)$port;

$mysqli = mysqli_init();
$mysqli->real_connect('127.0.0.1', $user, $password, $database, $port);

if ($mysqli->connect_errno) {
    fwrite(STDERR, "Connect failed: {$mysqli->connect_error}\n");
    exit(1);
}

$sqlFile = __DIR__ . '/alrexx_db.sql';
$sql = file_get_contents($sqlFile);
if ($sql === false) {
    fwrite(STDERR, "Could not read $sqlFile\n");
    exit(1);
}

echo "Connected. Running $sqlFile ...\n";

if (!$mysqli->multi_query($sql)) {
    fwrite(STDERR, "Query failed: {$mysqli->error}\n");
    exit(1);
}

$statementCount = 0;
do {
    $statementCount++;
    if ($result = $mysqli->store_result()) {
        $result->free();
    }
    if ($mysqli->errno) {
        fwrite(STDERR, "Error on statement $statementCount: {$mysqli->error}\n");
        exit(1);
    }
} while ($mysqli->more_results() && $mysqli->next_result());

echo "Done. Ran $statementCount statement(s) with no errors.\n";

$tables = $mysqli->query("SHOW TABLES");
echo "Tables now in `$database`:\n";
while ($row = $tables->fetch_row()) {
    echo "  - {$row[0]}\n";
}

$mysqli->close();
