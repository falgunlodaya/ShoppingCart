<?php
$name=$_POST['name'];
echo $name;
$arr=explode(' ',$name);
print_r($arr);
$b=bubble($arr);
print_r($b);
 function bubble($arr)
{
	$size=count($arr);
	for ($i=0;$i<$size;$i++)
	{
		for($j=0;$j<$size-1-$i;$j++)
		{
			if($arr[$j+1]<$arr[$j])
			{
				$temp=$arr[$j+1];
				$arr[$j+1]=$arr[$j];
				$arr[$j]=$temp;

			}
		}
	}
	return $arr;
}

?>