<?php




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "hallo";
    $title = $_POST["title"];
    $blog = $_POST["blog"];
    $img_url = $_POST["img_url"];


    $user = 'root';
    $password = '';
    $database = 'blog';


try {
    $pdo = new PDO('mysql:host=localhost;dbname=' . $database, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Connection failed: ' . $e->getMessage());
}


    $stmt = $pdo->prepare("INSERT INTO posts (created_at, posts_title, posts_text, posts_img) VALUES (:when, :title, :text, :img)");
    $stmt->execute([
        ':title' => "$title",
        ':text' => "$blog",
        ':img' => "$img_url",
        ':when' => date("Y-m-d H:i:s"),
    ]);
}

?>
