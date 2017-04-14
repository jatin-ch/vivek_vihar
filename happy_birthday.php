<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

 
    $sql= "SELECT * FROM admission_table";
    $result = $conn->query($sql);
	
	if($result->num_rows>0)
  { 
    
	while($row= $result->fetch_assoc())
	{
		$date=$row["date"];
		$month=$row["month"];
		if($date==date('d')&&$month==date('m'))
		{	
		?>     
             <div>
           <li><span>
		   <?php 
		   echo $row["date"]."/".$row["month"]."/".$row["year"]."<br>";
		echo"Name : ".$row["firstname"]." ".$row['surname']."<br>";
		echo"Father's Name : ".$row['father_name']."<br>";
		echo"Mother's Name : ".$row['mother_name']."<br>";
		echo"Class/ Section : ".$row["class"]."<br><br>";
		   ?>
		   </span></li>
           </div>
		
		<?php
		}
	}
	
 }
 else{
	 echo"No result Found";
 }
 
  ?>