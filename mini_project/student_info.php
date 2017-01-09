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
	

<form>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
	
									
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">Student Details</h2>
			</div>
			
				<div class="form-group">
							<div class="col-lg-12">

								<a href="view_student_info.php"> <button  type="button"  class="btn btn-primary" >Single Student Info</button></a>
							
								</div>		
								</div>		
				<div class="form-group">
				<div>
							<div class="col-md-9">
								<a href="all_student_info.php"><button style="margin-top:30px;" type="button" name='form_submit'  class="btn btn-primary" >All Students Info</button></a>
							
								</div>		
								</div>		
								</div>	

				<div class="form-group">
				<div>
							<div class="col-md-9">
								<a href="regdate_stud_info.php"><button style="margin-top:30px;" type="button" name='form_submit'  class="btn btn-primary" >Student Info According to Registration Date</button></a>
							
								</div>		
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
	
	

	</script>	
</body>
</html>