<?php
$settings = include_once "../config/settings.php";

$base_url = $settings["site"]["base_url"];
$site_name = $settings["site"]["site_name"];
$file_url = $settings["site"]["file_url"];
$seperator = $settings["site"]["seperator"];

$page_title = "News";
include "../partials/header.php";
?>
<div class="news banner display-flex" data-aos="fade-up" data-aos-duration="1000">
    <div class="content">
        <h1 class="font-40">NEW<span style="color:#E92F2E">S</span></h1>
        <p>Demarco Bennett :Carifta Games 2023 - Gold & Silver Medallist
            Breana Brown: Carifta Games 2023 - Gold & Silver Medallist
            Adriennie Adams: Central American & Caribbean Games, San Salvador, El Salvador - Bronze Medalist
            Michael Graham: NACAC Age Group Championships, Dominican Republic, July 15-16, 2023 - Multiple Medalist
            Daneil Wright: Jul 21-23, 2023 NACAC U18-U23 Championships San Jose, Costa Rica
            Daneil Wright: Aug 06-09, 2023 Commonwealth Youth Games U18 Port of Spain, Trinidad & Tobago
            Shelley Ann Taylor: Jul 21-23, 2023 NACAC U18-U23 Championships San Jose, Costa Rica
            Alexavier Monfries: Jul 21-23, 2023 NACAC U18-U23 Championships San Jose, Costa Rica
            Niesha Burgher: Jul 21-23, 2023 NACAC U18-U23 Championships San Jose, Costa Rica There are two other major
            international meets in which Jamaica will be participating: Pan American U20 Athletics Championships Aug
            04-06, 2023, Estadio Jose A. Figueroa Freyre, Mayagüez (PUR)
            World Athletics Championships Budapest, Hungary Aug 19-27, 2023 Five Additional XLCR Eagles and Lady Eagles
            are expected to be named to these teams, including Ackera Nugent and Nayoka Clunis to the World Athletics
            Championships Budapest, Hungary.</p>
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
            <div class="slides display-flex" data-aos="fade-up" data-aos-duration="1000">
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
            <div class="slides display-flex" data-aos="fade-up" data-aos-duration="1000">
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
            <div class="slides display-flex" data-aos="fade-up" data-aos-duration="1000">
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
            <div class="slides display-flex" data-aos="fade-up" data-aos-duration="1000">
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
        <div class="mostDiscussed" data-aos="fade-up" data-aos-duration="1000">
            <h3>MOST DISCUSSED</h3>
        </div>
        <div class="discussedNews">
            <div class="news display-flex" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="../assets/images/news-img-04.webp" alt="">
                </div>
                <div class="content">
                    <h4>SPORTS</h4>
                    <h4>Jamal Murray once feared or his Nuggets future. Now he's put them on the brink of making history
                    </h4>
                </div>
            </div>
            <div class="news display-flex" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="../assets/images/news-img-05.webp" alt="">
                </div>
                <div class="content">
                    <h4>SPORTS</h4>
                    <h4>Jamal Murray once feared or his Nuggets future. Now he's put them on the brink of making history
                    </h4>
                </div>
            </div>
            <div class="news display-flex" data-aos="fade-up" data-aos-duration="1000">
                <div class="image">
                    <img src="../assets/images/news-img-06.webp" alt="">
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