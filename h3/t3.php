<?php
session_start();
include('navbar.php');
$br = "<br/>";
echo $br . "t3.php" . $br;

if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "login.php");
 
exit;
} else if (isset($_SESSION['app1_islogged']) && $_SESSION['app1_islogged'] == true) {
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "main-secure.php");
 
exit;
}



?>

<!--
näkymä.php

sessio start

kirjautuminen

oletusarvotpanos ja saldo

printti

pelin pyöritys pelaa.php
    pelaa php asetetaan voittosumma ja kuvat

kutsutaan yhden napin form pelaa.php



pelaa.php

kirjautuminen

kuvien arvonta

session pelattu true

header ohjaa näkymä.php





nollaa tili .php

kirjautuminen

session saldo 0

header takaisin näkymä.php



