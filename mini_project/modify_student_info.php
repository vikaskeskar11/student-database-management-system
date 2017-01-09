<DOCTYPE html>
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
	

	<?php
	include 'header.php';
	include 'config.php';
	
	
	if(isset($_POST['form_submit'])){
		
		$UpperCase = array_map("strtoupper", $_POST);
		extract($UpperCase);
		
	
	$query ="update registration set name='$name',birthdate='$birth_date',address='$permenant_address',city='$city',district='$district',state='$state',pincode='$pincode'
	,phone='$Phone1',mobile='$mobile',email='$email',branch='$branch',course='$course',totalfee='$totalfee',paidamt='$paidamt' where name='$student_name'";
	$result=mysqli_query($conn,$query) or die(mysqli_error($conn));
			if($result)
		{
			echo"<script type=\"text/javascript\">".
            "alert('Student Modified Successfully');".
            "</script>";
		}else
		{
			echo"<script type=\"text/javascript\">".
            "alert('Error in Modifyings Student Information.Please Try again.');".
            "</script>";
		}
		
		
	}
	?>
	
<form action="modify_student_info.php" method="post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Modify Student Information</h2>
			</div>
			
				
				
						<div class="col-lg-1" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									
						</div>
						</div>	
				
						<div class="col-lg-10" style="text-align:center;">
						<div class="form-group">
						<?php
						
								$query="select name from registration";
								$result=mysqli_query($conn,$query);
					if($row=mysqli_fetch_assoc($result))
								{						
						echo '<input required  list="student_list"  name="student_name" id="student"  type="text"  class="form-control" placeholder="Name">';
								echo '<datalist id="student_list">';
								while($row=mysqli_fetch_assoc($result))
								{
									echo '<option>'.$row['name'].'</option>';
								}
								echo "</datalist>";
								}
							?>			
						</div>
						</div>
						
						<div class="form-group">
								<button type="button" class="btn btn-primary" onClick="getListOfStudent();" style="width:100px;">Get Info</button>
							
								</div>		
				
							
						<br><br><br>
					
				</div>
				
			
			<div class="col-lg-12" style="padding:20px;">
		
				<div class="col-lg-12" >
					
					<div class="col-lg-6" style="float:left;">
						
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Student Id</label>
									<div class="col-md-9">
									
									<input readonly required type="number"  name="student_id" id="student_id" value="'.($num+1).'" class="form-control">
									</div>
						</div>
					</div>		   
					
					<div class="col-lg-6" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Birth Date</label>
									<div class="col-md-9">
									<input id="birth_date"  name="birth_date"  type="date"  class="form-control">
									</div>
						</div>
					</div>			
					<br><br><br>
					
				</div>
				
				
				<div class="col-lg-12">
				
						<div class="col-lg-1" style="text-align:center;">
						<div class="form-group">
									<label class="col-md-3 control-label" for="name">Name</label>
									
						</div>
						</div>	
				
						
						<div class="col-lg-10" style="text-align:center;">
						<div class="form-group">
								<input required  id="name"  name="name"  type="text"  class="form-control" placeholder="First Name">
										
						</div>
						</div>
							
						<br><br><br>
					
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
									
									<input  required type="text" list="citylist" placeholder="City" name="city" id="city" class="form-control">
									<br><br>
									</div>
									
									
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">District</label>
									<div class="col-md-4">
									<input required id="district" placeholder="District" class="form-control" name="district">
										<br><br>
									</div>	
								</div>
								
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">State</label>
									<div class="col-md-4">
								
									<input required id="state" list="statelist" placeholder="State" class="form-control" name="state">	
									<br><br>
									</div>
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Pin Code</label>
									<div class="col-md-4">
									<input required type="text" placeholder="Pin Code" name="pincode" id="pincode" class="form-control">
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
									<input required type="number" placeholder="Mobile No" name="mobile" id="mobile" class="form-control">
									<br><br>
									</div>	
								</div>
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Email</label>
									<div class="col-md-10">
									<input required type="email" placeholder="Email Address" name="email" id="email" class="form-control">
									<br><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Branch</label>
									<div class="col-md-4">
								
									<input required id="branch" placeholder="Branch" class="form-control" name="branch">	
									<br><br>
									</div>
							
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Course</label>
									<div class="col-md-4">
								
									<input required id="course" placeholder="course name" type="text" class="form-control" name="course">	
									<br><br>
									</div>
									
									
									
									
										<div class="form-group">
									<label class="col-md-2 control-label" for="message">Total fee</label>
									<div class="col-md-4">
									<input required type="text" placeholder="Total fee" name="totalfee" id="totalfee" class="form-control">
									<br><br>
									</div>	
								</div>		
									
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Amount paid</label>
									<div class="col-md-4">
									<input required type="text" placeholder="Amount paid" name="paidamt" id="paidamt" class="form-control">
									<br><br>
									</div>	
								</div>
								<div class="form-group">
								<button type="submit" name='form_submit' class="btn btn-primary" style="width:100px;">Ok</button>
							
								</div>		
				
								
								</div>
				
				</div>
				
			</div>	
			
			
			
			
			
			
		</div><!--/.row-->
		

	</div>	<!--/.main-->
</form>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	
	
	function getListOfStudent()
	{
		var name=document.getElementById("student").value;
		//window.alert(name);	
		if(name=="")
		{
			window.alert("Enter the name First");
		}
		else{
			$.ajax({
				url:'modify_student_support.php',
				data:"name="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
				dataType:'json',                //data format      
				success: function(data){
					
					window.alert(data);
					document.getElementById("student_id").value=data[0];
					document.getElementById("name").value=data[1];
					document.getElementById("birth_date").value=data[2];
					document.getElementById("permenant_address").value=data[3];
					document.getElementById("city").value=data[4];
					document.getElementById("district").value=data[5];
					document.getElementById("state").value=data[6];
					document.getElementById("pincode").value=data[7];
					document.getElementById("Phone1").value=data[8];
					document.getElementById("mobile").value=data[9];
					document.getElementById("email").value=data[10];
					document.getElementById("branch").value=data[11];
					document.getElementById("course").value=data[12];
					document.getElementById("totalfee").value=data[13];
					document.getElementById("paidamt").value=data[14];
					
				}
				
			})
			
		}
	}
	
	</script>	
</body>

</html>
