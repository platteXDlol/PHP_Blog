<?php


$user = 'd041e_urs_ro';
$password = 'PW_d041e_urs_ro';
$database = 'd041e_urs';

$pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=' . $database, $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);


$stmt = $pdo->prepare('Select blog_url, blog_von from blogs WHERE jahr = 2024');
$stmt->execute();
