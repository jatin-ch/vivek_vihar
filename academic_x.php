<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['total_students2']) && isset($_POST['school_avg2'])&& isset($_POST['highest%2'])&& isset($_POST['above80%2'])&& isset($_POST['above75%2'])&& isset($_POST['above70%2'])&& isset($_POST['sub_3d2'])&& isset($_POST['total_d2'])&& isset($_POST['1st_d2']))
	{		
	   $total_students2 = $_POST['total_students2'];
	   $school_avg2 = $_POST['school_avg2'];
	    $highest = $_POST['highest%2'];
		 $above80 = $_POST['above80%2'];
		  $above75 = $_POST['above75%2'];
		   $above70 = $_POST['above70%2'];
		    $sub_3d2 = $_POST['sub_3d2'];
			 $total_d2 = $_POST['total_d2'];
			  $Ist_d2 = $_POST['1st_d2'];
	   
	   if(!empty($total_students2)&&!empty($school_avg2)&&!empty($highest)&&!empty($above80)&&!empty($above75)&&!empty($above70)&&!empty($sub_3d2)&&!empty($total_d2)&&!empty($Ist_d2))
	 {
		   $sql ="INSERT INTO academic_x(total_students,school_avg,highest,above80,above75,above70,sub_3d,total_d,1st_d) 
		   VALUES('$total_students2','$school_avg2','$highest','$above80','$above75','$above70','$sub_3d2','$total_d2','$Ist_d2')";
	       $result= $conn->query($sql);
		 
	
		  echo " Updation Sucssfull !!" ;
		  ?><script> window.alert(" Update Sucssfully  !!") ;</script><?php 
	   }
	 else{ 
	      echo" Updation Failed !!!";
		  ?><script> window.alert(" Updation Failed  !!") ;</script><?php 
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update The Academic Achievement Class-X Here...";
	 
      }

?>
