<?php
//8b
/*$a=1;
for($i=5;$i>=0;$i--)
{
	for($j=5;$j>$i;$j--)
	{
		echo"&nbsp";

	}
	for($j=0;$j<=$i-1;$j++)
	{
		echo $a;
	}
	$a++;
	echo"<br>";

}*/

//8c
$b=5;
for($i=5;$i=0;$i--)
{
	for($j=5;$j>$i;$j--)
	{
		echo"&nbsp";

	}
	for($j=0;$j<=$i-1;$j++)
	{
		echo $b;
	}
	$b++;
	echo"<br>";

}

//8a
/*$c=chr(65);
for($i=0;$i<=4;$i++)
		{
			for($j=5;$j>$i+1;$j--)
			{
				echo"&nbsp;&nbsp";

			}
			for($x=$i;$x>0;$x--)
			{
				echo chr($x+65);
			}

		
			for($j=0;$j<$i+1;$j++)
			{
				echo chr(65+$j);

			}
			$c++;
			echo"<br>";
		}*/



//pattern
		$s=5;
		for($i=1;$i<=4;$i++)
		{
			for($j=1;$j<=5;$j++)
			/*{
				echo $s;
			}*/
			if($i==1 ||$i==4 || $j==1 || $j==5)
			{
				echo"5";

			}
			else
			{
				echo"0";

			}
			echo"<br>";
		}





?>