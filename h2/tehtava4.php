<?php

$value = "";
$eka = "Eka kerta";
$toka = "Toka kerta";
$koka = "Koka kerta";

if(isset($_GET['painike'])){
    switch ($_GET['printField']){
        case $eka:
            $value = $toka;
            break;
        case $toka:
            $value = $koka;
            break;
        case $koka:
            $value = $eka;
            break;
        default:
            $value = $eka;
            break;
    }
}

$lomake = <<<EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="submit" name="painike" value="Paina minua"/>
<input type="text" name="printField" value="{$value}"/>
</form>
EOLomake;

echo $lomake;

?>