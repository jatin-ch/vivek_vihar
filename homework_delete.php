<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['homework_delete']))
	{
		$homework_delete= $_POST['homework_delete'];
		if(!empty($homework_delete))
		{
			$sql2= "DELETE  FROM holidays_homework WHERE class='$homework_delete'";
			$result2 = $conn->query($sql2);
			echo "Class  ".$homework_delete." homework has been deleted !!.";
			
			 ?><script> window.alert("Class-Homework has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the class To Delete The Homework.";
		}
	}	
		
 ?>