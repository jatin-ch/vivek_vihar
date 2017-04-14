<!DOCTYPE html>
<html>
<head>
 <link href="css/student_login2.css" rel="stylesheet" type="text/css">
   <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
     <link rel="stylesheet" href="css/bootstrap.min.css">
   <script type="text/javascript" src="feed_it.js"></script> 
  <script> function student_logout(){open("student_logout.php","_self")}
         
		  function back_pervs(){open("student_login2.php","_self")}
	                                
									</script>


   
</head>
<body>

<div id="big">
    
<div id="latest_news">
    <div id="news_update"><p><?php echo date('l')." ".date("d-m-y");?></p></div>    
    <div id="moving_news" style="color:white;">WELCOME TO VIVEK VIDHYA VIHAR SCHOOL JALSU(JAIPUR)</div>
    </div>
    </div>
    
    <div id="TC12">
        <div id="TC2">
         <div id="TC001"><p style="margin-left:30px;margin-top:0px;font-size:20px;">
		 <i class="fa fa-arrow-circle-left fa-2x" style="margin-right:10px;cursor:pointer"></i>Student Login
		  <i id="dp" style="color:black;font-size:15px;margin-left:960px;font-family:sans-serif"><b><?php date_default_timezone_set("Asia/Kolkata");   echo "  ".date("h:i:sa");?></b></i></p></div>
       <div id="TC002">
        
		<div id="webkoisk">
		
	<!--	<br><a href="student_changepin.php" style="margin-left:50px;"><i class="fa fa-gear fa-fw"></i>Change Pin</a><br><br> -->
		<br><p  onclick="student_logout()" style="margin-left:50px;cursor:pointer;text-decoration:underline;color:blue">
		<i class="fa fa-unlock fa-fw"></i>Signout</p>
		</div>
		<div id="webkoisk2" style="background:none">
		
		<p style="margin-top:170px;margin-left:200px;color:red"><?php require"temp.php"; ?></p>
		</div>
       
        </div>
        </div>
     </div>
     
    
   
</body>

</html>