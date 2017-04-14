<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
 $sql= "SELECT * FROM academic_x";
 $result= $conn->query($sql);
 if($result->num_rows>0)
	 {
	  ?>
    <div class="table-responsive">	  
	<table  class="table table-bordered table-hover table-condensed">
            <caption style="color:coral;font-size:20px;"> <h4>RESULT : 2015-2016</h4></caption>
                    <thead><tr>
                        <th colspan="4" style="background: #80ffaa;"> CLASS-X</th>
                    
                     </tr></thead>
     <?php		
	    while($row=$result->fetch_assoc())
		{
		  if(!empty($row['total_students'])&&!empty($row['school_avg'])&&!empty($row['highest'])&&!empty($row['above80'])&&!empty($row['above75'])&&!empty($row['above70'])&&!empty($row['sub_3d'])&&!empty($row['total_d'])&&!empty($row['1st_d']))
	   {
		  $total_students = $row['total_students'];
		  $school_avg = $row['school_avg'];
		  $highest = $row['highest'];
		  $above80= $row['above80'];
		  $above75= $row['above75'];
		  $above70= $row['above70'];
		  $sub_3d= $row['sub_3d'];
		  $total_d= $row['total_d'];
		  $Ist_d= $row['1st_d'];
		  ?>
                    <tbody><tr>
                         <td colspan="2">No. of Students Appeared</td>
						<td colspan="2"> <?php echo $total_students."<br>";?> </td>
                    </tr>
					 <tr>
                         <td colspan="2">School Average</td>
						<td colspan="2"><?php echo $school_avg."<br>";?> </td>
                    </tr>
					 <tr>
                         <td colspan="2">Highest Percentage</td>
						<td colspan="2"><?php echo $highest."<br>";?> </td>
                    </tr>
					 <tr>
                         <td colspan="2">Students With 80% & Above</td>
						<td colspan="2"><?php echo $above80."<br>";?>  </td>
                    </tr>
					 <tr>
                         <td colspan="2">Students With 75% & Above</td>
						<td colspan="2"><?php echo $above75."<br>";?>  </td>
                    </tr>
					 <tr>
                         <td colspan="2">Students With 70% & Above</td>
						<td colspan="2"> <?php echo $above70."<br>";?> </td>
                    </tr>
					 <tr>
                         <td colspan="2">Students Securing Distinction in 3 Subjects</td>
						<td colspan="2"><?php echo $sub_3d."<br>";?>  </td>
                    </tr>
					 <tr>
                         <td colspan="2">Number of Distinction</td>
						<td colspan="2"><?php echo $total_d."<br>";?>  </td>
                    </tr>
					 <tr>
                         <td colspan="2">Number of Ist Division</td>
						<td colspan="2"><?php echo $Ist_d."<br>";?>  </td>
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
	
 