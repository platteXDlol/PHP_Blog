<?php
require 'templates/header.php';
require "models/home_model.php";
?>



<section class="section is-fullheight" style="background-color: #FFFFFF;">
    <div class="container has-text-centered is-flex is-flex-direction-column is-justify-content-center">
        <h1 class="title is-2" style="color: #0084b0">Blogs</h1>

        <?php
        if ($stmt->rowCount() == 0) {
            echo "<div class='notification is-light'>No Posts found. 
            <a href='writeBlog' class='has-text-link'>Create a Post</a></div>";
        } else {
            ?>
            <div class='box' style="background-color: #dcdcde ">
                <?php foreach ($stmt->fetchAll() as $x) { ?>
                    <div class="box has-background-white-ter"> <!-- Small Box -->
                        <article class="media">
                            <?php if (!empty($x['posts_img'])) { ?>
                                <div class="media-left">
                                    <figure class="image is-1by9" style="width: 450px;">
                                        <img src="<?= htmlspecialchars($x['posts_img']); ?>" alt="Post Image" class="rounded-image">
                                    </figure>
                                </div>
                            <?php } ?>
                            <div class="media-content">
                                <div class="content">
                                    <!-- Post Title -->
                                    <h2 class="title is-4 mb-2" style="color: #0084b0"><?= htmlspecialchars($x['posts_title']); ?></h2>

                                    <!-- Author and Date -->
                                    <p class="subtitle is-6 mb-5 mt-4">
                                        <strong style="color: #0084b0"><?= htmlspecialchars($x['created_by']); ?></strong>
                                        <span class="has-text-grey" style="color: #00ABE4">on <?= htmlspecialchars($x['created_at']); ?></span>
                                    </p>

                                    <!-- Post Text -->
                                    <p class="has-text-centered" style="color: black">
                                        <?= nl2br(htmlspecialchars($x['posts_text'])); ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
            <?php
        }
        ?>
    </div>
</section>


