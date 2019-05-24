
<?php
include_once ("languagesystem.php");

$page = $language[$_SESSION['language']]['ImgTitleIndex'] . " - ";
$description = $language[$_SESSION['language']]['WebsiteDescription'];
$keywords= $language[$_SESSION['language']]['WebsiteKeywords'];

include('header.php');
?>
<div id="page">
    <a href="/loonyland">
    <div id="divImgFullscreenIndex" class="divImgFullscreen">
        <div id="ImgTitleIndex">
            <h1><?php echo $language[$_SESSION['language']]['ImgTitleIndex']; ?></h1>
        </div>
    </div>
    </a>

    <div class="container">

        <div id="contentindex">
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="feature feature-1">
                                <div class="text-center">
                                    <a href="/Career" style="text-decoration: none;">
                                    <img src="img/team.jpg" alt="<?php echo $language[$_SESSION['language']]['IndexTextContent1']; ?> Image" class="ImgContentIndex img-responsive">
                                    <br><br>
                                    <span><?php echo $language[$_SESSION['language']]['IndexTextContent1']; ?></span>
                                    </a>
                                </div>
                                <p></p>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="feature feature-1">
                                <div class="text-center">
                                    <a href="/our-story" style="text-decoration: none;">
                                    <img src="img/notreequipe.png" alt="<?php echo $language[$_SESSION['language']]['IndexTextContent2']; ?> Image" class="ImgContentIndex img-responsive">
                                    <br><br>
                                    <span><?php echo $language[$_SESSION['language']]['IndexTextContent2']; ?></span>
                                    </a>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>
</div>
<?php

include_once ("footer.php");

?>
