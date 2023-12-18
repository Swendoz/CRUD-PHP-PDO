<?php

$dbHost = 'localhost';
$dbName = 'crud-php-pdo-opdracht';
$dbUser = 'root';
$dbPass = '';

$conn = new PDO("mysql:host=$dbHost; dbname=$dbName; charset=UTF8;", $dbUser, $dbPass);

if (!$conn) {
    echo "<script>alert('Database connection failed')</script>";
}