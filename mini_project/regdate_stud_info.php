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



</head>

<body>
	

	<?php
	$num=0;
	include 'header.php';
	include 'config.php';
	if(isset($_POST['form_submit'])){
		extract($_POST);
	}
	
	?>
	
<form action="regdate_stud_info.php" method="post">

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
	
									
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Student Details</h2>
			</div>
			
			<form action="regdate_stud_info.php" method="post">
			<div class="form-group">
									<label class="col-md-2 control-label" for="message">Registration Date</label>
									<div class="col-md-4">									
									<input   id="reg_date"  name="reg_date"  type="date"  class="form-control">
									</div>

								</div>
								<br>
	
									<div class="form-group">
								<button  type="submit" name='form_submit' class="btn btn-primary" style="width:100px;">Get List</button></a>
							
								</div>	
				
							
						<br><br><br>
					
				</div>
				</form>

						
<?php 
						
if(empty($reg_date))
{

}else{
	$query = "Select * from registration where reg_date='$reg_date'";
$result = mysqli_query($conn,$query);
$num  = mysqli_num_rows($result);

if($num>0)
{ 
	echo '<table class="responstable">
			<tr>
		<th>Application ID</th>	
		<th>Name</th>
		<th>City</th>
		<th>Branch</th>
		<th>Cource</th>
		<th>Mobile</th>
		<th>Email</th>
			</tr>';
 	while($row = mysqli_fetch_array($result))
	{ 
	echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
	<td>'.$row['city'].'</td>
    <td>'.$row['branch'].'</td>
	<td>'.$row['course'].'</td>
	<td>'.$row['mobile'].'</td>
	<td>'.$row['email'].'</td>';
	echo '</tr>';
	}
	echo '</table>';
}	
}
?>				
	<br><br>
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Total No of Students</label>
									<div class="col-md-4">
									<input  type="text" value=<?php echo $num; ?> readonly  name="totalstudents" id="totalstudents" class="form-control">
									<br><br>
									</div>	
								</div>
	
</form>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body	
</html>