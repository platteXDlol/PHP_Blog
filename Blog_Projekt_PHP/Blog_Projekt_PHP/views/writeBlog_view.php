<?php
require "templates/header.php";
require "models/writeBlog_model.php";
?>

<h2>Write your own Blog</h2>

<div class="container">
    <form action="writeBlog" method="post">
        <div class="field">
            <label for="title">Title</label>
            <input class="text_input" type="text" name="title" id="title" placeholder="Titel..." required>

            <label for="content">Content</label>
            <textarea class="text_input" name="blog" id="blog" cols="50" rows="4" placeholder="Text..." required></textarea>

            <label for="img_url">Image URL</label>
            <input class="text_input" type="url" name="img_url" id="img_url" placeholder="https://example.jpg">

            <button class="submit_btn" type="submit">Post</button>
        </div>
    </form>
</div>


