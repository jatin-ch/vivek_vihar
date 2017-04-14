<?php
session_start();
?>
<!doctype html>
<html>
<head>
<link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
 #chevron {
  position: relative;
  text-align: center;
  padding: 12px;
  margin-bottom: 6px;
  height: 300px;
  width: 800px;
}

#chevron:before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 51%;
  background: #b3e6ff;
  -webkit-transform: skew(0deg, 6deg);
  -moz-transform: skew(0deg, 6deg);
  -ms-transform: skew(0deg, 6deg);
  -o-transform: skew(0deg, 6deg);
  transform: skew(0deg, 6deg);
}
#chevron:after {
  content: '';
  position: absolute;
  top: 0;
  right: 0;
  height: 100%;
  width: 50%;
  background: #4dc3ff;
  -webkit-transform: skew(0deg, -6deg);
  -moz-transform: skew(0deg, -6deg);
  -ms-transform: skew(0deg, -6deg);
  -o-transform: skew(0deg, -6deg);
  transform: skew(0deg, -6deg);
}​
 
 

</style>    
    
</head>
 <body style="background:#333">

    <div id="chevron1"></div>
	<div>
	 <p style="margin-left:50px;margin-top:50px;color:green;font-family:cursive;font-size:50px;"> <b>
	 <?php
       function loggedin(){
	   if(isset($_SESSION['employee'])&&!empty($_SESSION['employee']))
            {
             return true;
            }
        else{
	          return false;
             }
            }

      if(loggedin())
         {
	     // echo"welcome!! you are logged in.<a href='student_logout.php'>LogOut</a>";
		  header("Location:faculty.php");
            }
            else{
	             include"employee_login_form.php";
             }

           ?></b></p>
     
    </div>
  
     
</body>

</html>