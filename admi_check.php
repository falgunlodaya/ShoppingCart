<?php
	session_start();
	$username=$_POST['uname'];
	$password=$_POST['pwd'];
	$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
			
			$sql="select * from user where firstname='$username'and password='$password'";
			$result=mysqli_query($conn,$sql);
			$rownum=mysqli_num_rows($result);
			if($rownum>0)
			{
				
					while($row=mysqli_fetch_assoc($result)){
					$_SESSION['uid']=$row['id'];
					
					$_SESSION['username']=$username;
				
					}
					$_SESSION['loggedin'] = true;
				header('location:index.php' );
			}
			else
			{
				include('admin_login.html');
			}



?>
