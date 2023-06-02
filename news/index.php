<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "News";
include "../partials/header.php";
?>
<div class="news banner display-flex">
    <div class="content">
        <h1 class="font-40">NEW<span style="color:#E92F2E">S</span></h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, sunt! Deserunt beatae asperiores
            voluptatum! Tenetur quisquam magnam eum illum nemo dolores. Animi expedita consequatur voluptatibus qui
            repudiandae quas, vitae molestias doloremque at nobis iusto voluptates!</p>
        <button class="mtop-20">SEE MORE</button>
    </div>
    <div class="img">
    </div>
</div>
<div class="news-layouts display-flex">
    <div class="news">
        <h3>LATEST POST</h3>
        <hr class="hr">
        <img src="../assets/images/news-img-02.webp" alt="">
        <div class="heading">
            <h2><span style="color:#E92F2E">SPORTS</span> ---- 2 DAYS AGO</h2>
            <h2>LeBron James has earned the right to decide his future, says LA Lakers general manager</h2>
        </div>
        <div class="news-slides">
            <div class="slides display-flex">
                <div class="img">
                    <img src="../assets/images/news-img-03.webp" alt="">
                </div>
                <div class="content">
                    <h4><span style="color:#E92F2E">SPORTS</span> ---- 2 DAYS AGO</h4>
                    <h4>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</h4>
                    <p>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</p>
                </div>
            </div>
            <hr class="hr">
            <div class="slides display-flex">
                <div class="img">
                    <img src="../assets/images/news-img-03.webp" alt="">
                </div>
                <div class="content">
                    <h4><span style="color:#E92F2E">SPORTS</span> ---- 2 DAYS AGO</h4>
                    <h4>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</h4>
                    <p>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</p>
                </div>
            </div>
            <hr class="hr">
            <div class="slides display-flex">
                <div class="img">
                    <img src="../assets/images/news-img-03.webp" alt="">
                </div>
                <div class="content">
                    <h4><span style="color:#E92F2E">SPORTS</span> ---- 2 DAYS AGO</h4>
                    <h4>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</h4>
                    <p>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</p>
                </div>
            </div>
            <hr class="hr">
            <div class="slides display-flex">
                <div class="img">
                    <img src="../assets/images/news-img-03.webp" alt="">
                </div>
                <div class="content">
                    <h4><span style="color:#E92F2E">SPORTS</span> ---- 2 DAYS AGO</h4>
                    <h4>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</h4>
                    <p>Sean Elliot: What life is likefor 'Memorial Day Miracle' NBA Star after kidnay transplant</p>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="mostDiscussed">
            <h3>MOST DISCUSSED</h3>
        </div>
        <div class="discussedNews">
            <div class="news display-flex">
                <div class="image">
                </div>
                <div class="content">
                    <h4>SPORTS</h4>
                    <h4>Jamal Murray once feared or his Nuggets future. Now he's put them on the brink of making history
                    </h4>
                </div>
            </div>
            <div class="news display-flex">
                <div class="image">
                </div>
                <div class="content">
                    <h4>SPORTS</h4>
                    <h4>Jamal Murray once feared or his Nuggets future. Now he's put them on the brink of making history
                    </h4>
                </div>
            </div>
            <div class="news display-flex">
                <div class="image">
                </div>
                <div class="content">
                    <h4>SPORTS</h4>
                    <h4>Jamal Murray once feared or his Nuggets future. Now he's put them on the brink of making history
                    </h4>
                </div>
            </div>
            <div class="news display-flex">
                <div class="image">
                </div>
                <div class="content">
                    <h4>SPORTS</h4>
                    <h4>Jamal Murray once feared or his Nuggets future. Now he's put them on the brink of making history
                    </h4>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "../partials/footer.php";
?>