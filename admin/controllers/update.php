<?php
include_once "../db/controller/news.php";
include_once "../db/config.php";

$id = $_GET["id"];

$database = new Database;
$db = $database->connect();

$news = new News($db);
$query = $news->single($id);
$res = $query->fetch(PDO::FETCH_ASSOC);
?>
<section id="mainSection">
    <form method="post" enctype="multipart/form-data">
        <input type="text" name="image_url" id="image_url" placeholder="image url"
            value="<?php echo $res['image_url']; ?>"><br>
        <input type="text" name="title" id="text" value="<?php echo $res['title']; ?>"><br>
        <textarea name="description" id="description" cols="30" rows="10"
            placeholder="description"><?php echo $res['description']; ?></textarea>
        <button name="update">Update</button>
    </form>
</section>
<?php
if (isset($_POST["update"])) {
    $image_url = $_POST["image_url"];
    $title = $_POST["title"];
    $description = $_POST["description"];

    $news->update($id, $image_url, $title, $description);
    header("location: ../view.php");
}