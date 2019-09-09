<?php

//Type Hinting
interface test {
	public function doSomething();//must be declare this method at every extended class
}

class ABC implements test {

	public function doSomething()
	{
		echo "Doing Somthing from ABC Class<br>";
	}
}

class XYZ implements test {

	public function doSomething()
	{
		echo "Doing Somthing from XYZ class<br>";
	}

	public function doSomethingElse()
	{
		echo "Doing Something Else";
	}
}

function test(test $abc) { //type hinting for interface
	$abc->doSomething();
}

$abc = new ABC();

$xyz = new XYZ();

test($abc);
test($xyz);