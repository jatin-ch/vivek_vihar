<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['class1']))
	{
		$class= $_POST['class1'];		
		if(!empty($class))
		{  
			$sql2= "DELETE  FROM exam_timetable WHERE '$class'= class";
			$result2 = $conn->query($sql2);
			echo "Class ".$class." Time-table has been Removed !!.";
			
			
			 ?><script> window.alert("Class Time-table has been Removed !!!") ;</script><?php 
		
		}
		else{
			echo "Please Provide the Class To Delete The Faculty.";
		}
	}	
		
 ?>