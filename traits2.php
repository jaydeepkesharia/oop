<?php 
//inheritance working in vertically while traits works horizontally also

/**
 * 
 */
class ABC 
{
	
	public function test()
	{
		echo "Test from class ABC<br>";
	}
}

trait test {

	public function test2()
	{
		echo "test2 method of test trait<br>";
	}
}

trait test2 {

	public function test3()
	{
		echo "test3 method of test2 trait<br>";
	}
}

/**
 * 
 */
class one extends ABC
{
	use test,test2;
}

/**
 * 
 */
class two extends ABC
{
	use test;
}

/**
 * 
 */
class three extends ABC
{

}


/**
 * 
 */
class four extends ABC
{

}

/**
 * 
 */
class five extends ABC
{

}

$one = new one;
$abc = new ABC;

$one->test2();
$one->test3();
$abc->test();