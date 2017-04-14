<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['student_name']) && isset($_POST['class'])&& isset($_POST['percentage']))
	{		
	   $student_name = $_POST['student_name'];
	   $class = $_POST['class'];
	   $percentage = $_POST['percentage'];
	   
	   if(!empty($student_name)&&!empty($class) &&!empty($percentage))
	 {
		   $sql ="INSERT INTO 80_above(student_name,class,percentage) VALUES('$student_name','$class','$percentage')";
	       $result= $conn->query($sql);
		 
	
		  echo " Updation Sucssfull !!" ;
		  ?><script> window.alert("Update Sucssfully  !!") ;</script><?php 
	   }
	 else{ 
	      echo" Updation Failed !!!";
		  ?><script> window.alert("Updation Failed !!!") ;</script><?php 
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update Students Securing 80% & Above In Board Exams Here...";
	 
      }

?>
