<?php
session_start();
include('navbar.php');
$br = "<br/>";

if (!isset($_SESSION['app1_islogged']) || $_SESSION['app1_islogged'] !== true) {
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "login.php");
 
exit;
}

?>

<form method="post" action="main-secure.php">
    <input type="text" name="addMoney" value="100" pattern="[0-9]{1,}" />
    <br/>
    <input type="submit" value="Add money"/>
</form>