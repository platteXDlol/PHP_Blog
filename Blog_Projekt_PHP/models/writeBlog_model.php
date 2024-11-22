<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {

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


    $created_by = $_SESSION['user_name'];
    $title = $_POST["title"];
    $blog = $_POST["blog"];
    $img_url = $_POST["img_url"];
    $formattedDate = date("H:i d-m-y");

    $safe_title = htmlspecialchars($title);
    $safe_blog = htmlspecialchars($blog);
    $safe_img_url = htmlspecialchars($img_url);



    $stmt = $pdo->prepare("INSERT INTO posts (created_by, created_at, posts_title, posts_text, posts_img) VALUES (:created, :when, :title, :text, :img)");
    $stmt->execute([
        ':created' => "$created_by",
        ':title' => "$safe_title",
        ':text' => "$safe_blog",
        ':img' => "$safe_img_url",
        ':when' => "$formattedDate"
    ]);
}

?>
