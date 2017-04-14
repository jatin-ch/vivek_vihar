<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
    $sql= "SELECT sno,notice FROM notict_table";
    $result = $conn->query($sql);
  if($result->num_rows>0)
  {
	while($row= $result->fetch_assoc())
	{
		$sno = $row['sno'];
		$notice = $row['notice'];
		
		?>
		       <li>
                 <a href="">Notice No. <?php echo$sno; ?></a>
                 <p>
                   <?php echo$notice; ?>                
                 </p>
               </li>
		
		<?php

	}		
 }
 else{
	 echo"No Notice Today !!";
 }

 
  ?>