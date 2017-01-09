<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
set_time_limit(200);
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);

$lines = file('result_it.txt'); 
 foreach ($lines as $line) 
 { 
	$array=explode(",",$line);
	
	
	$sql="INSERT INTO INSTRUCTOR(CODE,TID)
	VALUES
	('$array[0]','$array[1]')";
	if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}
 }

mysql_close($con)
?>