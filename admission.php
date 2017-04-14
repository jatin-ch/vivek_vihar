<!DOCTYPE html>
<html lang="en">
<head>
<?php include"vivekLink.php"; ?>		
</head>
<body>

<?php include"vivekHeader.php"; ?>
		
		
<div class="container">
 <div class="row">
  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  
     <div class="div123">
	 <br />
	 <a href="student_login.php">
	 <div class="div1">
	  <h3><i class="fa fa-hand-o-right fa-fw"></i>Login</h3>
	 </div>
	 </a>
	 <a href="online_fee.php">
	 <div class="div2">
	 <h3><i class="fa fa-hand-o-right fa-fw"></i>Online fee</h3>
	 </div>
	 </a>
	 <a href="transfer-certificate.php">
	 <div class="div3">
	 <h4><i class="fa fa-hand-o-right fa-fw"></i>Transfer-Certificate</h3> 
	 </div>
	 </a>
	 </div>
  
  </div>
  <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
  
     <div class="R1"> </div>
     <div class="R2 table-bordered">
	     	 <br>
		<div style="margin:10px;">
		<p style="color:blue;"><b> * Please Fill Up The Form Here... Admission No. must be start from 16103100<br>
	          * Date Formate Should be: year-month-date</b></p>
		 <form action="admission.php" method="POST">
                  
				 <br><h4 style="margin-left:30px;color:coral;"> <?php require "admission.inc.php"; ?></h4>  
               
			   <div class="form-group form-inline">
			   <label style ="margin-left:30px;">Date:</label>
                <input type="text" name="date" class="form-control" style="width:100px;" required /> 
               
                <label style ="margin-left:30px;">Admission No. :</label> 
                <input type="text" name="admission_no" class="form-control" style="width:100px;">
				</div>
				
				<div class="form-group form-inline">
				 <label style="margin-left:30px;">STUDENT NAME: </label>
                <input type="text" name="student_fname" class="form-control" placeholder="firstname" style="width:200px;" required />
            <input type="text" name="student_sname" class="form-control" placeholder="surname" style="width:200px;" required />
				
				 <label style ="margin-left:30px;">Class :</label>
                <select name="class" class="form-control" style="width:90px;">
				<option selected>Select</option>
                       <option>I</option>
                      <option>II</option>
                      <option>III</option>
                     <option>IV</option>
                      <option>V</option>
                    <option>VI</option>
                   <option>VII</option>
                    <option>VIII</option>
                   <option>IX</option>
				   <option>X</option>
				   <option>XI</option>
				   <option>XII</option>
                   <option>LKG</option>
                   <option>UKG</option>
                     </select> 
			
			</div>
                
				<div class="form-group form-inline">
               <label style ="margin-left:30px;">Date Of Birth:</label> 
                <select name="date" class="form-control" style="width:90px">
				 <option selected>Date</option>
				  <option>01</option>
				   <option>02</option>
				    <option>03</option>
					 <option>04</option>
					   <option>05</option>
					    <option>06</option>
						 <option>07</option>
						  <option>08</option>
						   <option>09</option>
						    <option>10</option>
							 <option>11</option>
							  <option>12</option>
							   <option>13</option>
							    <option>14</option>
								 <option>15</option>
								  <option>16</option>
								   <option>17</option>
								    <option>18</option>
									 <option>19</option>
									  <option>20</option>
									   <option>21</option>
									    <option>22</option>
										 <option>23</option>
										  <option>24</option>
                                            <option>25</option>
                                           <option>26</option>
                                          <option>27</option>
                                        <option>28</option>
                                      <option>29</option>
                                    <option>30</option>
                                   <option>31</option>							  
			                     </select>
				 <select name="month" class="form-control" style="width:90px">
				  <option selected>Month</option>
				   <option>01</option>
				    <option>02</option>
					 <option>03</option>
					  <option>04</option>
					   <option>05</option>
					    <option>06</option>
						 <option>07</option>
						  <option>08</option>
						   <option>09</option>
						    <option>10</option>
							 <option>11</option>
							 <option>12</option>
				                </select>
				  <input type="text" name="year" class="form-control" placeholder="Year" style="width:90px;">
                
                <label style="margin-left:30px">Blood Group:</label>
                <select name="blood_group" class="form-control" style="width:90px">
				 <option selected>Select</option>
				   <option>A+</option>
				    <option>A-</option>
					 <option>B+</option>
					  <option>B-</option>
					   <option>AB+</option>
					    <option>AB-</option>
						 <option>O+</option>
						  <option>O-</option>
				                </select>
				</div>
                
			 <div class="form-group form-inline">
               <label style ="margin-left:30px;">Residence Phone No. :</label>
                <input type="text" name="phone_no" class="form-control" style="width:300px;" required />
               
                <label style ="margin-left:30px;">Mobile No. :</label>
            <input type="text" name="mobile_no" class="form-control" style="width:300px;" required />
			</div>
                
				<div class="form-group form-inline">
                <label style ="margin-left:30px;">Emergency Contact No. :</label>
                <input type="text" name="contact_no" class="form-control" style="width:300px;" required />
                
                <label style ="margin-left:30px;">E-Mail:</label>
                <input type="email" name="email" class="form-control" style="width:300px;" required />
                </div>
				
				<div class="form-group form-inline">
                <label style ="margin-left:30px;">Address :</label>
                <textarea name="address" class="form-control" rows="3" cols="60" required></textarea>
				</div>
                
                <h4 style="margin-left:50px;color:blue;"> FATHER'S DETAILS :</h4>
				<div class="form-group form-inline">
                <label style ="margin-left:30px;">Name :</label>
                <input type="text" name="father_name" class="form-control" style="width:300px" required />
                <label style ="margin-left:30px;">Occuption :</label>
                <input type="text" name="occuption1" class="form-control" style="width:300px" required />
				</div>
				
			 <div class="form-group form-inline">
               <label style ="margin-left:30px;">Education :</label>
                <input type="text" name="education1" class="form-control" style="width:300px" required />
                <label style ="margin-left:30px;">Office Phone :</label>
                <input type="text" name="office_phone1" class="form-control" style="width:300px" required />
				</div>
                
                 <h4 style="margin-left:50px;color:blue;"> MOTHER'S DETAILS :</h4>
				 <div class="form-group form-inline">
                <label style ="margin-left:30px;"> Name : </label>
                <input type="text" name="mother_name" class="form-control" style="width:300px" required />
               <label style ="margin-left:30px;"> Occuption :</label>
                <input type="text" name="occuption2" class="form-control" style="width:300px" required />
				</div>
				<div class="form-group form-inline">
                <label style ="margin-left:30px;"> Education :</label>
                <input type="text" name="education2" class="form-control" style="width:300px" required />
               <label style ="margin-left:30px;">Office Phone :</label>
                <input type="text" name="office_phone2" class="form-control" style="width:300px" required />
				</div>
                
				<div class="form-group form-inline">
                <label style ="margin-left:30px;">Any Other Information :</label>
                <textarea name="other_info" class="form-control" rows="3" cols="60" required></textarea>
                
            <input id="final_submit" type="submit" name="submit" value="SUBMIT" class="btn btn-success" style="margin-left:30px;"> 
           </div>			
 
        </form>
		
		</div>
	     <br>
	 </div>
  
  </div>
 </div>
</div>
		
		
<?php include"vivekBottom.php" ?>
	
	
</body>
</html>
