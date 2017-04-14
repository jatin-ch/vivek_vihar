 <link href="font-awesome-4.6.1/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	 
 if(isset($_POST['class']) && !empty($_POST['class']))
 {
	 $class= $_POST['class'];
  
  $sql= "SELECT * FROM transfer_certificate WHERE class='$class'";
  $result= $conn->query($sql);
  if($result->num_rows>0)
	 {
	  ?>	 
	 <br><div class="table-responsive">
	 <table class="table table-bordered table-hover table-condensed">
                    <thead><tr>
                        <th colspan="2"  style="background-color:#FF9900;"> Enrollment No.</th>
						 <th colspan="2"  style="background-color:#FF9900;">Student Name</th>
                        <th colspan="2"  style="background-color:#FF9900;">Download</th>
                    
                     </tr></thead>
     <?php		
	    while($row=$result->fetch_assoc())
		{
		  if(!empty($row['enrollment'])&&!empty($row['student_name'])&&!empty($row['download']))
	   {
		  $enrollment = $row['enrollment'];
		  $student_name = $row['student_name'];
		  $download = $row['download'];
		
		  ?>
                   <tbody> <tr>
                         <td colspan="2"> <?php echo $enrollment."<br>";?> </td>
						<td colspan="2"> <?php echo $student_name."<br>";?> </td>
						<td colspan="2"> <a href="<?php echo $download;?>" target="_blank">Download</a></td>
						
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
	
 }