<?php

$id=(int)$_COOKIE["user"];
//$code=$_COOKIE["code"];
$q=$_COOKIE["q"];

$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);
$sql=mysql_query("SELECT DID FROM TEACHER WHERE ID='$id'");
while($row=mysql_fetch_array($sql))
$did=$row['DID'];
$sql=mysql_query("SELECT r.sid SID,code,st.FIRSTNAME NAME,r.pointer POINTER,r.sem SEMESTER FROM
 result r,student st WHERE code=(SELECT s.code FROM SUBJECT s WHERE s.name='$q' AND SUBSTR(CODE,1,2)='$did') AND st.id=r.sid");

$i=1;
$t=0;
while($row=mysql_fetch_array($sql))
{
$t=1;
$cp='cpointer'.$i;
//echo $_POST[$cp];
if(($_POST[$cp])!="empty3")
{
if(($_POST[$cp])=="FF")
{
$sql1=("UPDATE RESULT SET POINTER=1 WHERE SID='$row[SID]' AND CODE='$row[code]'");
}
else if(($_POST[$cp])=="FA")
{
$sql1=("UPDATE RESULT SET POINTER=2 WHERE SID='$row[SID]' AND CODE='$row[code]'");
}
else
{
$sql1=("UPDATE RESULT SET POINTER='$_POST[$cp]' WHERE SID='$row[SID]' AND CODE='$row[code]'");
if(!mysql_query($sql1,$con))
die('ERROR in'.mysql_error());
}
}
$i++;
}

header("location:teaches.php");
mysql_close($con);

?>