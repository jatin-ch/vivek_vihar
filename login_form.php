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
   $password= $_POST["password"]; $password= md5($password);
 
 if(!empty($username) && !empty($password))
 {
    if(strlen($username)>1)
   {
	    $sql= "SELECT username,password FROM admin WHERE username='$username' AND password='$password'";
		 $result= $conn->query($sql);
		if($result->num_rows==1)
		{
			echo $username;
			 $_SESSION['username']= $username;
	        header("Location:login.php");
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
	echo"Welcome Admin!! Please Login Here..."; 
	//$prob = "Please Fill The Required Info.";
 }

 
  ?>
       <form action="login.php" method="POST">
     <fieldset style="border:1px solid #b3e0ff;width:400px;height:230px;margin-left:350px">
	    <label style="margin-left:80px;">Username :</label>
        <input type="text" name="username" placeholder="username" style="width:200px;margin-left:80px;padding-left:20px;font-size:20px;background:transparent" required /><br><br>
        <label style="margin-left:80px">Password :</label>
        <input type="password" name="password" placeholder="password" style="width:200px;margin-left:80px;padding-left:20px;font-size:20px;background:transparent" required /><br><br>
        <input type="submit" value="Submit" style="width:150px;height:40px;background:#cce6ff;font-size:30px;margin-left:80px">
		</fieldset></form>