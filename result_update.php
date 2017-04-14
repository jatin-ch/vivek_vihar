<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['enroll']) && isset($_POST['class']) && isset($_POST['section']) && isset($_POST['sub']) && isset($_POST['t1'])&& isset($_POST['t2'])&& isset($_POST['t3'])&& isset($_POST['total']))
	{		
	   $enroll = $_POST['enroll'];
	   $class= $_POST['class'];
	    $section= $_POST['section'];
	   $sub = $_POST['sub'];
	   $t1 = $_POST['t1'];
	   $t2 = $_POST['t2'];
	   $t3 = $_POST['t3'];
	   $total = $_POST['total'];
	   
	   if(!empty($enroll)&&!empty($class)&&!empty($sub)&&!empty($t1)&&!empty($t2)&&!empty($t3)&&!empty($total))
	 {
		   if($class=='XII' && $section=='Science')
		   {	   
		   $sql ="INSERT INTO xii_science_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		  else if($class=='XII' && $section=='Arts')
		   {	   
		   $sql ="INSERT INTO xii_arts_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		   else if($class=='XI' && $section=='Science')
		   {	   
		   $sql ="INSERT INTO xi_science_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		   else if($class=='XI' && $section=='Arts')
		   {	   
		   $sql ="INSERT INTO xi_arts_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		    else if($class=='X')
		   {	   
		   $sql ="INSERT INTO x_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		    else if($class=='IX')
		   {	   
		   $sql ="INSERT INTO ix_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		   else if($class=='VIII')
		   {	   
		   $sql ="INSERT INTO viii_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		    else if($class=='VII')
		   {	   
		   $sql ="INSERT INTO vii_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		    ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		    else if($class=='VI')
		   {	   
		   $sql ="INSERT INTO vi_result(enrollment,subject,t1marks,t2marks,t3marks,total) VALUES('$enroll','$sub','$t1','$t2','$t3','$total')";
	       $result= $conn->query($sql);
		   echo "Result Update Sucssfully !!" ;
		   ?><script> window.alert("Result has been Updated Sucessfully!!");</script><?php 
		   }
		  
		   else{echo"Oops!! Enter Valid subject Name";}
	   }
	 else{ 
	      echo"Result Updation Failed !!!";
		  //header("Location:next123.php");
		  
        }
	}
	
 else{
	echo"Update The Subject-wise Result  Here...";
	 
      }

?>