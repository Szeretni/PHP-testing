<?php
session_start();
include('navbar.php');

if (!isset($_SESSION['app2_islogged']) || $_SESSION['app2_islogged'] !== true) {
header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "login.php");

exit;
}

?>
<title>Sovelluksen pääsivu</title>

<p>Täällä voi tehdä kaikenlaista salaista kivaa... </p>
