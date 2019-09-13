<?php 


class ABC
{
	public $value = '$value property of ABC class';
}


class XYZ
{
	public $abc;

	public function __construct()
	{
		$this->abc = new ABC;
	}
}

$xyz = new XYZ;

echo $xyz->abc->value;//here this is not a method chaining $xyz is the super object abc is the sub object and value is the property.