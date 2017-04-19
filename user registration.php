<?php
	$firstname=$_POST['fname'];
	$lastname=$_POST['lname'];
	$emailid=$_POST['email'];
	$phoneno=$_POST['phone'];
	$address=$_POST['Address'];
	$password=$_POST['pwd'];
	$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		mysqli_select_db($conn,'wtlevel2');
		echo $sql="insert into user values('','$firstname','$lastname','$emailid','$phoneno','$address','$password')";
		$result=mysqli_query($conn,$sql);

	if ($result>0)
	{
		header('location:index.php' );
	}
	else
	{
		echo "invalid";
	}

?>