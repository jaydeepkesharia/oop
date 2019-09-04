<?php 
//echo "hello";
class TV{

	//privet can only access within this class 
	private $model;

	//protected can be accessed within class as well as in child class
	protected $volume;

	//public can be accessed within class , in child class and from object i.e public can be accessed from everywhere
	

	function volumeUp()
	{
		$this->volume++;
	}

	function volumeDown()
	{
		$this->volume--;
	}

	function getModel()
	{
		return $this->model;//variable model's access level is private so we have to use getmodel getter function 
	}

	function __construct($m,$v) //This function automatically calls when we made new object
	{
		$this->model = $m;
		$this->volume = $v;
	}
}
class plazma extends TV{
	function getVolume()
	{
		return $this->volume;//protected value can access in this(child) class with the help of getter method
	}
}


$tv = new TV('abc',6);//paas the param to call the construct function

echo $tv->getModel()."<br>";//to get privet value of model we have to call getModel getter function 

$plazma = new plazma('xyz',7);

echo $plazma->getVolume();


