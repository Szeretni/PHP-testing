<title>PHP-esimerkki: tulosta-tiedot.php</title>

<form method="post"
      action="tulosta-tiedot2ika.php">
Nimi:<br><input type="text" name="kokonimi"><br>
Svuosi:<br><input type="text" name="svuosi"><br>
<input type="submit" name="nappi" value="Lähetä">
</form>

<?php
if(!isset($_POST['nappi'])) exit();

$ika = 2018 - $_POST['svuosi'];

echo "Terve <strong>{$_POST['kokonimi']}</strong><br>";
echo "Ikäsi on <strong>$ika</strong><p>";
?>