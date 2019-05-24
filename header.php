<?php

include_once ("languagesystem.php");


header_remove("X-Powered-By");
ini_set('session.cookie_httponly', 1);

?>

<!doctype html>
<html lang="<?php echo $_SESSION['language']; ?>">
<head>


    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords ?>">
    <title><?php echo $page . $language[$_SESSION['language']]['WebsiteTitle']; ?></title>
    <link rel="stylesheet" media="all and (min-width: 994px)" href="css/stylecomputer.css?v=1.0">
    <link rel="stylesheet" media="all and (max-width: 994px)" href="css/stylescreen.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" type="image/png" href="img/Poulpe.png"/>

    <?php
            if (isset($pagecontatcus)) {
        ?> <script src='https://www.google.com/recaptcha/api.js'></script> <?php
            }
            else {

            }
    ?>





</head>
<body>

<header id="header">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="containerNav" id="containerNav">
            <a class="navbar-brand" href="/">
                <img src="img/header.png" alt="<?php echo $language[$_SESSION['language']]['WebsiteTitle']; ?>" id="imgHeader">
            </a>

            <button class="navbar-toggler ml-auto noopen" id="navbar-toggler" type="button" data-toggle="slide-collapse" data-target="#mySidenav" aria-controls="mySidenav" aria-expanded="false" aria-label="Toggle navigation" onclick="toggleNav()">
                <span class="navbar-toggler-icon" id="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">

                <div id="nav">

                    <div class="dropdown">
                        <a href="<?php $url = explode('?', $_SERVER['REQUEST_URI'], 2); echo htmlspecialchars($url[0])?>?language=fr" class="languagea"> <img src="img/country/france.png" alt="french" class=<?php $languedrapeau = ($_SESSION['language'] == 'fr') ? 'langueactive' : 'langueinactive'; echo $languedrapeau ?> > </a>
                        -
                        <a href="<?php $url = explode('?', $_SERVER['REQUEST_URI'], 2); echo htmlspecialchars($url[0])?>?language=en" class="languagea"> <img src="img/country/united-kingdom.png" alt="english" class=<?php $languedrapeau = ($_SESSION['language'] == 'en') ? 'langueactive' : 'langueinactive'; echo $languedrapeau ?> > </a>
                    </div>
                    <div class="dropdown">
                        <span class="dropbtn"><?php echo $language[$_SESSION['language']]['HeaderText3']; ?></span>
                        <div class="dropdown-content">
                            <a href="contact-us"><?php echo $language[$_SESSION['language']]['HeaderText3Dropdown1']; ?></a>
                            <a href="our-story"><?php echo $language[$_SESSION['language']]['HeaderText3Dropdown2']; ?></a>
                        </div>
                    </div>

                    <div class="dropdown">
                        <a href="Career" style="text-decoration: none;"><span class="dropbtn"><?php echo $language[$_SESSION['language']]['HeaderText2']; ?></span></a>
                    </div>

                    <div class="dropdown">
                        <span class="dropbtn"><?php echo $language[$_SESSION['language']]['HeaderText1']; ?></span>
                        <div class="dropdown-content">
                            <a href="/loonyland.php"><?php echo $language[$_SESSION['language']]['HeaderText1Dropdown1']; ?></a>
                            <a href="/coming-soon"><?php echo $language[$_SESSION['language']]['HeaderText1Dropdown2']; ?></a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div id="mySidenav" class="sidenav">
            <div class="dropdown dropdownpremier">
                <a href="#" onclick="toggleDropdown('1')"><b><span id="spandropdown1" class="unexpanded"> <?php echo $language[$_SESSION['language']]['HeaderText1']; ?></span></b></a>
                <div id="dropdown1">
                    <a href="/loonyland.php"><?php echo $language[$_SESSION['language']]['HeaderText1Dropdown1']; ?></a>
                    <a href="/coming-soon"><?php echo $language[$_SESSION['language']]['HeaderText1Dropdown2']; ?></a>
                </div>
            </div>

            <div class="dropdown">
                <a href="Career"><b><span id="spandropdown2"> <?php echo $language[$_SESSION['language']]['HeaderText2']; ?></span></b></a>
            </div>

            <div class="dropdown">
                <a href="#" onclick="toggleDropdown('3')"><b><span id="spandropdown3" class="unexpanded"> <?php echo $language[$_SESSION['language']]['HeaderText3']; ?></span></b></a>
                <div id="dropdown3">
                    <a href="contact-us"><?php echo $language[$_SESSION['language']]['HeaderText3Dropdown1']; ?></a>
                    <a href="our-story"><?php echo $language[$_SESSION['language']]['HeaderText3Dropdown2']; ?></a>
                </div>
            </div>

            <div id="languediv">
            <a href="<?php $url = explode('?', $_SERVER['REQUEST_URI'], 2); echo htmlspecialchars($url[0])?>?language=fr" class="languagea"> <img src="/img/country/france.png" alt="french" class=<?php $languedrapeau = ($_SESSION['language'] == 'fr') ? 'langueactive' : 'langueinactive'; echo $languedrapeau ?> > </a>
                -
            <a href="<?php $url = explode('?', $_SERVER['REQUEST_URI'], 2); echo htmlspecialchars($url[0])?>?language=en" class="languagea"> <img src="/img/country/united-kingdom.png" alt="english" class=<?php $languedrapeau = ($_SESSION['language'] == 'en') ? 'langueactive' : 'langueinactive'; echo $languedrapeau ?> > </a>
            </div>

        </div>

    </nav>
</header>
