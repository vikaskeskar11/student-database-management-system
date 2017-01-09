<?php
$xy=$_POST["sid"];
$yz=$_POST["password"];
$con=mysql_connect("localhost","root","MANI28ADMIN");
$t=0;
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
mysql_select_db("dbms",$con);
$result=mysql_query("(SELECT ID,PASSWORD FROM STUDENT)");
$resultt=mysql_query("(SELECT ID,PASSWORD FROM TEACHER)");
while($row=mysql_fetch_array($result))
{
	//echo $row['sid'] . " " . $row['password'];
	//echo "<br />";
	
	if($row['ID']==$xy && $row['PASSWORD']==$yz)
	{
			//echo "login authenticated";
			setcookie("user",$xy,time()+3600);
			header("location:stu.php");
			$t=1;
	}
}
if($t==0)
{
	while($row=mysql_fetch_array($resultt))
{
	
	if($row['ID']==$xy && $row['PASSWORD']==$yz)
	{
			//echo "login authenticated";
			
			$sql=mysql_query("SELECT DESIGNATION FROM TEACHER WHERE ID='$xy'");
				while($row=mysql_fetch_array($sql))
				{
				$des=$row['DESIGNATION'];
				}
			setcookie("user",$xy,time()+3600);
			 if($des=='H')
			header("location:hod.php");
			else
			header("location:teach.php");
			$t=2;
	}
}
}

if($t==0)
{			header("location:login1.html");
}

mysql_close($con)
?>