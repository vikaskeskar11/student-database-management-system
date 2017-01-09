<?php
$con = mysql_connect("localhost","root","MANI28ADMIN");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("DBMS", $con);

$id=(int)$_COOKIE["user"];


if (!empty($_POST['pphone'])){
$sql="UPDATE TPHONE SET NUMBER='$_POST[pphone]' WHERE ID='$id' AND TYPE='P'";
if (!mysql_query($sql,$con))
{
die('Error Phone: ' . mysql_error());
}
}

if (!empty($_POST['sphone'])){
$sql="UPDATE TPHONE SET NUMBER='$_POST[sphone]' WHERE ID='$id' AND TYPE='S'";
if (!mysql_query($sql,$con))
{
die('Error Phone: ' . mysql_error());
}
}

if (!empty($_POST['pemail'])){
$sql="UPDATE TEMAIL SET EMAIL='$_POST[pemail]' WHERE ID='$id' AND TYPE='P'";
if (!mysql_query($sql,$con))
{
die('Error Email: ' . mysql_error());
}
}

if (!empty($_POST['semail'])){
$sql="UPDATE TEMAIL SET EMAIL='$_POST[semail]' WHERE ID='$id' AND TYPE='S'";
if (!mysql_query($sql,$con))
{
die('Error Email: ' . mysql_error());
}
}

header("location:teach.php");

mysql_close($con)
?>
