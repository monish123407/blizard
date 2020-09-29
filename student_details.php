<?php
/**
 * 
 */
class student 
{
	private $name;
	private $emailid;
	private $phone_no;
	private $pswd;
	
	function __construct($name,$emailid,$phone_no,$pswd)
	{
		# code...
		$this->name=$name;
		$this->emailid=$emailid;
		$this->phone_no=$phone_no;
	}
	public funcion display(){
		echo $this->name;
	}
}
?>