<?php
class connect
	{
		public $connection;
		
		function __construct($a)
			{
					$this->connection=new mysqli("localhost","root","","$a");
			}
			
			function check_connection()
				{
					if($this->connection->error)
						{
							die("connection failed".$this->connection->connect->error);
						
						}
						
					else
						{
							echo"connection successfully <br>";
						}
				}
				
				function table()
					{
						$sql="create table student(student_id int auto_increment,student_name varchar(20),student_roll_no int,grade varchar(20),branch varchar(20),hdc_percentage int,city varchar(20),primary key(student_id))";
						
						if($this->connection->query($sql))
							{
								echo"table created";
							}
						
						else
							{
								 die ($this->connection->error);
							}
					}
					
					
					function insert()
						{
							//$sql="insert into student values(1,'amit',48,'A','computer',95,'Dubai')";
							
							//$sql="insert into student values(2,'shukla',50,'A','computer',88,'London')";
							//$sql="insert into student values(3,'baniya',55,'A','computer',50,'california')";
							//$sql="insert into student values(4,'miya bhai',30,'b','IT',70,'mumbai')";
							//$sql="insert into student values(5,'pranit',78,'A','IT',95,'delhi')";
							
							if($this->connection->query($sql))
								{
									echo"value inserted";
								}
							
							else
								{
									die ($this->connection->error);
								}
						}
						/*function update()
						{
							$sql="UPDATE student SET grade='Aplus'Where student.student_id=2";
							
							if($this->connection->query($sql))
								{
									echo"value updated";
								}
							
							else
								{
									die ($this->connection->error);
								}
						}*/
						
						function select()
							{
								$sql="select * from student";
								$result=$this->connection->query($sql)or die($this->connection->error);
								/*while($row=$result->fetch_assoc())
									{
										echo $row['student_name'];
										
									}*/
									
									echo"<table border='1'>";
								while($row=$result->fetch_assoc())
								{
									echo"<tr>";
									echo"<td>".$row['student_id']."</td>";
									echo"<td>".$row['student_name']."</td>";
									echo"<td>".$row['student_roll_no']."</td>";
									echo"<td>".$row['grade']."</td>";
									echo"<td>".$row['city']."</td>";
									echo"</tr>";
								}
								echo"</table>";
							}
	
	
	
	
	}
	$obj=new connect('assignment16');
	$obj->check_connection();
	//$obj->table();
	//$obj->insert();
	//$obj->update();
	$obj->select();
	
	
?>
