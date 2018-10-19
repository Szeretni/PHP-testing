<?php
session_start();
include('navbar.php');
// editform.php
require_once '/home/L2912/public_html/ttms0900/common/PasswordLib.phar';
$lib = new PasswordLib\PasswordLib();
require_once ("/home/L2912/php-dbconfig/db-init.php");

if (!isset($_SESSION['app2_islogged']) || $_SESSION['app2_islogged'] !== true || $_SESSION['uid'] != 'admin') {
    header("Location: http://" . $_SERVER['HTTP_HOST']
                               . dirname($_SERVER['PHP_SELF']) . '/'
                               . "t4.php");
    
    exit;
    }
 
if(isset($_POST['action']) && isset($_POST['tunnus'])){
	$tunnus = isset($_POST['tunnus']) ? $_POST['tunnus'] : '';
	$sukunimi = isset($_POST['sukunimi']) ? $_POST['sukunimi'] : '';
	$etunimi = isset($_POST['etunimi']) ? $_POST['etunimi'] : '';
	$osoite = isset($_POST['osoite']) ? $_POST['osoite'] : '';
	$puhnro = isset($_POST['puhnro']) ? $_POST['puhnro'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $hash = $lib->createPasswordHash($password,  '$2a$', array('cost' => 12));

  $stmt = $db->prepare("INSERT INTO henkilot (tunnus,sukunimi,etunimi,osoite,puhnro,email,password) VALUES(:f1,:f2,:f3,:f4,:f5,:f6,:f7)");
  $stmt->execute(array(':f1' => $tunnus, ':f2' => $sukunimi, ':f3' => $etunimi, ':f4' => $osoite, ':f5' => $puhnro, ':f6' => $email, ':f7' => $hash));
	$affected_rows = $stmt->rowCount();
  echo $affected_rows . " riviä lisättiin<hr>\n";
} elseif(isset($_POST['action'])){
  echo "Please provide an unique 'tunnus'";
}

teelomake();
  
// SQL-kyselyn tulosjoukko HTML-taulukkoon.
function teelomake() {
	$forms = <<<EOLomake
<form method='post' action='addaddress.php'>
<table border='0' cellpadding='5'>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Tunnus</td>
  <td bgcolor='#dddddd'><input type='text' name='tunnus' size='30' required></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Sukunimi</td>
  <td bgcolor='#dddddd'><input type='text' name='sukunimi' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Etunimi</td>
  <td bgcolor='#dddddd'><input type='text' name='etunimi' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Osoite</td>
  <td bgcolor='#dddddd'><input type='text' name='osoite' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Puhnro</td>
  <td bgcolor='#dddddd'><input type='text' name='puhnro' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Email</td>
  <td bgcolor='#dddddd'><input type='text' name='email' size='30'></td>
</tr>
<tr valign='top'>
  <td align='right' bgcolor='#ffeedd'>Password</td>
  <td bgcolor='#dddddd'><input type='text' name='password' size='30'></td>
</tr>
</table>
<input type='submit' name='action' value='Tallenna muutokset' onclick="javascript: return confirm('Hyväksy muutokset?')">
</form>
EOLomake;

echo $forms;
}

?>