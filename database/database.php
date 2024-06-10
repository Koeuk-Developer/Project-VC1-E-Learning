<?php
$hostname = "localhost";
$database = "student";
$username = "root";
$password = "";

// $dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4";
$dsn = "mysql:host=$hostname;dbname=$database;charset=utf8mb4;unix_socket=/path/to/mysql.sock";

$connection = new PDO($dsn, $username, $password);
?>
