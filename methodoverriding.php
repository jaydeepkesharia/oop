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

	function __construct($m,$v) //This function automatically calls when we made new object
	{
		$this->model = $m;
		$this->volume = $v;
	}
}

/**
 * inherit the variables and functions of parent(TV) class
 * 
 */
class PlazmaTv extends TV
{
	public $model = 'def';//override the model value 

	function __construct()
	{

	}
}

$plazma = new plazmaTv; //we call extended constructor of extended (plazmaTv)class which has no param so no need to give param to this object

echo $plazma->model;