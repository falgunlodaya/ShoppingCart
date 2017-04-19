<?php
$search=$_POST['name'];
echo $search;
//connection making
$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$arr=explode(' ',$search);
	print_r($arr);
	$then=2;$a='';$when='';$and='';
	for($i=0;$i<count($arr);$i++)
		{
			$a.="(product_name like '%$arr[$i]%' or product_type like '%$arr[$i]%' or brand_type like '%$arr[$i]%') or ";

			$and.="(product_name like '%$arr[$i]%' or product_type like '%$arr[$i]%' or brand_type like '%$arr[$i]%' ) and ";

			$when.="WHEN  product_name like '%$arr[$i]%' or product_type like '%$arr[$i]%' or brand_type like '%$arr[$i]%' THEN $then ";
			$then++;

		}

		$a= chop($a,'or ');
		$and=chop($and,'and ');


		 $sql="select * from product where $a ORDER BY(CASE WHEN $and THEN 1 $when ELSE 1000 END) ASC";
		
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
			/*echo"<tr><td style:'text-align:center;'>".$row['product_name']."</td></tr>";
			echo"<tr><td>".$row['product_type']."</td></tr>";
			echo"<tr><td>".$row['brand_type']."</td></tr>";
			echo"<tr><td><img src='uploads/".$row['upload_file' ]."'style='height:150px;width:150px;'></td></tr>";
			echo"<tr><td>".$row['product_decp']."</td></tr>";
			echo"<tr><td>".$row['cost']."</td></tr>";
			echo"</table>";*/
		}




?>