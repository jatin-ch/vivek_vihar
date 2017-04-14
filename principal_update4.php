<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['dept']) && isset($_POST['faculty']) &&isset($_POST['id']))
	{		
	   $dept = $_POST['dept'];
	   $faculty = $_POST['faculty'];
	   $id= $_POST['id'];
	   
	   if(!empty($dept)&&!empty($faculty) &&!empty($id))
	 {
		   	   
		   $sql ="INSERT INTO faculty_dept(id,faculty_name,faculty_dpt) VALUES('$id','$faculty','$dept')";
	       $result= $conn->query($sql);
		 
	
		  echo "Faculty Added Sucssfully !!" ;
		  ?><script> window.alert("Faculty Added Sucssfully  !!") ;</script><?php 
	 }
	 else{ 
	      echo"Faculty Addition Failed !!!";
		  ?><script> window.alert("Faculty Addition Failed !!!") ;</script><?php 
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update The Faculty Department Here...";
	 
      }

?>
