<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	
	if(isset($_POST['class']) &&!empty($_POST['class']))
	{
      $class= $_POST['class'];
  	 
  if($class !='XI' && $class !='XII')	 
  {
     $sql="SELECT * FROM holidays_homework WHERE class='$class'";	
	
     $result = $conn->query($sql);
	
    if($result->num_rows>0)
    { 	
?>    <div class="table-responsive">
    <table  class="table table-bordered table-hover table-condensed">	
	<caption style="color:coral;font-size:20px;"> <b>HOMEWORK</b></caption>
              <thead><tr>
                      <th style="background: #80ffaa;">Date</th>
						<th style="background: #80ffaa;">Class</th>
                        <th style="background: #80ffaa;">Subject</th>
                       <th style="background: #80ffaa;">Assignment</th>
					    <th style="background: #80ffaa;">Submition Date</th>
                     </tr></thead>
				
<?php		
	
	  while($row=$result->fetch_assoc())
		{
		  if(!empty($row['date'])&&!empty($row['class'])&&!empty($row['subject'])&&!empty($row['assignment'])&&!empty($row['submit_date']))
	   {
		  $date = $row['date'];
		   $class = $row['class'];
		  $subject = $row['subject'];
		    $assignment = $row['assignment'];
		   $submit_date = $row['submit_date'];
		 
		  ?>

                   <tbody> <tr>
                        <td><?php echo $date."<br>";?> </td>
						<td><?php echo $class."<br>";?> </td>
					   <td><?php echo $subject."<br>";?> </td>
                           <td> <?php echo $assignment."<br>";?> </td>
						  <td> <?php echo $submit_date."<br>";?> </td>
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
		
	}
	
	else
	{
		  $sql="SELECT * FROM holidays_homework WHERE class='$class'";	
	
     $result = $conn->query($sql);
	
    if($result->num_rows>0)
    { 	
?>      <div class="table-responsive">
		<table  class="table table-bordered table-hover table-condensed">	 
	<caption style="color:blue;font-size:20px;"> <b>HOMEWORK</b></caption>
                   
				 <thead><tr>
                       <th style="background: #80ffaa;">Date</th>
						<th style="background: #80ffaa;">Class</th>
						<th style="background: #80ffaa;">Section</th>
                        <th style="background: #80ffaa;">Subject</th>
                       <th style="background: #80ffaa;">Assignment</th>
					    <th style="background: #80ffaa;">Submition Date</th>
                     </tr></thead>
				
<?php		
	
	  while($row=$result->fetch_assoc())
		{
		  if(!empty($row['date'])&&(!empty($row['class']) || !empty($row['section'])) &&!empty($row['subject'])&&!empty($row['assignment'])&&!empty($row['submit_date']))
	   {
		  $date = $row['date'];
		   $class = $row['class'];
		    $section = $row['section'];
		  $subject = $row['subject'];
		    $assignment = $row['assignment'];
		   $submit_date = $row['submit_date'];
		 
		  ?>

                   <tbody> <tr>
                        <td><?php echo $date."<br>";?> </td>
						<td><?php echo $class."<br>";?> </td>
						<td><?php echo $section."<br>";?> </td>
					   <td><?php echo $subject."<br>";?> </td>
                           <td> <?php echo $assignment."<br>";?> </td>
						  <td> <?php echo $submit_date."<br>";?> </td>
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
		
	}
	
	}
	
 ?>
