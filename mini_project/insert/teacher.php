<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
session_start();

//$id=(int)$_COOKIE["user"];
$id=(int)$_SESSION['id'];
if(!$con)
{
	die('Could Not Connect: '. mysql_error());
}
$t=0;
mysql_select_db("dbms",$con);
if($_POST['gender']=="MALE")
$_POST['gender']="M";
elseif($_POST['gender']=="FEMALE")
$_POST['gender']="F";

if($_POST['designation']=="Assistant Professor")
$_POST['designation']="A";
//else if($_POST['designation']=="Director")
//$_POST['designation']="D";
//else if($_POST['designation']=="Head of Department")
//$_POST['designation']="H";
else if($_POST['designation']=="Lecturer")
$_POST['designation']="L";
else if($_POST['designation']=="Professor")
$_POST['designation']="P";

$sql=mysql_query("SELECT DID FROM TEACHER WHERE ID='$id'");
while($row=mysql_fetch_array($sql))
$did=$row['DID'];

/*if($_POST['dname']=="Applied Mecanics & Hydrolics")
$_POST['dname']="AM";
else if($_POST['dname']=="Chemical Engineering")
$_POST['dname']="CE";
else if($_POST['dname']=="Chemistry")
$_POST['dname']="CO";
else if($_POST['dname']=="Civil Engineering")
$_POST['dname']="CV";
else if($_POST['dname']=="Computer Science")
$_POST['dname']="CY";
else if($_POST['dname']=="Electronics & Communication Engineering")
$_POST['dname']="EC";
else if($_POST['dname']=="Electrical & Electronics Engineering")
$_POST['dname']="EE";
else if($_POST['dname']=="Humanities")
$_POST['dname']="HU";
else if($_POST['dname']=="Information Technology")
$_POST['dname']="IT";
else if($_POST['dname']=="Mathematical And Computation")
$_POST['dname']="MC";
else if($_POST['dname']=="Mechanical Engineering")
$_POST['dname']="ME";
else if($_POST['dname']=="Mining Engineering")
$_POST['dname']="MN";
else if($_POST['dname']=="Metallurgical & Material Engineering")
$_POST['dname']="MT";
else if($_POST['dname']=="Physics")
$_POST['dname']="PH";
*/

$sql="INSERT INTO TEACHER(ID,FIRSTNAME,MIDNAME,LASTNAME,GENDER,DID,DESIGNATION,PASSWORD)
VALUES
(ucase('$_POST[tid]'),ucase('$_POST[firstname]'),ucase('$_POST[middlename]'),ucase('$_POST[lastname]'),ucase('$_POST[gender]'),
'$did',ucase('$_POST[designation]'),ucase('$_POST[tid]'))";
if (!mysql_query($sql,$con))
{
$t=1;
	die("Error Encoutered<br><a href='teacher.html'>Go back</a>");
}



if($t==0)
{
if (!empty($_POST['pphone'])){
$sql="INSERT INTO TPHONE(ID,NUMBER,TYPE)
VALUES
('$_POST[tid]','$_POST[pphone]','P')";
if (!mysql_query($sql,$con))
{
die('Error Phone: ' . mysql_error());
}
}

if (!empty($_POST['sphone'])){
$sql="INSERT INTO TPHONE(ID,NUMBER,TYPE)
VALUES
('$_POST[tid]','$_POST[sphone]','S')";
if (!mysql_query($sql,$con))
{
die('Error Phone: ' . mysql_error());
}
}

if (!empty($_POST['pemail'])){
$sql="INSERT INTO TEMAIL(ID,EMAIL,TYPE)
VALUES
('$_POST[tid]','$_POST[pemail]','P')";
if (!mysql_query($sql,$con))
{
die('Error Email: ' . mysql_error());
}
}

if (!empty($_POST['semail'])){
$sql="INSERT INTO TEMAIL(ID,EMAIL,TYPE)
VALUES
('$_POST[tid]','$_POST[semail]','S')";
if (!mysql_query($sql,$con))
{
die('Error Email: ' . mysql_error());
}
}


/*$sql="INSERT INTO EMAIL(ID,PEMAIL,SEMAIL)
VALUES
('$_POST[tid]','$_POST[pemail]','$_POST[semail]')";
if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}
$sql="INSERT INTO PHONE(ID,PNUMBER,SNUMBER)
VALUES
('$_POST[tid]','$_POST[pphone]','$_POST[sphone]')";
if (!mysql_query($sql,$con))
{
	die('Error: ' . mysql_error());
}*/

}
echo "1 record added<br><a href='../dash/hod.php'>Go back</a>";
mysql_close($con)
?>