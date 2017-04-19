<?php

class demo

{	
	

	function add($x,$y)

	{   
		return $x + $y;
		/*$sum=$a+$b;

		echo"Sum=".$sum."<br/>";*/	

	}	

	function sub($x,$y)

	{	
		return $x - $y;
		/* $sub=$x-$y;

		echo"Subtraction=".$sub."<br/>";	
		*/
	}
	
	function multiply($x,$y)

	{   
		return $x * $y;
		/* $mul=$q*$r;

		echo"Multiply=".$mul."<br/>"; */	

	}	

	function divide($x,$y)

	{	
		return $x / $y;
		/* $divide=$t/$u;

		echo"divide=".$divide; */	

	}

}

$obj= new demo();
$f=isset($_REQUEST['f'])?$_REQUEST['f']:null;
$s=isset($_REQUEST['s'])?$_REQUEST['s']:null;
$add=isset($_REQUEST['add'])?$_REQUEST['add']:null;
$sub=isset($_REQUEST['sub'])?$_REQUEST['sub']:null;
$divide=isset($_REQUEST['divide'])?$_REQUEST['divide']:null;
$mul=isset($_REQUEST['mul'])?$_REQUEST['mul']:null;

if($_POST)
	{
		if($add)
		{
			$result= $obj->add($f,$s);
		}
		if($sub)
		{
			$result= $obj->sub($f,$s);
		}
		if($mul)
		{
			$result= $obj->multiply($f,$s);
		}
		if($divide){
			
		$result= $obj->divide($f,$s);}
		
	}


?>
  
<form method="post" style="border:1px solid black;height:200px;width:200px;background-color:cyan; ">

Enter first number<input type="text" name="f" value=<?php echo isset($_REQUEST['f'])?$f:null;?>>

Enter second number<input type="text" name="s" value=<?php echo isset($_REQUEST['s'])?$s:null;?>>

<input type="submit" value="add" name="add"/>
<input type="submit" value="sub"name="sub"/>
<input type="submit" value="multiply"name="mul"/>
<input type="submit" value="divide"name="divide"/>
result
<input type="text" name="result" value=<?php echo isset($result)?$result:null;?>>


</form>