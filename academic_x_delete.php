<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

			
		if(isset($_POST['a2']))
	{
		$a2= $_POST['a2'];
		if(!empty($a2))
		{	
			$sql2= "DELETE  FROM academic_x";
			$result2 = $conn->query($sql2);
			echo "Record  has been deleted !!.";
			
			 ?><script> window.alert("Record has been deleted !!!") ;</script><?php 

		}
	}		
 ?>