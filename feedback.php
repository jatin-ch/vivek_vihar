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
		<div style="margin:0px 40px;">
		<form action="feedback.php" method="POST"> 
		  <br><?php require "feedback_form.php"; ?><br>
		 
         <label>Student Name :</label> 
		 <input type="text" name="student_name" class="form-control"  required /><br />
         <label>Class :</label> 
		 <select name="class" class="form-control" >
		 <option selected>Select</option>
		 <option>XII</option> <option>XI</option> <option>X</option> <option>IX</option> <option>VIII</option> <option>VII</option> <option>VI</option>
		 <option>V</option> <option>IV</option> <option>III</option> <option>II</option> <option>I</option> <option>L.K.G</option> <option>U.K.G</option>
		</select><br />
         <label>Email-Id :</label>	
		 <input type="email" name="email" class="form-control" required /><br />
         <label>Query :</label>
		 <textarea  rows="4" cols="50" name="query"  class="form-control"  required></textarea>	<br>
        <input  type="submit" name="submit" value="Send" class="form-control btn btn-success" style="width:150px;">		 
        </form>
		</div>
		<br>
	 </div>
  
  </div>
 </div>
</div>
		
		
<?php include"vivekBottom.php" ?>
	
	
</body>
</html>
