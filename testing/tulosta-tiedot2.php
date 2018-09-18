<title>PHP-esimerkki: tulosta-tiedot.php</title>

<form method="post"
      action="tulosta-tiedot2.php">
Nimi:<br><input type="text" name="kokonimi"><br>
Osoite:<br><input type="text" name="osoite"><br>
<input type="submit" name="nappi" value="Lähetä">
</form>

<?php
if(!isset($_POST['nappi'])) exit();
echo "Terve <strong>{$_POST['kokonimi']}</strong><br>";
echo "Osoitteesi on <strong>{$_POST['osoite']}</strong><p>";
?>