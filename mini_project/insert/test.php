<!DOCTYPE html>

<head>
<script src="jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
<SCRIPT language=JavaScript>
$("dname").change(function() {
$("dcat").change(function() {
	$("dcourse").load("test.php?choice=" + $("dname").val()+$("dcat").val());
})
});
</script>
</head>

<body>
<label>Department:</label><br> <select name="dname" required>
<option value="selectd">---Select---</option>
<option value="Chemical Engineering">Chemical Engineering</option>
<option value="Civil Engineering">Civil Engineering</option>
<option value="Computer Science">Computer Science</option>
<option value="Electronics & Communication Engineering">Electronics & Communication Engineering</option>
<option value="Electrical & Electronics Engineering">Electrical & Electronics Engineering</option>
<option value="Information Technology">Information Technology</option>
<option value="Mechanical Engineering">Mechanical Engineering</option>
<option value="Metallurgical & Material Engineering">Metallurgical & Material Engineering</option>
<option value="Mining Engineering">Mining Engineering</option>

<select/>
<br>
<label>Category:</label><br> <select name="dcat" required>
<option value="selectcat">---Select---</option>
<option value="C">Core</option>
<option value="E">Elective</option>
<select/>
<br>


<label>Course:</label><br> <select name="dcourse">
<option value="selectco">---Select---</option>
<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);
$sql="select NAME from SUBJECT where DID in(select ID from DEPARTMENT where NAME='$dname') and CATEGORY='$dcat'";
$result=mysql_query($sql,$con);

while ($row = mysql_fetch_array($result)) {
   	echo "<option>" . $row{'NAME'} . "</option>";
}
?>

<select/>


</body>
</html>