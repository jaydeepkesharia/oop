<?php 

//polymorphism

function __autoload($class)
{
	include "classes/$class.php";
}

/*function getlogger($type)
{
	switch($type)
	{
		case 'email' ;

	}

}*/