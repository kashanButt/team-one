<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Noxroy Wright";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/sports-img-02.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/noxroy-wright-one.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/noxroy-wright-two.webp">
        </div>
    </div>
</div>
<div class="celebrity-info display-flex">
    <div class="content">
        <h2>Noxroy Wright</h2>
        <p>Meet Noxroy Wright, a junior athlete hailing from Kingston, Jamaica. With incredible speed and determination, he recently claimed victory in the 60m dash at the Carolina Challenge, clocking an impressive time of 6.79 seconds. Not only does this mark rank him second in the MEAC this season, but he also ranks first in the conference with a time of 21.30 seconds in the 200m dash. Keep an eye on Noxroy as he continues to shine and inspire with his exceptional sprinting abilities. With a captivating presence and an unmatched drive, Noxroy continues to inspire aspiring athletes worldwide, leaving spectators in awe of his extraordinary abilities.</p>
    </div>
    <div class="credentials">
        <h3>Country: Kingston, Jamaica</h3>
        <h3>DOB: 16 SEP 1998</h3>
        <h3>Socials:
            <span>
                <a href="https://www.instagram.com/nox_wright/" target="__blank"><i class="fa-brands fa-instagram"></i>
                </a>
            </span>
            <span class="world-athlete-logo"> <a
                    href="https://worldathletics.org/athletes/jamaica/noxroy-wright-14739899" target="__blank"><img
                        src="../assets/images/wa-logo.webp" alt=""></a></span>
        </h3>
    </div>
</div>
<?php
include "../partials/footer.php";
?>