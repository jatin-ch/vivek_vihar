<?php
session_start();
if(isset($_SESSION['username']))
{
	
}
else
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <link href="css/principal.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
   <script type="text/javascript" src="js/database_update.js"></script>  
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body>

<div id="big">
 <div id="head">
<div id="latest_news">
    <div id="news_update"> <?php echo date('l')." ".date("d-m-y");?></b> | <b><?php date_default_timezone_set("Asia/Kolkata");   echo "  ".date("h:i:sa");?></div>    
    <div id="moving_news"><p style="color:white"><?php require"latest_news.php"?></p></div>
    </div>
    </div>
    
    <div id="TC12">
        <div id="TC1">
            <div id="TC05"><p style="margin-left:30px"><i style="font-size:25px;font-family:cursive">Admin Signup</i></p></div>
		    <form action="principal.php" method="POST">
		   
		  <h4 style="margin-left:10px;color:red"> <?php require"admin_signup.php"; ?></h4>
           
		   <label style="margin-left:10px;color:blue">Admin name</label>
			<input type="text" name="name" class="form-control" style="margin-left:10px;width:330px;height:35px" required /><br>
 	       <label style="margin-left:20px;color:blue">Username</label>
		<input type="text" name="username" class="form-control" style="width:330px;height:35px;margin-left:10px"  required /><br>
		<label style="margin-left:20px;color:blue">Password</label>
		<input type="password" name="password" class="form-control" style="width:330px;height:35px;margin-left:10px"  required /><br>
		<label style="margin-left:20px;color:blue">Mobile</label>
		<input type="text" name="mobile" class="form-control" style="width:330px;height:35px;margin-left:10px"  required /><br>
		<label style="margin-left:20px;color:blue">Email</label>
		<input type="email" name="email" class="form-control" style="width:330px;height:35px;margin-left:10px"  required /><br>
		<input type="submit" value="SignUp" class="btn btn-success" style="width:330px;margin-left:10px">
		</form><br />
		<button class="btn btn-info" style="width:330px;margin-left:10px;"><a href="Admin_logout.php" style="color:black">Logout <?php echo$_SESSION['username']; ?></a></button>	
	
			
    </div>
        <div id="TC2">
         <div id="TC001"><p style="margin-left:30px;margin-top:0px;font-size:20px;">
		 <i class="fa fa-arrow-circle-left fa-2x" style="cursor:pointer"></i> Update Database</p> </div>
        <div id="TC002">  
      <div id="principal_notice">
			   <br />
<div class="row">
  <div class="col-xs-12">
   <div class="well" style="width:870px;margin-left:15px;">
  <button class="btn btn-success" id="btnShowAll">Show All</button>   <button class="btn btn-danger" id="btnHideAll">Hide All</button>
  </div>
  	<div id="accordion" class="panel-group">
	
	<div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyone" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Read Feedback Box
	</a>
	</h4>
	</div>
	<div id="panelbodyone" class="panel-collapse collapse in">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid  #ebebe0;border-radius:5px"> 
	<br />
 <form action="principal.php" method="POST" class="form-inline">
					<div class="form-group">
					<label style="margin-left:0px;">Class :</label> <select name="class_query" class="form-control" style="width:90px;height:30px">
					  <option selected>Select</option> <option>XII</option>
					   <option>V</option> <option>VI</option> <option>VII</option>
					  <option>VIII</option> <option>IX</option> <option>X</option> <option>XI</option>
					  </select>
					  </div>
					  <input type="submit" class="btn btn-primary" value="Read Feedback">
					   <br><p style="margin-left:350px"><?php require"read_feedback.php";?></p>
                    </form>
