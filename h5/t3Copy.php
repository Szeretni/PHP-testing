<?php

$form = <<<EOF
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="text" name="textInput"/>
<input type="submit" name="submit" value="submit"/>
</form>
EOF;

$br = "<br/>";

$check334 = "/^[0-9]{3}\s[0-9]{3}\s[0-9]{4}$/";
$check3331 = "/^[0-9]{3}\s[0-9]{3}\s[0-9]{3}\s[0-9]{1}$/";
$check37 = "/^[0-9]{3}\s[0-9]{7}$/";
$check10 = "/^[0-9]{10}$/";

$checks = array($check334,$check3331);

$numberWithoutCountryCode = array("040 550 7702","040 550 770 2","040 5507702","0405507702");
$numbersWithCountryCode = array("+35840 550 7702", "+35840 550 770 2", "+35840 5507702","+358405507702","+358 40 550 7702","+358 40 550 770 2","+358 40 5507702","+358 405507702");



if(isset($_GET['submit'])){
	foreach($checks as $check){
		foreach($numberWithoutCountryCode as $number){
			if(preg_match($check,$number)){
				echo $number . " good" . $br;
			} 
		
               
   }
}
               }


echo $form;


/*

3 3 4
3 3 3 1
3 7
10

*/

?>