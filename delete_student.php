<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['enroll']))
	{
		$enroll= $_POST['enroll'];
		if(!empty($enroll))
		{
			$sql1="DELETE FROM admission_table WHERE enrollment='$enroll'";
			$result1= $conn->query($sql1);
			$sql2="DELETE FROM enrollment_table WHERE username='$enroll'";
			$result2= $conn->query($sql2);
			echo "Member ".$enroll." has been deleted !!.";
			?><script> window.alert("Member has been deleted  !!") ;</script><?php 
		}
		else{
			echo "Please Provide the Username. To Delete The Member.";
		}
	}
   else	{
	   echo"Remove Member From School Records";
   }
		
 ?>