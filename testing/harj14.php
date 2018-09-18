<!DOCTYPE html>
<html>
<body>    
    <p>Anna numero 1-12. Ohjelma kertoo kuukauden nimen.</p>
    <form method="post">
        <input type="text" name="txt"/>
        <br/>
        <input type="submit" name="submit" value="Lähetä"/>
        <input type="submit" name="clear" value="Tyhjennä"/>
    </form>
    
    <?php
    
    if (isset($_POST['submit']))
    {
        $str = $_POST['txt'];
        
        echo "<br/>";
        echo "Annettu numero: $str";
        echo "<br/>";
                
        $month = "";
        $valid = true;
        switch ($str) {
        case "1":
            $month = "tammikuu";
            break;
        case "2":
            $month = "helmikuu";
            break;
        case "3":
            $month = "maaliskuu";
            break;
        case "4":
            $month = "huhtikuu";
            break;
        case "5":
            $month = "toukokuu";
            break;
        case "6":
            $month = "kesäkuu";
            break;
        case "7":
            $month = "heinäkuu";
            break;
        case "8":
            $month = "elokuu";
            break;
        case "9":
            $month = "syyskuu";
            break;
        case "10":
            $month = "lokakuu";
            break;
        case "11":
            $month = "marraskuu";
            break;
        case "12":
            $month = "joulukuu";
            break;
        default:
            echo "Anna uusi luku väliltä 1-12.";
            $valid = false;
        }
        
        if ($valid) {
            echo "Kuukauden nimi on $month";   
        }
    }
    ?>
</body>
</html>