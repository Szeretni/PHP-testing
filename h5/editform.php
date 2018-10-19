<?php
session_start();
include('navbar.php');
// editform.php
 
require_once ("/home/L2912/php-dbconfig/db-init.php");

if (!isset($_SESSION['app2_islogged']) || $_SESSION['app2_islogged'] !== true) {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "t4.php");
    
    exit;
    }

$tunnus = '';
if($_SESSION['uid'] != 'admin'){
    $tunnus = $_SESSION['uid']; 
    echo "<h1>You were redirected to edit your own account!</h1>";
} if($_SESSION['uid'] == 'admin'){
    $tunnus = isset($_GET['id']) ? $_GET['id'] : '';
}
     
$stmt = haeHenkilo($db, $tunnus);
teelomake($stmt);
 
// 
function haeHenkilo($db, $tunnus) {
   $sql = <<<SQLEND
   SELECT tunnus, sukunimi, etunimi, email, osoite, puhnro
   FROM henkilot WHERE tunnus = :tunnus
SQLEND;
 
   $stmt = $db->prepare($sql);
   $stmt->bindValue(':tunnus', "$tunnus", PDO::PARAM_STR);
   $stmt->execute();
   return $stmt;    
}
 
// SQL-kyselyn tulosjoukko HTML-taulukkoon.
function teelomake($stmt) {
	$row = $stmt->fetch(PDO::FETCH_ASSOC);
	$forms = <<<EOLomake
<form method='post' action='muokkaa.php'>
<table border='0' cellpadding='5'>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Tunnus</td>
  <td bgcolor='#dddddd'>{$row['tunnus']}<input type='hidden' name='tunnus' value='{$row['tunnus']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Sukunimi</td>
  <td bgcolor='#dddddd'><input type='text' name='sukunimi' size='30' value='{$row['sukunimi']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Etunimi</td>
  <td bgcolor='#dddddd'><input type='text' name='etunimi' size='30' value='{$row['etunimi']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Osoite</td>
  <td bgcolor='#dddddd'><input type='text' name='osoite' size='30' value='{$row['osoite']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Puhnro</td>
  <td bgcolor='#dddddd'><input type='text' name='puhnro' size='30' value='{$row['puhnro']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Email</td>
  <td bgcolor='#dddddd'><input type='text' name='email' size='30' value='{$row['email']}'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Password</td>
  <td bgcolor='#dddddd'><input type='text' name='password' size='30' value='']}'></td>
</tr>
</table>
<input type='submit' name='action' value='Tallenna muutokset' onclick="javascript: return confirm('Hyv�ksy muutokset?')">
</form>

<form method='post' action='poista.php'>
<input type='hidden' name='tunnus' value='{$row['tunnus']}'>
<input type='submit' name='action' value='Poista' onclick="javascript: return confirm('Hyv�ksy poisto?')">
</form>
EOLomake;

echo $forms;
}

?>