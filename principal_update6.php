<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['enroll6']) && isset($_POST['room6']) && isset($_POST['seat6']))
	{		
	   $enrollment = $_POST['enroll6'];
	   $room = $_POST['room6'];
	   $seat = $_POST['seat6'];
	   
	   if(!empty($enrollment)&&!empty($room) &&!empty($seat))
	 {
		   $sql ="INSERT INTO seating_plan(enrollment,room,seat) VALUES('$enrollment','$room','$seat')";
	       $result= $conn->query($sql);
		 
	
		  echo"Seating-Plan Update Sucssfully  !!";
		   ?><script> window.alert("Seating-Plan Update Sucssfully  !!") ;</script><?php 
		  
	   }
	 else{ 
	      echo"Seating-Plan Updation Failed !!!";
		  ?><script> window.alert("Seating-Plan Update Failed  !!!") ;</script><?php 
		  
        }
	}
	
 else{
	echo"Update The Seating-Plan Here...";
	 
      }

?>
