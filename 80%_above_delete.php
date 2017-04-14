<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

		if(isset($_POST['a3']))
	{
		$a3= $_POST['a3'];
		if(!empty($a3))
		{	
			$sql2= "DELETE  FROM 80_above";
			$result2 = $conn->query($sql2);
			echo "Data has been deleted !!.";
			
			 ?><script> window.alert("Data has been deleted !!!") ;</script><?php 
			 
		}
	}	
	
 ?>