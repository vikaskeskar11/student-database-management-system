<?php
$con=mysql_connect("localhost","root","helloworld");
set_time_limit(120);
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$lines = file('subject.txt'); 
 foreach ($lines as $line) 
 { 
	$array=explode(";",$line);
	$sql="INSERT INTO SUBJECT(CODE,NAME,DID,CREDIT,CATEGORY)
	VALUES
	('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]')";
	mysql_query($sql,$con);
 }

mysql_close($con)
?>