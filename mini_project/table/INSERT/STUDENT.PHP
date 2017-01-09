<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
set_time_limit(120);
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$lines = file('student.txt'); 
 foreach ($lines as $line) 
 { 
	$array=explode(",",$line);
	$sql="INSERT INTO STUDENT(ID,Roll,Firstname,Midname,Lastname,DOB,Gender,FFN,FMN,FLN,MFN,MMN,MLN,Year,Sem,DID,Password)
	VALUES
	('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]','$array[5]','$array[6]','$array[7]','$array[8]','$array[9]','$array[10]','$array[11]','$array[12]','$array[13]','$array[14]'
	,'$array[15]','$array[0]')";
	mysql_query($sql,$con);
 }

mysql_close($con)
?>