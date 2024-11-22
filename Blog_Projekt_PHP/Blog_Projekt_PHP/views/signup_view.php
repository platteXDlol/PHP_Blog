<?php require "templates/header.php"?>

<h1>Sign up</h1>

<form action="sign_up" method="post">

    <div class="field">
        <label class="label">Name</label>
            <input class="input" type="text" name="name" placeholder="Name">
    </div>

    <div class="field">
        <label class="label">Vorname</label>
            <input class="input" type="text" name="vorname" placeholder="Vorname">
    </div>

    <div class="field">
        <label class="label">E-MAil</label>
            <input class="input" type="email" name="email" placeholder="example@email.com">
    </div>

    <div class="field">
        <label class="label">Username</label>
            <input class="input" type="text" name="username" placeholder="Username">
    </div>

    <div class="field">
        <label class="label">Passwort</label>
            <input class="input" type="password" name="passwort" placeholder="Passwort123">
    </div>

    <div class="field">
            <button class="button is-link">Sign up</button>
        </div>