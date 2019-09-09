<?php


function test(array $arr)//type hint with array
{
	echo "<table>";
	foreach ($arr as $k => $v) 
	{
		echo "<tr><td>$k</td><td>$v</td></tr>";
	}
	echo "</table>";	
}

$array = ['ABC'=>'abc','XYZ'=>'xyz'];

test($array);