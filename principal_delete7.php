<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['faculty_id1']))
	{
		$faculty_id= $_POST['faculty_id1'];
		if(!empty($faculty_id))
		{
			$sql2= "DELETE  FROM subject_faculty WHERE '$faculty_id'= id";
			$result2 = $conn->query($sql2);
			echo "Faculty Member ".$faculty_id." has been deleted !!.";
			
			 ?><script> window.alert("Faculty has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the Id. To Delete The Faculty Member.";
		}
	}	
		
 ?>