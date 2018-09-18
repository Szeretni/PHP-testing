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

if(isset($_POST['playButton'])){
	$_SESSION['played'] = true;	
}

if($_SESSION['played']){
	$_SESSION['pictures'] = array();
	$_SESSION['win'] = true;
	$previousNumber = 0;
	for($i=0;$i<3;$i++){
		$pictureNumber = rand(1,3);
		array_push($_SESSION['pictures'], "<img src='{$pictureNumber}.jpg' />");
		if($i > 0){
			if($previous != $pictureNumber){
				$_SESSION['win'] = false;
			}
		}
		$previous = $pictureNumber;
	}
}


header("Location: http://" . $_SERVER['HTTP_HOST']
                           . dirname($_SERVER['PHP_SELF']) . '/'
                           . "main-secure.php");

?>

