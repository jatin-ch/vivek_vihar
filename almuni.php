<!DOCTYPE html>
<html lang="en">
<head>
<?php include"vivekLink.php"; ?>	
<link rel="stylesheet" href="css/almuni.css">	
</head>
<body>

<?php include"vivekHeader.php"; ?>
		
		
<div class="container">
 <div class="row">
  <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
    
	  <div class="almuni">
	 <div id="Al05"><h3 style="margin-left:30px;font-family:cursive">Almuni Navigation</h3></div><br>
			<a href="almuni_detail.php" style="text-decoration:none;font-size:20px">
			<div id="Al01"><p style="margin-left:30px"><i class="fa fa-hand-o-right fa-fw"></i>Show All Records</p></div>
			</a><br>
           
		   <form action="almuni_detail2.php" method="POST">
		  <label style="margin-left:10px;color:blue">Type your friend's name </label><br>
			<div class="form-inline">
			<input type="text" name="name1" class="form-control" placeholder="First Name Only" style="margin-left:10px;width:150px;" required />
			<input type="submit" value="Search" class="btn btn-info" style="color:blue;width:100px;">
			</div>
			</form><br>
			
			<br><div id="Al06"><p style="margin-left:30px;font-family:cursive"><i style="font-size:25px">New Registration</i></p></div><br>
			<a href="almuni.php" style="text-decoration:none;font-size:20px">
			<div id="Al02"><p style="margin-left:30px"><i class="fa fa-hand-o-right fa-fw"></i>Sign Up Today</p></div></a><br>
			
			<div id="Al07"><p style="margin-left:10px;font-family:cursive"><i style="font-size:24px">Filter By Year And Class</i></p></div><br>
			
		<form action="almuni_detail2.php" method="POST">
			
			<label style="margin-left:20px;color:blue">Select Year</label>
		<select name="yols2" class="form-control" style="margin:0px 10px">
		<option selected>Select</option>
		<option>2006</option>
		<option>2007</option>
		<option>2008</option>
		<option>2009</option>
		<option>2010</option>
		<option>2011</option>
		<option>2012</option>
		<option>2013</option>
		<option>2014</option>
		<option>2015</option>
		<option>2016</option>
		<option>2017</option>
		</select><br>
		<label style="margin-left:20px;color:blue">Select Class</label>
		<select name="lac2" class="form-control" style="margin:0px 10px">
		<option selected>Select</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		</select><br><br>
		
		<input type="submit" value="Search" class="btn btn-info" style="color:blue;width:300px;font-size:20px;margin-left:10px;">
		
			</form><br>
			</div>
  
  </div>
  <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
     
	 <div class="R1"> </div>
        <div class="R2">
		 <br>
		<div style="margin:10px;">
		
		<form action="almuni.php" method="POST">
		
		<h4 style="color:red"><?php include"almuni_form.inc.php"; ?></h4>
        <?php include"almuni_detail3_select.inc.php";?>
	    <?php include"almuni_detail2_select.inc.php";?>
		
		<br>
		<div class="form-inline">
		<label style="margin-left:20px">First Name</label>
		<input type="text" name="firstname" class="form-control" style="width:300px;" required />
		<label style="margin-left:20px">Last Name</label>
		<input type="text" name="lastname" class="form-control" style="width:300px;" required />
		</div> <br /><br />
		<div class="form-inline">
		<label style="margin-left:20px">Organization</label>
		<input type="text" name="organization" class="form-control" style="width:300px;" required />
		<label style="margin-left:20px">Profession</label>
		<input type="text" name="profession" class="form-control" style="width:300px;" required />
		</div> <br /><br />
		<div class="form-inline">
		<label style="margin-left:20px">Year Of Leaving School</label>
		<select name="yols" class="form-control" style="width:100px;">
		<option selected>Select</option>
		<option>2006</option>
		<option>2007</option>
		<option>2008</option>
		<option>2009</option>
		<option>2010</option>
		<option>2011</option>
		<option>2012</option>
		<option>2013</option>
		<option>2014</option>
		<option>2015</option>
		<option>2016</option>
		<option>2017</option>
		</select>
		<label style="margin-left:20px">Last Attended Class</label>
		<select name="lac" class="form-control" style="width:100px;">
		<option selected>Class</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		<option>11</option>
		<option>12</option>
		</select>
		
		<label style="margin-left:20px">Gender</label>
		<select name="gender" class="form-control" style="width:100px;">
		<option selected>Gender</option>
		<option>Male</option>
		<option>Female</option>
		</select>
		</div><br /><br />
		
		<div class="form-inline">
		<label style="margin-left:20px;">Marital Status</label>
		<select name="ms" class="form-control" style="width:100px;">
		<option selected>Select</option>
		<option>Single</option>
		<option>Married</option>
		</select>
		
		<label style="margin-left:20px;">Date Of Birth</label>
		<input type="text" name="dob" class="form-control" style="width:150px;" required />
		<label style="margin-left:20px;">Phone</label>
		<input type="text" name="phone" class="form-control" style="width:300px;" required />
		</div><br><br>
		
		<div class="form-inline">
		<label style="margin-left:20px;">Mobile</label>
		<input type="text" name="mobile" class="form-control" style="width:300px;" required />
		<label style="margin-left:20px;">Email ID</label>
		<input type="email" name="email" class="form-control" style="width:300px;" required />
		</div><br><br>
		
		<div class="form-inline">
		<label style="margin-left:20px;">Full Address</label>
		<textarea name="address" class="form-control" rows="3" cols="50" required /></textarea>
		</div><br><br>
		<div class="form-inline">
		<label style="margin-left:20px;">About Yourself</label>
		<textarea name="yourself" class="form-control" rows="3" cols="50" /></textarea>
	
		<input type="submit" value="Submit" class="btn btn-success" style="margin-left:20px;">
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
