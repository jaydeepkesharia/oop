<?php

//Dependency Injection

class Logger {
	public function log($message)
	{
		echo "Logging message: $message<br>";
	}
}

$logger = new Logger();

$logger->log("This is a message.");

class UserProfile {

	private $logger;

	public function __construct()
	{
		$this->logger = new Logger();
	}

	public function createUser()
	{
		//create user.
		//$logger = new Logger();//user profile class is depends on logger class
		$this->logger->log('user created');
	}

	public function updateUser()
	{
		//update user.
		//$logger = new Logger();
		$this->logger->log('user updated');
	}

	public function deleteUser()
	{
		//delete user.
		//$logger = new Logger();
		$this->logger->log('user deleted');
	}
}

$profile = new UserProfile();

$profile->createUser();
$profile->updateUser();
$profile->deleteUser();