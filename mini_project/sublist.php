<?php session_start();
//error_reporting(1);
if(isset($_SESSION['loginValidity']) && !empty($_SESSION['loginValidity']))
{}else
{
	header('Location:login.php');
}
?>
<html>
<head>
<?php
include("head.php");
?>
<title>CESA Aptitude Test</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body style="overflow: hidden">
<?php
include("header.php");
include("database.php");
echo "<div class='col-md-12 bg-color-blue text-center' >
  <div class='container'>
            <div class='row'>
 <h3 class='title_msg color-already'>Select Subject to Give Test</h3>

 </div>
 </div> </div>";
$rs=mysqli_query($cn,"select * from subject");
if(mysqli_num_rows($rs)>0)
{
	

echo "<table align=center>";
while($row=mysqli_fetch_row($rs))
{
	echo "<tr><td align=center ><a href=showtest.php?subid=$row[0]><font size=4>$row[1]</font></a>";
}
echo "</table>";
}else
{
	echo "No Subjects For Test";
}
?>
 <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>
</body>
</html>
