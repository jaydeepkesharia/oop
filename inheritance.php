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
 *inherit the variables and functions of parent(TV) class
 * 
 */
class TvWithTimer extends TV 
{ 
	public $timer = true;
}

/**
 * inherit the variables and functions of parent(TV) class
 * 
 */
class PlazmaTv extends TV
{
	public $plazma = true;
}

$tv = new TvWithTimer('xsfsf',4);

echo $tv->model."<br>";

//echo $tv->volume;

$plazma = new plazmaTv('plazma tv',3);

echo $plazma->model;