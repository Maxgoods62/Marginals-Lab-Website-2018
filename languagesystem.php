<?php
/**
 * Created by PhpStorm.
 * User: MAXIM
 * Date: 02/03/2018
 * Time: 11:16
 */
session_start();

if(!isset($_SESSION['language'])) {
    $lang = htmlspecialchars(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2));
    //echo $lang;
    switch ($lang) {
        case "fr":
            $_SESSION['language'] = "fr";
            break;
        case "en":
            $_SESSION['language'] = "en";
            break;
        default:
            $_SESSION['language'] = "en";
            break;
    }
}

include_once ("traduction.php");

if (!empty($_GET['language']) ) {
    $_SESSION['language'] = htmlspecialchars($_GET['language']) === 'en' ? 'en' : 'fr';
}


?>