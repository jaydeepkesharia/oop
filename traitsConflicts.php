<?php 

trait one {
	public function test()
	{
		echo "TEST method from one trait<br>";
	}
}

trait two {
	public function test()
	{
		echo "TEST method from two trait
		<br>";
	}
}

class abc {
	use one,two{
		two::test insteadof one;
		one::test as OneTest;
	}
}

$abc = new abc;

$abc->test();
$abc->OneTest();

