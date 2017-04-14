<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['class_query']))
	{		
	   $class = $_POST['class_query'];
	   
	   if(!empty($class))
	 {
		   $sql ="SELECT * FROM feedback WHERE class='$class'";
	       $result= $conn->query($sql);
		   
		  if($result->num_rows>0)
		  {
              ?>
	                <table class="table table-bordered table-hover table-condensed">	 
	                <caption style="color:blue;font-size:20px"> <b>Students-Query</b></caption>
                    <thead><tr><th style="background: #80ffaa">Query</th></tr></thead>
     <?php						
			  while($row=$result->fetch_assoc())
			   {
				 if(!empty($row['class'])&&!empty($row['query']))   
				 {
					  $query = $row['query'];
					 ?><tbody><tr><td> <?php echo $query."<br>";?> </td></tr></tbody><?php	
				 }	
             
			   }		 
			   
			  ?> </table><?php
		  }	
		
	   }
	
	}

?>
