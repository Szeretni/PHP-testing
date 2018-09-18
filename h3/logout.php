<?php
session_start();
$br = "<br/>";
 
if (isset($_SESSION['app1_islogged'])) {
    unset($_SESSION['app1_islogged']);
    unset($_SESSION['uid']);
    unset($_SESSION['bet']);
    unset($_SESSION['balance']);
}
 
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "t3.php");
?>