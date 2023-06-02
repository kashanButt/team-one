<?php
$settings = include_once "./config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["site_name"];
include "./partials/header.php";
?>
<div class="banner home-banner display-flex mtop-30">
    <div class="content pleft-50">
        <h1 class="bold font-80" style="margin-right: -160px;z-index:5;position:relative;">Congratulation<br>For Our
            Team.</h1>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus aliquid eum cum optio, accusamus laboriosam
            id assumenda tempora quia? Autem iste at voluptate, harum reprehenderit quaerat voluptas quia, aspernatur
            delectus asperiores dolores sit id est consequuntur incidunt architecto tempore saepe. Quos totam
            dignissimos non ducimus.</p>
    </div>
    <div class="image display-flex">
        <img src="./assets/images/home-img-01.webp" alt="">
        <img src="./assets/images/home-img-02.webp" alt="">
        <img src="./assets/images/home-img-03.webp" alt="">
    </div>
</div>
<hr class="hr">
<h2 class="center font-40">Announcements</h2>
<div class="announcements display-flex">
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
<h2 class="mleft-15 mtop-40">THE LATEST</h2>
<div class="latest display-flex">
    <div class="content">
        <img src="./assets/images/home-img-05.webp" alt="">
    </div>
    <div class="image display-flex">
        <img src="./assets/images/home-img-06.webp" alt="">
        <img src="./assets/images/home-img-07.webp" alt="">
        <img src="./assets/images/home-img-08.webp" alt="">
    </div>
</div>
<h2 class="mleft-15 mtop-40">MUSIC</h2>
<div class="music display-flex">
    <div class="image display-flex">
        <img src="./assets/images/home-img-09.webp" alt="">
        <img src="./assets/images/home-img-10.webp" alt="">
        <img src="./assets/images/home-img-11.webp" alt="">
    </div>
</div>
<h2 class="mleft-15 mtop-40">SPORTS</h2>
<div class="sports display-flex">
    <div class="image">
        <img src="./assets/images/home-img-12.webp" alt="">
        <img src="./assets/images/home-img-13.webp" alt="">
    </div>
    <div class="image">
        <img src="./assets/images/home-img-14.webp" alt="">
    </div>
</div>
<h2 class="mleft-15 mtop-40">FEATURED TALENTS</h2>
<div class="featured-talents display-flex">
    <div class="image">
        <img src="./assets/images/home-img-15.webp" alt="">
    </div>
    <div class="slider">
        <p></p>
    </div>
</div>
<?php
include "./partials/footer.php";
?>