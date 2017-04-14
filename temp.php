<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

 if(isset($_POST["old_password"])&&isset($_POST['new_password1']) &&isset($_POST['new_password2']))
 {
   
  $old_password= $_POST["old_password"];
   $new_password1= $_POST["new_password1"];
    $new_password1=md5( $new_password1);
   $new_password2= $_POST["new_password2"]; 
   $new_password2= md5($new_password2);   
 if(!empty($old_password)&&!empty($new_password1)&&!empty($new_password2))
 {
   
   if($new_password1==$new_password2)
   {
		
		$sql= "UPDATE enrollment_table SET password='$new_password2' WHERE 	password='$old_password'";
		 $result= $conn->query($sql);
		 echo"You have Sucessfully Changed Your Password/Pin";
	  
  }
     else {echo"* Password/Pin Should Match";}
  }  
  else {echo"* Please Fill The Required Info.";}  
 
 }
 
  ?>
       <form action="student_changepin.php" method="POST">
	   <fieldset style="width:500px;margin-left:200px;border:5px solid pink">
      <br>
		<label style="margin-left:30px">Old Password :</label> 
		<input type="password" name="old_password" class="form-control" style="width:200px;height:25px;margin-left:20px" required /><br>
		<label style="margin-left:30px">New Password :</label>
		<input type="password" name="new_password1" class="form-control" style="margin-left:20px;height:25px;width:200px"  required /><br>
		<label style="margin-left:30px">Re-enter New Password :</label>
		<input type="password" name="new_password2" class="form-control" style="margin-left:20px;height:25px;width:200px"  required /><br>
		
		       <input type="submit" class="btn btn-success" value="Submit" style="margin-left:109px;margin-bottom:10px;">
			   <button type="reset" class="btn btn-warning" style="width:70px;margin-bottom:10px;">Reset</button>
			   
			   
		
		</fieldset></form>
  