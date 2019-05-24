
<?php
include_once ("languagesystem.php");
$page = $language[$_SESSION['language']]['CareerTitle'] . " ";
$description = $language[$_SESSION['language']]['CareerDescription'];
$keywords= $language[$_SESSION['language']]['CareerKeywords'];

include('header.php'); ?>
<div id="page">
    <div id="divImgFullscreenCareer" class="divImgFullscreen">
        <div class="ImgTitlePage" id="ImgTitleCareer">
            <h1 class="resize"><?php echo $language[$_SESSION['language']]['CareerMainTitle']; ?></h1>
        </div>
    </div>

    <div class="container-fluid">
        <div id="contentcareer">
            <section>

                <div class="col-md-12">
                    <h2><?php echo $language[$_SESSION['language']]['CareerTtile1']; ?></h2>
                    <p><?php echo $language[$_SESSION['language']]['CareerText1']; ?></p>
                </div>

                <div class="col-md-12">
                    <h2><?php echo $language[$_SESSION['language']]['CareerTtile2']; ?></h2>
                    <p><?php echo $language[$_SESSION['language']]['CareerText2']; ?></p>
                </div>

                <div class="row">

                    <div class="col-md-6">
                        <img src="img/career/dev.jpg" alt="Dev">
                     </div>
                    <div class="col-md-6">
                        <img src="img/career/designer.jpg" alt="Designer">
                    </div>
                </div>

                <div class="col-md-12">
                    <h2><?php echo $language[$_SESSION['language']]['CareerTtile3']; ?></h2>
                    <p><?php echo $language[$_SESSION['language']]['CareerText3']; ?></p>
                    <p><?php echo $language[$_SESSION['language']]['CareerText3bis']; ?></p>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6" id="buttoncareerdiv">
                        <a href="/contact-us"> <button type="button" class="btn btn-lg align-middle" id="buttoncareer"><?php echo $language[$_SESSION['language']]['CareerSendApplication']; ?></button></a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3"></div>
                </div>
                <div class="col-md-12">
                    <p><?php echo $language[$_SESSION['language']]['CareerText4']; ?></p>
                </div>

            </section>
        </div>
    </div>
</div>
<?php

include_once ("footer.php");

?>
