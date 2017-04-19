<?php
 $arr=[7, 3, 9, 6, 5, 1, 2, 0, 8, 4];
 print_r($arr);
 $sort=selection($arr);
 print_r($sort);
 function selection($arr)
 {
 	for($i=0;$i<count($arr);$i++)
 	{
 		$index=$i;
 		for($j=$i;$j<count($arr;$j++)

 		{
 			if($arr[$index]>$arr[$j])
 			$index=$j;
 			
 		}
 			$temp=$arr[$i];
 			$arr[$i]=$arr[$index];
 			$arr[$index]=$temp;

 	}
 	return $arr;
 }




?>