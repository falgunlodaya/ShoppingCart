<?php  
$c=$_POST['name'];

	$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$sql="select *from product where product_type='$c'";

		$result= mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<table style='border:2px inset;float:left;margin:20px;' class='prod_abc' data-pid='".$row['id']."'>";
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
<script src="jquery-3.1.1.js"></script>
	<script>
	$(document).ready(function()
	{
		$('.prod_abc').click(function()
			{
				var prod=$(this).data('pid');
				//alert(prod);
				$.ajax({
				url:'description.php',
				method:'post',
				data:{'prodid':prod},
				success:function(res)
				{
					//alert(res);
					$('#right').html(res);
				}
			});
		});
	});
	</script>