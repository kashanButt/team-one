<?php
include "./components/header.php";
include_once "../db/controller/news.php";
include_once "../db/config.php";

$database = new Database;
$db = $database->connect();

$news = new News($db);
$query = $news->all();
$query->execute();
?>
<section id="mainSection">
    <button><a href='./dashboard.php'><span class="arrow-head"></span> Back</a></button>
    <table cellspacing=0>
        <tr class="heading">
            <th class="s-no">S.No</th>
            <th class="image">Image</th>
            <th class="title">Title</th>
            <th class="description">Description</th>
        </tr>
        <?php
        while ($res = $query->fetch(PDO::FETCH_ASSOC)) {
            extract($res);
            ?>
            <tr class="data">
                <td class="s-no">S.No</td>
                <td class="image">Image</td>
                <td class="title">Title</td>
                <td class="description">Description</td>
            </tr>
        <?php } ?>
    </table>
</section>

<?php include "./components/footer.php"; ?>