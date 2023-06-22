<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "VVSKnucky Johnson";
include "../partials/header.php";
?>
<div class="music-page banner-slider" data-aos="fade-up" data-aos-duration="1000">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="../assets/images/vvsknucky-johnson-one.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/vvsknucky-johnson-two.webp">
        </div>
        <div class="mySlides fade">
            <img src="../assets/images/vvsknucky-johnson-three.webp">
        </div>
    </div>
</div>
<div class="celebrity-info display-flex">
    <div class="content">
        <h2>VVSKnucky Johnson</h2>
        <p>VVS Knucky Jonhson, a luminary of extraordinary talent, is a visionary rapper, songwriter, and wordsmith.
            Renowned for his impeccable lyrical dexterity and captivating storytelling, he commands attention with his
            commanding presence. With his dynamic flow and profound insights, VVS Knucky Jonhson captivates listeners,
            painting vivid portraits through his music. His lyrical prowess and magnetic charisma have established him
            as a trailblazer in the realm of hip-hop, solidifying his status as an artist of remarkable distinction.</p>
    </div>
    <div class="credentials">
        <!-- <h3>Place of Birth: Tennessee, South Carolina</h3> -->
        <h3>Socials: <span><a href="https://www.instagram.com/vvsknucky/" target="__blank"><i
                        class="fa-brands fa-instagram"></i></span></a></h3>
    </div>
</div>
<?php
include "../partials/footer.php";
?>