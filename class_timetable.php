<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['class'])&&isset($_POST['section']) &&isset($_POST['subject'])&&isset($_POST['day'])&& isset($_POST['room'])&&isset($_POST['time']))
	{		
	   $class = $_POST['class'];
	    $section = $_POST['section'];
	   $subject = $_POST['subject'];
	   $day = $_POST['day'];
	   $room= $_POST['room'];
	   $time = $_POST['time'];
	   
	   if(!empty($class)&&!empty($subject)&&!empty($day)&&!empty($room)&&!empty($time))
	   {
		   $sql = "INSERT INTO class_timetable(class,section,subject,day,room,time) VALUES('$class','$section','$subject','$day','$room','$time')";
	     $result= $conn->query($sql); 
	    echo"Class Time-Table Updated Sucessfully !!.";
		?><script> window.alert("Class Time-Table has been Updated !!!") ;</script><?php 
	  
	   }
	   else{echo"Please Fill_up The Required Info.";}

	}
	
 else{
	echo"Update The Class Time-Table Here...";
	 
      }

?>