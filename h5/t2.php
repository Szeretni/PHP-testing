<?php

$form = <<<EOF
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="text" name="textInput"/>
<input type="submit" name="submit" value="submit"/>
</form>
EOF;

$check = "/^[0-9]{5}(?:\-[0-9]{4})?$/";

if(isset($_GET['submit'])){
	if(preg_match($check,$_GET['textInput'])){
		echo "match";
	} else {
		echo "Not a match";
	}
}

echo $form;

?>