<?php
$lomake = <<<EOLomake
<form method="get" action="{$_SERVER['PHP_SELF']}">
<select name="harrastus[]" size="3" multiple>
<option value="urheilu">Urheilu</option>
<option value="musiikki">Musiikki</option>
<option value="kirkko">Kirkot</option>
</select>
<br/><br/>
<input type="submit" name="painike" value="Tulosta linkit"/>
</form>
EOLomake;

echo $lomake;

if(isset($_GET['painike']) && isset($_GET['harrastus'])){
    foreach ($_GET['harrastus'] as $arvo){
        if ($arvo == 'urheilu'){
            echo '<a href="https://en.wikipedia.org/wiki/Sport" target="_blank">Linkki urheilun ystävälle</a><br/>';
        }
        else if ($arvo == 'musiikki'){
            echo '<a href="https://en.wikipedia.org/wiki/Music" target="_blank">Linkki musiikin ystävälle</a><br/>';
        }
        else if ($arvo == 'kirkko'){
            echo '<a href="https://en.wikipedia.org/wiki/Church" target="_blank">Linkki kirkkojen ystävälle</a><br/>';
        }
    }   
}
?>