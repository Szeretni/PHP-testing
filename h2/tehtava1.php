<?php
$on_vasy = '';
$on_pe = '';
$on_paapipi = '';

if (isset($_GET['vasy'])){
echo "Väsyttää ankarasti";
$on_vasy = ' checked=checked';
}
if (isset($_GET['pe'])){
echo "On perjantai";
$on_pe = ' checked=checked';
}
if (isset($_GET['paapipi'])){
echo "Päätä särkee";
$on_paapipi = ' checked=checked';
}

$lomake = <<<EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="checkbox" name="vasy" $on_vasy />Väsy<br/>
<input type="checkbox" name="pe" $on_pe />Perjantai<br/>
<input type="checkbox" name="paapipi" $on_paapipi />Pää pipi<br/>
<input type="submit" name="painike" value="Kerro tunne"/>
</form>
EOLomake;

echo $lomake;
?>