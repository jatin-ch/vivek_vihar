<!DOCTYPE html>
<html>
<head>
<?php require"vivekLink.php"; ?>
<link href="index.css" rel="stylesheet">
<link href="css/delete.css" rel="stylesheet">
<style>
.navbox a:hover{text-decoration:none} 
.viv{cursor:pointer}
</style>
</head>
<body>

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
		
   <div id="navigation-bar" class="navigation-bar" style="float:left">
  <div class="bar">
    <button id="navbox-trigger" class="navbox-trigger"><i class="fa fa-lg fa-th"></i></button>
  </div>
  <div class="navbox"> 
	  <div style="width:100%;width:300px;height:500px;background:#2d2c41;padding:20px;list-style:none">
	    <a href="home.php"><div class="viv">HOME</div></a>
		 <div class="viv dropdown">
		  <div class="dropdown-toggle"  data-toggle="dropdown">ABOUT <span class="caret"></span></div>
          <div  class="dropdown-menu">
          <div class="viv">School | Office Time</div>
  	      <a href=""><div class="viv">About School</div></a>
		  <a href=""><div class="viv">Principal Message</div></a>
		  <a href=""><div class="viv">For Parents</div></a>
          </div>
         </div>
		   <div class="viv dropdown">
		  <div class="dropdown-toggle"  data-toggle="dropdown">ACADEMIC <span class="caret"></span></div>
          <div  class="dropdown-menu">
           <a href=""><div class="viv">Transfer-Certificate</div></a>
  	      <a href=""><div class="viv">Subject Combination</div></a>
		  <a href=""><div class="viv">Scholarship</div></a>
		  <a href=""><div class="viv">Seminar</div></a>
          </div>
          </div>
		   <div class="viv dropdown">
		  <div class="dropdown-toggle"  data-toggle="dropdown">FACILITIES <span class="caret"></span></div>
          <div  class="dropdown-menu">
           <a href=""><div class="viv">Transport</div></a>
  	      <a href=""><div class="viv">Library</div></a>
		  <a href=""><div class="viv">LAB</div></a>
		  <a href=""><div class="viv">Special Education</div></a>
		  <a href=""><div class="viv">Safety</div></a>
		  <a href=""><div class="viv">Hygiene</div></a>
          </div>
          </div>
		  <div class="viv dropdown">
		  <div class="dropdown-toggle"  data-toggle="dropdown">CO-CURRICULARS <span class="caret"></span></div>
          <div  class="dropdown-menu">
           <a href=""><div class="viv">Excursions</div></a>
  	      <a href=""><div class="viv">Celebration</div></a>
		  <a href=""><div class="viv">Social Cause</div></a>
		  <a href=""><div class="viv">Student clubs</div></a>
          </div>
          </div>
		   <a href="#"><div class="viv">INRASTRUCTURE</div></a>
		  <div class="viv dropdown">
		  <div class="dropdown-toggle"  data-toggle="dropdown">STUDENT-ZONE <span class="caret"></span></div>
          <div  class="dropdown-menu">
           <a href=""><div class="viv">Holidays Homework</div></a>
  	      <a href=""><div class="viv">Login</div></a>
		  <a href=""><div class="viv">ONLINE FEE</div></a>
		  <a href=""><div class="viv">ATTENDANCE</div></a>
          </div>
          </div>
  	      <div class="viv dropdown">
		  <div class="dropdown-toggle"  data-toggle="dropdown">INFORMATIONS <span class="caret"></span></div>
          <div  class="dropdown-menu">
           <a href=""><div class="viv">Feedback</div></a>
  	      <a href=""><div class="viv">Contact Us</div></a>
		  <a href=""><div class="viv">School Uniform</div></a>
		  <a href=""><div class="viv">Fee | Remittance</div></a>
		  <a href=""><div class="viv">Dept | faculty</div></a>
		  <a href=""><div class="viv">Mandatory Disclosure</div></a>
		  <a href=""><div class="viv">FAQ</div></a>
          </div>
          </div>
      </div> 
</div>
</div>
    
	  <div class="bar" style="background: #F44336;;width:50px;float:left;margin-left:50px;">
    <a href="#"><button class="navbox-trigger"><i class="fa fa-newspaper-o fa-th"></i></button></a>
     </div>

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
		
		<script>
(function () {
    $(document).ready(function () {
        $('#navbox-trigger').click(function () {
            return $('#navigation-bar').toggleClass('navbox-open');
        });
        return $(document).on('click', function (e) {
            var $target;
            $target = $(e.target);
            if (!$target.closest('.navbox').length && !$target.closest('#navbox-trigger').length) {
                return $('#navigation-bar').removeClass('navbox-open');
            }
        });
    });
}.call(this));
</script>

<script>
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		// Variables privadas
		var links = this.el.find('.link');
		// Evento
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$next = $this.next();

		$next.slideToggle();
		$this.parent().toggleClass('open');

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	

	var accordion = new Accordion($('#accordion'), false);
});
</script>

</body>
</html>

		