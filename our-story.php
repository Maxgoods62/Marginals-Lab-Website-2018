
<?php
include_once ("languagesystem.php");

$page = $language[$_SESSION['language']]['OurStoryMainTitle'] . " - ";
$description = $language[$_SESSION['language']]['OurStoryDescription'];
$keywords= $language[$_SESSION['language']]['OurStoryKeywords'];

include('header.php'); ?>
<div id="page">
    <div id="divImgFullscreenOurStory" class="divImgFullscreen">
        <div class="ImgTitlePage">
            <h1><?php echo $language[$_SESSION['language']]['OurStoryMainTitle']; ?></h1>
        </div>
    </div>

    <div class="container-fluid">
        <div id="contentourstory">
            <section>

                <div class="col-md-12">
                    <p><?php echo $language[$_SESSION['language']]['OurStoryText1']; ?></p>
                </div>

                <div class="col-md-12" id="dessindiv">
                    <h2><?php echo $language[$_SESSION['language']]['OurStoryTtile1']; ?></h2>
                    <img src="img/our-story/dessin.jpg" alt="Dessin" id="dessin">
                </div>

                <div class="row">
                    <div class="col-md-10" id="ourstorypeoplediv">
                        <div class="col-md-3 col-sm-3 col-xs-3 vertical-align-middle">
                            <img src="img/our-story/2.jpg" alt="Victor Sannier" class="ourstorypeopleimg"><br>
                            <span><b><?php echo $language[$_SESSION['language']]['OurStoryEquipeNom2']; ?></b></span><br>
                            <span><?php echo $language[$_SESSION['language']]['OurStoryEquipeFonction2']; ?> </span>
                            <p><?php echo $language[$_SESSION['language']]['OurStoryEquipeTexte2']; ?></p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <img src="img/our-story/3.jpg" alt="Pierre Van Nieuwenhuyse" class="ourstorypeopleimg"><br>
                            <span><b><?php echo $language[$_SESSION['language']]['OurStoryEquipeNom3']; ?></b></span><br>
                            <span><?php echo $language[$_SESSION['language']]['OurStoryEquipeFonction3']; ?></span>
                            <p><?php echo $language[$_SESSION['language']]['OurStoryEquipeTexte3']; ?></p>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-3 vertical-align-middle">
                            <img src="img/our-story/1.jpg" alt="Constant Druon" class="ourstorypeopleimg"><br>
                            <span><b><?php echo $language[$_SESSION['language']]['OurStoryEquipeNom1']; ?></b></span><br>
                            <span><?php echo $language[$_SESSION['language']]['OurStoryEquipeFonction1']; ?></span>
                            <p><?php echo $language[$_SESSION['language']]['OurStoryEquipeTexte1']; ?></p>
                        </div>

                        <div class="col-md-3 col-sm-3 col-xs-3">
                            <div>
                            <img src="img/our-story/4.jpg" alt="Maxime Delsart" class="ourstorypeopleimg"><br>
                            <span><b><?php echo $language[$_SESSION['language']]['OurStoryEquipeNom4']; ?></b></span><br>
                            <span><?php echo $language[$_SESSION['language']]['OurStoryEquipeFonction4']; ?></span>
                            <p><?php echo $language[$_SESSION['language']]['OurStoryEquipeTexte4']; ?></p>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <h2><?php echo $language[$_SESSION['language']]['OurStoryTitle2']; ?></h2><br>
                    <img src="img/our-story/LoonyLanddebut.jpg" alt="Dessin" id="screenjeu">
                    <p><?php echo $language[$_SESSION['language']]['OurStoryText2']; ?></p>
                </div>

                <div class="col-md-12">
                    <h2><?php echo $language[$_SESSION['language']]['OurStoryTitle3']; ?></h2>
                    <p><?php echo $language[$_SESSION['language']]['OurStoryText3']; ?> </p>
                    </p>
                </div>

                <div class="row" id="ourstoryimgcomingsoon">

                    <div class="col-md-6">
                        <a href="/coming-soon">
                        <img src="img/our-story/Lyah.jpg" alt="Dev">
                        <h3><?php echo $language[$_SESSION['language']]['OurStoryTitle4']; ?></h3>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="/coming-soon">
                        <img src="img/our-story/Ethernos.jpg" alt="Hutopia Tome 1 preview">
                        <h3><?php echo $language[$_SESSION['language']]['OurStoryTitle5']; ?></h3>
                        </a>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
<?php

include_once ("footer.php");

?>
