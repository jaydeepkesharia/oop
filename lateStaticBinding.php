<?php 


class DB {

	protected static $table = 'baseTable';

	public function select()
	{
		//echo "SELECT * FROM"." ". self::$table."<br>";
		echo "SELECT * FROM"." ". static::$table."<br>";//here we use static key word instead of self ;if we use self key word then it will give ans 'baseTable' every time to avoid this we use static
	}

	public function insert()
	{
		echo "INSERT INTO"." ". static::$table."<br>";
	}
}
class abc extends DB {

	protected static $table = 'abc';
}

class userAccounts extends DB {

	protected static $table = 'user_accounts';
}

$accounts = new userAccounts();

$accounts->select();
$accounts->insert();

$abc = new abc();

$abc->select();
$abc->insert();
