<?php
$arr=[12,3,1,5,8];
print_r($arr);
$sort=insertion($arr);
print_r($sort);
function insertion($arr)
{
	for($i=1;$i<count($arr);$i++)
	{
		$temp=$arr[$i];
		$j=$i-1;
		while($temp<$arr[$j] && $j>=0) 
		{
			$arr[$j+1]=$arr[$j];
			--$j;
		}
		$arr[$j+1]=$temp;
	}
	return $arr;
}


?>