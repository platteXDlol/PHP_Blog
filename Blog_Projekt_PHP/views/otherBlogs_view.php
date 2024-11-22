<?php
require 'templates/header.php';
require 'models/otherBlogs_model.php';
?>

<section class="section is-fullheight" style="background-color: #FFFFFF;">
    <div class="container mt-5">
        <div class="columns is-multiline">
            <?php
            foreach ($stmt->fetchAll() as $x) {
                echo "
                <div class='column is-one-third'>
                    <a href='" . htmlspecialchars($x['blog_url']) . "' class='box has-text-link' style='background-color: #f2f3f5;'>
                        <p class='title is-5' style='color: #0084b0;'>" . htmlspecialchars($x['blog_von']) . "</p>
                    </a>
                </div>";
            }
            ?>
        </div>
    </div>
</section>
