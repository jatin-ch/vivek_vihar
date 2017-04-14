<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['faculty1']))
	{
		$faculty= $_POST['faculty1'];		
		if(!empty($faculty))
		{  
			$sql2= "DELETE  FROM faculty_dept WHERE '$faculty'= faculty_name";
			$result2 = $conn->query($sql2);
			echo "Faculty ".$faculty." has been Removed !!.";
			
			 ?><script> window.alert("Faculty has been Removed !!!") ;</script><?php 
			
		
		}
		else{
			echo "Please Provide the Faculty_name To Delete The Faculty.";
		}
	}	
		
 ?>