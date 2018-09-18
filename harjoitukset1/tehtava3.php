<title>Tehtava 3</title>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
Tähdet:<br><input type="text" name="stars" value="<?php if(isset($_POST['button']))echo $_POST['stars'] ?>"><br>
<input type="submit" name="button" value="Lähetä">
</form>

<?php
if(!isset($_POST['button'])) exit();
for($i = 0; $i < $_POST['stars']; $i++){
    echo "*";
}
?>