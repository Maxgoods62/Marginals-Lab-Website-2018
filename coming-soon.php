<?php

include_once ("languagesystem.php");
$page = $language[$_SESSION['language']]['ComingSoon1'] . " - ";
$description = $language[$_SESSION['language']]['ComingSoonDescription'];
$keywords= $language[$_SESSION['language']]['ComingSoonKeywords'];

include('header.php');
?>
    <div id="page">
        <div class="container-fluid">
            <div id="contentComingSoon">
                <section>

                    <h1 class="resize"><?php echo $language[$_SESSION['language']]['ComingSoon1']; ?></h1>
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Lyah</h2>
                            <img src="/img/our-story/Lyah.jpg" alt="Lyah image" class="LoonyLandDesignimg">
                            <p>
                                <?php echo $language[$_SESSION['language']]['ComingSoon2']; ?>
                            </p>
                            <p>
                                <?php echo $language[$_SESSION['language']]['ComingSoon3']; ?>
                            </p>
                            <p>
                                <?php echo $language[$_SESSION['language']]['ComingSoon4']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <h2>Ethernos</h2>
                            <img src="/img/our-story/Ethernos.jpg" alt="Ethernos image" class="LoonyLandDesignimg">
                            <p>
                                <?php echo $language[$_SESSION['language']]['ComingSoon5']; ?>
                            </p>
                            <p>
                                <?php echo $language[$_SESSION['language']]['ComingSoon6']; ?>
                            </p>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
<?php

include_once ("footer.php");

?>