<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Music";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/music-img-01.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/music-img-03.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/music-img-04.webp">
        </div>
    </div>
</div>
<div class="search mtop-20 mbot-20" data-aos="fade-up" data-aos-duration="1000">
    <h3>TALENTS</h3>
    <form method="post">
        <input type="text" name="searchTalents" id="searchbar" placeholder="Search">
        <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
    </form>
    <div class="options">
        <ul>
            <li class="search-option option-active">All</li>
            <li class="search-option">Creative</li>
            <li class="search-option">Label</li>
            <li class="search-option">Managment</li>
            <li class="search-option">Personalities</li>
            <li class="search-option">Publishing</li>
        </ul>
    </div>
</div>
<div class="trends banner" data-aos="fade-up" data-aos-duration="1000">
    <h3>TRENDS</h3>
    <div class="artist-gallery display-flex banner">
        <div class="artist">
            <img src="../assets/images/music-img-01.webp" alt="">
            <div class="display-flex artist-socials">
                <h3>Millticket Flashy</h3>
                <span><a href="https://www.instagram.com/millticketflashy/#" target="__blank"><i
                            class="fa-brands fa-instagram"></i></span></a>
            </div>
        </div>
        <div class="artist">
            <img src="../assets/images/music-img-03.webp" alt="">
            <div class="display-flex artist-socials">
                <h3>VVS Knucky Johnson</h3>
                <span><a href="https://www.instagram.com/vvsknucky/" target="__blank"><i class="fa-brands fa-instagram"></a></i></span>
            </div>
        </div>
        <div class="artist">
            <img src="../assets/images/music-img-04.webp" alt="">
            <div class="display-flex artist-socials">
                <h3>Marc Dub</h3>
                <span><a href="https://www.instagram.com/officialmarcdub/" target="__blank"><i
                            class="fa-brands fa-instagram"></i></span></a>
            </div>
        </div>
    </div>
</div>
<!-- <hr class="hr"> -->
<!-- <div class="trends banner" data-aos="fade-up" data-aos-duration="1000">
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
</div> -->
<?php
include "../partials/footer.php";
?>