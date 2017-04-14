<?php

$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }
	
if(isset($_POST['option']) && !empty($_POST['option']) && isset($_POST['class']) && !empty($_POST['class']))
{
	$class= $_POST['class'];
	$option= $_POST['option'];
	
	if($option=='Exam-Material')
	{	
	$sql= "SELECT * FROM exam_material WHERE class='$class'";
	$result = $conn->query($sql);
	 if($result->num_rows>0)
    { 	
?>     <div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">	 
	 <caption style="color:coral"><h4>EXAM-MATERIAL</h4></caption> 
                   <thead> <tr>
					   <th style="background:#80ffaa;"> Subject</th>
                       <th style="background:#80ffaa;"> Topics</th>					  
					   </tr></thead>  
				
<?php		
	
	  while($row=$result->fetch_assoc())
		{
		  if(!empty($row['subject'])&&!empty($row['topic']))
	   {
		  $subject = $row['subject'];
		    $topic = $row['topic'];
		 
		  ?>

                    <tbody><tr>
					   <td><?php echo $subject."<br>";?> </td>
                           <td> <?php echo $topic."<br>";?> </td>
                     </tr> </tbody>
                		  
		  
		  <?php
	   }
	 else{ 
	      echo"Search failed!!! please try again";
		  
        } 
		}
		
		?>
  </table>
  </div>
			<br> <button onclick="myfunction('print_id')" style="margin-left:80px">Print</button>
         <script type="text/javascript">
          function myfunction(print_id){
	          var printcontent= document.getElementById(print_id).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>	
				
				<?php
		}
 else{
	 echo"Oops!! NO Result Found.";
 }
  
	 
	}	
 
else
    { 
	  $sql="SELECT * FROM exam_timetable WHERE class='$class'";	
	
     $result = $conn->query($sql);
	
    if($result->num_rows>0)
    { 	
?>     <div class="table-responsive">
		<table class="table table-bordered table-hover table-condensed">	 
	 <caption style="color:coral;"> <h4>TIME-TABLE</h4></caption>  
	 
                    <thead><tr>
					   <th style="background: #80ffaa;"> Subject</th>
                       <th style="background: #80ffaa;"> Day</th>					  
					  <th style="background: #80ffaa;"> Date</th>
					   <th style="background: #80ffaa;"> Time</th>
                    </tr></thead>  
				
<?php		
	
	  while($row=$result->fetch_assoc())
		{
		  if(!empty($row['class'])&&!empty($row['subject'])&&!empty($row['day'])&&!empty($row['date'])&&!empty($row['time']))
	   {
		  $class = $row['class'];
		  $subject = $row['subject'];
		    $day = $row['day'];
		   $date = $row['date'];
		  $time = $row['time'];
		 
		  ?>

                    <tbody><tr>
					   <td><?php echo $subject."<br>";?> </td>
                           <td> <?php echo $day."<br>";?> </td>
						  <td> <?php echo $date."<br>";?> </td>
						 <td> <?php echo $time."<br>";?> </td>
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
             	<br><button onclick="myfunction('print_id')" style="margin-left:80px">Print</button>
         <script type="text/javascript">
          function myfunction(print_id){
	          var printcontent= document.getElementById(print_id).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
				<?php
		}
 else{
	 echo"Oops!! NO Result Found.";
 }
 
	}
	
}
 
 ?>
 
