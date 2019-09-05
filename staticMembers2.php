<?php

class House {

 	public static $size;

 	public static function getSize()
 	{
 		return self::$size;
 	}

 	public static function setSize($s)
 	{
 		self::$size = $s;
 	}
}

House::setSize(1200);

echo House::getsize();

