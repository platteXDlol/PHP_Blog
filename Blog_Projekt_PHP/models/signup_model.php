<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$errors = [];

    $name = $_POST["name"];
    $firstname = $_POST["vorname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    $safe_password = htmlspecialchars($password);

    $safe_password_hash = password_hash($safe_password, PASSWORD_DEFAULT);

    $safe_name = htmlspecialchars($name);
    $safe_firstname = htmlspecialchars($firstname);
    $safe_email = htmlspecialchars($email);
    $safe_username = htmlspecialchars($username);



    $user = 'd041e_pahocher';
    $password = 'BLJ_db_2024';
    $database = 'd041e_pahocher';


    try {
        $pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=' . $database, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die('Connection failed: ' . $e->getMessage());
    }

    $stmt_username = $pdo->prepare("SELECT user_name FROM users_new WHERE user_name = :username");
    $stmt_username->execute(['username' => $safe_username]);

    if ($stmt_username->rowCount() > 0) {
        $errors[] = "Username already exists";
    }

    $stmt_email = $pdo->prepare("SELECT email FROM users_new WHERE email = :email");
    $stmt_email->execute(['email' => $safe_email]);

    if ($stmt_email->rowCount() > 0) {
        $errors[] = "Email already exists";
    }

    if (count($errors) === 0) {
        $stmt = $pdo->prepare("INSERT INTO users_new (first_name, last_name, email, user_name, user_password) VALUES (:firstname, :lastname, :email, :username, :passwd)");
        $stmt->execute([
            ':firstname' => "$safe_firstname",
            ':lastname' => "$safe_name",
            ':email' => "$safe_email",
            ':username' => "$safe_username",
            ':passwd' => "$safe_password_hash"
        ]);

        header("Location: login");
    }

}