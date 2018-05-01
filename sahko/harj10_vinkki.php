<!DOCTYPE html>
<html>
<body>
    <h1>Lisää tietosi postituslistalle!</h1>
    <form method="post">
        Nimi:<br>
        <input type="text" name="name"><br>
        Email:<br>
        <input type="text" name="email"><br>
        Paikkakunta:<br>
        <input type="text" name="location"><br>
        <input type="submit" name="submit" value"Syötä tiedot">
        <input type="submit" name="info" value="Tarkastele tietoja">
        <input type="submit" name="delete" value="Poista tiedot">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        echo "Submitted";
        $email = $_POST['email'];
        $location = $_POST['location'];
    }
    if(isset($_POST['info']))
    {
        echo "Info-painiketta painettu";
    }
    if(isset($_POST['delete']))
    {
        echo "Tiedot poistettu";
    }
        
    ?>
</body>
</html>