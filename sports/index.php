<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Sports";
include "../partials/header.php";
?>
<div class="sports-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/sports-img-01.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/sports-img-02.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/sports-img-03.webp">
        </div>
    </div>
</div>
<div class="search mtop-20 mbot-20 display-flex sports-search" data-aos="fade-up" data-aos-duration="1000">
    <div class="search_options">
        <h3>TALENTS</h3>
        <form method="post">
            <input type="text" name="searchTalents" id="searchbar" placeholder="Search">
            <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
        </form>
    </div>
    <div class="options">
        <ul>
            <li class="search-option" onclick="openSports(event, 'All')">All</li>
            <li class="search-option" onclick="openSports(event, 'Baseball')">Baseball</li>
            <li class="search-option" onclick="openSports(event, 'Basketball')">Basketball</li>
            <li class="search-option" onclick="openSports(event, 'College')">College</li>
            <li class="search-option" onclick="openSports(event, 'Cricket')">Cricket</li>
            <li class="search-option" onclick="openSports(event, 'Football')">Football</li>
            <li class="search-option" onclick="openSports(event, 'intFootball')">International Football</li>
            <li class="search-option" onclick="openSports(event, 'Netbal')">Netbal</li>
            <li class="search-option" onclick="openSports(event, 'Personalities')">Personalities</li>
            <li class="search-option" onclick="openSports(event, 'Rugby')">Rugby</li>
        </ul>
    </div>
</div>
<div class="trends banner" data-aos="fade-up" data-aos-duration="1000">
    <div id="All" class="tabcontent">
        <h3>ALL ATHLETES</h3><br>
        <div class="artist-gallery display-flex banner all-banner">
            <div class="artist">
                <a href="../athlete/noxroy-wright.php">
                    <img src="../assets/images/sports-img-02.webp" alt="">
                    <div class="display-flex artist-socials">
                        <h3>Noxroy Wright</h3>
                </a>
                <span><a href="https://www.instagram.com/nox_wright/" target="__blank"><i
                            class="fa-brands fa-instagram"></i></span></a>
            </div>
        </div>
        <div class="artist">
            <a href="../athlete/chris-lipsey.php">
                <img src="../assets/images/sports-img-03.webp" alt="">
                <div class="display-flex artist-socials">
                    <h3>Chris Lipsey</h3>
            </a>
        </div>
    </div>
    <div class="artist">
        <a href="../athlete/foreman-shantae.php">
            <img src="../assets/images/foreman-shantae-main.webp" alt="">
            <div class="display-flex artist-socials">
                <h3>Foreman Shantae</h3>
        </a>
        <span><a href="https://www.instagram.com/_shantae_foreman/" target="__blank"><i
                    class="fa-brands fa-instagram"></i></span></a>
    </div>
</div>
</div>
</div>

<div id="Baseball" class="tabcontent">
    <h3>ALL BASEBALL ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>

<div id="Basketball" class="tabcontent">
    <h3>ALL BASKETBALL ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>
<div id="College" class="tabcontent">
    <h3>ALL COLLEGE ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>
<div id="Cricket" class="tabcontent">
    <h3>ALL CRICKET ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>
<div id="Football" class="tabcontent">
    <h3>ALL FOOTBAL ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">

    </div>
</div>
<div id="intFootball" class="tabcontent">
    <h3>ALL INTERNATIONAL FOOTBALL ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>
<div id="Netbal" class="tabcontent">
    <h3>ALL NETBAL ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>
<div id="Personalities" class="tabcontent">
    <h3>ALL PERSONALITIES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">

    </div>
</div>
<div id="Rugby" class="tabcontent">
    <h3>ALL RUGBY ATHLETES</h3><br>
    <div class="artist-gallery display-flex banner all-banner">
    </div>
</div>
</div>
<!-- <hr class="hr">
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
</div> -->
<?php
include "../partials/footer.php";
?>