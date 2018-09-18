<?php
session_start();
include('navbar.php');
$br = "<br/>";

$errmsg = '';
if(isset($_SESSION['app1_islogged'])){
	if($_SESSION['app1_islogged']){
		header("Location: http://"
			. $_SERVER['HTTP_HOST']
			. dirname($_SERVER['PHP_SELF']) 
			. '/'
			. "main-secure.php");
	}
}

if (isset($_POST['uid']) AND isset($_POST['passwd'])) {
	$users = array("ara"=>"sala","hannu"=>"secret","user"=>"password");

	foreach($users as $user => $password){
		if ($_POST['uid'] === $user AND $_POST['passwd'] === $password) {
		    $_SESSION['app1_islogged'] = true;
			$_SESSION['uid'] = $_POST['uid'];
			header("Location: http://"
				. $_SERVER['HTTP_HOST']
				. dirname($_SERVER['PHP_SELF']) 
				. '/'
				. "main-secure.php");
			exit;
		} else {
			$errmsg = '<span style="background: yellow;">Tunnus/Salasana v��rin!';
		}
	}

}

?>

<title>Kirjautusmislomake</title>
 
<?php
if ($errmsg != '') echo $errmsg;
?>
 
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>"
style=color:#000;background-color:#eeeeee>
User:<br><input type="text" name="uid" size="30" autocomplete="off"><br>
Password:<br><input type="text" name="passwd" size="30" autocomplete="off"><br>
<input type='submit' name='action' value='Login'>
<br>
</form>