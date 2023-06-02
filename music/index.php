<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Music";
include "../partials/header.php";
?>
<div class="music-page banner-slider">
    <!-- <img src="../assets/images/home-img-01.webp" alt="" class="slider-img-01">
    <img src="../assets/images/home-img-02.webp" alt="" class="slider-img-02">
    <img src="../assets/images/home-img-03.webp" alt="" class="slider-img-03"> -->
    <!-- <div class="arrows">
        <span class="leftArrow"><i class="fa-solid fa-angle-up"></i></span>
        <span class="rightArrow"><i class="fa-solid fa-angle-up"></i></span>
    </div> -->
</div>
<div class="search mtop-20 mbot-20">
    <h3>TALENTS</h3>
    <form method="post">
        <input type="text" name="searchTalents" id="searchbar" placeholder="Search">
        <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
    </form>
</div>
<div class="trends banner">
    <h3>TRENDS</h3>
    <div class="artist-gallery display-flex banner">
        <div class="artist">
            <img src="../assets/images/music-img-02.webp" alt="">
            <h3>J.Cole</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/music-img-03.webp" alt="">
            <h3>DIXON</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/music-img-04.webp" alt="">
            <h3>DJ Khaled</h3>
        </div>
    </div>
</div>
<hr class="hr">
<div class="trends banner">
    <h3>LIFE TIME HITS</h3>
    <div class="artist-gallery display-flex banner">
        <div class="artist">
            <img src="../assets/images/music-img-05.webp" alt="">
            <h3>Coheed and Cambria</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/music-img-06.webp" alt="">
            <h3>Chritina Aguilera</h3>
        </div>
        <div class="artist">
            <img src="../assets/images/music-img-07.webp" alt="">
            <h3>Buju Banton</h3>
        </div>
    </div>
</div>
<?php
include "../partials/footer.php";
?>