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
	$num=0;
	include 'header.php';
	include 'config.php';
	if(isset($_POST['form_submit'])){
		extract($_POST);
	}
	?>
	

<form action="fee_info.php" method="post">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Fee Details</h2>
			</div>
		
		<div class="form-group">
									<label class="col-md-2 control-label" for="message">Select Course Name</label>
									<div class="col-md-4">
								
									<select id="course" class="form-control" name="course_name">	
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
								<button  type="submit" name='form_submit' class="btn btn-primary" style="width:100px;">Get List</button></a>
								</div>		
			</form>
									
				<div class="form-group">
			<div class="col-md-10">
									
				<?php 
				
				if(empty($course_name))
{

}else{
	$query = "Select * from registration where course='$course_name'";
$result = mysqli_query($conn,$query);
$num  = mysqli_num_rows($result);
if($num>0)
{  echo '<table class="responstable">
			<tr>
		<th>Application ID</th>
		<th>Student Name</th>
		<th>Paid Fee</th>
		<th>Remaining Fee</th>
		</tr>';
 	while($row = mysqli_fetch_array($result))
	{  //print_r($row);
			$rum =$row['totalfee']-$row['paidamt']; 
	echo '<tr>
    <td>'.$row['id'].'</td>
    <td>'.$row['name'].'</td>
    <td>Rs.'.$row['paidamt'].'</td>
	<td>Rs.'.$rum.'</td>';
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
	
</body>
</html>