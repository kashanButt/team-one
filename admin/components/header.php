<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team One Management | Admin</title>
    <link rel="stylesheet" href="./styles/style.css">
</head>

<body>
    <main>
        <section id="navigation">
            <nav>
                <ul>
                    <li><button>
                            <a href="./view.php">View News</a>
                        </button>
                    </li>
                    <li>
                        <button>
                            <a href="./add.php">Add News</a>
                        </button>
                    </li>
                    <li>
                        <button class="logout">
                            <a href="./index.php">Logout</a>
                        </button>
                    </li>
                </ul>
            </nav>
        </section>
        <?php
        $URL = $_SERVER["REQUEST_URI"];
        $URL = explode("/", $URL);
        $URL = end($URL);
        if ($URL == "dashboard.php") {

            echo "
                <style>
                    #mainSection{
                        display: flex;
                        flex-direction: column;
                        align-items: center;
                        justify-content: center;
                    }
                </style>
            "
                ?>
            <section id="mainSection">
                <h1>Welcome <span class="tag">Admin</span></h1>
            </section>
        <?php } ?>