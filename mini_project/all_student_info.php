<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/input.css" rel="stylesheet">
<link rel="stylesheet" href="css_table/normalize.css">
<link rel="stylesheet" href="css_table/style.css">
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
	$query = "Select * from registration";
$result = mysqli_query($conn,$query);
$num  = mysqli_num_rows($result);
					?>

	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
	
									
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">All Student Details</h2>
			</div>
				
		
								
									<?php
	
if($num>0)
{  echo '<table class="responstable">
			<tr>
		<th>Application ID</th>
			<th>Name</th>
			<th>City</th>
			<th>Branch</th>
			<th>Course</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Registration Date</th>
			
		</tr>';
 	while($row = mysqli_fetch_array($result))
	{  //print_r($row);
	
	echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
	<td>'.$row['city'].'</td>
    <td>'.$row['branch'].'</td>
	<td>'.$row['course'].'</td>
	<td>'.$row['mobile'].'</td>
	<td>'.$row['email'].'</td>
	<td>'.$row['reg_date'].'</td>';
	echo '</tr>';
	}
	echo '</table>';
}
	?>

	<div class="form-group">
									<br><br>
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Total No of Students</label>
									<div class="col-md-4">
									<input  type="text"  name="totalstudents" readonly id="totalstudents" value=<?php echo $num ?> class="form-control">
									<br><br>
									</div>	
								</div>	
								
								
								<div class="form-group">									
								<div class="col-md-11">
								<button  type="button" name='form_submit' class="btn btn-primary" onclick="window.location.href='xls1.php'" style="width:100px;">Export</button></a>
								</div>	
								</div>				
															
</form>

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	
	</script>	
</body>
</html>