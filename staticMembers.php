<?php

class abc {

	public static $data = 'test data';

	public static function xyz()
	{
		echo 'xyz function';
	}
}

echo abc::$data."<br>";

abc::xyz();