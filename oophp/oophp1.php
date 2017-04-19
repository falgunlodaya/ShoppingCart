<?php
class person
	{
		var $name;
		function set_name($new_name)
			{
				$this->name=$new_name;
			}
			function get_name()
				{
					return $this->name;
				}
	
	}
	$obj=new person;
	$obj->set_name('falgun');
	echo $obj->get_name();


?>