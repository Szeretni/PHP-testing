 <?php
//1.1
function Tulosta($txt) {
    echo "Minun nimeni on $txt!";
}

Tulosta("Hannu");
echo "<br>";

//1.2
function Tarkistus($i) {
    if ($i == 100) {
        echo "Tänään sataa!";
    }
    else {
        echo "Tänään ei sada!";
    }
}

Tarkistus(100);
echo "<br>";
Tarkistus(1);
echo "<br>";

//1.3
function Sum($i,$j) {
    $sum = $i+$j;
    echo "Summa (" . "$i + $j" . ") on " . $sum . ".";
}

Sum(4,5);

?> 