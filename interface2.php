<?php

interface a {//in interface we can't declare any variables we only declare methods but in abstract class we can declare variables also
	public function abc();
}

interface b {
	public function xyz();//in interface u can't declare private or protected functions u can only declare public functions
}

class c implements a,b { // in interface we can implements multiple metheds but we can't extends multiple class(multiple inheritance) in abstract class

	public function abc()
	{
		echo "abc function<br>";
	}

	public function xyz()
	{
		echo "xyz function";
	}
}

$c = new c;

$c->abc();
$c->xyz();