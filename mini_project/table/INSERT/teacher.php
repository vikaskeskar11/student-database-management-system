<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
set_time_limit(120);
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$lines = file('teachers.txt'); 
 foreach ($lines as $line) 
 { 
 
	$array=explode(",",$line);
	$sql="INSERT INTO TEACHER(ID,Firstname,Midname,LastName,DID,Gender,Designation)
	VALUES
	('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]','$array[5]','$array[6]')";
	if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}
 }

mysql_close($con)
?>