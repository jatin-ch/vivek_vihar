<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['enroll2']) && isset($_POST['class']) && isset($_POST['section']))
	{		
	   $enroll = $_POST['enroll2'];
	   $class= $_POST['class'];
	   $section= $_POST['section'];
	   
	   if(!empty($enroll) &&!empty($class))
	   {
		   $sql = "INSERT INTO sgpa_result(enrollment) VALUES('$enroll')";
	   $result= $conn->query($sql);
	   
	   if($class=='XII' && $section=='Science')
	{	
	$sql1="SELECT total FROM xii_science_result WHERE '$enroll'=enrollment ";	
	 $result1 = $conn->query($sql1);
	}
	else if($class=='XI' && $section=='Science')
	{	
	$sql1="SELECT total FROM xi_science_result WHERE '$enroll'=enrollment";	
	 $result1 = $conn->query($sql1);
	}
	else if($class=='XII' && $section=='Arts')
	{	
	$sql1="SELECT total FROM xii_arts_result WHERE '$enroll'=enrollment";	
	 $result1 = $conn->query($sql1);
	}
	else if($class=='XI' && $section=='Arts')
	{	
	$sql1="SELECT total FROM xi_arts_result WHERE '$enroll'=enrollment";	
	 $result1 = $conn->query($sql1);
	}
	else if($class=='X')
	{	
	$sql1="SELECT total FROM x_result WHERE '$enroll'=enrollment ";	
	 $result1 = $conn->query($sql1);
	}
	else if($class=='IX')
	{	
	$sql1="SELECT total FROM ix_result WHERE '$enroll'=enrollment";	
	 $result1 = $conn->query($sql1);
	}

	else if($class=='VIII')
	{	
	$sql1="SELECT total FROM viii_result WHERE '$enroll'=enrollment ";	
	 $result1 = $conn->query($sql1);
	}

	else if($class=='VII')
	{	
	$sql1="SELECT total FROM vii_result WHERE '$enroll'=enrollment ";	
	 $result1 = $conn->query($sql1);
	}
	else if($class=='VI')
	{	
	$sql1="SELECT total FROM vi_result WHERE '$enroll'=enrollment";	
	 $result1 = $conn->query($sql1);
	}
	 $total=0;
	 if($result1->num_rows>0)
	{		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['total']))
	   {
		  $total+= $row['total'];
	  }
   
		}
	}
	   $sql="UPDATE sgpa_result SET total='$total' WHERE enrollment='$enroll'";
	   $result= $conn->query($sql);
	   
	   echo "Result of ".$enroll." has been Updated !!.";
			
			 ?><script> window.alert("Result has been Updated !!!") ;</script><?php 
	 
	  
	   }

	}
	
 else{
	echo"Update The Final Result Board Here...";
	 
      }

?>