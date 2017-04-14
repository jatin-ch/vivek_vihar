<?php
session_start();
if(isset($_SESSION['student_username']))
{
	
}
else
{
	header("Location:student_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <link href="css/student_login2.css" rel="stylesheet" type="text/css">
   <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/common.css">

<script>function myfunction1(){
				 document.getElementById("feed_it").style.display="block";
			 }
	function myfunction11(){
				 document.getElementById("feed_it").style.display="none";	
	}
	
	</script>
   
</head>
<body>

<div id="big">
    
<div id="latest_news">
    <div id="news_update"><p><?php echo date('l')." ".date("d-m-y");?></p></div>   
    <div id="moving_news" style="color:white">WELCOME TO VIVEK VIDHYA VIHAR SCHOOL JALSU(JAIPUR)</div>
    </div>
    </div>
    
    <div id="TC12">
        <div id="TC2">
         <div id="TC001"><p style="margin-left:30px;margin-top:0px;font-size:20px;">
		 <i class="fa fa-arrow-circle-left fa-2x" style="margin-right:10px;cursor:pointer"></i>Student Login 
		  <i style="color:black;font-size:15px;margin-left:960px;"><?php date_default_timezone_set("Asia/Kolkata");   echo "  ".date("h:i:sa");?></i></p></div>
        <div id="TC002">
        
		<div id="webkoisk">  
		<br><p style="margin-left:10px"><?php echo "Welcome ".$_SESSION['student_username'] ;?></p>
		<form action="student_login2.php" method="POST">
		<br><h3 style="margin-left:10px;color:blue;text-decoration:underline"><b>Available Options</b></h3><br>
		  <select name="srs" style="margin-left:50px;height:30px">
		           <option selected>Class</option>
				   <option>XII</option>
				   <option>XI</option> <option>X</option> <option>IX</option> <option>VIII</option> <option>VII</option> <option>VI</option> <option>V</option>
		          </select>
				   <select name="section" style="height:30px">
			   <option selected>Section</option>
							   <option>Science</option>
			                 <option>Arts</option>
			   </select>
				  <br><br>
		 <select name="personal" style="width:130px;height:30px;margin-left:50px">
		             <option selected>Personal Info.</option>
					 <option>Personal Detail</option>
		             </select><br><br>
		<select name="academic" style="margin-left:50px;height:30px;width:130px">
		           <option selected>Academic Info.</option>
				   <option>Pre Registration</option>
				   <option>MY Attendance</option>
				   <option>Subject Registd.</option>
				   <option>Subject Faculty</option>
				   <option>Time Table</option>
		          </select><br><br>
	   <select name="exam" style="margin-left:50px;height:30px;width:130px">
		           <option selected>Exam Info.</option>
				   <option>My Date Sheet</option>
				   <option>My Seating Plan</option>
				   <option>Exam Marks</option>
				   <option>View Sgpa</option>
				   <option>Re-Examination.Form</option>
		          </select><br><br>
     <select name="iqac" style="margin-left:50px;height:30px;width:130px">
		           <option selected>IQAC</option>
				   <option onclick="myfunction1()" style="cursor:pointer">Student Feedback</option>
		          </select><br><br>				  
				  <input type="submit" value="Submit" id="button">
		</form>
		<br><a href="student_changepin.php" style="margin-left:50px;"><i class="fa fa-gear fa-fw"></i>Change Pin</a><br><br>
		<a href="student_logout.php" style="margin-left:50px"><i class="fa fa-unlock fa-fw"></i>Signout <?php echo $_SESSION['student_username'] ;?></a>
		</div>
		<div id="webkoisk2">
		
		<?php require"student_login2_select.php"; ?>
		
		<div id="feed_it"  style="display:none"><form id="form_feed" action="student_login2.php" method="POST"> 
		  <br><i style="margin-left:30px;color:coral;"> <?php require "feedback_form.php"; ?></i><br>
		 
         <label style="margin-left:30px">Student Name :</label> 
		 <input type="text" name="student_name" class="form-control" style="margin-left:100px;width:350px;height:35px;" required /><br>
         <label style="margin-left:30px">Class :</label> <select name="class"  class="form-control" style="margin-left:100px;width:350px;height:35px">
		 <option selected> Select</option>
		 <option>I</option> <option>II</option>
		 <option>III</option> <option>IV</option>
		 <option>V</option> <option>VI</option>
		 </select><br>
         <label style="margin-left:30px">Email-Id :</label>	
		 <input type="email" name="email"  class="form-control" style="margin-left:100px;width:350px;height:35px" required /><br>
         <label style="margin-left:30px">Query :</label>
		 <textarea  rows="4" cols="50" name="query"  class="form-control" style="margin-left:100px;width:350px;height:155px" required /></textarea>	
        <input id="submit" type="submit" name="submit"  class="form-control btn-success" value="Send" style="margin-left:500px;width:100px">		 
        </form><br>
		<button id="hide_it" onclick="myfunction11()" class="btn btn-danger">Hide</button> 
		<p>Before Tring another Option Please<b style="color:red"> Hide</b>This Section.</p></div>  
		</div>
       
        </div>
        </div>
		
     </div>
     
    
   
</body>

</html>