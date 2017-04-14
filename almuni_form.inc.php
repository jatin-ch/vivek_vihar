<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	

 if(isset($_POST["firstname"])&& isset($_POST["lastname"]) && isset($_POST["organization"]) && isset($_POST["profession"])
	 && isset($_POST["yols"])&& isset($_POST["lac"])&& isset($_POST["gender"])&& isset($_POST["ms"])
       && isset($_POST["dob"])&& isset($_POST["phone"])&& isset($_POST["mobile"])&& isset($_POST["email"]) 
	   && isset($_POST["address"]) && isset($_POST["yourself"]))
 {
	$firstname= $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$organization = $_POST["organization"];
	$profession = $_POST["profession"];
	$yols = $_POST["yols"];
	$lac = $_POST["lac"];
	$gender = $_POST["gender"];
	$ms = $_POST["ms"];
	$dob = $_POST["dob"];
	$phone = $_POST["phone"];
	$mobile = $_POST["mobile"];
		  $email = $_POST["email"];
		   $address = $_POST["address"];
		   $yourself = $_POST["yourself"];
		
	
	if(!empty($firstname)&&!empty($lastname)&&!empty($organization)&&!empty($profession)&&!empty($yols)
		&&!empty($lac)&&!empty($gender)&&!empty($ms)&&!empty($dob)&&!empty($phone)
	   &&!empty([$mobile])&&!empty([$email])&&!empty([$address])&&!empty([$yourself]))
	{
		
	$sql="INSERT INTO almuni_table(first_name,last_name,organization,profession,yr_leave,last_attend,gender,marital_status,dob,phone,mobile,email_id,address,yourself) 
	       VALUES('$firstname','$lastname','$organization','$profession','$yols','$lac','$gender','$ms','$dob','$phone','$mobile','$email','$address','$yourself')";	
	
     $result = $conn->query($sql);
	
   if(!empty($firstname))
   { 
        echo"<br>Welcome!!"." ".$firstname."<br>";
		?><script>window.alert('Rigistration Compleated Sucessfully.!!');//open("file1.php");</script><?php
		//header("Location:file1.php");
	
	}
	 else{ 
	      echo"Login failed!!! please try again";
		  //header("Location:next123.php");
		  
        } 
	
   }
 else{
	 echo"<br>* Please Fill-up all the blocks...<br>";
 }
 
 }
 
 


?>
