<?php
include_once '../db/controller/news.php';
include_once '../db/config.php';

$id = $_GET['id'];

$database = new Database;
$db = $database->connect();

$news = new News($db);
$news->drop($id);

header("location: ../view.php");