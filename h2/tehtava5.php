<?php
session_start();

$points = 0;
$br = '<br/>';
$correct = TRUE;
$false = FALSE;

$eka1 = 'Hauki on kala' . $br;
$eka2 = 'Hauki on lintu' . $br;
$eka3 = 'Hauki on kissa' . $br;

$tokaQuestion = 'Mitä kirjainlyhenne PHP tarkoittaa puhuttaessa Web-ohjelmoinnista?</label>' . $br;
$toka1 = 'Peaceful Human Programming';
$toka2 = 'PHP: Hypertext Preprocessor';
$toka3 = 'Possible Humorous Programming';

$koka1 = 'Mega on miljoona' . $br;
$koka2 = 'Giga on miljoona' . $br;
$koka3 = 'Tera on miljoona' . $br;

$neka1 = 'Haluan miljonääriksi' . $br;
$neka2 = 'En halua miljonääriksi' . $br;
$neka3 = 'Olen miljonääri' . $br;

$eka = <<<EOForm
<input type="radio" name="eka" value="{$correct}"/>$eka1
<input type="radio" name="eka" value="{$false}"/>$eka2
<input type="radio" name="eka" value="{$false}"/>$eka3
EOForm;

$toka = <<<EOForm
<label style="font-style:italic;">$tokaQuestion
<select name="toka">
<option value="{$false}">$toka1</option>
<option value="{$correct}">$toka2</option>
<option value="{$false}">$toka3</option>
</select>
EOForm;

$koka = <<<EOForm
<input type="checkbox" name="koka[]" value="{$correct}"/>$koka1
<input type="checkbox" name="koka[]" value="{$false}"/>$koka2
<input type="checkbox" name="koka[]" value="{$false}"/>$koka3
EOForm;

$neka = <<<EOForm
<input type="checkbox" name="neka[]" value="{$correct}"/>$neka1
<input type="checkbox" name="neka[]" value="{$false}"/>$neka2
<input type="checkbox" name="neka[]" value="{$false}"/>$neka3
EOForm;

$vika = <<<EOForm
<p>Game Over</p>
EOForm;

$question = $eka;

if(isset($_GET['painike'])){
    switch($_SESSION['question']){
        case 1:
        if($_GET['eka']){
            $_SESSION['points']++;
        }
        $_SESSION['question']++;
        $question = $toka;
        break;

        case 2:
        if($_GET['toka']){
            $_SESSION['points'] += 2;
        }else{
            $_SESSION['points'] -= 2;
        }
        $_SESSION['question']++;
        $question = $koka;
        break;

        case 3:
        if(isset($_GET['koka'])){
            $correctAnswers = 1;
            foreach($_GET['koka'] as $value){
                if($value){
                    $_SESSION['points'] += 3;
                    $correctAnswers--;
                } else if(!$value){
                    $_SESSION['points'] -= 3;
                }   
            }
            if($correctAnswers == 1){
                $_SESSION['points'] -= 3;
            }
        } else {
            $_SESSION['points'] -= 3;
        }
        $_SESSION['question']++;
        $question = $neka;
        break;

        case 4:
        if(isset($_GET['neka'])){
            $correctAnswers = 1;
            foreach($_GET['neka'] as $value){
                if($value){
                    $_SESSION['points'] += 3;
                    $correctAnswers--;
                } else if(!$value){
                    $_SESSION['points'] -= 3;
                }   
            }
            if($correctAnswers == 1){
                $_SESSION['points'] -= 3;
            }
        } else {
            $_SESSION['points'] -= 3;
        }
        $_SESSION['question']++;
        $question = $vika;
        break;
    } 
}

if($question == $eka){
    $_SESSION['points'] = 0;
    $_SESSION['question'] = 1;
 }

$lomake = <<<EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
$question
<input type="submit" name="painike" value="Vastaa"/>
</form>
EOLomake;

echo "Points: " . $_SESSION['points'];
echo $lomake;