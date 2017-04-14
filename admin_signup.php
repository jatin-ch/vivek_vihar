<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

 if(isset($_POST["name"])&&isset($_POST["username"])&&isset($_POST["password"])&&isset($_POST["mobile"])&&isset($_POST["email"]))
 {
    $name= $_POST["name"];
   $username= $_POST["username"];
   $password= $_POST["password"]; $password= md5($password);
    $mobile= $_POST["mobile"];
	 $email= $_POST["email"];
 
 if(!empty($name) &&!empty($username) && !empty($password) && !empty($mobile) && !empty($email))
 {
    if(strlen($username)>1)
   {
	    $sql2= "SELECT username,password FROM admin WHERE username='$username' AND password='$password'";
		 $result2= $conn->query($sql2);
		 
	 if($result2->num_rows==0)	
    {
	   $sql= "INSERT INTO admin VALUES('$name','$username','$password','$mobile','$email')";
		 $result= $conn->query($sql);
	   echo"Welcome!! ".$name;
	 }
	  else if($result2->num_rows>0){
		 echo"Admin Already Exists.!!!";
	  }
	  
    }
	  
	   else {echo"Name must have at least two chars.";}
 
  } 
  else {echo"Please Fill The Required Info.";}  
 }
 else{
	echo"Welcome New Admin!! Please Signup Here..."; 
 }

 
  ?>