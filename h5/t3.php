<?php

$form = <<<EOF
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="text" name="textInput"/>
<input type="submit" name="submit" value="submit"/>
</form>
EOF;

$br = "<br/>";

$check = "/^((\+358\s[0-9]{2}){1}[0-9]{7})$|^(((\+358\s[0-9]{2}){1}\s[0-9]{3}\s[0-9]{4}))$|^(((0|\+358)[0-9]{2}){1}\s[0-9]{3}\s[0-9]{4})$|^(((0|\+358)[0-9]{2}){1}\s[0-9]{3}\s[0-9]{3}\s[0-9]{1})$|^(((0|\+358)[0-9]{2}){1}\s[0-9]{7})$|^((0|\+358)[0-9]{9})$|^(\+358\s[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{1})$|^(\+358\s[0-9]{2}\s[0-9]{7})$/";

$numbersWithoutCountryCode = array("040 550 7702","040 550 770 2","040 5507702","0405507702");
$numbersWithCountryCode = array("+35840 550 7702", "+35840 550 770 2", "+35840 5507702","+358405507702","+358 40 550 7702","+358 40 550 770 2","+358 40 5507702","+358 405507702");

$good = 0;
$bad = 0;
$total = 0;
if(isset($_GET['submit'])){
    foreach($numbersWithoutCountryCode as $number){
        $total++;
        if(preg_match($check,$number)){
            $good++;
            echo $number . " good" . $br;
        } else {
            $bad++;
            echo $number . " bad" . $br;
        }
    }
    foreach($numbersWithCountryCode as $number){
        $total++;
        if(preg_match($check,$number)){
            $good++;
            echo $number . " good" . $br;
            $match = true;
        } else {
            $bad++;
            echo $number . " bad" . $br;
        }
    }
    echo "good:" . $good . $br;
    echo "bad:" . $bad . $br;
    echo "total:" . $total . $br;
    if(preg_match($check,$_GET['textInput'])){
        echo $br . "JEI " . $_GET['textInput'];
    } else {
        echo $br . "NEJ " . $_GET['textInput'];
    }
}

echo $form;

?>