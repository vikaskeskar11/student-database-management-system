<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
die('Could not connect: '.mysql_error());
}
if(mysql_query("CREATE DATABASE DBMS",$con))
{
echo "Database created";
}
else{
echo "Error creating database: ".mysql_error();
}
mysql_close($con);
?>