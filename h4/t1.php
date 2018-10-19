<?php

include('navbar.php');

header("Location: http://" . $_SERVER['HTTP_HOST']
    . dirname($_SERVER['PHP_SELF']) . '/'
    . "listing.php");

?>