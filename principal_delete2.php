<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 if(isset($_POST['id1']))
	{
		$id= $_POST['id1'];
		if(!empty($id))
		{
			$sql3= "DELETE FROM latest_news WHERE $id= id";
			$result3 = $conn->query($sql3);
			echo "News ".$id." has been deleted !!.";
			
			 ?><script> window.alert("News has been deleted. !!!") ;</script><?php 
			
		}
		else{
			echo "Please Provide the Sno. To Delete The News.";
		}
	} 
	 
	?>