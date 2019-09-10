<?php 

trait abc {
	
	private function xyz()
	{
		echo "XYZ method from trait abc";
	}
}

class test{
	use abc{
		//abc::xyz as public abcxyz;//we can access xyz method by make it public like this and also can change method name
		abc::xyz as public;//we can access xyz method by make it public like this 
	}
}

$test = new test;

$test->xyz();
//$test->abcxyz();