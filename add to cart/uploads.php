<?php
$prodname=$_REQUEST['name'];
$prodtype=$_REQUEST['product'];
$prodbrand=$_REQUEST['brand'];
$proddesc=$_REQUEST['desc'];
$prodcost=$_REQUEST['cost'];
$imagename=$_FILES['file']['name'];

move_uploaded_file($_FILES['file']['tmp_name'], "uploads/".$_FILES['file']['name']);

$conn=mysqli_connect('localhost','root','','wtlevel2');
if(!$conn)
{
	die("connection failed:".mysqli_connect_error());
}
mysqli_select_db($conn,'wtlevel2');

 echo $sql="insert into product values('','$prodname','$prodtype','$prodbrand','$imagename','$proddesc','$prodcost')";
$result=mysqli_query($conn,$sql);
if ($result>0)
{
	echo "sucess";

}
else
{
	echo "invalid";
}
 while($row=mysqli_fetch_assoc($result))
		{
			echo"<table><tr><td>".$row['product_name']."</td></tr></table>";
		}



?>
