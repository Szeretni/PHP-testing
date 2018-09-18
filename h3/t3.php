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
