<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "Partners";
include "../partials/header.php";
?>
<div class="partners-info display-flex">
    <div class="partners">
        <div class="content">
            <a href="https://techniquelab.com/?v=52c5706bc98f" target="__blank"><img src="../assets/images/tech-lab-logo.webp"
                    alt=""></a>

            <h2 class="bold mtop-10">Technique Lab - Jamaica <img src="../assets/images/jamaica-flag.webp" alt=""
                    class="flag"></h2>
            <span>Gym/Physical Fitness Center</span>

            <p class="mtop-10">Gym & Training Center for Multi-sports including #TrackandField #Football #Tennis #Golf
                #Netball #Cricket #Swimming #Hockey #badminton🏸</p>

        </div>
    </div>
</div>
<?php
include "../partials/footer.php";
?>