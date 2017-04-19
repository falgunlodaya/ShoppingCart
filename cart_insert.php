<?php
session_start();
$productid=$_POST['prodid'];
$pname=$_POST['pname'];
$pcost=$_POST['pcost'];
 $_SESSION['uid'];
  $_SESSION['username'];



if(isset($_SESSION['loggedin']))
{
	$uid=$_SESSION['uid'];
	$conn=mysqli_connect('localhost','root','','wtlevel2');
	if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$sql="insert into cart (userid,prodid,prodname,cost) values ('$uid','$productid','$pname','$pcost')";
		$result=mysqli_query($conn,$sql) or die('error:'.mysqli_error);
		if ($result>0)
	{
		echo"success";
	}
	else
	{
		echo "invalid";
	}

}
else
{
	//echo "hi";
	header('location:admin_login.html');
}




?>