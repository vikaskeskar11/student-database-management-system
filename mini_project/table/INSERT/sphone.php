<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
set_time_limit(120);
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$lines = file('sphone.txt'); 
 foreach ($lines as $line) 
 { 
	$array=explode(",",$line);
	$sql="INSERT INTO Sphone(ID,NUMBER,TYPE)
	VALUES
	('$array[0]','$array[1]','$array[2]')";
	mysql_query($sql,$con);
 }
 if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}

mysql_close($con)
?>