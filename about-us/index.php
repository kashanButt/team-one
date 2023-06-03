<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "About Us";
include "../partials/header.php";
?>
<div class="banner about-us display-flex" data-aos="fade-up" data-aos-duration="1000">
    <div class="content">
        <h2>TEAM ONE MANAGMENT GROUP</h2>
        <h1 class="font-100">ABOUT US</h1>
    </div>
    <div class="img display-flex">
        <img src="../assets/images/about-img-01.webp" alt="">
        <img src="../assets/images/home-img-05.webp" alt="">
        <img src="../assets/images/sports-img-01.webp" alt="">
    </div>
</div>
<div class="whoWeAre"data-aos="fade-up" data-aos-duration="1000">
    <h4>WHO WE ARE</h4>
    <hr class="hr">
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, vero quas? Consectetur ab ipsam quidem soluta
        vel eius pariatur totam repudiandae odit, obcaecati veritatis provident maxime saepe? Voluptatum ut perspiciatis
        impedit asperiores maiores assumenda officia!</p>
</div>
<h1 class="font-100 center" data-aos="fade-up" data-aos-duration="1000">WHO WE ARE</h1>
<div class="whoWeAre" data-aos="fade-up" data-aos-duration="1000">
    <h4>WHO YOU'LL BE WORKING WITH</h4>
    <hr class="hr">
    <div class="employee display-flex banner">
        <div class="content">
            <h4>Patrick Wood</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis aliquam expedita ex sint magni vero
                laudantium. Ducimus voluptatibus, obcaecati esse quod odit vero earum consequuntur! Recusandae illum
                rerum ut dolor possimus cum, quaerat repellendus consequatur?</p>
        </div>
        <div class="img">
            <img src="" alt="">
        </div>
    </div>
</div>
<hr class="hr">
<?php
include "../partials/footer.php";
?>