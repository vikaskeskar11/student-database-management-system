<?php
$con = mysql_connect("localhost","root","MANI28ADMIN");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("DBMS", $con);

$id=(int)$_COOKIE["user"];


if (!empty($_POST['sub']) && !empty($_POST['cid']) && !empty($_POST['nid'])){
$sql="UPDATE INSTRUCTOR SET tid='$_POST[nid]' WHERE TID='$_POST[cid]' AND CODE='$_POST[sub]'";
if (!mysql_query($sql,$con))
{
die('Error Instructor: ' . mysql_error());
}

$sql="UPDATE RESULT SET tid='$_POST[nid]' WHERE TID='$_POST[cid]' AND CODE='$_POST[sub]'";
if (!mysql_query($sql,$con))
{
die('Error Instructor: ' . mysql_error());
}
}
else if(empty($_POST['cid']))
{
$sql="INSERT INTO INSTRUCTOR VALUES ('$_POST[sub]','$_POST[nid]')";
if(!mysql_query($sql,$con))
die(mysql_error());
}

header("location:hod.php");

mysql_close($con)
?>