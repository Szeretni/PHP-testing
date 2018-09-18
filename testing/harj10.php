<!DOCTYPE html>
<html>
<body>
    <?php
    //alustaa tekstikentän ja säilyttää kentän arvon kun nappia on painettu
    $txt_value ="";
    if (isset($_POST['txt']))
        {
            $txt = $_POST['txt']; 
            $txt_value = $txt;
        }
    ?>
    
    <!-- html-rakenne -->
    <h1>My Isset Form</h1>
    <p>Isset() funktio tutkii onko nappia painettu vai ei.</p>
    <form method="post">
        Name:
        <input type="text" name="txt" value="<?php echo $txt_value ?>">
        <input type="submit" name="sbmt" value="Read">
    </form>

    <?php
    //tulostaa tekstiä formin alle kun nappia on painettu
        if (isset($_POST['txt']))
        {
            $txt = $_POST['txt']; 
            $txt_value = $txt;
            echo "<br>Nappia on painettu!<br>";
            echo "Syötetty: $txt";
        }
    ?>     
</body>
</html>