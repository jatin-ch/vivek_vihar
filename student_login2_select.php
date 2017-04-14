  <link href="student_login_feedback.css" rel="stylesheet" type="text/css">
  <link href="css/table_style.css" rel="stylesheet" type="text/css">
<?php
$mysql_host="localhost";
$mysql_user="root";
$mysql_pass="";
$mysql_db="v3_database";

$conn = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

if ($conn->connect_error) {
	 die("Connection failed: " . $conn->connect_error);
	 }

 if(isset($_POST["srs"]) &&isset($_POST["section"]) &&(isset($_POST["personal"])||isset($_POST["academic"])||isset($_POST["exam"])||isset($_POST["iqac"])))
 {
  //isset($_POST["username"])&&isset($_POST["password"])&&
  // $username=$_POST["username"];
  // $password=$_POST["password"];
 //  $password1=md5($password);
   $srs= $_POST["srs"];
   $section= $_POST['section'];
   $personal= $_POST["personal"];
   $academic= $_POST["academic"];
   $exam= $_POST["exam"];
   $iqac= $_POST["iqac"];
 
   
    if($personal=='Personal Detail')
	{
	 $sql="SELECT * FROM admission_table WHERE enrollment='$_SESSION[student_username]'";	
	 $result = $conn->query($sql);
	 if($result->num_rows>0)
	 {
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>PERSONAL INFO.</caption>
                    <thead><tr>
                       <th>Firstname</th>
					   <th>Surname</th>
					   <th>Phone</th>
					   <th>Email</th>
					   <th>Father's Name</th>
					   <th>Mother's Name</th>
                    
                    </tr></thead> 
     <?php		
	    while($row=$result->fetch_assoc())
		{
		  if(!empty($row['firstname'])&&!empty($row['surname'])&&!empty($row['phone'])&&!empty($row['email'])&&!empty($row['father_name'])&&!empty($row['mother_name']))
	   {
		  $firstname = $row['firstname'];
		  $surname = $row['surname'];
		  $phone = $row['phone'];
		  $email= $row['email'];
		  $father_name= $row['father_name'];
		  $mother_name= $row['mother_name'];
		  ?>
     
                   <tbody><tr>
                        <td><?php echo $firstname."<br>";?> </td>
					   <td><?php echo $surname."<br>";?> </td>
                         <td> <?php echo $phone."<br>";?> </td>
						 <td> <?php echo $email."<br>";?> </td>
						 <td> <?php echo $father_name."<br>";?> </td>
						 <td> <?php echo $mother_name."<br>";?> </td>
						 
						 </tr></tbody> 	 
	  
         <?php	  
	}
   
		}
		?>
		</table>
		<?php
	 }
	 else{
		 echo"Oops!! No Result found.";
	 }
	}

   else if($exam=='Exam Marks')
   {
	if($srs=='XII' && $section=='Science')
	{	
	$sql1="SELECT * FROM xii_science_result WHERE enrollment='$_SESSION[student_username]'";	
	 $result1 = $conn->query($sql1);
	}
	else if($srs=='XI' && $section=='Science')
	{	
	$sql1="SELECT * FROM xi_science_result WHERE enrollment='$_SESSION[student_username]'";	
	 $result1 = $conn->query($sql1);
	}
	else if($srs=='XII' && $section=='Arts')
	{	
	$sql1="SELECT * FROM xii_arts_result WHERE enrollment='$_SESSION[student_username]'";	
	 $result1 = $conn->query($sql1);
	}
	else if($srs=='XI' && $section=='Arts')
	{	
	$sql1="SELECT * FROM xi_arts_result WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	}
	else if($srs=='X')
	{	
	$sql1="SELECT * FROM x_result WHERE enrollment='$_SESSION[student_username]'";	
	 $result1 = $conn->query($sql1);
	}
	else if($srs=='IX')
	{	
	$sql1="SELECT * FROM ix_result WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	}

	else if($srs=='VIII')
	{	
	$sql1="SELECT * FROM viii_result WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	}

	else if($srs=='VII')
	{	
	$sql1="SELECT * FROM vii_result WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	}
	else if($srs=='VI')
	{	
	$sql1="SELECT * FROM vi_result WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	}
	 
	if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>EXAM MARKS</caption>
                   <thead> <tr>
                       <th>Subject</th>
					   <th>T1 Marks/20</th>
					   <th>T2 Marks/30</th>
					   <th>T3 Marks/50</th>
					    <th>Total Marks/100</th>
                    
                    </tr></thead> 
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['subject'])&&!empty($row['t1marks'])&&!empty($row['t2marks'])&&!empty($row['t3marks'])&&!empty($row['total']))
	   {
		  $subject = $row['subject'];
		  $t1marks = $row['t1marks'];
		  $t2marks = $row['t2marks'];
		  $t3marks= $row['t3marks'];
		  $total= $row['total'];
		  ?>
     
                  <tbody> <tr>
                        <td><?php echo $subject."<br>";?> </td>
					   <td><?php echo $t1marks."<br>";?> </td>
                         <td> <?php echo $t2marks."<br>";?> </td>
						 <td> <?php echo $t3marks."<br>";?> </td>
						  <td> <?php echo $total."<br>";?> </td>
						 
						 </tr></tbody> 	 
	  
         <?php	  
	}
   
		}
		
	?></table>
	 <br> <button onclick="myfunction('webkoisk2')" style="margin-left:780px">Print this table</button>
         <script type="text/javascript">
          function myfunction(webkoisk2){
	          var printcontent= document.getElementById(webkoisk2).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
	<?php	
	
	 }
	 else{
		 echo"Oops!! No Result found.";
	 }   
   }
   
   else if($exam=='My Date Sheet')
   {
	   $sql1="SELECT * FROM exam_timetable WHERE  class='$srs'";	
	 $result1 = $conn->query($sql1);
	 
	 if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>EXAM TIME-TABLE</caption>
                   <thead> <tr>
                       <th>Class/Section</th>
					   <th>Subject</th>
                        <th>Day</th>                      
					  <th>Date</th>					  
					  <th>Time</th>
                    
                    </tr> </thead>
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['class'])&&!empty($row['subject']) &&!empty($row['day'])&&!empty($row['date'])&&!empty($row['time']))
	   {
		  $class = $row['class'];
		  $subject = $row['subject'];
           $day= $row['day'];        
		  $date= $row['date'];		 
		 $time= $row['time'];
		  ?>
     
                 <tbody><tr>
					   <td><?php echo $class."<br>";?> </td>
                         <td> <?php echo $subject."<br>";?> </td>
						 <td> <?php echo $day."<br>";?> </td>
						 <td> <?php echo $date."<br>";?> </td>
						 <td> <?php echo $time."<br>";?> </td>
						 </tr></tbody> 	 
	  
         <?php	  
	}
   }
    ?></table>
	 <br> <button onclick="myfunction('webkoisk2')" style="margin-left:780px">Print this table</button>
         <script type="text/javascript">
          function myfunction(webkoisk2){
	          var printcontent= document.getElementById(webkoisk2).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
	<?php
	}
   	
   }
   
   else if($exam=='My Seating Plan')
   {
	   $sql1="SELECT * FROM seating_plan WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	 
	 if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>EXAM SEATING PLAN</caption>
                   <thead> <tr>
                       <th>Enrollment No.</th>
					   <th>Room No.</th>
					   <th>Seat No.</th>
                    
                    </tr> </thead>
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['enrollment'])&&!empty($row['room'])&&!empty($row['seat']))
	   {
		  $enrollment= $row['enrollment'];
		  $room = $row['room'];
		  $seat= $row['seat'];
		  ?>
     
                    <tbody><tr>
					   <td><?php echo $enrollment."<br>";?> </td>
                         <td> <?php echo $room."<br>";?> </td>
						 <td> <?php echo $seat."<br>";?> </td>
						 </tr></tbody> 	 
	  
         <?php	  
	}
   }
    ?></table>
	  <br> <button onclick="myfunction('webkoisk2')" style="margin-left:780px">Print this table</button>
         <script type="text/javascript">
          function myfunction(webkoisk2){
	          var printcontent= document.getElementById(webkoisk2).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
	<?php
	}
   	
   }
   
   else if($exam=='View Sgpa')
   {
	   $sql1="SELECT * FROM sgpa_result WHERE enrollment='$_SESSION[student_username]' ";	
	 $result1 = $conn->query($sql1);
	 
	 if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>EXAM SGPA</caption>
                    <thead><tr>
                       <th>Enrollment No.</th>
					   <th>Total Marks</th>
                       <th>Sgpa</th>
                    </tr></thead> 
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  //if(!empty($row['enrollment'])&&!empty($row['physics_total'])&&!empty($row['chemistry_total'])&&!empty($row['mathematics_total'])&&!empty($row['english_total'])&&!empty($row['hindi_total'])&&!empty($row['science_total'])&&!empty($row['maths_total'])&&!empty($row['social_total'])&&!empty($row['sanskrit_total']))
	   
		  $enrollment= $row['enrollment'];
		  $total = $row['total'];
		  
		  
		  ?>
     
                  <tbody><tr>
					   <td><?php echo $enrollment."<br>";?> </td>
                         <td> <?php echo $total."<br>";?> </td>
						 <td>
						 <?php 
						 if($srs=='XII' || $srs=='XI') {echo ($total*100/500)."%"."<br>";}
						 else{echo ($total*100/600)."%"."<br>";}
						 ?> </td>
						 </tr> </tbody>	 
	  
         <?php	  
	
   }
    ?></table>
	   <br> <button onclick="myfunction('webkoisk2')" style="margin-left:780px">Print this table</button>
         <script type="text/javascript">
          function myfunction(webkoisk2){
	          var printcontent= document.getElementById(webkoisk2).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
	<?php
	}
	 }
	 
	  else if($academic=='Time Table')
   {
	 $sql1="SELECT * FROM class_timetable WHERE  class='$srs'";	
	 $result1 = $conn->query($sql1);
	 
  if($srs=='XI' || $srs=='XII')
  {	  
	if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>CLASS TIME-TABLE</caption>
                    <thead><tr>
                        <th>Class</th>
						<th>Section</th>
					   <th>Subject</th>
                       <th>Day</th>
					   <th>Room No.</th>
					   <th>Time</th>
                    </tr></thead> 
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['class']) &&!empty($row['section'])&&!empty($row['subject'])&&!empty($row['day'])&&!empty($row['room'])&&!empty($row['time']))
		  {
		 
		$class= $row['class'];
		$section= $row['section'];
		$subject= $row['subject'];
		$day=$row['day'];
		$room = $row['room'];
		$time=$row['time'];
		  
		}
		  ?>
     
                     <tbody><tr>
					     <td> <?php echo $class."<br>";?> </td>
						  <td> <?php echo $section ."<br>";?> </td>
                         <td> <?php echo $subject."<br>";?> </td>
						 <td> <?php echo $day."<br>";?> </td>
						 <td> <?php echo $room."<br>";?> </td>
						 <td> <?php echo $time."<br>";?> </td>
						 </tr></tbody> 	 
	  
         <?php	  
	
   }
	} 
   }
    
	else{
		if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>CLASS TIME-TABLE</caption>
                    <thead><tr>
                        <th>Class</th>
					   <th>Subject</th>
                       <th>Day</th>
					   <th>Room No.</th>
					   <th>Time</th>
                    </tr></thead> 
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['class'])&&!empty($row['subject'])&&!empty($row['day'])&&!empty($row['room'])&&!empty($row['time']))
		  {
		 
		$class= $row['class'];
		$subject= $row['subject'];
		$day=$row['day'];
		$room = $row['room'];
		$time=$row['time'];
		  
		}
		  ?>
     
                    <tbody><tr>
					     <td> <?php echo $class."<br>";?> </td>
                         <td> <?php echo $subject."<br>";?> </td>
						 <td> <?php echo $day."<br>";?> </td>
						 <td> <?php echo $room."<br>";?> </td>
						 <td> <?php echo $time."<br>";?> </td>
						 </tr> </tbody>	 
	  
         <?php	  
	
   }
     ?> </table>
	  
	  <br> <button onclick="myfunction('webkoisk2')" style="margin-left:780px">Print this table</button>
         <script type="text/javascript">
          function myfunction(webkoisk2){
	          var printcontent= document.getElementById(webkoisk2).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
	 <?php
   
	}
	}
     
	 }
	 
	  else if($academic=='Subject Registd.' && $srs!='Class')
	  {
		 if(($srs=='XII' || $srs=='XI')&& $section=='Science')
		 {
			?>
	    <table  class="table table-bordered table-hover table-condensed">	 
	   <caption><?php echo "Subject-Registd. : ".$_SESSION['student_username']; ?></caption>
                    <thead><tr><th>Subject</th></tr></thead> 
					      
				<tbody><tr><td>English </td> </tr> 
				<tr><td>Hindi </td></tr>
				<tr><td>Physics </td></tr>
				<tr><td> Chemistry</td></tr>
				<tr><td> Mathematics/Biology</td></tr></tbody>
						   	 
		 <?php  
		 }
		 else if(($srs=='XII' || $srs=='XI')&& $section=='Arts')
		 {
			?>
	    <table  class="table table-bordered table-hover table-condensed">	 
	   <caption><?php echo "Subject-Registd. : ".$_SESSION['student_username'];?></caption>
                    <thead><tr><th>Subject</th></tr></thead> 
					      
				<tbody><tr><td>English </td> </tr> 
				<tr><td>Hindi </td></tr>
				<tr><td>Poltical science </td></tr>
				<tr><td>Geogrophy</td></tr>
				<tr><td> Computer</td></tr></tbody>
						   	 
		 <?php  
		 }
   		 
		 else{ ?>
	    <table  class="table table-bordered table-hover table-condensed">	 
	   <caption><?php echo "Subject-Registd. : ".$_SESSION['student_username'];?></caption>
                    <thead><tr><th>Subject</th></tr></thead> 
					      
				<tbody><tr><td>English </td> </tr> 
				<tr><td>Hindi </td></tr>
				<tr><td>Science </td></tr>
				<tr><td> Maths</td></tr>
				<tr><td> Social Science</td></tr>
				<tr><td> Sanskrit</td></tr></tbody>
						   	 
		 <?php  }		 
	  }
	   

	   else if($academic=='Subject Faculty')
   {
	 $sql1="SELECT * FROM subject_faculty WHERE  class_teach='$srs' OR section_teach='$section'";	
	 $result1 = $conn->query($sql1);
	 	  
	if($result1->num_rows>0 )
	{
	  ?>
	  <table  class="table table-bordered table-hover table-condensed">	 
	 <caption>SUBJECT-FACULTY</caption>
                    <thead><tr>
                        <th>Faculty Name</th>
						<th>Subject</th>
                    </tr> </thead>
     <?php		
	    while($row=$result1->fetch_assoc())
		{
		  if(!empty($row['faculty_name']) &&!empty($row['subject_teach']))
		  {
		 
		$faculty_name= $row['faculty_name'];
		$subject_teach= $row['subject_teach'];
		
		}
		  ?>
     
                   <tbody><tr>
					     <td> <?php echo $faculty_name."<br>";?> </td>
						  <td> <?php echo $subject_teach."<br>";?> </td>
						 </tr></tbody> 	 
	  
         <?php	  
	
   }
   ?></table>
     <br> <button onclick="myfunction('webkoisk2')" style="margin-left:780px">Print this table</button>
         <script type="text/javascript">
          function myfunction(webkoisk2){
	          var printcontent= document.getElementById(webkoisk2).innerHTML;
	           var originalcontent= document.body.innerHTML;
	          document.body.innerHTML="<html><head><title></title></head><body>"+ printcontent + "</body>";
	        window.print();
	       document.body.innerHTML = originalcontent;
       }
       </script>
   <?php
   
	} 
     
	 }
	 
 }
   
  ?>