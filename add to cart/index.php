<!DOCTYPE html>
<html>
<head>
	<title>Bechh De!!!</title>
	<style type="text/css">
		ul.topnav
		{
			margin-right:126px;
			padding: 0;
			list-style-type: none;
			float: right;
				
		}
		ul.topnav li
		{
			float:left;
			display: inline-block;
 			 color: #f2f2f2;
  			text-align: center;
  			padding-left:14px;
  			text-decoration: none;
  			font-size: 17px;
  			cursor: pointer;
		}
		ul.topnav li:hover{background-color:#333}
		#left,#right{
			border-radius: 5px;
    		background-color:#f2f2f2;
    		padding:none;	
    		box-shadow: 10px 10px 10px;

		}
		td{text-align: center;}
		table
		{
			border-radius: 5px;
		}
		img
		{
			height:150px;
			width:150px;	

		}
		
	
	</style>
</head>
<body>
	<div  class="topbar"style="height:55px;width: 100%;background-color:#333;border-radius: 5px ">
		
		<h3  class="bech" style="display: inline-block;color:#f2f2f2;margin-left:46px;font-family:monospace;font-size:19px;font-style:italic;cursor: pointer;"><a href="index.php" style="text-decoration:none;color:#f2f2f2 ">Bechh de!!</a></h3>
		
		<ul class="topnav" id="mytopnav">
		<li class="a" >Mobile</li>
		<li class="a">Camera</li>
		<li class="a">Clothes</li>
		<li class="a">Laptop</li>
		
		<li><input type="text" name="fal"  class="sfield"style="float:right;border-radius:4px;border: 1px solid;box-sizing: border-box; "></li>
		<li><input type="button" name="search" value="search" class="search"style="float:right;border-radius:4px;border:1px solid;box-sizing: border-box;color:black"></li>
		<?php session_start();
		 if(isset($_SESSION['username']))
			echo "<li style ='text-decoration:none;color:#f2f2f2'>".$_SESSION['username']."</li>"."<li style ='text-decoration:none;color:#f2f2f2'><a href='logout.php' id='logout'  style='text-decoration:none;color:#f2f2f2'>Logout</a>";
		else
			echo '<li><a href="admin_login.html" style="text-decoration:none;color:#f2f2f2 ">Login/Signup</a></li>';
		?>

		</ul>
	</div>
	<div style="border: 1px solid;height:878px;width: 18%;margin-top: 10px;float:left;" id="left" class="left" >
	</div>
	<div style="border: 1px solid;height:100%;width:81%;margin-top: 10px;float: left;margin-left: 5px;" id="right" class="right">
	<?php

	

	$conn=mysqli_connect('localhost','root','','wtlevel2');
	if(!$conn)
	{
		die("connection failed:".mysqli_connect_error());
	}
		mysqli_select_db($conn,'wtlevel2');

		$sql="select * from product";
		$result= mysqli_query($conn,$sql);
		while($row=mysqli_fetch_assoc($result))
		{
			echo "<table style='float:left;margin:20px;'class='abc' data-pid='".$row['id']."'>";
			
			echo"<tr><td><img src='uploads/".$row['upload_file' ]."'style='height:150px;width:150px;'></td></tr>";
			echo"<tr><td>".$row['product_name']."</td></tr>";
			echo"<tr><td>".$row['brand_type']."</td></tr>";
			echo"<tr><td>".$row['cost']."</td></tr>";
		
			echo"</table>";
		}
	?>
		
	</div>
	<script src="jquery-3.1.1.js"></script>
	<script>
	$(document).ready(function()
	{
		//navigation//
		$('.a').click(function(){
			var b=$(this).html();
			//alert(b);
			//to dispay in right div//
			$.ajax({
					url:'product.php',
					method:'post',
					data:{'name':b},
					success:function(res)
					{
						
					//alert(res);
					$('#right').html(res);
					
					}
				});
			});

		$('.abc').click(function()
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

			})
		});

		/*$('.a').click(function(){
			var b=$(this).html();
			//alert(b);
			$.ajax({
					url:'sort.php',
					method:'post',
					data:{'name':b},
					success:function(res)
					{
						//alert(res);
					$('#left').html(res);
					
					}
				});
			});*/
		$('.a').click(function(){
			var b=$(this).html();
			//alert(b);
			$.ajax({
					url:'leftbar.php',
					method:'post',
					data:{'name':b},
					success:function(res)
					{
						//alert(res);
					$('#left').html(res);
					
					}
				});
			});
		//search button
		$('.search').click(function(){
			var search=$('.sfield').val();
			alert(search);
			
			$.ajax({
					url:'smartsearch.php',
					method:'post',
					data:{'name':search},
					success:function(res)
					{
						//alert(res);
					$('#right').html(res);
					
					}
				});


				$.ajax({
					url:'heu.php',
					method:'post',
					data:{'name':search},
					success:function(res)
					{
					$('#left').html(res);
					
					}
				});

			});
		$('#logout').click(function(){
			var log=$('#logout').html();
			alert(log);

		});
		


});

	</script>
</body>
</html