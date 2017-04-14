<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['sno']) && isset($_POST['notice']))
	{		
	   $sno = $_POST['sno'];
	   $notice = $_POST['notice'];
	   
	   if(!empty($sno)&&!empty($notice))
	 {
		   $sql ="INSERT INTO notict_table(sno,notice) VALUES('$sno','$notice')";
	       $result= $conn->query($sql);
		 
	
		  echo"Notice Update Sucssfully  !!";
		   ?><script> window.alert("Notice Update Sucssfully  !!") ;</script><?php 
		  
	   }
	 else{ 
	      echo"Notice Updation Failed !!!";
		  ?><script> window.alert("Notice Update Failed  !!!") ;</script><?php 
		  
        }
	}
	
 else{
	echo"Update The Notice(Limit-8) Board Here...";
	 
      }

?>
