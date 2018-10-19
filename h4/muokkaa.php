<?php
include('navbar.php');

require_once ("/home/L2912/php-dbconfig/db-init.php");

if(isset($_POST['action']) && isset($_POST['tunnus'])){
    $tunnus = isset($_POST['tunnus']) ? $_POST['tunnus'] : '';
	$sukunimi = isset($_POST['sukunimi']) ? $_POST['sukunimi'] : '';
	$etunimi = isset($_POST['etunimi']) ? $_POST['etunimi'] : '';
	$osoite = isset($_POST['osoite']) ? $_POST['osoite'] : '';
	$puhnro = isset($_POST['puhnro']) ? $_POST['puhnro'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
    $stmt = $db->prepare("UPDATE henkilot SET sukunimi=?, etunimi=?, osoite=?, puhnro=?,email=?  WHERE tunnus=?");
    $stmt->execute(array($sukunimi,$etunimi,$osoite,$puhnro,$email, $tunnus));
    $affected_rows = $stmt->rowCount();
    echo $affected_rows . " riviä päivitettiin<hr>\n";
}

?>