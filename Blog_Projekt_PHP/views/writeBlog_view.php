<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.2/css/bulma.min.css">

<?php
require "templates/header.php";
require "models/writeBlog_model.php";

if ($_SESSION['user_id'] == null) {
    header("Location: login");
    exit;
}
?>


<section class="section is-fullheight" style="background-color: #FFFFFF">
    <div class="container is-flex is-justify-content-center is-align-items-center">
        <div class="box" style="max-width: 600px; width: 100%; background-color: #f2f3f5;">
            <!-- Page Title -->
            <h1 class="title is-4 has-text-centered">Write Your Own Blog</h1>

            <!-- Blog Form -->
            <form action="writeBlog" method="post">
                <div class="field">
                    <!-- Title Input -->
                    <label class="label" for="title">Title</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title" placeholder="Title..." required>
                    </div>
                </div>

                <div class="field">
                    <!-- Content Textarea -->
                    <label class="label" for="content">Content</label>
                    <div class="control">
                        <textarea class="textarea is-hovered" name="blog" id="blog" rows="6" placeholder="Write your blog content here..." required></textarea>
                    </div>
                </div>

                <div class="field">
                    <!-- Image URL Input -->
                    <label class="label" for="img_url">Image URL</label>
                    <div class="control">
                        <input class="input" type="url" name="img_url" id="img_url" placeholder="https://example.jpg">
                    </div>
                </div>

                <div class="field">
                    <!-- Submit Button -->
                    <div class="control">
                        <button class="button is-link is-fullwidth" type="submit">Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

