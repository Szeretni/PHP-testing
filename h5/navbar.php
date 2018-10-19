<?php

$buttons = <<<EOForm
<form name="searchForm" method="get" action="listing.php" >
[<a href="listing.php">listing</a>]
<input type="text" name="hakuehto" />
<input type="submit" name="submitButton" value="Search by Sukunimi" />
</form>
EOForm;

if (!isset($_SESSION['app2_islogged']) || $_SESSION['app2_islogged'] !== true) {
   echo "[Kirjautunut: --] ";
   echo "[ <a href='login.php'>Kirjaudu</a> ]";
   echo $buttons;
} else {
   echo "[Kirjautunut: <span style='background: yellow;'>{$_SESSION['uid']}</span> ] ";
   echo "[<a href='logout.php'>Kirjaudu ulos</a>] ";
   if($_SESSION['uid'] == 'admin'){
    echo '[<a href="addaddress.php">addaddress</a>]';
}
   echo $buttons;
}

?>
