<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['sno1']))
	{
		$sno= $_POST['sno1'];
		if(!empty($sno))
		{
			$sql2= "DELETE  FROM notict_table WHERE $sno= sno";
			$result2 = $conn->query($sql2);
			echo "Notice ".$sno." has been deleted !!.";
			
			 ?><script> window.alert("Notice has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the Sno. To Delete The Notice.";
		}
	}	
		
 ?>