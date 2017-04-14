<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['add_user']) &&isset($_POST['add_password']) &&isset($_POST['add_class']) &&isset($_POST['add_school']) &&isset($_POST['add_member']))
	{
		$add_user= $_POST['add_user'];
		$add_password= $_POST['add_password'];
		$add_password= md5($add_password);
		$add_class= $_POST['add_class'];
		$add_school= $_POST['add_school'];
		$add_member= $_POST['add_member'];
		
		if(!empty($add_user) &&!empty($add_password) &&!empty($add_class))
		{
			if($add_member=='Student'){
			$sql1="INSERT INTO enrollment_table(school_name,select_member,username,password,class) VALUES('$add_school','$add_member','$add_user','$add_password','$add_class')";
			$result1= $conn->query($sql1);
			echo "Member ".$add_user." Added Sucessfully !!.";
			?><script> window.alert("Member Added Sucessfully !!") ;</script><?php 
			}
			else if($add_member=='Faculty'){
				$sql1="INSERT INTO faculty_login(school_name,select_member,username,password,dept) VALUES('$add_school','$add_member','$add_user','$add_password','$add_class')";
			$result1= $conn->query($sql1);
			echo "Member ".$add_user." Added Sucessfully !!.";
			?><script> window.alert("Member Added Sucessfully !!") ;</script><?php 
			}
		}
		else{
			echo "Please Provide the Required Info. to Add Member.";
			?><script> window.alert("Member Addition Failed !!") ;</script><?php 
		}
	}
   else	{
	   echo"Add New Member";
   }
		
 ?>