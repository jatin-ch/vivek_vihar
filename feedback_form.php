<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 	
	if(isset($_POST['student_name']) &&isset($_POST['class']) &&isset($_POST['email']) &&isset($_POST['query']))
	{
		$student_name= $_POST['student_name'];
        $class= $_POST['class'];
        $email= $_POST['email'];
       $query= $_POST['query'];		
		if(!empty($student_name) &&!empty($class) &&!empty($query))
		{  
			$sql2= "INSERT INTO feedback(student_name,class,email1,query) VALUES('$student_name','$class','$email','$query')";
			$result2 = $conn->query($sql2);
			?>
			<script> window.alert("Query Send Sucssfully. !!")</script>
		
	<?php	}
		else{
			echo "Please Provide the Required Info. to Send Query.";
			?><script> window.alert("Query failed. !!")</script><?php
		}
	}	
		
 ?>
