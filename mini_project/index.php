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


</head>

<body>
	<center>
<img src="face.png" style="width:300px;height:150px;">
</center>
	<?php
	include 'header.php';
	include 'config.php';
	?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		
	
									
		<div class="row" >
		<h1 style="color:red">Ascent Soft corporation Pvt Ltd. (ASPL)</h1>
	<b><p>
	<font style="color:black">
We are a leading organization in the field of CAD, CAM & CAE training & Engineering Software Training and consultancy. ASPL has a actual industrial experience 
combined with software technology knowledge. ASCENT has PTC Authorized Training Center (ATC). Ascent Soft corporation Pvt Ltd has well equipped facilities, 
Highly skilled teaching team and ISO 9001:2008 certified quality management systems for conducting CAD, CAM & CAE programs.
</font>
</p>
<b><p>
	<font style="color:black">
The company provides an integrated software solution for product design, manufacturing and data management. The company's offers a uniquely integrated solution
 for the mechanical engineering industry (general mechanical design, special machinery, tooling, boiler work) and for sheet metal.
</font>
 </p>
<b><p>
	<font style="color:black">
Institute gives professional training in various other major products in the field of analysis and design. The Institute maintains high academic standards and
 an environment that is highly suitable for learning. It runs just like a University Research and Training center and provides large number of reference books, CD ROMs of Encyclopedias, journals, latest computers and licensed software for the students. Each student is given individual computer for working. Standard textbooks and well-prepared exercises are used in the course. Extra lab time is provided for the students on working days and Sundays.
</font>
 </p>
<b><p>
	<font style="color:black">
Associated with world's leading CAD,CAM & CAE companies like Autodesk, Dassault Systems(CATIA),PTC Creo, Unigraphics, Hyper Mesh ,Solid works, Ansys etc.
 as their Authorized or Legal Training Center, ASPL Center provides dedicated and quality service to its students & with internationally acclaimed curriculum 
 and certification. Under the direction of Mr. Prashant Karande.
</font>
</p></b>

<h1 style="color:red">VISION</h1>
<b><p>
<font style="color:black">
Shaping the future by preserving our heritage, discovering new knowledge, and sharing our resources with the world
</font></p>
<h1 style="color:red">MISSION</h1>
<b><p>
<font style="color:black">
Our mission is to give quality of training in all Educational fields with proper future career guidance for undergraduates/graduates
</font>
</p>

<h2 style="color:red">Contact Details:</h2> 
<h3 style="color:black"><b>Ascent Soft Corporation pvt. ltd.</b></h3><br>
<p>
<font style="color:black">
Branch 1: Baramati City Branch, Behind S.T. Stand, Near Anuchandra Hospital, Ring Road, Baramati, Pune.<br>

Branch 2: Baramati MIDC Branch, Near V.P.C.O.E., Jalochi Corner,Dist. Pune<br>

Mobile: 997 5555 636<br>
Office: 02112 22 04 05<br>
Email: info.ascentsoftech@gmail.com<br>
</font>
</p>	
	</div>
	</div>
	
	
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
