<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['vno']) && isset($_POST['vac']))
	{		
	   $vno = $_POST['vno'];
	   $vac = $_POST['vac'];
	   
	   if(!empty($vno)&&!empty($vac))
	 {
		   $sql ="INSERT INTO vacancies(vno,vac) VALUES('$vno','$vac')";
	       $result= $conn->query($sql);
		 
	
		  echo "Vacancy Update Sucssfully !!" ;
		  ?><script> window.alert("Vacancy Update Sucssfully  !!") ;</script><?php 
	   }
	 else{ 
	      echo"Vacancy Updation Failed !!!";
		  ?><script> window.alert("vacancy Updation Failed  !!!") ;</script><?php 
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update The Vacancies Here...";
	 
      }

?>
