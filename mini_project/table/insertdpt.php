<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('AM','Applied Mechanics & Hydraulics')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('CE','Chemical Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('CY','Chemistry')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('CV','Civil Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('CO','Computer Science')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('EC','Electronics & Communication Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('EE','Electrical & Electronics Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('HU','Humanities')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('IT','Information Technology')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('MC','Mathematical And Computation')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('ME','Mechanical Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('MT','Metallurgical & Material Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('MN','Mining Engineering')";
mysql_query($sql,$con);
$sql="INSERT INTO department (ID,NAME)
VALUES
('PH','Physics')";
if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
echo "1 record added";
mysql_close($con)
?>