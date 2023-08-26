<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team One Management | Admin</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <section id="loginForm">
        <div class="form">
            <form action="" method="post">
                <h1>Login</h1>
                <input type="text" name="username" id="username" placeholder="Username..."><br>
                <input type="password" name="password" id="password" placeholder="Password..."><br>
                <button type="submit" name="btn">Login</button>
            </form>
        </div>
    </section>
</body>

</html>
<?php
include_once '../db/config.php';

$database = new Database;
$db = $database->connect();
if (isset($_POST["btn"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE name='$username' AND pass='$password'";
    $res = $db->prepare($sql);
    $res->execute();

    if ($res->rowCount() > 0) {
        header("location: dashboard.php");
    }
}