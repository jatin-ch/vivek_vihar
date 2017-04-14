<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

 if(isset($_POST["username"])&&isset($_POST["password"]))
 {
   $username= $_POST["username"];
   $password= $_POST["password"];
   $password=md5($password);
 
 if(!empty($username) && !empty($password))
 {
    if(strlen($username)>1)
   {
	    $sql= "SELECT username,password FROM enrollment_table WHERE username='$username' AND password='$password'";
		 $result= $conn->query($sql);
		 
	if($result->num_rows==1)	
    {		 		
		$_SESSION['student_username']= $username;
	    header("Location:student_login2.php");
	
	 }
	 
	 else if($result->num_rows==0){
		 echo"Wrong Username OR Password.";
	 }
	  
  }
     else {echo"Name must have at least two chars.";}
 }  
  else {echo"Please Fill The Required Info.";}  
 
 }
 
  ?>
       <form action="student_login.php" method="POST" style="margin:10px;">
     <h3 style="margin-left:120px;color:blue;text-decoration:underline"><b>LOGIN</b></h3>
		<label>School</label> 
		<select name="school_name" style="width:110px;height:30px;margin-left:47px"><option selected> VIVEK VIHAR</option></select><br><br>
		<label>MemberType</label>
		<select name="select_member" style="margin-left:8px;height:30px;width:110px">
		           <option selected>Student</option>
				   <option>Faculty</option>
				   <option>Guest</option>
		          </select><br><br>
		<label><b>Username </b></label>
		<input type="text" name="username"  style="margin-left:27px;height:25px;width:110px" required /><br><br>
		<label>Password/Pin</label> 
		<input type="password" name="password" style="margin-left:1px;height:25px;width:110px" required /><br><br>
		       <input type="submit" value="Submit" style="margin-left:80px;width:70px;height:25px;cursor:pointer">
			   <button type="reset" style="height:25px;width:70px;cursor:pointer">Reset</button>
		<hr />
		</form>
  