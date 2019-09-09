<?php

class Base {

	public function abc()
	{
		echo "ABC method from Base class";
	}
}

trait Test {
	public function abc() //it over rides the base class
	{
		echo "ABC method from test trait";
	}
}

class Child extends Base {
	use Test;

	public function abc() //it over rides the Test trait
	{
		echo "ABC method from child class";
	}
}

//we instantiate child class so if we define abc() method at child then firstly it call from child class 
//and if we do not define abc() in child class then it call from Test trait 
//and if do not define it in trait also then it will call from base class 
$child = new child;

$child->abc();