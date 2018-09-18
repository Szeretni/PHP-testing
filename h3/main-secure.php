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
 
if(!isset($_SESSION['bet']) && !isset($_SESSION['balance'])){
	$_SESSION['bet'] = 100;
	$_SESSION['balance'] = 500;
}

if(isset($_POST['resetBalance'])){
	$_SESSION['balance'] = 500;
}

if(isset($_POST['setBet'])){
	$_SESSION['bet'] = $_POST['setBet'];
}

if(isset($_POST['addMoney'])){
	$_SESSION['balance'] += $_POST['addMoney'];
}

if(isset($_SESSION['played'])){
	if($_SESSION['played']){
		$_SESSION['balance'] -= $_SESSION['bet'];
		echo $br;
		foreach($_SESSION['pictures'] as $picture){
			echo $picture;
		}
		if(isset($_SESSION['win'])){
			if($_SESSION['win']){
				$_SESSION['balance'] += 700;
				echo $br . "<h1>You win!</h1>";
			} else {
				echo $br . "<h2>You didn't win</h2>";
			}
		}
		$_SESSION['played'] = false;
	}
}

echo  $br . "Bet: " . $_SESSION['bet'] . $br;
echo "Balance: " . $_SESSION['balance'] . $br;

?>

<form method="post" action="play.php">
<input type="submit" name="playButton" value="Play"/>
</form>