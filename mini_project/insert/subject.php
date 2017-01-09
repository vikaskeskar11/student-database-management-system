<?php
session_start();

//$id=(int)$_COOKIE["user"];
$id=(int)$_SESSION['id'];
$con=mysql_connect("localhost","root","MANI28ADMIN");
$t=0;
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}

mysql_select_db("dbms",$con);
$sql=mysql_query("SELECT DID FROM TEACHER WHERE ID='$id'");
while($row=mysql_fetch_array($sql))
$did=$row['DID'];
$sql="INSERT INTO SUBJECT(CODE, NAME, CREDIT, CATEGORY, DID)
VALUES
('$_post[scode]','$_post[sname]','$_post[Credit]','$_post[Category]','$did')";
if (!mysql_query($sql,$con))
{
	die("Error Encoutered<br><a href='subject.html'>Go back</a>");
	$t=1;
	}
if($t==0)
{	
$sql="INSERT INTO INSTRUCTOR(CODE,TID)
VALUES
('$_post[scode]','$_post[tid]')";
if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
echo "1 record added<br><a href='../dash/hod.php'>Go back</a>";
}
mysql_close($con)
?>