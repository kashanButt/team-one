<?php
$settings = include_once "./config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["site_name"];
include "./partials/header.php";
?>
<div class="banner home-banner display-flex mtop-30" data-aos="fade-up" data-aos-duration="1000">
    <div class="content pleft-50">
        <h1 class="bold font-60">Celebrating Dreams
            & <span class="home-span" style="color:#e92f2e;font-weight:900;">Victories</span></h1>
        <p>At Team One Management, our mission is to empower artists and athletes by providing personalized guidance and strategic support at every step of their journey. From emerging talents to established professionals, we are committed to nurturing careers, maximizing opportunities, and delivering exceptional results.</p>
    </div>
    <div class="image">
        <img src="./assets/images/home-banner-one.webp" alt="">
    </div>
</div>
<hr class="hr">
<h2 class="center font-40" data-aos="fade-up" data-aos-duration="1000">Announcements</h2>
<div class="announcements display-flex" data-aos="fade-up" data-aos-duration="1000">
    <div class="content">
        <h3 class="uppercase">New Updates</h3>
        <hr>
        <h4>`RISE: The Siya Kolisi Story`<br>Documentry to premiere at tribecca film festival</h4>
        <p class="mtop-10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo reiciendis atque, dicta
            vero tempora recusandae, quisquam autem eligendi aliquid ea ut consequuntur quod itaque sint assumenda
            placeat aperiam dignissimos ratione quasi eius. Commodi ipsum illo enim ducimus ipsa iste, sit eligendi
            dolores eius reiciendis excepturi modi debitis tempora aspernatur a temporibus sunt soluta voluptatum
            perspiciatis pariatur cum dolore ullam! Error, voluptas est! Cupiditate doloribus et quaerat iusto eum
            facilis fuga dolorem omnis ex voluptates, laboriosam possimus ratione id, sunt aliquam atque corporis
            accusamus architecto saepe adipisci dicta! Id neque nobis fuga repellendus cumque ex quaerat quibusdam
            sapiente! Veniam, numquam earum.</p>
    </div>
    <div class="image">
        <img src="./assets/images/home-img-04.webp" alt="">
    </div>
</div>
<h2 class="mleft-15 mtop-40" data-aos="fade-up" data-aos-duration="1000">THE LATEST</h2>
<div class="latest display-flex" data-aos="fade-up" data-aos-duration="1000">
    <div class="content">
        <img src="./assets/images/home-latest-img.webp" alt="">
    </div>
</div>
<h2 class="mleft-15 mtop-40" data-aos="fade-up" data-aos-duration="1000">MUSIC</h2>
<div class="music display-flex" data-aos="fade-up" data-aos-duration="1000">
    <div class="image display-flex">
        <img src="./assets/images/home-music-one.webp" alt="">
        <img src="./assets/images/home-music-two.webp" alt="">
        <img src="./assets/images/home-music-three.webp" alt="">
    </div>
</div>
<h2 class="mleft-15 mtop-40" data-aos="fade-up" data-aos-duration="1000">SPORTS</h2>
<div class="sports display-flex" data-aos="fade-up" data-aos-duration="1000">
    <div class="image">
        <img src="./assets/images/home-sports-img.webp" alt="">
    </div>
</div>
<?php
include "./partials/footer.php";
?>