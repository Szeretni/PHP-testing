<!DOCTYPE html>
<html>
<body>    
    <h1>My Array Form</h1>
    <p>Syötä taulukon indeksi ja data</p>
    <form method="post">
        Indeksi:
        <input type="number" name="nbr"><br>
        Data:
        <input type="text" name="txt"><br>
        <input type="submit" value="Enter">
    </form>
    
    <?php
    $array = array("Eka","Toka","Kolmas","Neljäs","Viides");
    
    if (isset($_POST['nbr']) and isset($_POST['txt']))
    {
        //alustus
        $i = $_POST['nbr'];
        $s = $_POST['txt'];
        echo "Enter-nappia painettu!<br>";
        echo "Syötetty: $i<br>";
        echo "Syötetty: $s<br>";
        
        echo "<br>";
        
        //vanha taulukko
        echo "Taulukon vanha sisältö:<br>";
        echo "Array ( ";
        $int = 0;
        foreach ($array as $str)
        {
            echo "[" . $int . "] => " . $str . " ";
            $int++;
        }
        echo ")";
        
        echo "<br>";
        
        //uusi taulukko
        $int = 0;
        foreach ($array as $str)
        {
            if ($int == $i)
            {
                $array[$i] = $s;
            }
            $int++;
        }       
        
        //tulostus
        echo "Taulukon uusi sisältö:<br>";
        echo "Array ( ";
        $int = 0;
        foreach ($array as $str)
        {
            echo "[" . $int . "] => " . $str . " ";
            $int++;
        }
        echo ")";
    }
    
    ?>
</body>
</html>