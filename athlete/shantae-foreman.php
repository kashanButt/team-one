<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Shantae Foreman";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-one.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-two.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-three.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-four.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-five.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-six.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-seven.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/foreman-shantae-eight.webp">
        </div>
    </div>
</div>
<div class="celebrity-info display-flex">
    <div class="content">
        <h2>Shantae Foreman</h2>
        <p>Shantae Foreman, an outstanding athlete from Jamaica, has made a name for herself as an exceptional high
            jumper. Representing Excelsior High School, she has cleared an impressive height of 1.73 meters in the high
            jump event. Additionally, Shantae showcased her versatility by achieving a remarkable 6.07-meter jump in the
            long jump at the ACC Indoor Championships. Her remarkable talents and unwavering dedication make her a true
            inspiration in the world of track and field. Shantae has redefined the boundaries of the sport through her
            awe-inspiring routines and unwavering determination. Her poise and precision on the balance beam, vault, and
            uneven bars have earned her numerous accolades and a place among the elite in the gymnastics world. Beyond
            her remarkable skills, Shantae's infectious enthusiasm and commitment to empowering young athletes have made
            her a role model for aspiring athlete worldwide.</p>
    </div>
    <div class="credentials">
        <h3>Country: Hometown St Thomas ,Jamaica</h3>
        <h3>DOB: 22 OCT 2002</h3>
        <h3>Socials: <span><a href="https://www.instagram.com/_shantae_foreman/" target="__blank"><i
                        class="fa-brands fa-instagram"></i></span></a>
            <span class="world-athlete-logo"> <a
                    href="https://worldathletics.org/athletes/jamaica/shantae-foreman-14693847" target="__blank"><img
                        src="../assets/images/wa-logo.webp" alt=""></a></span>
        </h3>
    </div>
</div>
<?php
include "../partials/footer.php";
?>