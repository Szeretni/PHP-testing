<?php

$br = "<br/>";

$print = <<<EOP
<label>Metahakupalvelu</label>
<hr/>
$br
<form method="get" action="{$_SERVER['PHP_SELF']}">
<input type="text" name="textInput"/>
<select name="select">
<option value="Google">Google</option>
<option value="DuckDuckGo">DuckDuckGo</option>
<option value="Bing">Bing</option>
</select>
<input type="submit" name="submit" value="submit"/>
</form>
EOP;

echo $print;
$br;

if(isset($_GET['submit'])){
	if($_GET['select'] == "Google"){
		header("Location: https://www.google.fi/search?q=" . urlencode($_GET['textInput']));
	} else if($_GET['select'] == "DuckDuckGo"){
		header("Location: https://duckduckgo.com/?q=" . urlencode($_GET['textInput']));
	} else if($_GET['select'] == "Bing"){
		header("Location: https://www.bing.com/search?q=" . urlencode($_GET['textInput']));
	}
}

?>