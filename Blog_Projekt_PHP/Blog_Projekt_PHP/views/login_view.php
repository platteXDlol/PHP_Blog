<?php require "templates/header.php"?>

<h1>Login</h1>

<form action="login" method="post">
    <div class="field">
        <label class="label">Username</label>
        <div class="control">
            <input class="input" type="text" name="username" placeholder="Username">
        </div>
    </div>
    <div class="field">
        <label class="label">Password</label>
        <div class="control">
            <input class="input" type="password" name="password" placeholder="Password">
        </div>
    </div>
    <div class="field">
        <div class="control">
            <button class="button is-link">Login</button>
        </div>
    </div>