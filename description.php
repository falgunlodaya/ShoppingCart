<?php
$productid=$_POST['prodid'];

$conn=mysqli_connect('localhost','root','','wtlevel2');
if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$sql="select * from product where id=$productid";
		$result= mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			echo"<center><h1>Details</h1></center>";
			echo "<div style='display:inline-block'>";
			echo"<img src='uploads/".$row['upload_file' ]."'style='height:250px;width:250px;'>";
			echo"</div>";
			echo"<div style='display:inline-block;margin-left:30px;vertical-align:top;'>";
			echo "<h2 style='display:inline-block'>product name:</h2>"."<p class='pname' style='    font-style:oblique;display:inline-block;font-size:22px;'>".$row['product_name']."</p>"."<br>";
			echo "<h2 style='display:inline-block'>Brand:</h2>"."<p style='    font-style:oblique;display:inline-block;font-size:22px;'>".$row['brand_type']."</p>"."<br>";
			echo "<h2 style='display:inline-block'>Cost:</h2>"."<p class='pcost' style='    font-style:oblique;display:inline-block;font-size:22px;'>".$row['cost']."</p>"."<br>";
			echo "<h2 style='display:inline-block'>Discription:</h2>"."<p style='    font-style:oblique;display:inline-block;font-size:22px;'>".$row['product_decp']."</p>";
			echo"</div>";
			echo"<div style='display:inline-block;margin-left:197px;margin-top:75px;vertical-align:top;'>";
			echo "<input type='hidden' id='hpid' value='$productid'>";
			echo"<input type='button' value='Add to cart' name='btn' class='car'>";
			echo"</div>";
	
		}


?>
<html>
	<body>
		<script src="jquery-3.1.1.js"></script>
		<script>
		$(document).ready(function(){
			$('.car').click(function(){
				var pid=$('#hpid').val();
				alert(pid);
				var pname=$('.pname').text();
				alert(pname);
				var pcost=$('.pcost').text();
				alert(pcost);


				$.ajax({
				url:'cart_insert.php',
				method:'post',
				data:{'prodid':pid,'pname':pname,'pcost':pcost},
				success:function(res)
				{
					//alert(res);
					$('body').html(res);
				}
			});

			});
			

		});
			
		</script>
		
	</body>
</html>