<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['tc_class']) && isset($_POST['tc_enrollment']) && isset($_POST['tc_name']) && isset($_POST['submit']))
	{		
	   $tc_class = $_POST['tc_class'];
	   $tc_enrollment = $_POST['tc_enrollment'];
	  $tc_name = $_POST['tc_name'];
		
	$tmpfile1 =  $_FILES['pimg1']['tmp_name'];
	$size=$_FILES['pimg1']['size'];
	$type=$_FILES['pimg1']['type'];
	$name=$_FILES['pimg1']['name'];
	$temp=0;
	$target_dir="./uploads/";
	$targetfile1=$target_dir.$name;
	   
	   if(!empty($tc_class)&&!empty($tc_enrollment)&&!empty($tc_name))
	 {
         if(file_exists($targetfile1)){		
		$temp=1;
		 echo "file exixst in folder<br>";
		 echo "Please Upload File 1 Again<br>";
		 }
    $k=0;
	if($temp==0)
	{
		if(move_uploaded_file($tmpfile1,$targetfile1))
	       {
		      echo"File 1 Uploded<br>";
	       }
		   else
		   {
			   $k=1;
			   echo"File 1 Not Uploded<br>";
		   }		 
		   
		  if($k!=1) {
		  $sql ="INSERT INTO transfer_certificate(class,enrollment,student_name,download) VALUES('$tc_class','$tc_enrollment','$tc_name','$targetfile1')";
	       $result= $conn->query($sql);
		  
		  echo"T.C Updation Sucssfull!";
		   ?><script> window.alert("T.C Update Sucssfully  !!") ;</script><?php
		  
		  }
		    else{ 
	      echo"T.C Updation Failed !!!";
		  ?><script> window.alert("T.C Updation Failed  !!!") ;</script><?php 
		  
        }
		  
	   }
	
	}
	}
	
 else{
	echo"T.C Update here...";
	 
      }

?>
