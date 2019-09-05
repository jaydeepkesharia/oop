<?php

interface abc { //in interface instead abstract we use interface keyword

	public function test(); // we don't implement this function here we only declare it here 

	public function xyz(); // we don't implement this function here we only declare it here
}

class def implements abc { // insted of extends in interface we use implements keyword 

	//we have to implement declared methods here otherwise error will occure
	public function test(){

		echo "test function <br>";
	}

	public function xyz(){

		echo "xyz function";
	}
}

$def = new def;

$def->test();

$def->xyz();

