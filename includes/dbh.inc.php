<?php

$host = "localhost";
$dbname = "loginsignup";
$dbusername = "root";
$dbpassword = "";

try {
    $pdo = new PDO("mysql:host=$host; dbname=$dbname", $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    die("Connection Error" . $th->getMessage());
}

