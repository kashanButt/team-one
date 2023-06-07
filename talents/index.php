<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Talents";
include "../partials/header.php";
?>
<div class="talents-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <section class="carousel" aria-label="Gallery">
        <ol class="carousel__viewport">
            <li id="carousel__slide1" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <img src="../assets/images/music-img-01.webp" alt="" />
                </div>
                <div class="carousel__snapper">
                    <a href="#carousel__slide4" class="carousel__prev">Go to last slide</a>
                    <a href="#carousel__slide2" class="carousel__next">Go to next slide</a>
                </div>
            </li>
            <li id="carousel__slide2" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <img src="../assets/images/music-img-02.webp" alt="" />
                </div>
                <a href="#carousel__slide1" class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide3" class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide3" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <img src="../assets/images/music-img-03.webp" alt="" />
                </div>
                <a href="#carousel__slide2" class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide4" class="carousel__next">Go to next slide</a>
            </li>
            <li id="carousel__slide4" tabindex="0" class="carousel__slide">
                <div class="carousel__snapper">
                    <img src="../assets/images/music-img-04.webp" alt="" />
                </div>
                <a href="#carousel__slide3" class="carousel__prev">Go to previous slide</a>
                <a href="#carousel__slide1" class="carousel__next">Go to first slide</a>
            </li>
        </ol>
        <aside class="carousel__navigation">
            <ol class="carousel__navigation-list">
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide1" class="carousel__navigation-button">Go to slide 1</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide2" class="carousel__navigation-button">Go to slide 2</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide3" class="carousel__navigation-button">Go to slide 3</a>
                </li>
                <li class="carousel__navigation-item">
                    <a href="#carousel__slide4" class="carousel__navigation-button">Go to slide 4</a>
                </li>
            </ol>
        </aside>
    </section>
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