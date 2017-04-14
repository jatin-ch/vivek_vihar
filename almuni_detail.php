<!DOCTYPE html>
<html lang="en">
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
   <title>Vivek Vihar | Jalsu , Jaipur</title>
     <link href="danone5_1 (1).png" type="image" rel="icon" >
	  <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
	<link href="css/file1.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="css/common.css">
	
	<link rel="stylesheet" href="css/marquee.css" />
	<link rel="stylesheet" href="css/example.css" />
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
	
	 <link rel="stylesheet" href="css/bootstrap2.min.css">
	<link href="css/almuni.css" rel="stylesheet" type="text/css">

	
	
</head>
<body>

    <div id="head" class="well">
   
				<b><?php echo date('l')." ".date("d-m-y");?></b> | <b><?php date_default_timezone_set("Asia/Kolkata");   echo "  ".date("h:i:sa");?></b>
				
		<h1 id="name">VIVEK VIDHYA VIHAR SCHOOL,JALSU,JAIPUR</h1>
		<p id="nm">The Education Hut</p>
		
	 <ul class="nav nav-pills">    <!-- <ul class="nav nav-tabs"> -->
	  <li><a href="home.php">HOME</a></li>
    <li class="dropdown">
	<a  class="dropdown-toggle" data-toggle="dropdown">ABOUT US <span class="caret"></span></a>
    <ul class="dropdown-menu">
         <li><a href="school_time.php">School | Office Time</a></li>       
	   <li><a href="about_school.php">About School</a></li>
        <li><a href="principal_message.php">Principal Message</a></li>
      <li><a href="for_parents.php">For Parents</a></li> 
    </ul>
   </li> 
<!--    <li class="dropdown">
	<a onclick="same_page()" class="dropdown-toggle" data-toggle="dropdown">ACHIEVEMENTS <span class="caret"></span></a>
     <ul class="dropdown-menu">
        <li><a href="academic.php">Acedemic</a></li>
        <li><a href="#">Sports</a></li>
    </ul>
    </li> -->
    <li class="dropdown">
	<a class="dropdown-toggle" data-toggle="dropdown">ACADEMIC <span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="transfer-certificate.php">Transfer-Certificate</a></li>
        <li><a href="sub_combo.php">Subject Combination</a></li>
        <li><a href="#">Scholarship</a></li>
        <li><a href="seminar.php">Seminar</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a>FACILITIES <span class="caret"></span></a>
     <ul class="dropdown-menu">
        <li><a href="transport.php">Transport</a></li>
        <li><a href="library.php">Library</a></li>
		<li><a href="lab.php">LAB</a></li>
        <li><a href="special_education.php">Special Education</a></li>
        <li><a href="safety.php">Safety</a></li>
        <li><a href="hygiene.php">Hygiene</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a>CO-CURRICULARS <span class="caret"></span></a>
     <ul class="dropdown-menu">
      <!--  <li><a href="#">School Houses</a></li> -->
     <li><a href="excursions.php">Excursions</a></li>
        <li><a href="celebrations.php">Celebration</a></li>
        <li><a href="social_causes.php">Social Cause</a></li>
        <li><a href="student_club.php">Student clubs</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a onclick="same_page()">INFRASTRUCTURE <span class="caret"></span></a>
       <ul class="dropdown-menu">
        <li><a href="infrastructure.php">Our Infrastructure</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a onclick="same_page()">STUDENT ZONE <span class="caret"></span></a>
     <ul class="dropdown-menu">
        <li><a href="holidays_homework.php">Holidays Homework</a></li>
     <li><a href="student_login.php">Login</a></li>
        <li><a href="online_fee.php">ONLINE FEE</a></li>
		<li><a href="attendance.php">ATTENDANCE</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a onclick="same_page()">INFORMATION DESK <span class="caret"></span></a>
     <ul class="dropdown-menu">
        <li><a href="feedback.php">Feedback</a></li>
     <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="school_uniform.php">School Uniform</a></li>
        <li><a href="fee_remittence.php">Fee | Remittance</a></li>
        <li><a href="faculty_dept.php">Dept. | faculty</a></li>
        <li><a href="mandatory_disclosure.php" style="width:130px">Mandatory Disclosure</a></li>
         <li><a href="faq.php">FAQ</a></li>
        </ul>
    </li>
     </ul>
  
	</div>
		 
	 <div class="simple-marquee-container" style="margin-top:50px;">
				<div class="marquee-sibling" style="color:white;">
				Latest News
				</div>
				<div class="marquee">
					<h5><?php require"latest_news.php"?></h5>
				</div>
			</div>
	
	<div class="common_body">
	
	 <div class="common_left">
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
		<select name="yols2" class="form-control" style="width:300px;margin-left:10px">
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
		<select name="lac2" class="form-control" style="width:300px;margin-left:10px">
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
   
	<div class="common_right" style="margin-top:7px;">
	 <div class="R1"> </div>
        <div class="R2">
		 <br>
		<div style="margin:10px;">
		 
		<?php require "almuni_detail_select.php"; ?>
		<?php include"almuni_detail3_select.inc.php";?>
		<?php include"almuni_detail2_select.inc.php";?>     
               
				<br>	
		
		</div>
		  
		  <br />
		</div>
	               
    </div>	
	
	<br clear="all" />
	</div>
	
	<br /> <br />
	<div id="base">
	<div id="base1">
	<h4>- : Contact Us : -</h4>
	<hr/>
	<p style="margin-left:10px;color:#f2f2f2"><b>VIVEK VIDHYA VIHAR SCHOOL</b><br>
	Khannipura - Jalsu Road, Jaipur-303701(Rajasthan)<br>Phone:9950092708,8447645580<br>E-Mail:- moolchandjatjiit@gmail.com<br>Website:- v3school.com</p>
      <p style="margin-left:10px;color:#f2f2f2">
	  <b>Follow Us On: <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a></b>
	  </p><br>
	</div>
	<div id="base2">
	<h4>- : Quick Links : -</h4>
	<hr />
	<a href="admission.php"><p>ADMISSION</p></a>
	<a href="almuni.php"><p>ALMUNI</p></a>
	<a href="holidays_homework.php"><p>ASSIGNMENT</p></a>
	<a href="vacancies.php"><p>VACANCY</p></a>
	<a href="student_corner.php"><p>STUDENT CREATIVE CORNER</p></a>
	</div>
	<div id="base3">
	<h4>- : Location Map : -</h4>
	<hr />
	<img src="images/staticmap.png"  style="width:100%" />
	</div>
	</div>
		
	 
	
	   <script type="text/javascript" src="js/jquery_welcome.min.js"></script>
		<script type="text/javascript" src="js/marquee.js"></script>
		<script>
			$(function (){

				$('.simple-marquee-container').SimpleMarquee();
				
			});
		</script>

		
</body>
</html>