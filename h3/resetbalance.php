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

<br/>
<label>Confirm</label>
<form method="post" action="main-secure.php">
    <input type="submit" name="resetBalance" value="Yes"/>
    <input type="submit" name="no" value="No"/>
</form>

