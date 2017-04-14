<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['faculty_id']) && isset($_POST['faculty_name']) && isset($_POST['subject_teach'])&& isset($_POST['class_teach'])&& isset($_POST['section_teach']))
	{		
	   $faculty_id = $_POST['faculty_id'];
	   $faculty_name = $_POST['faculty_name'];
	    $subject_teach = $_POST['subject_teach'];
		 $class_teach = $_POST['class_teach'];
		  $section_teach = $_POST['section_teach'];
	   
	   if(!empty($faculty_id)&&!empty($faculty_name)&&!empty($subject_teach)&&!empty($class_teach))
	 {
		   $sql ="INSERT INTO subject_faculty(id,faculty_name,subject_teach,class_teach,section_teach) VALUES('$faculty_id','$faculty_name','$subject_teach','$class_teach','$section_teach')";
	       $result= $conn->query($sql);
		 
	
		  echo"Subject Faculty Added Sucssfully  !!";
		   ?><script> window.alert("Subject-faculty Added Sucssfully  !!") ;</script><?php 
		  
	   }
	 else{ 
	      echo"Faculty Addition Failed !!!";
		  ?><script> window.alert("Faculty Addition Failed  !!!") ;</script><?php 
		  
        }
	}
	
 else{
	echo"Add Subject Faculty here...";
	 
      }

?>
