<?php
/*
Password Hashing:
http://www.sitepoint.com/password-hashing-in-php/
https://crackstation.net/hashing-security.htm

http://stackoverflow.com/questions/4795385/how-do-you-use-bcrypt-for-hashing-passwords-in-php
*/

require_once '/home/ara/php-password-lib/PasswordLib.phar';
$lib = new PasswordLib\PasswordLib();

$password = "Arska";
$hash = $lib->createPasswordHash($password,  '$2a$', array('cost' => 12));
echo "$hash<br>";

$boolean = $lib->verifyPasswordHash($password, $hash);

if ($boolean) echo "Salasana $password OIKEIN<br>";

$koko = strlen($hash);

echo $koko;

?>
