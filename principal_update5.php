<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['class']) && isset($_POST['subject']) &&isset($_POST['day'])&&isset($_POST['date'])&&isset($_POST['time']))
	{		
	   $class = $_POST['class'];
	   $subject = $_POST['subject'];
	   $day= $_POST['day'];
	   $date= $_POST['date'];
	   $time= $_POST['time'];
	   
	   if(!empty($class) &&!empty($subject) &&!empty($day) &&!empty($date)&&!empty($time) )
	 {
		   	   
		   $sql ="INSERT INTO exam_timetable(class,subject,day,date,time) VALUES('$class','$subject','$day','$date','$time')";
	       $result= $conn->query($sql);
		 
	?> <script> window.alert("Exam Time Table Updated Sucssfully. !!") ;</script><?php  
	 }
	 else{ 
	     
		 ?><script> window.alert("Time Table Updation  Failed !!!") ;</script><?php 
		  
        }
	}
	
 else{
	echo"Update The Examination Time Table Here...";
	 
      }

?>
