<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mini Project</title>

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
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>MINI</span>PROJECT</a>
				<!--<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>-->
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"/></use></svg>HomePage</a></li>
				<a href="#sub-item-1" data-toggle="collapse">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg></span> Menu 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="registration.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Registration
						</a>
					</li>
					<li>
						<a class="" href="student_info.php">
							<svg class="glyph stroked plus sign"><use xlink:href="#stroked-plus-sign"></use></svg> Student Info
						</a>
					</li>
					<li>
						<a class="" href="modify_student_info.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> Modify Student Information
						</a>
					</li>
					<li>
					<a class="" href="fee_info.php">
							<svg class="glyph stroked gear"><use xlink:href="#stroked-gear"/></use></svg> Fee Info
						</a>
					</li>
					<li>
						<a class="" href="course_info.php">
							<svg class="glyph stroked eye"><use xlink:href="#stroked-eye"/></use></svg> Course info
						</a>
					</li>
					
				</ul>
			</li>
			
			
	
			
			
			<li role="presentation" class="divider"></li>
			<li><a href="login.php?logout=true"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Log Out</a></li>
		</ul>

	</div>
	</body></html>