</div>
   </div>
	</div>
 </div>	
 
 <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodytwo" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Notice Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodytwo" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
	 <form action="principal.php" method="POST" class="form-inline">
		          <br> <h4 style="margin-left:20px;"><?php require"principal_update.php";?></h4>
	
                      <br><div class="form-group form-inline">
					  <label style="margin-left:10px;">Sno. :</label> 
					  <input type="text" name="sno" class="form-control" style="width:50px;height:25px" required /><br>
					  </div>
					     <div class="form-group form-inline">
                        <label style="margin-left:30px">Notice : </label>
						<textarea name="notice" class="form-control" rows="3" cols="60" required></textarea>
						</div>
                           <input type="submit" class="btn btn-primary" style="margin-left:30px" value="Update">
                    </form>
					<hr style="margin:10px;color:black" />
					
			       <form action="principal.php" method="POST" class="form-inline">
		            
					<h4 style="color:red;margin-left:10px"><?php require"principal_delete.php";?></h4>
	
	                  <label style="margin-left:10px">Sno. :</label> 
					  <input type="text" name="sno1" class="form-control" style="width:50px;height:25px" required />
					  <input type="submit" value="Delete Notice" class="btn btn-danger" style="margin-left:30px;"> 
					  </form>
   </div>

   </div>
	</div>
 </div>
 
 <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodythree" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>News Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodythree" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	  <form action="principal.php" method="POST" class="form-inline">
		            
					<br> <h4 style="margin-left:20px;"><?php require"principal_update2.php";?></h4>
	
                      <br><div class="form-group">
					  <label style="margin-left:30px;">Id. :</label> 
					  <input type="text" name="id" class="form-control" style="width:50px;height:25px" required />
					  </div>
					  <div class="form-group">
                        <label style="margin-left:30px;">News : </label>
						<textarea name="news" class="form-control" rows="3" cols="60"></textarea>
						</div>
                           <input type="submit" value="Update" class="btn btn-primary" style="margin-left:30px;">
                    </form>
                 <hr style="margin:10px;" />
					  <form action="principal.php" method="POST" class="form-inline">
                       
                         <h4 style="color:red;margin-left:10px;"><?php require"principal_delete2.php";?></h4>
					   
					 <label style="margin-left:30px;">Id. :</label>
					 <input type="text" name="id1" class="form-control" style="width:50px;height:25px" required />
                           <input type="submit"  value="Delete News" class="btn btn-danger" style="margin-left:30px;">
                    </form>
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyfour" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Vacancy Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodyfour" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	  <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"principal_update3.php";?></h4>
	
	                  <br><div class="form-group">
					  <label style="margin-left:30px;">Vacancy No. :</label> 
					  <input type="text" name="vno" class="form-control" style="width:50px;height:25px" required />
					  </div>
					  <div class="form-group">
                      <label style=";margin-left:30px;">Vacancy : </label>
					  <textarea name="vac" class="form-control" rows="3" cols="60" required></textarea>
					  </div>
                       <input type="submit" value="Update" class="btn btn-primary" style="margin-left:30px;">
                    </form>	
                  <hr style="margin-10px;"/>
                   <form action="principal.php" method="POST" class="form-inline">
		            
					<h4 style="color:red;margin-left:30px;"><?php require"principal_delete3.php";?></h4>
	                  <div class="form-group">
	                 <label style="margin-left:30px;">Vno. :</label> 
					 <input type="text" name="vno1" class="form-control" style="width:50px;height:25px" required />
					 </div>
					  <input type="submit" value="Delete Vacancy" class="btn btn-danger" style="margin-left:30px;">
                    </form>
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyfive" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Faculty Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodyfive" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"principal_update4.php";?></h4>
	
	                  <br><div class="form-group">
					  <label style="margin-left:10px;">Primary(p)/Secondry(s):</label>
					  <input type="text" name="id" class="form-control" style="width:50px;height:25px" required />
					  </div>
					  <div class="form-group">
					  <label style="margin-left:10px;">Department :</label> 
					  <textarea name="dept" class="form-control" rows="3" cols="20" required></textarea>
					  </div>
					  <div class="form-group">
                      <label style="margin-left:10px;">Faculty : </label>
					  <textarea name="faculty" class="form-control" rows="3" cols="20" required></textarea>
					  </div>
                       <input type="submit" value="Update" class="btn btn-primary" style="margin-left:10px;">
						   
                    </form>	
                  <hr  style="margin:10px;" />
                   <form action="principal.php" method="POST" class="form-inline">
		            
					<h4 style="color:red;margin-left:20px"><?php require"principal_delete4.php";?></h4>
	
	                 <label style="margin-left:20px;">Faculty_name:</label> 
					 <textarea name="faculty1" class="form-control" rows="3" cols="20" required></textarea>
					  <input type="submit" value="Delete Faculty" class="btn btn-danger" style="margin-left:30px;">
                    </form>
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodysix" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Add Member  Box
	</a>
	</h4>
	</div>
	<div id="panelbodysix" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"add_student.php";?></h4>
	
	                  <br><label style="margin-left:10px;">School:</label> 
					  <select name="add_school" class="form-control" style="width:135px;">
			                     <option selected>VIVEK VIHAR</option> </select>
					  
					  <label style="margin-left:10px;">Member Type:</label> 
					  <select name="add_member" class="form-control" style="width:100px;">
			         <option selected>Student</option> <option>Faculty</option> <option>Guest</option> </select>
					  
					 <label style="margin-left:10px;">Username:</label>
					 <input type="text" name="add_user" class="form-control" style="width:130px;" required />
					   <label style="margin-left:10px;">Password:</label>
					   <input type="password" name="add_password" class="form-control" style="width:130px;" required />
					  <br><br> <label style="margin-left:10px;">Class:</label> 
					  <select name="add_class" class="form-control" style="width:90px;">
			         <option selected>Select</option>
							   <option>XII</option> <option>XI</option>
				           <option>X</option>  <option>IX</option>
				      <option>VIII</option> <option>VII</option>
			      <option>VI</option>  </select>
                       <input type="submit" value="Add Member" class="btn btn-primary" style="margin-left:30px;">
                    </form>
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyseven" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Delete Member  Box
	</a>
	</h4>
	</div>
	<div id="panelbodyseven" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"delete_student.php";?></h4>
	
	                  <br><div class="form-group">
					  <label style="margin-left:20px;">Username:</label>
					  <input type="text" name="enroll" class="form-control" style="width:100px;" required />
					  </div>
					  <div class="form-group">
					   <label style="margin-left:20px;">Class/Dept. :</label> 
					   <input type="text" name="class" class="form-control" style="width:200px;" required />
					   </div>
                           <input type="submit" value="Delete Member" class="btn btn-danger" style="margin-left:30px;">
                    </form>
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyeight" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Event Calendar Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodyeight" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"events_inc.php";?></h4>
	
	                  <br>
					  <label style="margin-left:20px;">Event's Name : </label>
					  <input type="text" name="event" class="form-control" style="width:230px;" required />
					   <label style="margin-left:20px;">From (date): </label>
					   <input type="text" name="from_date" class="form-control" style="width:100px;" required /> 
					   <label style="margin-left:10px;">To (date) : </label> 
					   <input type="text" name="to_date" class="form-control" style="width:100px;" required />
                           <input type="submit" value="Update" style="margin-left:30px" class="btn btn-primary" style="margin-left:300px;">
                    </form>
					<hr style="margin:10px;" />
					
					<form action="principal.php" method="POST" class="form-inline">
					<h4 style="color:red;margin-left:20px;"><?php require"events_delete.php";?></h4>
					<label style="margin-left:20px;">session : </label>
					<input type="text" name="a4" class="form-control" style="width:100px;" required />
					<input type="submit" value="Delete" class="btn btn-danger" style="margin-left:30px;">
					</form>	
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodynine" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Student Final-Result Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodynine" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	   <form action="principal.php" method="POST" class="form-inline">
		          <br> <h4 style="margin-left:20px;"><?php require"result_update2.php";?></h4>
	
               <br><label style="margin-left:20px;">Enrollment_No.:</label> 
			   <input type="text" name="enroll2" class="form-control" style="width:90px;" required />
			    <label style="margin-left:20px;">Class:</label>
						<select name="class" class="form-control" style="width:90px;">
			   <option selected>Select</option>
							   <option>XII</option>
			                 <option>XI</option>
				           <option>X</option>
				        <option>IX</option>
				      <option>VIII</option>
				    <option>VII</option>
			      <option>VI</option>
			   </select>
						 <select name="section" class="form-control" style="width:100px;">
			   <option selected>Section</option>
							   <option>Science</option>
			                 <option>Arts</option>
			   </select>
			   <input type="submit" value="Update" class="btn btn-primary" style="margin-left:30px;">
                    </form>
			<hr style="margin:10px;"/>		
					<form action="principal.php" method="POST" class="form-inline">
		          <br> <h4 style="color:red;"><?php require"result_delete2.php";?></h4>
	
               <br><label style="margin-left:20px;">Enrollment_No.:</label> 
			   <input type="text" name="enroll_delete" class="form-control" style="width:90px;" required />
			   <input type="submit" value="Delete" class="btn btn-danger" style="margin-left:30px;">
                    </form>
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyten" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Exam Time-Table Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodyten" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 	<form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"principal_update5.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Class:</label>
					  <select name="class" class="form-control" style="width:90px;" required />
					  <option selected>Select</option> <option>I</option> <option>II</option> <option>III</option>
					  <option>IV</option> <option>V</option> <option>VI</option> <option>VII</option>
					  <option>VIII</option> <option>IX</option> <option>X</option> <option>XI</option>
					  <option>XII</option> <option>L.K.G</option> <option>U.K.G</option>
					  </select>
					  <label style="margin-left:20px;">Subject:</label><input type="text" name="subject" class="form-control" style="width:90px;" required />
                      <label style="margin-left:20px;">Day:</label><input type="text" name="day" class="form-control" style="width:90px;" required />
					 <label style="margin-left:20px;">Date:</label><input type="text" name="date" class="form-control" style="width:90px;" required />                      
					 <label style="margin-left:20px;">Time:</label><input type="text" name="time" class="form-control" style="width:90px;" required />
                           <input type="submit" value="Update" style="margin-left:10px" class="btn btn-primary">
                    </form>
					<hr style="margin:10px;"/>
					 <form action="principal.php" method="POST"  class="form-inline">
		            
					<h4 style="color:red;margin-left:20px;"><?php require"principal_delete5.php";?></h4>
	
	                 <label style="margin-left:20px;">Class :</label> <select name="class1" class="form-control" style="width:90px;">
					  <option selected>Select</option> <option>I</option> <option>II</option> <option>III</option>
					  <option>IV</option> <option>V</option> <option>VI</option> <option>VII</option>
					  <option>VIII</option> <option>IX</option> <option>X</option> <option>XI</option>
					  <option>XII</option> <option>L.K.G</option> <option>U.K.G</option>
					  </select>
					  <input type="submit" value="Delete Time-Table" class="btn btn-danger" style="margin-left:30px;">
                    </form>	
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyeleven" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Exam Seating-Plan Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodyeleven" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"principal_update6.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Enrollment:</label> 
					  <input type="text" name="enroll6" class="form-control" style="width:120px;" required />
					  <label style="margin-left:20px;">Room No. :</label>
					  <select name="room6" class="form-control" style="width:90px;">
					  <option selected>Select</option> <option>G1</option> <option>G2</option> <option>G3</option>
					  <option>G4</option> <option>G5</option> <option>G6</option> <option>G7</option>
					  <option>G8</option> <option>G9</option> <option>G10</option> <option>G11</option>
					  <option>G12</option> <option>F1</option> <option>F2</option>
					  </select>
					  <label style="margin-left:20px;">Seat:</label>
					  <input type="text" name="seat6" class="form-control" style="width:60px;" required />
                      <input type="submit" value="Update" style="margin-left:30px" class="btn btn-primary">
                    </form>
					<hr style="margin:10px;" />
					 <form action="principal.php" method="POST" class="form-inline">
		            
					<h4 style="color:red;margin-left:20px;"><?php require"principal_delete6.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Room No.:</label>
					  <select name="room6_delete" class="form-control" style="width:90px;">
					  <option selected>Select</option> <option>G1</option> <option>G2</option> <option>G3</option>
					  <option>G4</option> <option>G5</option> <option>G6</option> <option>G7</option>
					  <option>G8</option> <option>G9</option> <option>G10</option> <option>G11</option>
					  <option>G12</option> <option>F1</option> <option>F2</option>
					  </select>
					  <input type="submit" value="Delete Seating-Plan" class="btn btn-danger" style="margin-left:30px;">
                    </form>	
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodytwelve" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Subject Faculty Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodytwelve" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px"> 
	 <form action="principal.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"principal_update7.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Id:</label> 
					  <input type="text" name="faculty_id" class="form-control" style="width:90px;" required />
					  <label style="margin-left:20px;">Faculty Name:</label> 
					  <input type="text" name="faculty_name" class="form-control" style="width:120px;" required />
					  <label style="margin-left:20px;">Class Teach: </label>
					  <select name="class_teach" class="form-control" style="width:90px;">
					  <option selected>Select</option> <option>XII</option> <option>XI</option> <option>X</option>
					  <option>IX</option> <option>VIII</option> <option>VII</option> <option>VI</option>
					  </select>
					  <label style="margin-left:20px;">Section Teach: </label>
					  <select name="section_teach" class="form-control" style="width:100px;">
					  <option selected></option> <option>Science</option> <option>Arts</option> <option>Commerce</option>
					  </select><br><br>
					   <label style="margin-left:20px;">Subject Teach:</label>
					   <input type="text" name="subject_teach" class="form-control" style="width:120px;" required />
                      <input type="submit" value="Update" style="margin-left:30px" class="btn btn-primary">
                    </form>
					<hr style="margin:10px;" />
					 <form action="principal.php" method="POST" class="form-inline">
		            
					<h4 style="color:red;margin-left:20px"><?php require"principal_delete7.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Id:</label> 
					  <input type="text" name="faculty_id1" class="form-control" style="width:90px;" required /> 
					  <input type="submit" value="Delete Subject-Faculty"class="btn btn-danger" style="margin-left:30px;">
                    </form>	
    </div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary" style="width:900px;">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodythirteen" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>T.C Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodythirteen" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:870px;height:auto;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
	 <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"principal_tc_update.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Class: </label>
					  <select name="tc_class" class="form-control" style="width:90px;">
					  <option selected>Select</option> <option>XII</option> <option>XI</option> <option>X</option>
					  <option>IX</option> <option>VIII</option> <option>VII</option> <option>VI</option>
					  </select>
                    <label style="margin-left:20px;">Enrollment:</label>
					<input type="text" name="tc_enrollment" class="form-control" style="width:100px;" required />					 
					<label style="margin-left:20px;">Student Name:</label>
					<input type="text" name="tc_name" class="form-control" style="width:120px;" required /> <br /><br />
					 <label style="margin-left:20px;">Add T.C:</label>
					 <input type="file" placeholder="Upload" name="pimg1" class="form-control" />

				     <input type="submit" name="submit" value="Update" style="margin-left:30px" class="btn btn-primary">
                    </form><br>
					<hr style="margin:10px;" />
					 <form action="principal.php" method="POST" class="form-inline">
		            
					<h4 style="color:red;margin-left:20px;"><?php require"principal_tc_delete.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Enrollment:</label> 
					  <input type="text" name="enrollment_tc" class="form-control" style="width:100px;" required /> 
					  <input type="submit" value="Delete" class="btn btn-danger" style="margin-left:30px;">
                    </form>	
    </div>

   </div>
	</div>
 </div>
 
 
  </div>

 </div>
 </div>

				
			
     <script type="text/javascript">
    $(document).ready(function(){
       $('.collapse').on('show.bs.collapse',function(){
       $(this).parent().find('.fa-angle-down').removeClass('fa-angle-down').addClass('fa-angle-up');
     }).on('hidden.bs.collapse',function(){
       $(this).parent().find('.fa-angle-up').removeClass('fa-angle-up').addClass('fa-angle-down');
     });

       $('#btnShowAll').click(function(){
      $('.panel-collapse.collapse').collapse('show');
           });

      $('#btnHideAll').click(function(){
        $('.panel-collapse.collapse.in').collapse('hide');
       });

     });

</script>			
					
           </div>
        </div> 
     </div>
	</div>
 </div>	
 </body>  
  </html> 
  
    