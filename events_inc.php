<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['event']) && isset($_POST['from_date'])&& isset($_POST['to_date']))
	{		
	   $event = $_POST['event'];
	   $from_date = $_POST['from_date'];
	   $to_date = $_POST['to_date'];
	   
	   if(!empty($event)&&!empty($from_date) &&!empty($to_date))
	 {
		   $sql ="INSERT INTO events(event,from_date,to_date) VALUES('$event','$from_date','$to_date')";
	       $result= $conn->query($sql);
		 
	
		  echo " Updation Sucssfull !!" ;
		   ?><script> window.alert("Event-Calendar Updated!!!") ;</script><?php
	   }
	 else{ 
	      echo" Updation Failed !!!";
		   ?><script> window.alert("Event-Calendar Updation Failed !!!") ;</script><?php
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update Events - Calendar Here...";
	 
      }

?>
