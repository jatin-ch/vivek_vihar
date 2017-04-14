<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['room6_delete']))
	{
		$room_delete= $_POST['room6_delete'];
		if(!empty($room_delete))
		{
			$sql2= "DELETE  FROM seating_plan WHERE room='$room_delete'";
			$result2 = $conn->query($sql2);
			echo "Seating-Plan Of ".$room_delete." has been deleted !!.";
			
			 ?><script> window.alert("Seating-Plan has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the Room No. To Delete The Seating Plan.";
		}
	}	
		
 ?>