<!DOCTYPE html>
<html lang="en">
<head>
<?php include"vivekLink.php"; ?>		
</head>
<body>

<?php include"vivekHeader.php"; ?>
		
		
<div class="container">
 <div class="row">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  
     <div class="div123">
	 <br />
	 <a href="student_login.php">
	 <div class="div1">
	  <h3><i class="fa fa-hand-o-right fa-fw"></i>Login</h3>
	 </div>
	 </a>
	 <a href="online_fee.php">
	 <div class="div2">
	 <h3><i class="fa fa-hand-o-right fa-fw"></i>Online fee</h3>
	 </div>
	 </a>
	 <a href="transfer-certificate.php">
	 <div class="div3">
	 <h4><i class="fa fa-hand-o-right fa-fw"></i>Transfer-Certificate</h3> 
	 </div>
	 </a>
	 </div>
  
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  
     <div class="R1"> </div>
     <div class="R2 table-bordered">
	     	 <br>
		<div style="margin:10px;">
		<form action="exam_timetable.php" method="POST">
           
		   <br> <label style="margin-left:30px;">Select Option:</label><select name="option" style="width:130px;">
			<option selected>Time-Table</option>
                       <option>Exam-Material</option> </select> 
		   <label style="margin-left:10px;">Select Class:</label><select name="class" style="width:80px;">
                       <option selected>SELECT</option>
                       <option>I</option>
                      <option>II</option>
                      <option>III</option>
                     <option>IV</option>
                      <option>V</option>
                    <option>VI</option>
                   <option>VII</option>
                    <option>VIII</option>
                   <option>IX</option>
				   <option>X</option>
                   <option>LKG</option>
                   <option>UKG</option>
                     </select> 
            <input type="submit" name="submit" value="submit">
			<hr style="margin:10px;" />
		  
		<div id="print_id"> <?php require "exam_timetable_select.php"; ?> 
	   
		</div>
		</form>
		</div>
		  
		  <br />
	 </div>
  
  </div>
 </div>
</div>
		
		
<?php include"vivekBottom.php" ?>
	
	
</body>
</html>
