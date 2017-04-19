<html>
<body>
<?php
 $product=$_POST['name'];
$conn=mysqli_connect('localhost','root','','wtlevel2');
		if(!$conn)
		{
			die("connection failed:".mysqli_connect_error());
		}
		$sql="select distinct brand_type from product where product_type='$product'";

		$result= mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<input type='radio' class='brand' name='brand'value='".$row["brand_type"]."'>".$row['brand_type'];
			echo'<br>';
			
		}
		echo"<br><br>";
		echo"<input type='checkbox'  class=price value='10000 and 20000'>10000-20000<br>";
		echo"<input type='checkbox'  class=price value='21000 and 30000'>21000-30000<br>";
		echo"<input type='checkbox'  class=price value='31000 and 40000'>31000-40000<br>";
		echo"<input type='checkbox'  class=price value='41000 and 50000'>41000-50000<br>";
		echo"<input type='hidden' value='$product' class=xyz>";
		?>
		<script src='jquery-3.1.1.js'>
		<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'> </script>
		<script>
		$(document).ready(function(){
			//brand alert//
			$('.brand').click(function(){
			var brandv=$('.brand:checked').val();
			//alert(brandv);
				 fax();	
			});

			
			$('.price').click(function(){
				
				fax();
			});
			function fax()
			{
				var brandv=$('.brand:checked').val();
				var productv=$('.xyz').val();
				var p=[];
				$('.price:checkbox:checked').each(function(){
					p.push($(this).val());
				});
			
				var pricev=$('.price').val();
					//alert(brandv);
						//alert(productv);
							//alert(p);
				$.ajax(
				{
					url:'sort.php',
					method:'post',
					data:{'brand':brandv,'product':productv,'cost':p},
					success:function(res)
					{
						$('#right').html(res);
					
					
					}

					

				});

			}

		});
</script>
</body>
</html>