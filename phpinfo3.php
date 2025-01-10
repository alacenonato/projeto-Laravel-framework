<?php

$mysqli = new mysqli("localhost", "root", "123456", "projeto");

echo $mysqli->host_info . "\n";

$mysqli = new mysqli("127.0.0.1", "root", "123456", "projeto", 3306);

echo $mysqli->host_info . "\n";

?>
