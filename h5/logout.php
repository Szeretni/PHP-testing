<?php
session_start();

if (isset($_SESSION['app2_islogged'])) {
    unset($_SESSION['app2_islogged']);
    unset($_SESSION['uid']);
}

header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "main.php");
?>