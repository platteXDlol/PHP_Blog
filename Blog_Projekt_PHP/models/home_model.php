<?php


$user = 'd041e_pahocher';
$password = 'BLJ_db_2024';
$database = 'd041e_pahocher';

$pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=' . $database, $user, $password, [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);


$stmt = $pdo->prepare('SELECT * FROM `posts` ORDER BY `created_at` DESC');
$stmt->execute();


$test_blogs = $pdo->prepare('SELECT * FROM `posts`');
$test_blogs->execute();



?>