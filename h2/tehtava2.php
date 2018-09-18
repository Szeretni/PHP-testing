<?php
$varit["Keltainen"] = "#ff0";
$varit["Punainen"] = "#f00";
$varit["Sininen"] = "#00f";
$varit["Beige"] = "#fed";
$varit["Silver"] = "#888";

$taustavari = '#ccc';
$tekstivari = '#fff';

if (isset($_GET['tvari'])){
    $taustavari = $_GET['tvari'];
}
if (isset($_GET['txtvari'])){
    $tekstivari = $_GET['txtvari'];
}

function getColors($isTaustavari){
    global $varit;
    global $taustavari;
    global $tekstivari;
    $currentColor = '';
    $optiot = '';
    $tvari = 'tvari';
    $txtvari = 'txtvari';
    $whichColor = '';
    if($isTaustavari){
        $whichColor = $tvari;
        $currentColor = $taustavari;
    }else{
        $whichColor = $txtvari;
        $currentColor = $tekstivari;
    }
    foreach($varit as $varinimi => $varikoodi){
        if($currentColor == $varikoodi){
            $optiot .= "<input type='radio' name='$whichColor' value='$varikoodi' checked=checked />$varinimi<br/>\n";    
        } else{
            $optiot .= "<input type='radio' name='$whichColor' value='$varikoodi' />$varinimi<br/>\n";    
        }
    }
    return $optiot;
}

$optiotTvari = getColors(TRUE);
$optiotTxtvari = getColors(FALSE);

$tyylit = <<<EOTyyli
<style type='text/css'>
body
{
background-color: $taustavari;
color: $tekstivari;
}
table {
    border-collapse: collapse;
}
table, th, td {
    border: 1px solid black;
}
td {
    vertical-align: top;
}
</style>
EOTyyli;

$table = <<<EOTable
<html>
<body>
<table>
<tr>
<td>Taustaväri:</td>
<td>$optiotTvari</td>
</tr>
<tr>
<td>Tekstiväri:</td>
<td>$optiotTxtvari</td>
</tr>
</table>
</body>
</html>
EOTable;

$lomake = <<<EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
$table
<input type="submit" name="painike" value="Väritä"/>
</form>
EOLomake;

echo $tyylit;
echo $lomake;

?>

