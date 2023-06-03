<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Talents";
include "../partials/header.php";
?>
<div class="talents-page banner-slider"data-aos="fade-up" data-aos-duration="1000">
    <div class="arrows">
        <span class="leftArrow"><i class="fa-solid fa-angle-up"></i></span>
        <span class="rightArrow"><i class="fa-solid fa-angle-up"></i></span>
    </div>
    <div class="content">
        <!-- <h4>Artist</h4>
        <h1>Doja Cat</h4> -->
    </div>
</div>
<div class="search mtop-20 mbot-20" data-aos="fade-up" data-aos-duration="1000">
    <h3>TALENTS</h3>
    <form method="post">
        <input type="text" name="searchTalents" id="searchbar" placeholder="Search">
        <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
    </form>
</div>
<div class="trends banner" data-aos="fade-up" data-aos-duration="1000">
    <h3>HEROES</h3>
    <div class="artist-gallery display-flex banner">
        <div class="artist">
            <img src="../assets/images/sports-img-02.webp" alt="">
            <h3>J.Cole</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/sports-img-03.webp" alt="">
            <h3>DIXON</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/sports-img-04.webp" alt="">
            <h3>DJ Khaled</h3>
        </div>
    </div>
</div>
<hr class="hr">
<div class="trends banner" data-aos="fade-up" data-aos-duration="1000">
    <h3>LIFE TIME HITS</h3>
    <div class="artist-gallery display-flex banner">
        <div class="artist">
            <img src="../assets/images/sports-img-05.webp" alt="">
            <h3>Coheed and Cambria</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/sports-img-06.webp" alt="">
            <h3>Chritina Aguilera</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/sports-img-07.webp" alt="">
            <h3>Buju Banton</h3>
        </div>
    </div>
</div>
<?php
include "../partials/footer.php";
?>