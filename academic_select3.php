<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
 $sql= "SELECT * FROM 80_above";
 $result= $conn->query($sql);
 if($result->num_rows>0)
	 {
	  ?>
   <div class="table-responsive">	  
	 <table  class="table table-bordered table-hover table-condensed">
            <caption style="color:coral;font-size:20px;"> <h4>Students Securing 80% & Above</h4></caption>
                    
                    <thead><tr>
                        <th colspan="2" style="background: #80ffaa;"> STUDENT NAME</th>
						 <th colspan="2" style="background: #80ffaa;"> CLASS</th>
                        <th colspan="2" style="background: #80ffaa;"> PERCENTAGE</th>
                    
                     </tr></thead>
     <?php		
	    while($row=$result->fetch_assoc())
		{
		  if(!empty($row['student_name'])&&!empty($row['class'])&&!empty($row['percentage']))
	   {
		  $student_name = $row['student_name'];
		  $class = $row['class'];
		  $percentage = $row['percentage'];
		
		  ?>
                    <tbody><tr>
                         <td colspan="2"> <?php echo $student_name."<br>";?> </td>
						<td colspan="2"> <?php echo $class."<br>";?> </td>
						<td colspan="2"> <?php echo $percentage."<br>";?> </td>
                    </tr></tbody>
				
         <?php	  
	}
   
		}
		?>
		</table>
		</div>
		<?php
	 }
	 else{
		 echo"Oops!! No Result found.";
	 }
	
 