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
	$m=substr($array[1],2,3);
	$p=($m/10)%10;
	if($p>=0 && $p<5)
	$array[3]=($m*2)/100-1;
	else if($p>=5 && $p<=9)
	$array[3]=($m*2)/100-1;
	
	$sql="INSERT INTO Result(SID,CODE,POINTER,SEM,TID)
	VALUES
	('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]')";
	if(!mysql_query($sql,$con))
	{
		die(mysql_error());
	}
 }

mysql_close($con)
?>