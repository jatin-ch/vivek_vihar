<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['total_students1']) && isset($_POST['school_avg1'])&& isset($_POST['highest%1'])&& isset($_POST['above80%1'])&& isset($_POST['above75%1'])&& isset($_POST['above70%1'])&& isset($_POST['sub_3d1'])&& isset($_POST['total_d1'])&& isset($_POST['1st_d1']))
	{		
	   $total_students1 = $_POST['total_students1'];
	   $school_avg1 = $_POST['school_avg1'];
	    $highest = $_POST['highest%1'];
		 $above80 = $_POST['above80%1'];
		  $above75 = $_POST['above75%1'];
		   $above70 = $_POST['above70%1'];
		    $sub_3d1 = $_POST['sub_3d1'];
			 $total_d1 = $_POST['total_d1'];
			  $Ist_d1 = $_POST['1st_d1'];
			  
	   
	   if(!empty($total_students1)&&!empty($school_avg1)&&!empty($highest)&&!empty($above80)&&!empty($above75)&&!empty($above70)&&!empty($sub_3d1)&&!empty($total_d1)&&!empty($Ist_d1))
	 {
		   $sql ="INSERT INTO academic_xii(total_students,school_avg,highest,above80,above75,above70,sub_3d,total_d,1st_d) 
		   VALUES('$total_students1','$school_avg1','$highest','$above80','$above75','$above70','$sub_3d1','$total_d1','$Ist_d1')";
	       $result= $conn->query($sql);
		 
	
		  echo " Updation Sucssfull !!" ;
		  ?><script> window.alert(" Update Sucssfully  !!") ;</script><?php 
	   }
	 else{ 
	      echo" Updation Failed !!!";
		  ?><script> window.alert("Updation  Failed !!") ;</script><?php 
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update The Academic Achievement Class-XII Here...";
	 
      }

?>
