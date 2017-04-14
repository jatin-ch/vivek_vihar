<!DOCTYPE html>
<html lang="en">
<head>
<?php require"vivekLink.php"; ?>
    <link href="css/dekho.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" href="css/boxeffects.css" type="text/css" />
	<link href="css/faculty_login.css" rel="stylesheet" type="text/css"> 
</head>
<body>

 <?php require"vivekHeader.php"; ?>

		
	 <div class="view_main_container">
		<div class="container">
	 <div class="row">
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="view_main fifth-effect" style="background-color:#FF9900;height:60px;margin-top:30px">
         <a href="login.php" target="_blank" title="Full Image">Admin login <i class="fa fa-user fa-fw"></i></a><div class="mask"></div>
	</div> 
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="view_main fifth-effect" style="background-color:#08a3c5;height:60px;margin-top:30px">
         <a href="online_fee.php" title="Full Image">online fee <i class="fa fa-desktop fa-fw"></i></a><div class="mask"></div>
	</div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
   <div class="view_main fifth-effect" style="background-color:#759749;height:60px;margin-top:30px">
         <a href="transfer-certificate.php" title="Full Image">T.C. <i class="fa fa-graduation-cap fa-fw"></i></a><div class="mask"></div>
	</div>
  </div>
  <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
  <div class="view_main fifth-effect" style="background-color:#cd1948;height:60px;margin-top:30px">
         <a href="admission.php" title="Full Image">Admission <i class="fa fa-user-plus fa-fw"></i></a><div class="mask"></div>
	</div>
  </div>
     </div>
	 </div>
	 </div>
		
	  <div class="container">
	      <div class="row">
	   <div class="col-lg-12 col-md-12 col-sm-12" style="margin-top:30px;">
	   
	         <!-- Caption Style -->
    <style> 
        .captionOrange, .captionBlack
        {
            color: #fff;
            font-size: 20px;
            line-height: 30px;
            text-align: center;
            border-radius: 4px;
        }
        .captionOrange
        {
            background: #EB5100;
            background-color: rgba(235, 81, 0, 0.6);
        }
        .captionBlack
        {
        	font-size:16px;
            background: #000;
            background-color: rgba(0, 0, 0, 0.4);
        }
        a.captionOrange, A.captionOrange:active, A.captionOrange:visited
        {
        	color: #ffffff;
        	text-decoration: none;
        }
        a.captionOrange:hover
        {
            color: #eb5100;
            text-decoration: underline;
            background-color: #eeeeee;
            background-color: rgba(238, 238, 238, 0.7);
        }
        .bricon
        {
            background: url(img/browser-icons.html);
        }
    </style>
         <!-- it works the same with all jquery version from 1.x to 2.x -->
 <!--       <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script> -->
        <!-- use jssor.slider.mini.js (40KB) instead for release -->
        <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
       <script type="text/javascript" src="js/jssor.js"></script>
        <script type="text/javascript" src="js/jssor.slider.js"></script>
	   <script type="text/javascript" src="js/img_sliding.js"></script>
   

    <!-- Jssor Slider Begin -->
    <!-- To move inline styles to css file/block, please specify a class name for each element. -->  
    <div id="slider1_container" style="position: relative; width: 850px; height: 380px; overflow: hidden;border-top:2px solid #9fdf9f">
 
        <!-- Loading Screen --> 
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;

                background-color: #000; top: 0px; left: 0px;width: 100%; height:100%;"> 
            </div> 
            <div style="position: absolute; display: block; background: url(img/loading.gif) no-repeat center center;

                top: 0px; left: 0px;width: 100%;height:100%;">
            </div> 
        </div> 
 
        <!-- Slides Container --> 
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width:850px; height: 380px;
            overflow: hidden;">
           
            <div><img u="image" src="images/age-appropriate-sports-for-kids.jpg" /></div>
            <div><img u="image" src="images/Bestt-School-Bldg-Fin.jpg" /></div>
            <div><img u="image" src="images/bk253es.jpg" /></div>
            <div><img u="image" src="images/banner.jpg" /></div>
            <div><img u="image" src="images/69-seminar-by-dgm-raheja-universal.jpg" /></div>
            <div><img u="image" src="images/Kids-Educational-Computer-Games4.jpg" /></div>
            <div><img u="image" src="images/pink-shirt-day.jpg" /></div>
            <!-- Example to add fixed static share buttons in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- Share Button Styles -->
            <style>
                .share-icon {
                    display: inline-block;
                    float: left;
                    margin: 4px;
                    width: 32px;
                    height: 32px;
                    cursor: pointer;
                    vertical-align: middle;
                    background-image: url(img/share/share-icons.png);
                }

                .share-facebook {
                    background-position: 0px 0px;
                }

                    .share-facebook:hover {
                        background-position: 0px -40px;
                    }

        .share-twitter {
            background-position: -40px 0px;
        }

            .share-twitter:hover {
                background-position: -40px -40px;
            }

        .share-pinterest {
            background-position: -80px 0px;
        }

            .share-pinterest:hover {
                background-position: -80px -40px;
            }

                .share-linkedin {
                    background-position: -240px 0px;
                }

                    .share-linkedin:hover {
                        background-position: -240px -40px;
                    }


                .share-googleplus {
                    background-position: -120px 0px;
                }

                    .share-googleplus:hover {
                        background-position: -120px -40px;
                    }


        .share-stumbleupon {
            background-position: -360px 0px;
        }

            .share-stumbleupon:hover {
                background-position: -360px -40px;
            }

                .share-email {
                    background-position: -320px 0px;
                }

                    .share-email:hover {
                        background-position: -320px -40px;
                    }
            </style>

           
            <!-- Example to add fixed static share buttons in slider END -->

            <!-- Example to add fixed static QR code in slider BEGIN -->
            <!-- Remove it if no need -->
            <!-- QR Code Style -->
            <style>
                @media only screen and (max-width: 730px) {
                    .qr_code {
                        display: none;
                    }
                }
            </style>

            <!-- Example to add fixed static QR code in slider END -->
        </div> 
 
        <!--#region Bullet Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-bullet-navigator-jquery.html -->
        <style>
            /* jssor slider bullet navigator skin 03 css */
            /*
            .jssorb03 div           (normal)
            .jssorb03 div:hover     (normal mouseover)
            .jssorb03 .av           (active)
            .jssorb03 .av:hover     (active mouseover)
            .jssorb03 .dn           (mousedown)
            */
            .jssorb03 {
                position: absolute;
            }
            .jssorb03 div, .jssorb03 div:hover, .jssorb03 .av {
                position: absolute;
                /* size of bullet elment */
                width: 21px;
                height: 21px;
                text-align: center;
                line-height: 21px;
                color: white;
                font-size: 12px;
                background: url(img/b03.png) no-repeat;
                overflow: hidden;
                cursor: pointer;
            }
            .jssorb03 div { background-position: -5px -4px; }
            .jssorb03 div:hover, .jssorb03 .av:hover { background-position: -35px -4px; }
            .jssorb03 .av { background-position: -65px -4px; }
            .jssorb03 .dn, .jssorb03 .dn:hover { background-position: -95px -4px; }
        </style>
        <!-- bullet navigator container -->
        <div u="navigator" class="jssorb03" style="bottom: 16px; right: 6px;">
            <!-- bullet navigator item prototype -->
            <div u="prototype"><div u="numbertemplate"></div></div>
        </div>
        <!--#endregion Bullet Navigator Skin End -->
        
        <!--#region Arrow Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
        <style>
            /* jssor slider arrow navigator skin 20 css */
            /*
            .jssora20l                  (normal)
            .jssora20r                  (normal)
            .jssora20l:hover            (normal mouseover)
            .jssora20r:hover            (normal mouseover)
            .jssora20l.jssora20ldn      (mousedown)
            .jssora20r.jssora20rdn      (mousedown)
            */
            .jssora20l, .jssora20r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 55px;
                height: 55px;
                cursor: pointer;
                background: url(img/a20.png) no-repeat;
                overflow: hidden;
            }
            .jssora20l { background-position: -3px -33px; }
            .jssora20r { background-position: -63px -33px; }
            .jssora20l:hover { background-position: -123px -33px; }
            .jssora20r:hover { background-position: -183px -33px; }
            .jssora20l.jssora20ldn { background-position: -243px -33px; }
            .jssora20r.jssora20rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <span u="arrowleft" class="jssora20l" style="top: 123px; left: 0px;"> <i class="fa fa-chevron-left fa-3x" style="color:silver;"></i>
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora20r" style="top: 123px; right: 8px;"> <i class="fa fa-chevron-right fa-3x" style="color:silver;"></i>
        </span>
        <!--#endregion Arrow Navigator Skin End -->
        
    </div> 
    <!-- Jssor Slider End -->
	
 </div>
	    </div>
		
		  <div class="row">
	  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	   <div id="p1">
	 <div id="p1-1"><i class="fa fa-pencil"></i> About Our School</div>
    <img src="images/Bestt-School-Bldg-Fin.jpg" style="width:70px;height:70px;border-radius:5px;margin-top:15px;margin-left:10px" />   
     <p style="position:relative;left:100px;bottom:70px">Vivek Vidhya Vihar was established in<br>2006 and since then it has been training<br>the flame of v.v.v. 
	 <a href="about_school.php" style="text-decoration:underline">Read More</a></p>
	</div>
	 </div>
	 <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	   <div id="p2">
	<div id="p2-1"><i class="fa fa-pencil"></i> Principal's Message</div>    
     <img src="images/home_schooling.jpg" style="width:70px;height:70px;border-radius:5px;margin-top:15px;margin-left:10px"> 
    <p style="position:relative;left:100px;bottom:70px">Education is the most important learning<br>in a man's life. An educated man is<br>never a failure. 
	<a href="principal_message.php" style="text-decoration:underline">Read More</a></p>
	</div>
	 </div>
	 </div>
	   
	   <div class="row">
	     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:30px;">
		
