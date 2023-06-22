<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Marc Dub";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/marc-dub-one.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/marc-dub-two.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/marc-dub-three.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/marc-dub-four.webp">
        </div>
    </div>
</div>
<div class="celebrity-info display-flex">
    <div class="content">
        <h2>Marc Dub</h2>
        <p>Marc Dub, a virtuoso in the realm of music, is an exceptionally talented composer, producer, and
            instrumentalist. Renowned for his innovative soundscapes and meticulous attention to detail, he has
            established himself as a trailblazer in the industry. With his innate ability to blend genres and push
            artistic boundaries, Marc Dub captivates audiences with his evocative compositions and masterful
            performances. His unparalleled creativity and technical prowess make him a distinguished figure in the world
            of music.</p>
    </div>
    <div class="credentials">
        <h3>Place of Birth: Tennessee, South Carolina</h3>
        <h3>Socials: <span><a href="https://www.instagram.com/officialmarcdub/" target="__blank"><i
                        class="fa-brands fa-instagram"></i></span></a></h3>
    </div>
</div>
<?php
include "../partials/footer.php";
?>