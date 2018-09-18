<!DOCTYPE html>
<html>
<body>    
    <h1>My I/O Form</h1>
    <p>Alapuolella olevaan tekstikenttään voi syöttää tekstiä.</p>
    <form method="post">
        Name:
        <input type="text" name="txt">
        <input type="submit" value="Enter">
    </form>
    
    <?php
    
    if (isset($_POST['txt']))
    {
        
        echo "<br>";
        echo "Enter-nappia painettu!<br>";
        
        $str = $_POST['txt'];
        echo "Syötetty: $str";
        
        
    }
    
    ?>
</body>
</html>