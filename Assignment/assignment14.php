<?php
echo $_SERVER['PHP_SELF'];
echo"<br>";
echo $_SERVER['SERVER_NAME'];
echo"<br>";
echo $_SERVER['HTTP_HOST'];
echo"<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo"<br>";
echo $_SERVER['SCRIPT_NAME'];

$server=$_SERVER['PHP_SELF'];
$arr=explode('/',$server);
echo"<br>";
print_r($arr);
echo"<br>";
$a=array_slice($arr,1);
print_r($a);
$count=count($a)-1;
echo"$count<br><br>";
$link='http://localhost/';
for($j=0;$j<=$count;$j++)
	{
		if($j<$count)
		{
		$link.=$a[$j]."/";
		echo"<a href='$link'>".$a[$j]."</a>";
		echo">>";
		}
		else
			echo"<a href='$link'>".$a[$j]."</a>";

	}
	








?>