<link href="news/simple.min.css" rel="stylesheet">
<script type="text/javascript" src="news/jquery.marquee.js"></script>
              <center> <div id="n1"><p style="font-size:20px;color:white;font-family:cursive"><b>NOTICE BOARD</b></p></div></center>
	            <div class="block-hdnews" style="width:345px;width:100%; background-color:#e95546;background:#ffffcc">

          <div class="list-wrpaaer" style="height:380px">
             <div class="list-aggregate" id="marquee-vertical">
              <?php require"notice_update.php"; ?>

             </div>
          </div><!-- list-wrpaaer -->

      </div> <!-- block-hdnews -->




<script type="text/javascript">
  
  $(function(){


  $('#marquee-vertical').marquee();  
  $('#marquee-horizontal').marquee({direction:'horizontal', delay:0, timing:50});  

});

</script>
	  </div>
	   </div>
	   
	      <div class="row btmenu">
	 <!-- <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12">
	   <a href="#"><div id="p3-1"><h4> <i class="fa fa-image fa-fw"></i> Student Corner</h4></div></a>
	 </div> -->
	  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
	  <a href="exam_timetable.php"><div id="p3-2"><h4><i class="fa fa-bullhorn fa-fw"></i> Examination</h4></div></a>
	 </div>
	  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
	  <a href="admission.php"><div id="p3-3"><h4><i class="fa fa-plus fa-fw"></i> Admissions</h4></div></a>
	 </div>
	  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
	  <a href="almuni.php"><div id="p3-4"><h4><i class="fa fa-user fa-fw"></i> Alumni</h4></div></a>
	 </div>
	  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
	  <a href="vacancies.php"><div id="p3-5"><h4><i class="fa fa-paper-plane fa-fw"></i> Vacancies</h4></div></a>
	 </div>
	  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
	   <a href="events.php"><div id="p5-1"><h4><i class="fa fa-calendar fa-fw"></i>Events</h4></div></a>
	 </div>
	  <div class="col-lg-2 col-md-4 col-sm-6 col-xs-12">
	    <a href="academic.php"><div id="p5-3"><h4><i class="fa fa-mortar-board fa-fw"></i>Achievement</h4></div></a>
	 </div>
	 </div>
	 
	 
      <div class="row btmenu">
	  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	   <div id="p4-1">
	<div id="p41"><i class="fa fa-camera" style="margin-left:10px"></i> Photo Gallery</div> 
	 <a href="photo_gallery.php"><div id="photo-gallery2">
            <img  id="img1" src="images/fan.jpg">
         <img id="img2" src="images/uniform.jpg">
         <img id="img3" src="images/PhysEd_400.jpg">
         <img id="img4" src="images/Earth_day (4).jpg">
        <br clear="all">
        </div></a>   
	</div>
	 </div> 
	  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	<div id="p4-3">
	<div id="p41"><i class="fa fa-key" style="margin-left:10px"></i> Student / Parent Login</div> 
	 <a href="student_login.php"> <div id="user-login">
        <img src="images/form-login.png" style="width:70px;height:70px;float:left">
		<h2 style="color:white;float:left;margin-top:20px;font-family:cursive">User Login</h2>    
     </div></a> 
	</div>
	 </div>
	 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	       <div id="p4-2">
	<div id="p41"><i class="fa fa-gift" style="margin-left:10px"></i> Happy Birthday</div> 
	 <div id="happy-birthday2">
			<img src="images/noimage.png" style="width:70px;height:75px;float:left">
			  <link rel="stylesheet" type="text/css" href="css/ticker1.css">
			   <div class="ticker-container">
            <ul><?php require "happy_birthday.php";?> </ul>
      </div>
     <!-- <script src="js/jquery.min.js"></script> --> 
       <script src="js/ticker.js"></script>
			</div>
	</div>
	 </div>
	 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
	   <div class="_circle_">
			 <a href="employee_login.php" target="_blank"><div class="img-circle"><h3>faculty Login</h3></div></a>
		 </div>
	 </div>
	 </div>	   
		
	  </div>	
		
		
	<?php require"vivekBottom.php"; ?>
	
	
</body>
</html>
