<?php
require "templates/header.php";
require "models/signup_model.php";
?>

<section class="section is-fullheight" style="background-color: #FFFFFF">



    <?php if (!empty($errors)): ?>
        <div class="notification is-danger mx-6" style="background-color: #FFFFFF>
        <ul class="error-box">
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error); ?></li>
        <?php endforeach; ?>
        </ul>
        </div>
    <?php endif; ?>




    <div class="container is-flex is-justify-content-center is-align-items-center">
        <!-- Signup Form Container -->
        <div class="box" style="max-width: 450px; width: 100%; padding: 20px; background-color: #f2f3f5;">
            <!-- Signup Page Title -->
            <h1 class="title is-4 has-text-centered" style="color: #1e38fc">Sign Up</h1>

            <!-- Message Below Title -->
            <div class="notification is-info is-light mb-5">
                Already have an account? <a class="has-text-link" href="login">Log in</a> to start writing your own blogs!
            </div>

            <!-- Signup Form -->
            <form action="sign_up" method="post">

                <!-- Name Field -->
                <div class="field">
                    <label class="label" style="color: #0084b0">Name</label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="name" placeholder="Enter your name" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <!-- Vorname Field -->
                <div class="field">
                    <label class="label" style="color: #0084b0">Vorname</label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="vorname" placeholder="Enter your first name" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>

                <!-- Email Field -->
                <div class="field">
                    <label class="label" style="color: #0084b0">E-Mail</label>
                    <div class="control has-icons-left">
                        <input class="input" type="email" name="email" placeholder="example@email.com" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>

                <!-- Username Field -->
                <div class="field">
                    <label class="label" style="color: #0084b0">Username</label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="username" placeholder="Enter your username" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user-tag"></i>
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
                        <button class="button is-link is-fullwidth">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Include FontAwesome for Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

