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
	?>
	

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
	
									
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Course Details</h2>
			</div>
			
			<div class="form-group">
								<button  type="button" name='form_submit' class="btn btn-primary" onClick="student_list()" style="width:100px;">Get List</button></a>
							
								</div>		
				
		<div class="form-group">
									
									<div class="col-md-10">
									
						<table border="1px"  style="width:30%;height:30%" id="coursetable"   class="table table-condensed table table-bordered table-hover table table-striped"  data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
						<thead>
						        <th data-field="srno" height="10%" width="10%">Sr No</th>
						        <th data-field="name" height="10%"  width="20%">Student Name</th>
						 </thead>
						    <tbody>
						    
							
						    </tbody>

						</table>
					
									<br><br>
									<div class="form-group">
									<label class="col-md-2 control-label" for="message">Total No of Students</label>
									<div class="col-md-4">
									<input  type="text"  name="totalstudents" id="totalstudents" class="form-control">
									<br><br>
									</div>	
								</div>	
								
								<div class="form-group">									
								<div class="col-md-11">
								<button  type="button" name='form_submit' class="btn btn-primary" onclick="window.location.href='xls1.php'" style="width:100px;">Export</button></a>
								</div>	
								</div>
								<div class="form-group">									
								
								<div class="col-md-1">
								<button  type="button" name='OK' class="btn btn-primary" onclick="window.location.href='course_info.php'" style="width:100px;">OK</button>
								</div>	
								</div>	

															
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
	
	
function student_list()
{
	var x=document.getElementById("course").value;
	window.alert(x);
	if(x=="")
	{
		window.alert("Enter the course name first");
		
	}
	else
	{
		$.ajax({
			url:'course_support_file.php',
			dataType:'json',
			data: "course="+x,
			success:function(data){
				if(data==null)
				{
					window.alert("No student yet registered for this Course");
					
				}
				else
				{
			var table = document.getElementById("coursetable");
			
			
			window.alert(data);
			var array=data;
	for(var i=0;i<data.length;i++)
	{
var row = table.insertRow(-1);
 cell1 = row.insertCell(0);
 cell2 = row.insertCell(1);
cell1.innerHTML=i+1;
cell2.innerHTML=array[i];
	}
			
document.getElementById("totalstudents").value=i;	

	}
				
				
			}
			
			})
		
	}
}


		o

	</script>	
</body>
</html>