<?php
require "templates/header.php";
require "models/login_model.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_blog = 'd041e_pahocher';
    $password = 'BLJ_db_2024';
    $database = 'd041e_pahocher';

    try {
        $pdo = new PDO('mysql:host=mysql2.webland.ch;dbname=' . $database, $user_blog, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    } catch (PDOException $e) {
        die('<div class="notification is-danger">Database connection failed: ' . $e->getMessage() . '</div>');
    }

    $username = htmlspecialchars($_POST["username"]);
    $input_password = $_POST["password"];

    $stmt = $pdo->prepare('SELECT id, user_name, user_password FROM users_new WHERE user_name = :username');
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch();

    if ($user && password_verify($input_password, $user['user_password'])) {
        session_start();
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['user_name'];

        header("Location: home");
        exit;
    } else {
        $error_message = "Invalid username or password.";
    }
}
?>


<section class="section is-fullheight" style="background-color: #FFFFFF">
    <div class="container is-flex is-justify-content-center is-align-items-center">
        <div class="box" style="max-width: 400px; width: 100%; background-color: #f2f3f5;">
            <!-- Login Page Title -->
            <h1 class="title is-4 has-text-centered" style="color: #1e38fc">Login</h1>

            <!-- Optional Error Message -->
            <?php if (!empty($error_message)): ?>
                <div class="notification is-danger is-light">
                    <?= htmlspecialchars($error_message); ?>
                </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form action="login" method="post">
                <!-- Username Field -->
                <div class="field">
                    <label class="label" style="color: #0084b0">Username</label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="username" placeholder="Enter your username" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <!-- Password Field -->
                <div class="field">
                    <label class="label" style="color: #0084b0">Password</label>
                    <div class="control has-icons-left">
                        <input class="input" type="password" name="password" placeholder="Enter your password" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="field">
                    <div class="control">
                        <button class="button is-link is-fullwidth">Login</button>
                    </div>
                </div>
            </form>

            <!-- Additional Links -->
            <p class="has-text-centered mt-4">
                Don't have an account? <a href="sign_up" class="has-text-link">Sign up</a>
            </p>
        </div>
    </div>
</section>

<!-- Include FontAwesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

