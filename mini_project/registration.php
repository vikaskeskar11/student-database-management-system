<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/input.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	<center>
<img src="face.png" style="width:200px;height:120px;">
</center>
	<?php
	include 'header.php';
	include 'config.php';
	
	if(isset($_POST['form_submit'])){
		
		$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);
		
	$name=$Fname." ".$Mname." ".$Lname;
	$query ="INSERT INTO registration VALUES('','$name','$gender','$birth_date','$permenant_address','$city','$district','$state','$pincode','$Phone1','$mobile','$email','$branch','$course','$totalfee','$paidamt','$reg_date')";
	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
			if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('Student added Successfully');".
            "</script>";
			
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Adding Student Information.Please Try again.');".
            "</script>";
		}
		
		
	}
	?>
	
<form action="reg.php" method="post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Registration</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
		
				<div class="col-lg-12" >
					
					<div class="col-lg-6" style="float:left;">
						
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Student Id</label>
									<div class="col-md-9">
										<?php
									$query = "SELECT id FROM registration";
									$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
									while($row = mysqli_fetch_assoc($result))
									{
									$num = $row['id'];
									}
									echo '<input readonly required type="number"  name="student_id" id="student_id" value="'.($num+1).'" class="form-control">';
									?>
									</div>
						</div>
					</div>		   
					
					<div class="col-lg-6" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Birth Date</label>
									<div class="col-md-9">
									<input   id="birth_date"  name="birth_date"  type="date"  class="form-control">
									</div>
						</div>
					</div>			
					<br><br><br>
					
				</div>
				
				
				<div class="col-lg-12">
				
						<div class="col-lg-2" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									
						</div>
						</div>	
								
						<div class="col-lg-3" style="text-align:center;">
						<div class="form-group">
								<input required  id="Fname"  name="Fname"  type="text"  class="form-control" placeholder="First Name">
										
						</div>
						</div>
						
						<div class="col-lg-3" style="text-align:center;">
						<div class="form-group">
								<input required  id="Mname"  name="Mname"  type="text"  class="form-control" placeholder="Middle Name">
										
						</div>
						</div>
						
						<div class="col-lg-3" style="text-align:center;">
						<div class="form-group">
								<input required  id="Lname"  name="Lname"  type="text"  class="form-control" placeholder="Last Name">
										
						</div>
						</div>	
						<br><br><br>
					
				</div>
				<div class="col-lg-12">
						<div class="col-lg-2" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Gender</label>	
						</div>
						</div>
				<div class="col-lg-2" style="text-align:center;">
						<div class="form-group">
									<select class="form-control" name="gender" >
										<option>Female</option>
										<option>Male</option>
										
									</select>
								</div>
						</div>	
			</div>
				<div class="col-lg-12">
				
				<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Permenant Address</a></li>
							
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Address</label>
									<div class="col-md-10">
										<textarea required class="form-control" id="permenant_address" name="permenant_address" placeholder="Permenant Address" rows="3"></textarea>
									<br>
									</div>
									
								</div>
								
								
								
								<div class="col-md-12">
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">City</label>
									<div class="col-md-4">
									
									<input required type="text" list="citylist" placeholder="City" name="city" id="city" class="form-control">
									<br><br>
									</div>
									
									
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input id="district" placeholder="District" class="form-control" name="district">
										<br><br>
									</div>	
								</div>
								
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
								
									<input id="state" list="statelist" placeholder="State" class="form-control" name="state">	
									<br><br>
									</div>
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input  type="text" placeholder="Pin Code" name="pincode" id="pincode" class="form-control">
									<br><br>
									</div>	
								</div>					
				
								</div>
								
								
								</div></div>
							
							
							
							</div>
								</div>
				</div><!--/.panel-->
			</div><!--/.col-->
			
			
				<div class="col-md-12">
							<br><br>
				
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Phone</label>
									<div class="col-md-4">
									<input type="number" placeholder="Phone 1" name="Phone1" id="Phone1" class="form-control">
									<br><br>
									</div>	
								</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Mobile</label>
									<div class="col-md-4">
									<input  type="text" placeholder="Mobile No" name="mobile" id="mobile" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email</label>
									<div class="col-md-10">
									<input type="email" placeholder="Email Address" name="email" id="email" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Branch</label>
									<div class="col-md-4">
								
									<select id="branch" class="form-control" name="branch">	
									<option>computer and IT</option>
									<option>Mechanical and Automobile</option>
									<option>Civil and Architecture</option>
									<option>Electronics and Electrical</option>

									</select>
									<br><br>
									</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Course</label>
									<div class="col-md-4">
								
									<select id="course" class="form-control" name="course">	
									<option>AutoCAD 2015</option>
									<option> CATIA V5 R19 </option>
									<option>PRO-E \ CREO 3.0</option>
									<option>SOLID-WORKS</option>
									<option>SOLID-EDGE </option>
									<option>MASTER CAM </option>
									<option>DELCAM </option>
									<option>UNIGRAPHICS </option>
									<option>ANSYS</option>
									<option>HYPERMESH </option>
									<option>AUTOCAD CIVIL </option>
									<option>3D MAX DESIGN 2015</option>
									<option>REVIT 2015</option>
									<option>STAD PRO</option>
									<option>E-TAB</option>
									<option>CIVIL COURSES</option>
									<option>Basic Embedded System</option>
									<option>Advanced Embedded System</option>
									<option>Basic PLC</option>
									<option> Advanced PLC</option>
									<option>  HMI</option>
									<option> Advanced PLC + HMI</option>
									<option> Basic SCADA</option>
									<option> Advanced SCADA</option>
									<option> Advance Matlab</option>
									<option> Layout Design software Eagle 5.7.0</option>
									<option> Basic Proteus</option>
									<option>Java & Adv Java Programming</option>
									<option>Asp .NET / C# .NET </option>
									<option>C & C++ Programming</option>
									<option>PHP Programming</option>
									<option> Android Programming </option>
									<option>Iphone Programming</option>
									<option> Mysql / Oracle</option>
									<option> Hardware & Nerworking </option>
									<option> Website Designing</option>
									<option>Desktop Apps</option>
									
									</select>
									<br><br>
									</div>


									
										<div class="form-group">
									<label class="col-md-2 control-label" for="message">Total fee</label>
									<div class="col-md-4">
									<input  type="text" placeholder="Total fee" name="totalfee" id="totalfee" class="form-control">
									<br><br>
									</div>	
								</div>		
									
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Amount paid</label>
									<div class="col-md-4">
									<input  type="text" placeholder="Amount paid" name="paidamt" id="paidamt" class="form-control">
									<br><br>
									</div>	
									</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Date of Registration</label>
									<div class="col-md-4">
									<input   id="reg_date"  name="reg_date"  type="date"  class="form-control"><br></br>
									</div>
								</div>
								</div>
								<br>
							
						
								<div class="form-group">
								<div class="col-md-2" style="text-align:center;">
								<button  type="submit" name='form_submit' class="btn btn-primary" style="width:100px;">Ok</button></a>
								</div>										
								</div>
</form>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
</body>

</html>
