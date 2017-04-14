<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	

 if(isset($_POST["admission_no"])&&isset($_POST["class"])&& isset($_POST["student_fname"]) && isset($_POST["student_sname"])&& isset($_POST["year"])
	 && isset($_POST["blood_group"])&& isset($_POST["phone_no"])&& isset($_POST["mobile_no"])&& isset($_POST["contact_no"])
       && isset($_POST["email"])&& isset($_POST["address"])&& isset($_POST["father_name"])&& isset($_POST["occuption1"]) 
	   && isset($_POST["education1"]) && isset($_POST["office_phone1"])&& isset($_POST["mother_name"])&& isset($_POST["occuption2"])
	   && isset($_POST["education2"])&& isset($_POST["office_phone2"]) && isset($_POST["other_info"]))
 {
	$class = $_POST['class'];
	$admission_no= $_POST['admission_no'];
	$student_fname = $_POST['student_fname'];
	$student_sname = $_POST["student_sname"];
	$date = $_POST["date"];
	$month = $_POST["month"];
	$year = $_POST["year"];
	$blood_group = $_POST["blood_group"];
	$phone_no = $_POST["phone_no"];
	$mobile_no = $_POST["mobile_no"];
	$contact_no = $_POST["contact_no"];
	$email = $_POST["email"];
	$address = $_POST["address"];
	
	      $father_name = $_POST["father_name"];
		   $occuption1 = $_POST["occuption1"];
		   $education1 = $_POST["education1"];
		   $office_phone1 = $_POST["office_phone1"];
		    $mother_name = $_POST["mother_name"];
		   $occuption2 = $_POST["occuption2"];
		   $education2 = $_POST["education2"];
		   $office_phone2 = $_POST["office_phone2"];
	
	if(!empty($admission_no)&&!empty($class)&&!empty($student_fname)&&!empty($student_sname)&&!empty($year)&&!empty($blood_group)
		&&!empty($phone_no)&&!empty($mobile_no)&&!empty($contact_no)&&!empty($email)&&!empty($address)
	   &&!empty([$father_name]) && !empty([$education1])&&!empty([$mother_name]) && !empty([$education2]))
	{
		 $sql1="INSERT INTO admission_table(admission_no,class,firstname,surname,date,month,year,bg,phone,mobile,contact,email,address,father_name,father_occuption,father_education,father_office_phone,
			mother_name,mother_occuption,mother_education,mother_office_phone) 
		 VALUES('$admission_no','$class','$student_fname','$student_sname','$date','$month','$year','$blood_group',
	           '$phone_no','$mobile_no','$contact_no','$email','$address','$father_name','$occuption1','$education1','$office_phone1',
			 '$mother_name','$occuption2','$education2','$office_phone2')";	
	
              $result1 = $conn->query($sql1);
	
   if(!empty($admission_no)&&!empty($student_fname))
   { 
        echo"Welcome!"." ".$student_fname." your admission has been conformed";
	
	}
	 else{ 
	      echo"Login failed!!! please try again";
		  //header("Location:next123.php");
		  
        } 
	
   }
 else{
	 echo"Please Fill-up all the blocks...";
 }
 
 }
 


?>
