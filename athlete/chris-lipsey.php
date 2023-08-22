<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Chris Lipsey";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-one.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-two.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-three.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-four.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-five.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-six.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/chris-lipsey-seven.webp">
        </div>
    </div>
</div>
<div class="celebrity-info display-flex">
    <div class="content">
        <h2>Chris Lipsey</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus impedit hic, magni nulla consequatur
            suscipit veniam ea assumenda quod aliquid, libero repellat incidunt voluptate, commodi totam in a tempora
            inventore dicta? Unde, quam sit ipsum ullam sint non doloribus itaque totam asperiores possimus quo
            repudiandae repellat cum molestiae eaque iusto officiis voluptatem consequuntur. Exercitationem dolores quod
            veniam facere ipsam! Iusto suscipit dolorem neque, error quasi atque fugiat? Accusamus quidem alias sapiente
            numquam harum ut maiores eveniet sequi saepe repellat architecto, corporis delectus aut earum! Enim illo
            deserunt in rem rerum dolore obcaecati alias quo, impedit harum ratione beatae vel voluptatem.</p>
    </div>
    <div class="credentials">
        <h3>Hometown: Atlanta Ga</h3>
    </div>
</div>
<?php
include "../partials/footer.php";
?>