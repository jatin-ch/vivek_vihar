<?php
session_start();
if(isset($_SESSION['employee']))
{
	
}
else
{
	header("Location:employee_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
 <link href="css/principal.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="css/bootstrap.min.css">
   <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">  
   <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
   
</head>
<body>


<div id="head" style="margin-left:30px">
<div id="latest_news">
    <div id="news_update"> <?php echo date('l')." ".date("d-m-y");?></b> | <b><?php date_default_timezone_set("Asia/Kolkata");   echo "  ".date("h:i:sa");?></div>    
    <div id="moving_news"><p style="color:white"><?php require"latest_news.php"?></p></div>
    </div>
    </div>
    
        <div id="TC2" style="width:96%;margin-left:30px;">
         <div id="TC001" style="width:100%;"><p style="margin-left:30px;margin-top:0px;font-size:20px;">
		 <i class="fa fa-arrow-circle-left fa-2x" style="cursor:pointer"></i> Update Database</p> </div>
        <div id="TC002" style="width:100%;height:600px;">
         
	   <div class="container">
<div class="row">
  <div class="col-xs-12">
  <div class="well">
  <button class="btn btn-success" id="btnShowAll">Show All</button>   <button class="btn btn-danger" id="btnHideAll">Hide All</button>
  <button class="btn btn-info" style="width:130px;margin-left:800px;"><a href="employee_logout.php" style="color:black">Logout <?php echo$_SESSION['employee']; ?></a></button>
  </div>
  
	<div id="accordion" class="panel-group">
	
	<div class="panel panel-primary" style="width:1300px;margin-left:-80px">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyone" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Subject-wise Result Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodyone" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:100%;height:150px;margin-top:10px;margin-bottom:10px;border:1px solid  #ebebe0;border-radius:5px">
    <form action="faculty.php" method="POST" class="form-inline">
		          
	        	<br> <h4 style="margin-left:20px;"> <b><?php require"result_update.php";?></b></h4>
                  
				  <br><label style="margin-left:20px;">Enrollment_No.:</label> 
				  <input type="text" name="enroll" class="form-control" style="width:100px;" required />
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
					    <label style="margin-left:20px;">Subject:</label> 
						<input type="text" name="sub" class="form-control" style="width:100px;" required />
						<label style="margin-left:20px;">Marks:</label> 
						<input type="text" name="t1" class="form-control" placeholder="T1/20" style="width:65px;" required /> 
						<input type="text" name="t2" class="form-control" placeholder="T2/20" style="width:65px;" required />
						<input type="text" name="t3" class="form-control" placeholder="T3/20" style="width:65px;" required />
						<label style="margin-left:20px;">Total Marks:</label> 
						<input type="text" name="total" class="form-control" style="width:50px;" required />
                           <input type="submit" value="Update" class="btn btn-primary" style="margin-left:30px;" id="button_update">
       </form>
   </div>
   </div>
	</div>
 </div>
 
 <div class="panel panel-primary"  style="width:1300px;margin-left:-80px">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodytwo" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Class Time-Table Updation Box
	</a>
	</h4>
	</div>
	<div id="panelbodytwo" class="panel-collapse collapse in">
   <div class="panel-body">
    <div style="width:100%;height:250px;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
	  <form  action="faculty.php" method="POST" class="form-inline">
		          <br> <h4 style="margin-left:20px;"><?php require"class_timetable.php";?></h4>
	
               <br><label style="margin-left:20px;">Class:</label>
			   <select name="class" class="form-control" style="width:90px;">
			   <option selected>Select</option>
							   <option>XII</option>
			                 <option>XI</option>
				           <option>X</option>
				        <option>IX</option>
				      <option>VIII</option>
				    <option>VII</option>
			      <option>VI</option>
			    <option>V</option>
			   </select>
		<label style="margin-left:10px;">Section:</label>
			   <select name="section" class="form-control" style="width:100px">
			   <option selected></option>
							   <option>Science-Bio</option>
			                 <option>Science-Maths</option>
				           <option>Commerce</option>
				        <option>Arts</option>
				      <option>Ag.</option>
			   </select>
			    <label style="margin-left:20px;">Subject:</label> 
				<input type="text" name="subject" class="form-control" style="width:90px;" required />
				<label style="margin-left:20px;">Day:</label> 
				<select name="day" class="form-control" style="width:90px;">
				<option selected>Select</option>
							   <option>Monday</option>
			                        <option>Tuesday</option>
				                       <option>Wednesday</option>
						                  <option>Thrusday</option>
						                     <option>Friday</option>
						                       <option>Saturday</option>
						                         <option>Sunday</option>
				                                     </select>
				
				<label style="margin-left:20px;">Room No.:</label> 
				<input type="text" name="room" class="form-control" style="width:60px;">
				<label style="margin-left:20px;">Time:</label> 
				<input type="text" name="time" class="form-control" style="width:100px;" required />
			   <input type="submit" value="Update" class="btn btn-primary" style="margin-left:30px;">
                    </form>
					<hr style="margin:20px;" />
					 <form id="form4" action="faculty.php" method="POST" class="form-inline">
		           <h4 style="margin-left:20px;"><?php require"class_timetable_delete.php";?></h4>
	
               <br><label style="margin-left:20px;">Class/Section:</label>
			   <select name="class_delete" class="form-control" style="width:90px;">
			   <option selected>Select</option>
							   <option>XII</option>
			                 <option>XI</option>
				           <option>X</option>
				        <option>IX</option>
				      <option>VIII</option>
				    <option>VII</option>
			      <option>VI</option>
			    <option>V</option>
			   </select>
			   <input type="submit" value="Delete" class="btn btn-danger" style="margin-left:30px;">
                    </form>
   
</div>
   </div>
	</div>
 </div>
 
    <div class="panel panel-primary"  style="width:1300px;margin-left:-80px">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodythree" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Holidays Homework Updated Box
	</a>
	</h4>
	</div>
	<div id="panelbodythree" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:100%;height:300px;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
        <form  action="faculty.php" method="POST" class="form-inline">
		    <br><h4 style="margin-left:20px;"><?php require"homework.php";?></h4>
	
              <br><label style="margin-left:20px;">Date:</label> 
			  <input type="text" name="date" class="form-control" style="width:100px;" required />
			  <label style="margin-left:20px;">Class/Section:</label>
			   <select name="class" class="form-control" style="width:90px;">
			   <option selected >Select</option>
			   <option>LKG </option>  <option>UKG </option> <option>I</option>  <option>II </option>  <option> III</option>
			   <option>IV </option>  <option> V</option>  <option>VI </option> <option> VII</option> <option>VIII </option>
			   <option>IX </option> <option>X </option> <option>XI </option><option> XII</option>
			   </select>
			   <label style="margin-left:20px;">Section:</label>
			   <select name="section" class="form-control" style="width:100px;">
			   <option selected></option>
			    <option>Maths</option>
			    <option>Bio</option>
				 <option>Ag</option>
				  <option>Arts</option>
				   <option>Commerce</option>
				   </select>
			    <label style="margin-left:20px;">Subject:</label> 
				<input type="text" name="subject" class="form-control" style="width:100px;" required />
				<label style="margin-left:20px;">Assignment:</label>
				<textarea name="assignment" class="form-control" rows="3" cols="50" required></textarea>
				<label style="margin-left:20px;">Submit Date:</label> 
				<input type="text" name="submit_date" class="form-control" style="width:100px;" required />
			   <input type="submit" value="Update" class="btn btn-primary" style="margin-left:30px;">
                    </form>
					
				<hr style="margin:20px;"/>
				
					 <form id="form4" action="faculty.php" method="POST" class="form-inline">
		          <h4 style="margin-left:20px;color:red;"><?php require"homework_delete.php";?></h4>
	
               <br><label style="margin-left:20px;">Class/Section:</label>
			   <select name="homework_delete" class="form-control" style="width:90px;">
			                    <option selected>Select</option>
							   <option>XII</option>
			                 <option>XI</option>
				           <option>X</option>
				        <option>IX</option>
				      <option>VIII</option>
				    <option>VII</option>
			      <option>VI</option>
			    <option>V</option>
		       <option>IV</option>
			   <option>III</option>
			    <option>II</option>
				 <option>I</option>
			   </select>
			   <input type="submit" value="Delete" class="btn btn-danger" style="margin-left:30px;">
                    </form>
   </div>

   </div>
	</div>
 </div>
 
   <div class="panel panel-primary"  style="width:1300px;margin-left:-80px">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyfour" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>80% & Above in Board Exams Updated Box
	</a>
	</h4>
	</div>
	<div id="panelbodyfour" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:100%;height:220px;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
	  <form action="faculty.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"80%_above.php";?></h4>
	
	                  <br><label style="margin-left:20px;">Student Name : </label>
					  <input type="text" name="student_name" class="form-control" style="width:200px;" required />
					  <label style="margin-left:20px;">Class :</label> 
					   <select name="class" class="form-control" style="width:70px;">
					   <option selected>XII</option>
					    <option>X</option></select>
					   <label style="margin-left:20px;">Percentage :</label> 
					   <input type="text" name="percentage" class="form-control" style="width:70px;" required />
                           <input type="submit" value="Update" style="margin-left:30px" class="btn btn-primary">
                    </form>
					<hr style="margin:20px;" />
					<form action="faculty.php" method="POST" class="form-inline">
					<h4 style="color:red;margin-left:20px;"><?php require"80%_above_delete.php";?></h4>
					<label style="margin-left:20px;">Class : </label>
					<input type="text" name="a3" class="form-control" style="width:70px;" required />
					<input type="submit" value="Delete" class="btn btn-danger" style="margin-left:30px;">
					</form>
    </div>

   </div>
	</div>
 </div>
 
   <div class="panel panel-primary"  style="width:1300px;margin-left:-80px">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodyfive" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Achievment Class-XII Updated Box
	</a>
	</h4>
	</div>
	<div id="panelbodyfive" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:100%;height:270px;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
	  <form action="faculty.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"academic_xii.php";?></h4>
	
	                  <br><label style="margin-left:20px;">No. of Students Appeared :</label>
					  <input type="text" name="total_students1" class="form-control" style="width:60px;" required />
					   <label style="margin-left:15px;">School Average :</label> 
					   <input type="text" name="school_avg1" class="form-control" style="width:60px;" required />
					    <label style="margin-left:15px;">Highest Percentage :</label> 
						<input type="text" name="highest%1" class="form-control" style="width:60px;">
						 <label style="margin-left:20px;">Student With 80% & Above :</label> 
						 <input type="text" name="above80%1" class="form-control" style="width:60px;" required />
						  <label style="margin-left:20px;">Student With 75% & Above :</label> 
						  <input type="text" name="above75%1" class="form-control" style="width:60px;" required /><br><br>
						  <label style="margin-left:20px;">Student With 70% & Above :</label>
						  <input type="text" name="above70%1" class="form-control" style="width:60px;" required />
						   <label style="margin-left:20px;">Students Securing Distinctions in 3 Subjects :</label> 
						   <input type="text" name="sub_3d1" class="form-control" style="width:60px;" required />
						   <label style="margin-left:20px;">Number of Distinctions :</label> 
						   <input type="text" name="total_d1" class="form-control" style="width:60px;" required />
							 <label style="margin-left:20px;">No. of Ist Division :</label> 
							 <input type="text" name="1st_d1" class="form-control" style="width:60px;">
                          <input type="submit" value="Update" style="margin-left:30px" class="btn btn-primary">
                    </form>
					<hr style="margin:20px;" />
					
					<form action="faculty.php" method="POST" class="form-inline">
					<h4 style="color:red;margin-left:20px;"><?php require"academic_xii_delete.php";?></h4>
					<label style="margin-left:20px;">Class : </label>
					<input type="text" name="a1" class="form-control" style="width:70px;" required />
					<input type="submit" value="Delete Record" class="btn btn-danger" style="margin-left:30px;">
					</form>
</div>

   </div>
	</div>
 </div>
 
  <div class="panel panel-primary"  style="width:1300px;margin-left:-80px">
	<div class="panel-heading">
	<h4 class="panel-title">
	<a href="#panelbodysix" data-toggle="collapse" data-parent="#accordion">
	<i class="fa fa-angle-down fa-fw"></i>Achievment Class-X Updated Box
	</a>
	</h4>
	</div>
	<div id="panelbodysix" class="panel-collapse collapse">
   <div class="panel-body">
    <div style="width:100%;height:270px;margin-top:10px;margin-bottom:10px;border:1px solid #ebebe0;border-radius:5px">
     <form action="faculty.php" method="POST" class="form-inline">
		            
					<br><h4 style="margin-left:20px;"><?php require"academic_x.php";?></h4>
	
	                <br><label style="margin-left:10px;">No. of Students Appeared :</label>
					<input type="text" name="total_students2" class="form-control" style="width:70px;" required />
					   <label style="margin-left:15px;">School Average :</label> 
					   <input type="text" name="school_avg2" class="form-control" style="width:60px;" required />
					   <label style="margin-left:15px;">Highest Percentage :</label> 
					   <input type="text" name="highest%2" class="form-control" style="width:60px;" required />
						 <label style="margin-left:20px;">Student With 80% & Above :</label> 
						 <input type="text" name="above80%2" class="form-control" style="width:60px;" required />
						 <label style="margin-left:20px;">Student With 75% & Above :</label>
						 <input type="text" name="above75%2" class="form-control" style="width:60px;" required /><br><br>
						  <label style="margin-left:20px;">Student With 70% & Above :</label>
						  <input type="text" name="above70%2" class="form-control" style="width:60px;" required />
						    <label style="margin-left:20px;">Students Securing Distinctions in 3 Subjects :</label> 
							<input type="text" name="sub_3d2" class="form-control" style="width:60px;" required />
						   <label style="margin-left:20px;">Number of Distinctions :</label> 
						   <input type="text" name="total_d2" class="form-control" style="width:60px;" required />
							<label style="margin-left:20px;">No. of Ist Division :</label> 
							<input type="text" name="1st_d2" class="form-control" style="width:60px;" required />
                          <input type="submit" value="Update" style="margin-left:30px" class="btn btn-primary">
                    </form>
					<hr style="margin:20px;" />
					
					<form action="faculty.php" method="POST" class="form-inline">
					<h4 style="color:red;margin-left:20px;"><?php require"academic_x_delete.php";?></h4>
					<label style="margin-left:20px;">Class : </label>
					<input type="text" name="a2" class="form-control" style="width:60px;" required />
					<input type="submit" value="Delete Record" class="btn btn-danger" style="margin-left:30px;">
					</form>
</div>

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
    
 </body>  
  </html> 
  
    