<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

 if(isset($_POST["employee_id"])&&isset($_POST["employee_password"]))
 {
   $employee_id= $_POST["employee_id"];
   $employee_password= $_POST["employee_password"]; $employee_password= md5($employee_password);
 
 if(!empty($employee_id) && !empty($employee_password))
 {
    if(strlen($employee_id)>1)
   {
	    $sql= "SELECT username,password FROM faculty_login WHERE username='$employee_id' AND password='$employee_password'";
		 $result= $conn->query($sql);
		if($result->num_rows==1)
		{
			echo $employee_id;
			 $_SESSION['employee']= $employee_id;
	        header("Location:employee_login.php");
		}
		else if($result->num_rows==0){
			echo"Wrong Username OR Password.";
		}
   }
	   else {echo"Name must have at least two chars.";}
 
  } 
  else {echo"Please Fill The Required Info.";}  
 }
 else{
	echo"Welcome Employee!! Please Login Here..."; 
	//$prob = "Please Fill The Required Info.";
 }

 
  ?>
       <form action="employee_login.php" method="POST">
     <fieldset style="border:1px solid #b3e0ff;width:400px;height:230px;margin-left:350px">
	    <label style="margin-left:80px;margin-top:20px;color:yellow">Username :</label>
        <input type="text" name="employee_id" placeholder="username" style="width:200px;margin-left:80px;padding-left:20px;font-size:20px;" required /><br><br>
        <label style="margin-left:80px;color:yellow">Password :</label>
        <input type="password" name="employee_password" placeholder="password" style="width:200px;margin-left:80px;padding-left:20px;font-size:20px;" required /><br><br>
        <input type="submit" value="Submit" style="width:150px;height:40px;background:#4dc3ff;font-size:30px;margin-left:80px">
		</fieldset></form>