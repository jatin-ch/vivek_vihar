<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
    $sql= "SELECT vno,vac FROM vacancies";
    $result = $conn->query($sql);
  if($result->num_rows>0)
  {
	while($row= $result->fetch_assoc())
	{
		$vno = $row['vno'];
		$vac = $row['vac'];
		echo $vno."-".$vac."<br><br>";
	}		
 }
 else{
	 echo"No Vacancy Now!!";
 }

 
  ?>