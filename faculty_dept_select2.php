<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

		
	$sql="SELECT * FROM faculty_dept WHERE id='p'";	
	
     $result = $conn->query($sql);
	
    if($result->num_rows>0)
    { 	
?>     <div class="table-responsive">
		<table  class="table table-bordered table-hover table-condensed">
            <caption style="font-size:20px"> <b>PRE-PRIMARY & PRE-SCHOOL</b></caption>
                    <thead><tr>
                        <th  style="background: #80ffaa"> Faculty</th>
						<th style="background: #80ffaa"> Department</th>
                     </tr></thead> 
<?php		
	
		while($row=$result->fetch_assoc())
		{
		  if(!empty($row['faculty_name'])&&!empty($row['faculty_dpt']))
	   {
		  
		  $faculty_name = $row['faculty_name'];
		  $faculty_dpt = $row['faculty_dpt'];
		  ?>

                    <tbody><tr>
                       <td><?php echo $faculty_name."<br>";?> </td>
                         <td> <?php echo $faculty_dpt."<br>";?> </td>
                    
                     </tr></tbody> 
                		  
		  
		  <?php
	   }
	 else{ 
	      echo"Search failed!!! please try again";
		  
        } 
		
		}
		?>
</table>
 </div>		
		<?php
   }
 else{
	 echo"Oops!! NO Result Found.";
 }
	
		
	
	
	