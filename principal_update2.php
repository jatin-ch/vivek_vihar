<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['id']) && isset($_POST['news']))
	{		
	   $id = $_POST['id'];
	   $news = $_POST['news'];
	   
	   if(!empty($id)&&!empty($news))
	 {
		   $sql ="INSERT INTO latest_news(id,news) VALUES('$id','$news')";
	       $result= $conn->query($sql);
		 
	
		  echo "News Update Sucssfully !!" ;
		  ?><script> window.alert("News Update Sucssfully  !!") ;</script><?php 
	   }
	 else{ 
	      echo"News Updation Failed !!!";
		  ?><script> window.alert("News Updation Failed  !!!") ;</script><?php 
		  //header("Location:next123.php");
		  
        }	
   }
 else{
	echo"Update The News(Limit-4) Box Here...";
	 
      }

?>
