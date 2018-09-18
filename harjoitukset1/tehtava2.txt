<title>Tehtava 2: Eurolaskin</title>
<form method="get" action="<?php echo $_SERVER['PHP_SELF'] ?>">
Euro:<br><input type="text" name="euro" value="<?php if(isset($_GET['euro']))echo $_GET['euro'] ?>"><br>
<input type="submit" name="nappi" value="Lähetä">
</form>

<?php
if(!isset($_GET['nappi'])) exit();
$euro = $_GET['euro'] * 5.985;
echo "Markkoina: " . $euro;
?>