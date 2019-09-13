<?php 

//Method chaining
class ABC {

	public function fun1()
	{
		echo "fun1 of ABC class<br>";
		return $this; //to make fun1() function an object we have to return the $this value else fatal error will accoure
	}

	public function fun2()
	{
		echo "fun2 of ABC class<br>";
		return $this;
	}

	public function fun3()
	{
		echo "fun3 of ABC class<br>";
		return $this;
	}
}

$abc = new ABC;

$abc->fun1()->fun2()->fun3();