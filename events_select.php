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
	 
 $sql= "SELECT * FROM events";
 $result= $conn->query($sql);
 if($result->num_rows>0)
	 {
	  ?>
  <div class="table-responsive">	  
	 <table class="table table-bordered table-hover table-condensed">
            <caption style="color:coral;font-size:20px;"> <h4>Events-Information</h4></caption>
                    
                    <thead><tr>
                        <th colspan="2" style="background: #80ffaa;"><i class="fa fa-calendar fa-fw"></i> EVENT</th>
						 <th colspan="2" style="background: #80ffaa;">FROM</th>
                        <th colspan="2" style="background: #80ffaa;">To</th>
                    
                     </tr></thead>
     <?php		
	    while($row=$result->fetch_assoc())
		{
		  if(!empty($row['event'])&&!empty($row['from_date'])&&!empty($row['to_date']))
	   {
		  $event = $row['event'];
		  $from_date = $row['from_date'];
		  $to_date = $row['to_date'];
		
		  ?>
                    <tbody><tr>
                         <td colspan="2"> <?php echo $event."<br>";?> </td>
						<td colspan="2"> <?php echo $from_date."<br>";?> </td>
						<td colspan="2"> <?php echo $to_date."<br>";?> </td>
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
	
 