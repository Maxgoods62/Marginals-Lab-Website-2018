<?php
include_once ("languagesystem.php");

$page = "LoonyLand - ";
$description = $language[$_SESSION['language']]['LoonyLandDescription'];
$keywords= $language[$_SESSION['language']]['LoonyLandKeywords'];

include('header.php');
?>
<div id="page">

        <div id="divImgFullscreenLoonyLand" class="divImgFullscreen">
            <div id="ImgTitleIndexLoonyLand">
                <h1><?php echo $language[$_SESSION['language']]['ImgTitleLoonyLand']; ?></h1>
            </div>
        </div>

    <div class="container-fluid">
        <div id="contentLoonyLand">
            <section>

                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4 margincentered">
                        <img src="/img/loonyland/AppIcon.jpg" alt="Icone LoonyLand" id="IconLoonyLand">
                    </div>

                    <div class="col-md-4 margincentered LoonyLandMargintop">
                        <hr style="border-width:2px;" />
                        <p><b><?php echo $language[$_SESSION['language']]['LoonyLand1-1']; ?></b><br> <?php echo $language[$_SESSION['language']]['LoonyLand1-2']; ?></p>
                        <p><b><?php echo $language[$_SESSION['language']]['LoonyLand2']; ?></b><br> Constant Druon</p>
                        <p><b><?php echo $language[$_SESSION['language']]['LoonyLand2']; ?></b><br> Victor Sannier</p>
                        <hr style="border-width:2px;" />
                    </div>

                    <div class="col-md-2"></div>
                </div>

                <div class="row">

                    <div class="col-md-2"></div>

                    <div class="col-md-4">
                       <p>
                           <?php echo $language[$_SESSION['language']]['LoonyLand3']; ?>
                       </p>
                       <p>
                           <?php echo $language[$_SESSION['language']]['LoonyLand4']; ?>
                       </p>
                    </div>

                    <div class="col-md-4 margincentered">
                       <img src="/img/loonyland/Danse.gif" alt="Danse GIF">
                    </div>

                    <div class="col-md-2"></div>

                </div>

            <div class="row">
                <div class="col-md-12 padding-0">
                    <h2>Design</h2>
                    <img src="/img/loonyland/Designunivers.jpg" alt="Design Loonyland" style="width: 99vw">
                    <p class="LoonyLandMargintop">
                        <?php echo $language[$_SESSION['language']]['LoonyLand5']; ?>
                    </p>
                    <img src="/img/loonyland/Sautpersonnage.jpg" alt="Saut personnage Loonyland" class="LoonyLandDesignimg">
                    <p class="LoonyLandMargintop LoonyLandMarginbottom">
                        <?php echo $language[$_SESSION['language']]['LoonyLand6']; ?>
                    </p>
                    <img src="/img/loonyland/animation.jpg" alt="Animation Loonyland" class="LoonyLandDesignimg">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2> <?php echo $language[$_SESSION['language']]['LoonyLand7']; ?></h2>
                    <p style="margin-top: 2%">
                         <?php echo $language[$_SESSION['language']]['LoonyLand8']; ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2><?php echo $language[$_SESSION['language']]['LoonyLand9']; ?></h2>
                    <div class="row">
                        <div class="col-md-1"></div>

                        <div class="col-md-2 margincentered">
                            <p style="max-width: 100%">
                                <?php echo $language[$_SESSION['language']]['LoonyLand10']; ?>
                            </p>
                        </div>
                        <div class="col-md-3 LoonyLandMargintop">
                            <img src="img/loonyland/doublage1.jpg" alt="Doublage Loonyland 1" class="LoonyLandDesignimg LoonyLandDesignimgDoublage">
                        </div>
                        <div class="col-md-5 LoonyLandMargintop">
                            <img src="img/loonyland/doublage2.jpg" alt="Doublage Loonyland 2" class="LoonyLandDesignimg LoonyLandDesignimgDoublage">
                        </div>

                        <div class="col-md-1"></div>
                    </div>

                    <div class="row">
                        <div class="col-md-2"></div>

                        <div class="col-md-3 LoonyLandMargintop">
                            <img src="img/loonyland/doublage3.jpg" alt="Doublage Loonyland 3" class="LoonyLandDesignimg LoonyLandDesignimgDoublage">
                        </div>
                        <div class="col-md-3 LoonyLandMargintop">
                            <img src="img/loonyland/doublage4.jpg" alt="Doublage Loonyland 4" class="LoonyLandDesignimg LoonyLandDesignimgDoublage">
                        </div>
                        <div class="col-md-2 margincentered">
                            <p style="max-width: 100%" class="LoonyLandMargintop">
                                <?php echo $language[$_SESSION['language']]['LoonyLand11']; ?>
                            </p>
                        </div>

                        <div class="col-md-2"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <h2> <?php echo $language[$_SESSION['language']]['LoonyLand12']; ?></h2>
                    <p><b> <?php echo $language[$_SESSION['language']]['LoonyLand13']; ?></b><br>
                    Constant Druon</p>

                    <p><b><?php echo $language[$_SESSION['language']]['LoonyLand14']; ?></b><br>
                    Victor Sannier</p>

                    <p><b>Design</b><br>
                    Constant Druon</p>

                    <p><b> <?php echo $language[$_SESSION['language']]['LoonyLand15']; ?></b><br>
                    Victor Sannier</p>

                    <p><b> <?php echo $language[$_SESSION['language']]['LoonyLand16']; ?></b><br>
                    Pierre Van Nieuwenhuyse</p>

                    <p><b>Animations</b><br>Johanna Schicklin</p>

                    <p><b> <?php echo $language[$_SESSION['language']]['LoonyLand17']; ?></b><br></p>

                    <p> <b> <?php echo $language[$_SESSION['language']]['LoonyLand18']; ?></b><br>Arnold Pol<br>
                        <b> <?php echo $language[$_SESSION['language']]['LoonyLand19']; ?></b><br>Clay Hillenburg</p>

                    <span><b> <?php echo $language[$_SESSION['language']]['LoonyLand20']; ?></b></span><br>

                    <p>
                        <b>Lorem</b><br>
                        Paul Barthelemy<br>
                        <b> <?php echo $language[$_SESSION['language']]['LoonyLand21']; ?></b><br>
                        Sacha Barthelemy
                    </p>

                    <p><b> <?php echo $language[$_SESSION['language']]['LoonyLand22']; ?></b><br>
                        Studio Youts</p>

                    <p><b> <?php echo $language[$_SESSION['language']]['LoonyLand23']; ?></b><br>
                        Maxime Delsart</p>

                </div>
            </div>

            </section>
        </div>
    </div>


    </div>
<?php

include_once ("footer.php");

?>