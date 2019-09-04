<?php 
//echo "hello";
class TV{

	public $model = 'xyz';
	public $volume = 1;

	function volumeUp()
	{
		$this->volume++;
	}

	function volumeDown()
	{
		$this->volume--;
	}
}

$tv_one = new TV; // object of the class
$tv_two = new TV;


//for tv_one
$tv_one->volumeUp();

echo "For Tv One:-<br>";

echo "Volume:-".$tv_one->volume."<br>";

echo "Model:-".$tv_one->model."<br>";

echo "<br><br><br>";

//for tv_two
$tv_two->volumeUp();

echo "For Tv Two:-<br>";

echo "Volume:-".$tv_two->volume."<br>";

echo "Model:-".$tv_two->model = "string";