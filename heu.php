<?php
echo $heuristic=$_POST['name'];
$arr=explode(' ',$heuristic);
		print_r($arr);
		$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		for($i=0;$i<count($arr);$i++)
		{
			 echo $sql="select * from keyword where keyword_word = '$arr[$i]'";
			 $result=mysqli_query($conn,$sql);
			$rowscount = mysqli_num_rows($result);
			if($rowscount > 0)
			{
				$count++;
				echo $sql="update keyword set count= $count where keyword_word='$arr[$i]'";
				mysqli_query($conn,$sql);
			}
			else
			{
				echo $sql="insert into keyword values('','$arr[$i]','1')";
				mysqli_query($conn,$sql);
			
			}
		}


?>