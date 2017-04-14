<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
  if(isset($_POST['option']) &&!empty($_POST['option']))
  {
	$option= $_POST['option'];
   if($option=='Notice Board')
   {
	 ?>
	 <form action="principal.php" method="POST">
		          <br> <i style="margin-left:20px;font-size:20px;font-family:fantasy"> <?php require"principal_update.php";?></i>
	
                      <br><br><i style="color:coral;margin-left:30px;"><b>Sno. :</b></i> <input type="text" name="sno" style="width:50px;height:25px"><br>
                        <i style="color:coral;margin-left:10px;font-size:30px;"> <b>Notice :</b> </i><br><textarea name="notice" rows="3" cols="60" style="margin-left:30px"></textarea>
                           <input type="submit" value="Update" style="background:#8080ff;color:white;font-size:20px;">
                    </form>
					
			
			 <form action="principal.php" method="POST">
		            
					<i style="color:red;margin-left:510px;font-size:20px"><?php require"principal_delete.php";?></i>
	
	                  <i style="color:coral;margin-left:600px"><b>Sno. :</b></i> <input type="text" name="sno1" style="width:50px;height:25px">
					  <input type="submit" value="Delete Notice" style="background:#8080ff;color:white;font-size:20px;"> </form>
					  
					  <br><br><hr style="border:3px solid #80ffaa">
	  <?php
   }
   else if($option=='News Box')
  {
	?>
	 <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"principal_update2.php";?></i>
	
                      <br><br><i style="color:coral;margin-left:30px;"><b>Id. :</b></i> <input type="text" name="id" style="width:50px;height:25px"><br>
                        <i style="color:coral;margin-left:30px;font-size:30px;"> <b>News :</b> </i><br><textarea name="news" rows="3" cols="60" style="margin-left:30px"></textarea>
                           <input type="submit" value="Update" style="background:#8080ff;color:white;font-size:20px;">
                    </form>
      
         
					
					  <form action="principal.php" method="POST">
                       
                         <i style="color:red;margin-left:510px;font-size:20px"><?php require"principal_delete2.php";?></i>
					   
					 <i style="color:coral;margin-left:600px;"><b>Id. :</b></i><input type="text" name="id1" style="width:50px;height:25px">
                           <input type="submit" value="Delete News" style="background:#8080ff;color:white;font-size:20px;">
                    </form>
					
					<br><br><hr style="border:3px solid #80ffaa">
						
	  <?php  
  }
  else if($option=='Vacancy Corner')
  {
	 ?>
	  <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"principal_update3.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:30px;"><b>Vacancy No. :</b></i> <input type="text" name="vno" style="width:50px;height:25px"><br>
                      <i style="color:coral;margin-left:30px;font-size:30px;"> <b>Vacancy :</b> </i><br><textarea name="vac" rows="3" cols="60" style="margin-left:30px"></textarea>
                           <input type="submit" value="Update" style="background:#8080ff;color:white;font-size:20px;">
                    </form>	

                   <form action="principal.php" method="POST">
		            
					<i style="color:red;margin-left:510px;font-size:20px"><?php require"principal_delete3.php";?></i>
	
	                 <i style="color:coral;margin-left:600px;"></b>Vno. :</b></i> <input type="text" name="vno1" style="width:50px;height:25px">
					  <input type="submit" value="Delete Vacancy" style="background:#8080ff;color:white;font-size:20px;">
                    </form>						
                <br><br><hr style="border:3px solid #80ffaa">
	  <?php
  }	
  else if($option=='Faculty Department')
  {
	  ?>
	     <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"principal_update4.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:30px;"><b>Primary(p)/Secondry(s):</b></i><input type="text" name="id" style="width:50px">
					  <i style="color:coral;margin-left:30px;"><b>Department :</b></i> <textarea name="dept" rows="3" cols="60" style="width:50px;height:25px"></textarea><br>
                      <i style="color:coral;margin-left:30px;font-size:30px;"> <b>Faculty :</b> </i><br><textarea name="faculty" rows="3" cols="60" style="margin-left:30px"></textarea>
                           <input type="submit" value="Update" style="background:#8080ff;color:white;font-size:20px;">
                    </form>	

                   <form action="principal.php" method="POST">
		            
					<i style="color:red;margin-left:350px;font-size:20px"><?php require"principal_delete4.php";?></i>
	
	                 <i style="color:coral;margin-left:500px;"></b>Faculty_name:</b></i> <textarea name="faculty1" rows="3" cols="60" style="width:50px;height:25px"></textarea>
					  <input type="submit" value="Delete Faculty" style="background:#8080ff;color:white;font-size:20px;">
                    </form>					
                <br><br><hr style="border:3px solid #80ffaa">
	     <?php
  }
 else if($option=='Student Delete')
 {
	 ?>
	   <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"delete_student.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:20px;"><b>Enrollment:</b></i><input type="text" name="enroll" style="width:50px">
					   <i style="color:coral;margin-left:10px;"><b>Class/Section:</b></i> <input type="text" name="class" style="width:90px">
                           <input type="submit" value="Delete Student" style="background:#8080ff;color:white;font-size:20px;">
                    </form>					
                <br><br><hr style="border:3px solid #80ffaa">
	   <?php
 }
  else if($option=='Events Calendar')
  {
	  ?>
	      <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"events_inc.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:20px;"><b>Event's Name : </b></i><input type="text" name="event" style="width:200px">
					   <i style="color:coral;margin-left:10px;"><b>From (date): </b></i><input type="text" name="from_date" style="width:100px"> 
					   <i style="color:coral;margin-left:10px;"><b>To (date) : </b></i> <input type="text" name="to_date" style="width:100px">
                           <input type="submit" value="Update" style="margin-left:30px;background:#8080ff;color:white;font-size:20px;">
                    </form><br>
					
					<form action="principal.php" method="POST">
					<i style="color:red;margin-left:10px;font-size:20px"><?php require"events_delete.php";?></i>
					<i style="margin-left:100px;color:coral">Class : </i><input type="text" name="a4" style="margin-left:0px;width:50px">
					<input type="submit" value="Delete"  style="background:#8080ff;color:white;font-size:20px;">
					</form>				
                <br><br><hr style="border:3px solid #80ffaa">
		 <?php
  }
 else if($option=='Students Securing 80% & Above')
 {
	 ?>
	    <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"80%_above.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:20px;"><b>Student Name : </b></i><input type="text" name="student_name" style="width:200px">
					   <i style="color:coral;margin-left:10px;"><b>Class/Section :</b></i> 
					   <select name="class" style="width:50px">
					   <option selected>XII</option>
					    <option>X</option></select>
					   <i style="color:coral;margin-left:10px;"><b>Percentage :</b></i> <input type="text" name="percentage" style="width:50px">
                           <input type="submit" value="Update" style="margin-left:30px;background:#8080ff;color:white;font-size:20px;">
                    </form><br>
					
					<form action="principal.php" method="POST">
					<i style="color:red;margin-left:10px;font-size:20px"><?php require"80%_above_delete.php";?></i>
					<i style="margin-left:100px;color:coral">Class : </i><input type="text" name="a3" style="margin-left:0px;width:50px">
					<input type="submit" value="Delete"  style="background:#8080ff;color:white;font-size:20px;">
					</form>
					<br><br><hr style="border:3px solid #80ffaa">
	    <?php
 }	
 else if($option=='Academic Achievement Class-XII')
 {
	 ?>
	   <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"academic_xii.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:20px;"><b>No. of Students Appeared :</b></i><input type="text" name="total_students1" style="width:50px">
					   <i style="color:coral;margin-left:10px;"><b>School Average :</b></i> <input type="text" name="school_avg1" style="width:50px">
					    <i style="color:coral;margin-left:10px;"><b>Highest Percentage :</b></i> <input type="text" name="highest%1" style="width:50px"><br><br>
						 <i style="color:coral;margin-left:10px;"><b>Student With 80% & Above :</b></i> <input type="text" name="above80%1" style="width:50px">
						  <i style="color:coral;margin-left:10px;"><b>Student With 75% & Above :</b></i> <input type="text" name="above75%1" style="width:50px">
						   <i style="color:coral;margin-left:10px;"><b>Student With 70% & Above :</b></i> <input type="text" name="above70%1" style="width:50px"><br><br>
						    <i style="color:coral;margin-left:10px;"><b>Students Securing Distinctions in 3 Subjects :</b></i> <input type="text" name="sub_3d1" style="width:50px">
						    <i style="color:coral;margin-left:10px;"><b>Number of Distinctions :</b></i> <input type="text" name="total_d1" style="width:50px">
							 <i style="color:coral;margin-left:10px;"><b>No. of Ist Division :</b></i> <input type="text" name="1st_d1" style="width:50px"><br><br>
                          <input type="submit" value="Update" style="background:#8080ff;color:white;font-size:20px;margin-left:30px">
                    </form><br>
					
					<form action="principal.php" method="POST">
					<i style="color:red;margin-left:10px;font-size:20px"><?php require"academic_xii_delete.php";?></i>
					<i style="margin-left:100px">Class : </i><input type="text" name="a1" style="margin-left:0px;width:50px">
					<input type="submit" value="Delete Record"  style="background:#8080ff;color:white;font-size:20px;">
					</form>
					<br><br><hr style="border:3px solid #80ffaa">
	  <?php
 }
 else if($option=='Academic Achievement Class-X') 
 {
	 ?>
	   <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"academic_x.php";?></i>
	
	                <br><br><i style="color:blue;margin-left:20px;"><b>No. of Students Appeared :</b></i><input type="text" name="total_students2" style="width:50px">
					   <i style="color:blue;margin-left:10px;"><b>School Average :</b></i> <input type="text" name="school_avg2" style="width:50px">
					    <i style="color:blue;margin-left:10px;"><b>Highest Percentage :</b></i> <input type="text" name="highest%2" style="width:50px"><br><br>
						 <i style="color:blue;margin-left:10px;"><b>Student With 80% & Above :</b></i> <input type="text" name="above80%2" style="width:50px">
						  <i style="color:blue;margin-left:10px;"><b>Student With 75% & Above :</b></i> <input type="text" name="above75%2" style="width:50px">
						   <i style="color:blue;margin-left:10px;"><b>Student With 70% & Above :</b></i> <input type="text" name="above70%2" style="width:50px"><br><br>
						    <i style="color:blue;margin-left:10px;"><b>Students Securing Distinctions in 3 Subjects :</b></i> <input type="text" name="sub_3d2" style="width:50px">
						    <i style="color:blue;margin-left:10px;"><b>Number of Distinctions :</b></i> <input type="text" name="total_d2" style="width:50px">
							 <i style="color:blue;margin-left:10px;"><b>No. of Ist Division :</b></i> <input type="text" name="1st_d2" style="width:50px"><br><br>
                          <input type="submit" value="Update" style="margin-left:30px;background:#8080ff;color:white;font-size:20px;">
                    </form><br>
					
					<form action="principal.php" method="POST">
					<i style="color:red;margin-left:10px;font-size:20px"><?php require"academic_x_delete.php";?></i>
					<i style="margin-left:100px;color:coral">Class : </i><input type="text" name="a2" style="margin-left:0px;width:50px">
					<input type="submit" value="Delete Record"  style="background:#8080ff;color:white;font-size:20px;">
					</form>
					<br><br><hr style="border:3px solid #80ffaa">
	   <?php
 }
 else if($option=='Exam Time-Table')
 {
	 ?>
	  <form action="principal.php" method="POST">
		            
					<i style="margin-left:20px;font-size:20px;font-family:fantasy"><?php require"principal_update5.php";?></i>
	
	                  <br><br><i style="color:coral;margin-left:20px;"><b>Class: </b></i><select name="class" style="width:60px;height:25px">
					  <option selected>Select</option> <option>I</option> <option>II</option> <option>III</option>
					  <option>IV</option> <option>V</option> <option>VI</option> <option>VII</option>
					  <option>VIII</option> <option>IX</option> <option>X</option> <option>XI</option>
					  <option>XII</option> <option>L.K.G</option> <option>U.K.G</option>
					  </select>
					  <i style="color:coral;margin-left:10px;"><b>Subject:</b></i> <input type="text" name="subject" style="width:90px">
                      <i style="color:coral;margin-left:10px;"><b>Day:</b> </i><input type="text" name="day" style="width:90px">
					 <i style="color:coral;margin-left:10px;"><b>Date:</b> </i><input type="text" name="date" style="width:90px">                      
					 <i style="color:coral;margin-left:10px;"><b>Time:</b> </i><input type="text" name="time" style="width:90px">
                           <input type="submit" value="Update" style="background:#8080ff;color:white;font-size:20px;margin-left:30px">
                    </form><br><br>
					 <form action="principal.php" method="POST">
		            
					<i style="color:red;margin-left:350px;font-size:20px"><?php require"principal_delete5.php";?></i>
	
	                 <i style="color:coral;margin-left:10px;"></b>Class :</b></i> <select name="class1" style="width:60px;height:25px">
					  <option selected>Select</option> <option>I</option> <option>II</option> <option>III</option>
					  <option>IV</option> <option>V</option> <option>VI</option> <option>VII</option>
					  <option>VIII</option> <option>IX</option> <option>X</option> <option>XI</option>
					  <option>XII</option> <option>L.K.G</option> <option>U.K.G</option>
					  </select>
					  <input type="submit" value="Delete Time-Table" style="background:#8080ff;color:white;font-size:20px;">
                    </form>					
                <br><br><hr style="border:3px solid #80ffaa">		
	   <?php
 }
 
 }

?>  
