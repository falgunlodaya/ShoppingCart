<?php
class factorial
	{
		public $num;
		function __construct($a)
			{
				$this->num=$a;
				
			}
			function fact()
				{
					$fact=1;
					for($i=$this->num;$i>=1;$i--)
					{
						$fact=$i*$fact;
					}
					return $fact;
				
				}
	}
	$obj= new factorial('5');
	echo $obj->fact();


?>