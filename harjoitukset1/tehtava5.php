<!DOCTYPE html>
<html>
<head>
    <style>
        p {
            margin: 0;
        }
    </style>
</head>
<body>

<?php

function taustaVari(){
    static $oddRow = true;
    if ($oddRow){
        $oddRow = false;
        return "#ffff00";
    } else {
        $oddRow = true;
        return "#ffffff";
    }
}

for($i=1;$i<8;$i++){
    $color = taustaVari();
    echo "<p style='background-color:{$color};'>{$i}. rivi</p>";
}

?>

</body>
</html>
