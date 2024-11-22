<?php require 'templates/header.php';
require "models/home_model.php";



foreach ($stmt->fetchAll() as $x) {
    echo "<h2>" . $x['posts_title'] . "</h2>";
    echo "<h4>" . $x['created_at'] . "</h4>";
    echo "<p>" . $x['posts_text'] . "</p>";
    echo "<img src='" . $x['posts_img'] . "' alt=''>";
}


?>
