<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
set_time_limit(120);
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$lines = file('sid.txt'); 
 foreach ($lines as $line) 
 { 
	$array=explode(",",$line);
	$sql="INSERT INTO SEMAIL(ID)
	VALUES
	('$array[0]')";
	mysql_query($sql,$con);
 }
 if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}

mysql_close($con)
?>