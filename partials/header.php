<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        if ($_SERVER["REQUEST_URI"] == $file_url) {
            echo $site_name;
        } else {
            echo $site_name . " " . $seperator . " " . $page_title;
        }
        ?>
    </title>
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/animation.css">
    <link rel="stylesheet" href="<?php echo $base_url ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <header>
        <div class="logo">
            <a href="<?php echo $base_url; ?>"><img src="<?php echo $base_url ?>assets/images/logo.webp"
                    alt="team-one logo"></a>
        </div>
        <div class="nav">
            <ul class="list display-none">
                <a href="<?php echo $base_url; ?>music/">
                    <li>Music
                        <div class="sub-menu">
                            <ul>
                                <a href="<?php echo $base_url; ?>music/">
                                    <li>Label</li>
                                </a>
                                <a href="<?php echo $base_url; ?>music/">
                                    <li>Management</li>
                                </a>
                                <a href="<?php echo $base_url; ?>music/">
                                    <li>Publishing</li>
                                </a>
                                <a href="<?php echo $base_url; ?>music/">
                                    <li>Personalities</li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </a>
                <a href="<?php echo $base_url; ?>sports/">
                    <li>Sports
                        <div class="sub-menu">
                            <ul>
                                <a href="<?php echo $base_url; ?>sports/">
                                    <li>Label</li>
                                </a>
                                <a href="<?php echo $base_url; ?>sports/">
                                    <li>Management</li>
                                </a>
                                <a href="<?php echo $base_url; ?>sports/">
                                    <li>Publishing</li>
                                </a>
                                <a href="<?php echo $base_url; ?>sports/">
                                    <li>Personalities</li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </a>
                <a href="<?php echo $base_url; ?>talents/">
                    <li>Talents
                        <div class="sub-menu">
                            <ul>
                                <a href="<?php echo $base_url; ?>talents/">
                                    <li>Label</li>
                                </a>
                                <a href="<?php echo $base_url; ?>talents/">
                                    <li>Management</li>
                                </a>
                                <a href="<?php echo $base_url; ?>talents/">
                                    <li>Publishing</li>
                                </a>
                                <a href="<?php echo $base_url; ?>talents/">
                                    <li>Personalities</li>
                                </a>
                            </ul>
                        </div>
                    </li>
                </a>
                <a href="<?php echo $base_url; ?>news/">
                    <li>News</li>
                </a>
                <a href="<?php echo $base_url; ?>about-us/">
                    <li>About</li>
                </a>
            </ul>
        </div>
        <div class="hamburger-option">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <main>