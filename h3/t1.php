<title>Autolaskuri</title>
<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>
<?php

$vw_lkm = isset($_COOKIE['vw_lkm']) ? $_COOKIE['vw_lkm'] : 0;
$opel_lkm = isset($_COOKIE['opel_lkm']) ? $_COOKIE['opel_lkm'] : 0;
$painike = isset($_POST['painike']) ? $_POST['painike'] : '';
 
laske_lkm($vw_lkm, $opel_lkm, $painike);

asetaCOOKIE($vw_lkm, $opel_lkm);

tee_lomake($vw_lkm, $opel_lkm);
nayta_tulokset($vw_lkm, $opel_lkm);
 
function laske_lkm(&$vw_lkm, &$opel_lkm, $nappi) {

   if ($nappi == "VW") {
      $vw_lkm = $vw_lkm + 1;
   }
   else if ($nappi == "Opel") {
      $opel_lkm = $opel_lkm + 1;
   }
// nollaus vain jos nollausta painettu
   else if ($nappi ==  "Nollaa") {
      $vw_lkm = 0;
      $opel_lkm = 0;
   }
}
 
function nayta_tulokset($vw_lkm, $opel_lkm) {
   echo "<pre>\n";
   echo "Volkswagenit ... : $vw_lkm kpl.\n";
   echo "Opelit ......... : $opel_lkm kpl.\n";
   echo "</pre>\n";
}

function asetaCOOKIE($vw_lkm, $opel_lkm) {
    setcookie('vw_lkm', $vw_lkm,time()+86400);
    setcookie('opel_lkm', $opel_lkm,time()+86400);
}

 

function tee_lomake($vw_lkm, $opel_lkm) {
?>
   <form method="post" action="<?php echo $_SERVER{'PHP_SELF'}?>">
 
   <input type="submit" value="VW" name="painike">
   <input type="submit" value="Opel" name="painike">
   <input type="submit" value="Nollaa" name="painike">
   </form>
<?php
}
 
?>