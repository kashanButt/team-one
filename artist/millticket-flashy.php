<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "MillTicket Flashy";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-one.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-two.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-three.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-four.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-five.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-six.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-seven.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/millticket-flashy-eight.webp">
        </div>
    </div>
</div>
<div class="celebrity-info display-flex">
    <div class="content">
        <h2>MillTicket Flashy</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus impedit hic, magni nulla consequatur
            suscipit veniam ea assumenda quod aliquid, libero repellat incidunt voluptate, commodi totam in a tempora
            inventore dicta? Unde, quam sit ipsum ullam sint non doloribus itaque totam asperiores possimus quo
            repudiandae repellat cum molestiae eaque iusto officiis voluptatem consequuntur. Exercitationem dolores quod
            veniam facere ipsam! Iusto suscipit dolorem neque, error quasi atque fugiat? Accusamus quidem alias sapiente
            numquam harum ut maiores eveniet sequi saepe repellat architecto, corporis delectus aut earum! Enim illo
            deserunt in rem rerum dolore obcaecati alias quo, impedit harum ratione beatae vel voluptatem.</p>
    </div>
    <div class="credentials">
        <!-- <h3>Place of Birth: Tennessee, South Carolina</h3> -->
        <h3>Socials: <span><a href="https://www.instagram.com/millticketflashy/#" target="__blank"><i
                        class="fa-brands fa-instagram"></i></span></a></h3>
    </div>
</div>
<?php
include "../partials/footer.php";
?>