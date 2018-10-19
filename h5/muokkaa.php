<?php
session_start();
include('navbar.php');
require_once '/home/L2912/public_html/ttms0900/common/PasswordLib.phar';
$lib = new PasswordLib\PasswordLib();

require_once ("/home/L2912/php-dbconfig/db-init.php");

if(isset($_POST['action']) && isset($_POST['tunnus']) && isset($_SESSION['uid'])){
    $tunnus = isset($_POST['tunnus']) ? $_POST['tunnus'] : '';
	$sukunimi = isset($_POST['sukunimi']) ? $_POST['sukunimi'] : '';
	$etunimi = isset($_POST['etunimi']) ? $_POST['etunimi'] : '';
	$osoite = isset($_POST['osoite']) ? $_POST['osoite'] : '';
	$puhnro = isset($_POST['puhnro']) ? $_POST['puhnro'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    
    $stmt = '';
    if($password == ''){
        $stmt = $db->prepare("UPDATE henkilot SET sukunimi=?, etunimi=?, osoite=?, puhnro=?,email=? WHERE tunnus=?");
        $stmt->execute(array($sukunimi,$etunimi,$osoite,$puhnro,$email,$tunnus));
        
    } else {
        $hash = $lib->createPasswordHash($password,  '$2a$', array('cost' => 12));    
        $stmt = $db->prepare("UPDATE henkilot SET sukunimi=?, etunimi=?, osoite=?, puhnro=?,email=?,password=? WHERE tunnus=?");
        $stmt->execute(array($sukunimi,$etunimi,$osoite,$puhnro,$email,$hash, $tunnus));
    }
        
    $affected_rows = $stmt->rowCount();
    echo $affected_rows . " riviä päivitettiin<hr>\n";
}

?>