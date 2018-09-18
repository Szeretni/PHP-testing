<?php
$br = "<br/>";
$name = "";

if(isset($_SESSION['uid'])){
	$name = $_SESSION['uid'];
} else {
	$name = "is logged out";
}

$buttons = <<<EOForm
<label>User: {$name}</label>
<a href="logout.php">Log out</a>
<a href="setbet.php">Set bet</a>
<a href="resetbalance.php">Reset balance</a>
<a href="addmoney.php">Add money</a>
<a href="main-secure.php">Play</a>
EOForm;

echo $buttons;


?>