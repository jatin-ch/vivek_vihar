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
		  <P style="margin-left:10px;"><b>RBSE Class-X & Class-XII Result of This Year :</b></P>
            <hr>
            
        <div id="table1">
          <?php require"academic_select1.php"; ?>
      
        </div>
            <br>
         <div id="table2">
          <?php require"academic_select2.php"; ?>

        </div>
		 <div id="table3">
          <?php require"academic_select3.php"; ?>
        </div>
		
		</div>
		  
		  <br />
	 </div>
  
  </div>
 </div>
</div>
		
		
<?php include"vivekBottom.php" ?>
	
	
</body>
</html>
