<form method="post">
    <input type="text" name="image_url" id="image_url" placeholder="image url"><br>
    <input type="text" name="title" id="title" placeholder="title"><br>
    <textarea name="description" id="description" rows="20" cols="20" placeholder="description"></textarea>
    <button name="post">Post</button>
    <a href="./dashboard.php">
        < Back</a>
</form>
<?php

include_once "../db/controller/news.php";
include_once "../db/config.php";

$database = new Database;
$db = $database->connect();

$news = new News($db);
if (isset($_POST["post"])) {
    $image_url = $_POST["image_url"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $news->add($image_url, $title, $description);

    echo "Posted";
}