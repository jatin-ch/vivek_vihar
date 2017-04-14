<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

	if(isset($_POST['yols2']) && isset($_POST['lac2']))
	{		
	   $yols2 = $_POST['yols2'];
	   $lac2 = $_POST['lac2'];
	 
	 if(!empty($yols2)&&!empty($lac2))
	 {
	 $sql="SELECT * FROM almuni_table WHERE yr_leave = '$yols2' AND last_attend = '$lac2'";	
	 $result = $conn->query($sql);
      if($result->num_rows>0)
      { 

      ?>
	     <div class="table-responsive">
		 <table class="table table-bordered table-hover table-condensed">
                   
				   <caption style="color:coral;font-size:20px;"><h4>List Of Almuni</h4></caption>
                    
                   <thead> <tr>
                        <th  style="background: #80ffaa;"> Full Name </th>
                         <th  style="background: #80ffaa;"> Gender </th>
                         <th  style="background: #80ffaa;"> Email-Id</th>
                         <th  style="background: #80ffaa;">Mobile</th>
                     </tr> </thead>
  
  <?php		while($row=$result->fetch_assoc())
		{
		   if(!empty($row['first_name'])&&!empty($row['last_name'])&&!empty($row['gender'])&&!empty($row['mobile'])&&!empty($row['email_id']))
	   {
		  
		  $print_fname = $row['first_name'];
		  $print_sname = $row['last_name'];
		  $print_gender = $row['gender'];
		  $print_email = $row['email_id'];
		  $print_mobile = $row['mobile'];
		  
		  ?>
		  
		            <tbody><tr>
                        <td><?php echo $print_fname." ".$print_sname."<br>";?> </td>
                          <td><?php echo $print_gender."<br>";?> </td>
                         <td> <?php echo $print_email."<br>";?> </td>
                         <td> <?php echo $print_mobile."<br>";?></td>
                    
                     </tr></tbody>
		  
	<?php	 // echo $row['first_name'].$row['last_name']." ".$row['gender']." ".$row['email_id']." ".$row['mobile']."<br>" ;
	   }
	 else{ 
	      echo"Search failed!!! please try again";
		  //header("Location:next123.php");
		  
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
  }
	 
	 else{
		 echo"Please Provide an input";
	 }
 
	}

?>
