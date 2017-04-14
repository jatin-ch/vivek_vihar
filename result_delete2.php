<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['enroll_delete']))
	{
		$enroll_delete= $_POST['enroll_delete'];
		if(!empty($enroll_delete))
		{
			$sql2= "DELETE  FROM sgpa_result WHERE enrollment='$enroll_delete'";
			$result2 = $conn->query($sql2);
			echo "Result of ".$enroll_delete." has been deleted !!.";
			
			 ?><script> window.alert("Result has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the enrollment no. To Delete The Notice.";
		}
	}	
		
 ?>