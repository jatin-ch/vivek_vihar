<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	  if(isset($_POST['vno1']))
	{
		$vno= $_POST['vno1'];
		if(!empty($vno))
		{   
	       $sql4= "DELETE FROM vacancies WHERE $vno= vno";
			$result4 = $conn->query($sql4); 
			echo "Vacancy ".$vno." has been deleted !!.";
			
			 ?><script> window.alert("Vacancy has been deleted !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the vno. To Delete The Vacancy";
		}
	}	
	
	 
 ?>