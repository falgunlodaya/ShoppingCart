<?php
class calculator
{
	public $c,$d,$result;
	
	function __construct($a,$b)
		{
			$this->c=$a;
			$this->d=$b;
		}
		
		function addition()
			{
					return $this->c + $this->d;
			
			}
			
			function substraction()
			{
					return $this->c - $this->d;
			
			}
			
			function multiplication()
			{
					return $this->c * $this->d;
			
			}
			function divide()
			{
					return $this->c / $this->d;
			
			}
			function modulus()
			{
					return $this->c % $this->d;
			
			}
			
}

$obj=new calculator('2','4');

echo "2 + 4 = ".$obj->addition()."<br>";
echo "2 - 4 = ".$obj->substraction()."<br>";
echo "2 * 4 = ".$obj->multiplication()."<br>";
echo "2 / 4 = ".$obj->divide()."<br>";
echo "2 % 4 = ".$obj->modulus()."<br>";




?>