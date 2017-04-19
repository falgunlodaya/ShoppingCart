<?php
$product=$_POST['name'];
// $product;
//connection making
$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}

		$sql="select *from product where product_type='$product'";

		$result= mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			/*$arr[]['imagename']=$row['imagename'];
			$arr[]['prodname']=$row['prodname'];
			$arr[]['prodcost']=$row['prodcost'];*/
			$arr[]=array('imagename'=>$row['upload_file'],'prodname'=>$row['product_name'],'prodcost'=>$row['cost']);

		}
		$jsonDataEncoded=json_encode($arr);
		echo $jsonDataEncoded;

?>