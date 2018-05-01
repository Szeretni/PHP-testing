 <?php

//1.1 
for ($i = 0; $i<10;$i++)
{
    echo "$i<br>";
}

echo "<br>";

//1.2
$i = 1;
for ($j = 0; $j<10;$j++)
{
	if($i == 1)
	{
		for ($k = 0; $k<10;$k++)
		{
			echo "$i ";
			$i++;
		}
	}
	else
	for ($k = 0; $k<11;$k++)
	{
		echo "$i ";
		$i++;
		if ($i == 101)
		{
		break;}
	}
	echo "<br>";
}

echo "<br>";

//1.3
for ($i=0;$i<10;$i++)
{
	for ($j=1;$j<$i+2;$j++)
	{
		echo $i;
	}
	echo "<br>";
}


?> 