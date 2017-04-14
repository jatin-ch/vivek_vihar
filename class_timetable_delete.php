<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['class_delete']))
	{
		$class_delete= $_POST['class_delete'];
		if(!empty($class_delete))
		{
			$sql2= "DELETE  FROM class_timetable WHERE class='$class_delete'";
			$result2 = $conn->query($sql2);
			echo "Time-Table of ".$class_delete." has been deleted !!.";
			
			 ?><script> window.alert("class time-table has been deleted !.") ;</script><?php 
			
		}
		else{
			echo "Please Provide the class To Delete The Class Time-Table.";
		}
	}	
		
 ?>