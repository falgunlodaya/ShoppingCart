<?php
$productname=$_POST['product'];
$brand=$_POST['brand'];
$cost=$_POST['cost'];
print_r( $cost);
echo $brand;
echo $productname;


	$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
	

		if($brand!=null && $cost==null )
		{
			 echo $sql="select * from product where product_type='$productname'and brand_type='$brand'";

			$result= mysqli_query($conn,$sql);

			while($row=mysqli_fetch_assoc($result))
			{
				echo "<table style='border:2px inset;float:left;margin:20px;'>";
			echo"<tr><td><img src='uploads/".$row['upload_file' ]."'style='height:150px;width:150px;'></td></tr>";
			echo"<tr><td>".$row['product_name']."</td></tr>";
			/*echo"<tr><td>".$row['product_type']."</td></tr>";*/
			echo"<tr><td>".$row['brand_type']."</td></tr>";
			/*echo"<tr><td>".$row['product_decp']."</td></tr>";*/
			echo"<tr><td>".$row['cost']."</td></tr>";
		
			echo"</table>";

			
			}
		}

		else if($brand==null && $cost!=null) 
		{	for($i=0;$i<count($cost);$i++)
			{
			echo $sql="select * from product where product_type='$productname' and cost BETWEEN $cost[$i];";
			$result= mysqli_query($conn,$sql);

			while($row=mysqli_fetch_assoc($result))
			{
				echo "<table style='border:2px inset;float:left;margin:20px;'>";
			echo"<tr><td><img src='uploads/".$row['upload_file' ]."'style='height:150px;width:150px;'></td></tr>";
			echo"<tr><td>".$row['product_name']."</td></tr>";
			/*echo"<tr><td>".$row['product_type']."</td></tr>";*/
			echo"<tr><td>".$row['brand_type']."</td></tr>";
			/*echo"<tr><td>".$row['product_decp']."</td></tr>";*/
			echo"<tr><td>".$row['cost']."</td></tr>";
		
			echo"</table>";

			
			}
			}


		}

		else if ($brand!=null && $cost!=null) 
		{
			for($i=0;$i<count($cost);$i++)
			{
				$sql="select * from product where product_type='$productname' and brand_type='$brand'and cost BETWEEN $cost[$i];";
			$result= mysqli_query($conn,$sql);

			while($row=mysqli_fetch_assoc($result))
			{
				echo "<table style='border:2px inset;float:left;margin:20px;'>";
			echo"<tr><td><img src='uploads/".$row['upload_file' ]."'style='height:150px;width:150px;'></td></tr>";
			echo"<tr><td>".$row['product_name']."</td></tr>";
			/*echo"<tr><td>".$row['product_type']."</td></tr>";*/
			echo"<tr><td>".$row['brand_type']."</td></tr>";
			/*echo"<tr><td>".$row['product_decp']."</td></tr>";*/
			echo"<tr><td>".$row['cost']."</td></tr>";
		
			echo"</table>";

			
			}
			}


		
		}

		else
		{
			echo $sql="select * from product where product_type='$productname'";
			$result= mysqli_query($conn,$sql);

			while($row=mysqli_fetch_assoc($result))
			{
				echo "<table style='border:2px inset;float:left;margin:20px;'>";
			echo"<tr><td><img src='uploads/".$row['upload_file' ]."'style='height:150px;width:150px;'></td></tr>";
			echo"<tr><td>".$row['product_name']."</td></tr>";
			/*echo"<tr><td>".$row['product_type']."</td></tr>";*/
			echo"<tr><td>".$row['brand_type']."</td></tr>";
			/*echo"<tr><td>".$row['product_decp']."</td></tr>";*/
			echo"<tr><td>".$row['cost']."</td></tr>";
		
			echo"</table>";

			
			}
			
		}








?>