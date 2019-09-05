<?php 

//Cannot instantiate abstract class i.e we can't make any object of abstract class but we can make object of child class of this abstract class
abstract class BaseEmployee { 

	protected $firstname;
	protected $lastname;

	public function getFullName()
	{
		return $this->firstname." ".$this->lastname;
	}

	public abstract function getMonthlySalary(); // if u don't override this method in extended classes then error will accour so u have to override this abstract method in every extended class 

	public function __construct($f,$l)
	{
		$this->firstname = $f;
		$this->lastname = $l;
	}
}

class FullTimeEmployee extends BaseEmployee {

	protected $annaulSalary;

	public function getMonthlySalary()
	{
		return $this->annaulSalary/12;
	}
}

class ContractEmployee extends BaseEmployee {

	protected $hourlyRate;
	protected $totalHours;

	public function getMonthlySalary()
	{
		return $this->hourlyRate * $this->totalHours;
	}
}
$fulltime = new FullTimeEmployee('Fulltime','Employee');
$contract = new ContractEmployee('Contract','Employee');

echo $fulltime->getFullName()."<br>";
echo $contract->getFullName()."<br>";

echo $fulltime->getMonthlySalary()."<br>";
echo $contract->getMonthlySalary();



