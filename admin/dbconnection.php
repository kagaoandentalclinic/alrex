<?php
require_once(__DIR__.'/../initialize.php');

$conn = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT) or die("Could not connect to mysql".mysqli_connect_error());