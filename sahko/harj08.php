 <?php
//1.1
$i=0;
do {
    echo $i++ . "<br>";
} while ($i <10);

echo "<br>";

//1.2
$i=0;
do {
    $j=1;
    do {
        echo $i;
        $j++;
    } while ($j <$i+2);
    $i++;
    echo "<br>";
} while ($i <10);


?> 