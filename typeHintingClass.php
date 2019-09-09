<?php 

//type hinting  with class
//
class ABC {

	public function doSomething()
	{
		echo "Doing Something<br>";
	}
}

class XYZ {

	public function doSomethingElse()
	{
		echo "Doing Something Else";
	}
}

function test(ABC $abc) { //type hinting for ABC class // geter function of abc class
	$abc->doSomething();
}

function test2(XYZ $xyz) { //type hinting for XYZ class // geter function of xyz class
	$xyz->doSomethingElse();
}


$abc = new ABC();

$xyz = new XYZ();

test($abc);

test2($xyz);
