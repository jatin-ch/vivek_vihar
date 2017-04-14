<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	
		if(isset($_POST['a4']))
	{
		$a4= $_POST['a4'];
		if(!empty($a4))
		{	
			$sql2= "DELETE FROM events";
			$result2 = $conn->query($sql2);
			echo "Event-Calendar has been deleted !!.";
			
			 ?><script> window.alert("Event-Calendar has been deleted !!!") ;</script><?php 
			 
		}
	}
		
 ?>