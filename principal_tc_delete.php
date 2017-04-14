<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['enrollment_tc']))
	{
		$enrollment_tc=$_POST['enrollment_tc'];
		if(!empty($enrollment_tc))
		{
			$sql2= "DELETE  FROM transfer_certificate WHERE enrollment='$enrollment_tc'";
			$result2 = $conn->query($sql2);
			echo "T.C of ".$enrollment_tc." has been deleted !!.";
			
			 ?><script> window.alert("T.C has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the Student Name. To Delete The T.C";
		}
	}	
		
 ?>