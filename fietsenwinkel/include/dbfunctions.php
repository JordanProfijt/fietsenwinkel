<?php

defined('BASEPATH') or exit('No direct script access allowed'); 
$host = 'localhost';
$user = 's160294_fietsenwinkel'; 
$password = '160294_fietsenwinkel'; 
$dbname = 's160294_fietsenwinkel'; 
$dsn = 'localhost';


try {
    $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'connection failed: ' . $e->getMessage();
}
