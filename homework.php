<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['date'])&&(isset($_POST['class']) ||isset($_POST['section'])) &&isset($_POST['subject'])&&isset($_POST['assignment'])&& isset($_POST['submit_date']))
	{		
       $date = $_POST['date'];	  
	  $class = $_POST['class'];
	   $section = $_POST['section'];
	   $subject = $_POST['subject'];
	   $assignment = $_POST['assignment'];
	   $submit_date = $_POST['submit_date'];
	   
	   if(!empty($date)&&!empty($class)&&!empty($subject)&&!empty($assignment)&&!empty($submit_date))
	   {
		   $sql = "INSERT INTO holidays_homework(date,class,section,subject,assignment,submit_date) VALUES('$date','$class','$section','$subject','$assignment','$submit_date')";
	     $result= $conn->query($sql); 
	    echo"Holidays-Homework Updated Sucessfully !!.";
	  
	   }
	   else{echo"Please Fill_up The Required Info.";}

	}
	
 else{
	echo"Update The Holidays-Homework Here...";
	 
      }

?>