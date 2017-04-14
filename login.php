<?php
session_start();
?>
<!doctype html>
<html>
<head>
<link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
 <link rel="stylesheet" href="css/bootstrap.min.css">
<style>
    .bg-slideshow,
    .bg-slideshow:after{
        position: fixed;
        width: 85%;
        height: 70%;
        top: 0px;
        left: 0px;
        z-index: -1;
    }
    
    .g-slideshow:after{
        content: '';
        background: url(images/age-appropriate-sports-for-kids.jpg) repeat top left;
    }    
    
    .bg-slideshow li span{
        width: 85%;
        height: 70%;
        position: absolute;
        top: 0px;
        left: 0px;
        color: transparent;
        background-size: cover;
        background-position: 30% 30%;
        background-repeat:none;
        opacity: 0;
        z-index: -2;
        backface-visibility: hidden;
        animation: example 20s linear infinite 0s;
    }    
    
    .bg-slideshow li:nth-child(1) span{
     background-image: url(images/Kids-Educational-Computer-Games4.jpg);
    }
    .bg-slideshow li:nth-child(2) span{
     background-image: url(images/bk253es.jpg);
        animation-delay: 5s;
    }
    .bg-slideshow li:nth-child(3) span{
   background-image: url(images/clgstdnt2.jpg);
        animation-delay: 10s;
    }
    .bg-slideshow li:nth-child(4) span{
         background-image: url(images/collegestudents.jpg);
        animation-delay: 15s;
    }
    
    
    @keyframes example{
        0% {opacity: 0;
            animation-timing-function: ease-in; }
         12% {opacity: 1;
            animation-timing-function: ease-out; }
         25% {opacity: 1; }
         50% {opacity: 0; }
         100% {opacity: 0;}
    }
    
    .mo-cssanimations .bg-slideshow li span{
        opacity: 1;
    } 
    ol li{
        list-style: none;
    }
    
    ol{
        margin-left: 180px;
        margin-top:7px;
        
    }
    fieldset{
        background-image: url(images/bubbles.png);
    }
    input:focus{
        box-shadow: 0px 0px 1px 1px #b3e0ff;
    }
    body{
         background-image: url(images/bubbles.png);
    }
    #main{
        width:1020px;
        height: 320px;
        margin-left: 171px;
        margin-top: 0px;
        border: 1px solid silver;
    }
	#main2{
        width:1020px;
		height:315px;
        margin-left: 171px;
        margin-top: 0px;
        border: 1px solid silver;
    }
    
</style>    
    
</head>
 <body>
 <div id="main">   
 <ol class="bg-slideshow">
 <li id="li1"><span>Image 01</span></li>
    <li id="li2"><span>Image 02</span></li>
     <li id="li3"><span>Image 03</span></li>
      <li id="li4"><span>Image 04</span></li>
     </ol></div>
    
	<div id="main2">
	 <p style="margin-left:50px;margin-top:50px"> <b>
	 <?php
       function loggedin(){
	   if(isset($_SESSION['username'])&&!empty($_SESSION['username']))
            {
             return true;
            }
        else{
	          return false;
             }
            }

      if(loggedin())
         {
	     // echo"welcome!! you are logged in.<a href='student_logout.php'>LogOut</a>";
		  header("Location:principal.php");
            }
            else{
	             include"login_form.php";
             }

           ?></b></p>
     
    </div>
  
     
</body>

</html>