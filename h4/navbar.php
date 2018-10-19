<?php

$buttons = <<<EOForm
<form name="searchForm" method="get" action="listing.php" >
<a href="listing.php">listing</a>
<a href="addaddress.php">addaddress</a>
<input type="text" name="hakuehto" />
<input type="submit" name="submitButton" />
</form>
EOForm;

echo $buttons;

?>