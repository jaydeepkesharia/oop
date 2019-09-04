<?php 
//echo "hello";
class TV{

	public $model;
	public $volume;

	function volumeUp()
	{
		$this->volume++;
	}

	function volumeDown()
	{
		$this->volume--;
	}

	function __construct($m,$v)//This function automatically calls when we made new object
	{
		$this->model = $m;
		$this->volume = $v;
	}
}

//$tv = new TV; // object of the class
$tv = new TV('def',2);//when we use constructor function then we pass param with this object

echo "Model:-".$tv->model."<br>";
echo "Volume:-".$tv->volume;

echo "<br><br><br>";

$tv_two =  new TV('abc',8);//for the second tv we changes the values of model and volume 

echo "Model:-".$tv_two->model."<br>";
echo "Volume:-".$tv_two->volume;
