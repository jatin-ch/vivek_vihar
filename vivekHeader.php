<div class="head">
 <div class="container">
  <div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" align="left">
       <p><b><?php echo date('l')." ".date("d-m-y");?></b> | <b><?php date_default_timezone_set("Asia/Kolkata");   echo "  ".date("h:i:sa");?></b></p>
		
		<div class="visible-lg visible-md">
		 <h1 class="name visible-lg">VIVEK VIDHYA VIHAR SCHOOL,JALSU,JAIPUR</h1>
		  <h2 class="name visible-md">VIVEK VIDHYA VIHAR SCHOOL,JALSU,JAIPUR</h2>
		<p class="nm">The Education Hut</p>
		
		<ul class="nav nav-pills"> 
	  <li><a href="home.php">HOME</a></li>
    <li class="dropdown">
	<a onclick="same_page()" class="dropdown-toggle" data-toggle="dropdown">ABOUT<span class="caret"></span></a>
    <ul class="dropdown-menu">
         <li><a href="school_time.php">School | Office Time</a></li>       
	   <li><a href="about_school.php">About School</a></li>
        <li><a href="principal_message.php">Principal Message</a></li>
      <li><a href="for_parents.php">For Parents</a></li> 
    </ul>
   </li> 
    <li class="dropdown">
	<a onclick="same_page()" class="dropdown-toggle" data-toggle="dropdown">ACADEMIC<span class="caret"></span></a>
    <ul class="dropdown-menu">
        <li><a href="transfer-certificate.php">Transfer-Certificate</a></li>
        <li><a href="sub_combo.php">Subject Combination</a></li>
        <li><a href="#">Scholarship</a></li>
        <li><a href="seminar.php">Seminar</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a onclick="same_page()">FACILITIES<span class="caret"></span></a>
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
	<a  onclick="same_page()">CO-CURRICULARS<span class="caret"></span></a>
     <ul class="dropdown-menu">
     <li><a href="excursions.php">Excursions</a></li>
        <li><a href="celebrations.php">Celebration</a></li>
        <li><a href="social_causes.php">Social Cause</a></li>
        <li><a href="student_club.php">Student clubs</a></li>
        </ul>
    </li> 
   <li class="visible-lg"><a href="infrastructure.php">INFRASTRUCTURE</a></li> 
    <li class="visible-md" title="Infrastructure"><a href="infrastructure.php"><i class="fa fa-object-group fa-fw"></i></a></li> 
    <li class="dropdown">
	<a onclick="same_page()">STUDENT ZONE<span class="caret"></span></a>
     <ul class="dropdown-menu">
        <li><a href="holidays_homework.php">Holidays Homework</a></li>
     <li><a href="student_login.php">Login</a></li>
        <li><a href="online_fee.php">ONLINE FEE</a></li>
		<li><a href="attendance.php">ATTENDANCE</a></li>
        </ul>
    </li> 
    <li class="dropdown">
	<a onclick="same_page()">INFORMATIONS<span class="caret"></span></a>
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
	 
	 <div class="visible-sm visible-xs">
	  <h4 class="name" style="color:white">VIVEK VIDHYA VIHAR SCHOOL,JALSU,JAIPUR</h4>
		<p class="nm"><b>The Education Hut</b></p>
		
	<div class="dropdown" style="margin-top:20px;float:left">
   <button class="btn-warning dropdown-toggle" data-toggle="dropdown"> 
   <i style="width:50px;" class="fa fa-bars fa-2x"></i>
   </button>
   <ul class="dropdown-menu">
    <li><a href="home.php">HOME</a></li>
	 <li><a href="#">ABOUT US</a></li> 
	 <li><a href="#">ACADEMIC </a></li> 
	<li><a href="#">FACILITIES</a></li> 
	<li><a href="#">CO-CURRICULARS</a></li> 
    <li><a href="infrastructure.php">INRASTRUCTURE</a></li> 
	<li><a href="#">STUDENT ZONE </a></li> 
	 <li><a href="#">INFORMATION DESK</a></li>
   </ul>
   </div> 

   	<a href="#">
   <div style="width:50%;height:35px;background-color:black;margin-top:20px;float:left;margin-left:20px;color:white;padding:7px 10px;">
   <b>LATEST NEWS</b>
   </div></a>
   <br clear="all">
	 </div>
	
  </div>
 </div>
</div>
</div>

<div class="simple-marquee-container visible-lg visible-md" style="margin-top:50px;">
 <div class="marquee-sibling" style="color:white;">
	 Latest News
  </div>
	 <div class="marquee">
		<h5><?php require"latest_news.php"?></h5>
	 </div>
</div>
	 <script type="text/javascript" src="js/jquery_welcome.min.js"></script>
	 <script type="text/javascript" src="js/marquee.js"></script>
	 <script>
			$(function (){

				$('.simple-marquee-container').SimpleMarquee();
				
			});
		</script>
		