<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	 $sql="SELECT * FROM latest_news";	
	 $result = $conn->query($sql);
      if($result->num_rows>0)
      { 	
		while($row=$result->fetch_assoc())
		{
		   if(!empty($row['id'])&&!empty($row['news']))
	   {
		  
		  $print_id = $row['id'];
		  $print_news = $row['news'];
		  echo " * ".$row['news']." , " ;
	   }
	 else{ 
	      echo"News Update failed!!! please See Next Time";
		  //header("Location:next123.php");
		  
        }
		
		}
		
   }
 else{
	 echo"Oops!! NO News Found.";
	 
      }
  
?>
