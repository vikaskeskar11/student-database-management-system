<?php

$con = mysql_connect("localhost","root","MANI28ADMIN");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
mysql_select_db("DBMS", $con);
/*$query = mysql_query("SELECT * FROM DEPARTMENT");
$array = array();
while($row = mysql_fetch_assoc($query)){
  $array[] = $row;
}*/
$t=0;
session_start();

//$id=(int)$_COOKIE["user"];
$id=(int)$_SESSION['id'];
//foreach($array as $value)
/*for($x=0;$x<count($array);$x++)
if($_POST['dname']==$array[$x]['NAME'])
$_POST['dname']=$array[$x]['ID'];
*/
$sql=mysql_query("SELECT DID FROM TEACHER WHERE ID='$id'");
while($row=mysql_fetch_array($sql))
$did=$row['DID'];

if($_POST['gender']=="MALE")
$_POST['gender']="M";
elseif($_POST['gender']=="FEMALE")
$_POST['gender']="F";

$sql="INSERT INTO STUDENT(ID,ROLL,FIRSTNAME,MIDNAME,LASTNAME,DOB,GENDER,FFN,FMN,FLN,MFN,MMN,MLN,DID,PASSWORD,SEM,YEAR)
VALUES
('$_POST[id]',ucase('$_POST[roll]'),ucase('$_POST[firstname]'),ucase('$_POST[middlename]'),ucase('$_POST[lastname]'),'$_POST[dob]',ucase('$_POST[gender]'),ucase('$_POST[firstnamef]'),ucase('$_POST[middlenamef]'),
ucase('$_POST[lastnamef]'),ucase('$_POST[firstnamem]'),ucase('$_POST[middlenamem]'),ucase('$_POST[lastnamem]'),
'$did',ucase('$_POST[id]'),'$_POST[sem]','$_POST[year]')";
if (!mysql_query($sql,$con))
{
$t=1;
die("Error Encoutered<br><a href='student.html'>Go back</a>");

}


//if($t==1)
//{
//echo "";
//}
if($t==0)
{
if (!empty($_POST['pphone'])){
$sql="INSERT INTO SPHONE(ID,NUMBER,TYPE)
VALUES
('$_POST[id]','$_POST[pphone]','P')";
if (!mysql_query($sql,$con))
{
die('Error Phone: ' . mysql_error());
}
}

if (!empty($_POST['sphone'])){
$sql="INSERT INTO SPHONE(ID,NUMBER,TYPE)
VALUES
('$_POST[id]','$_POST[sphone]','S')";
if (!mysql_query($sql,$con))
{
die('Error Phone: ' . mysql_error());
}
}

if (!empty($_POST['pemail'])){
$sql="INSERT INTO SEMAIL(ID,EMAIL,TYPE)
VALUES
('$_POST[id]','$_POST[pemail]','P')";
if (!mysql_query($sql,$con))
{
die('Error Email: ' . mysql_error());
}
}

if (!empty($_POST['semail'])){
$sql="INSERT INTO SEMAIL(ID,EMAIL,TYPE)
VALUES
('$_POST[id]','$_POST[semail]','S')";
if (!mysql_query($sql,$con))
{
die('Error Email: ' . mysql_error());
}
}

$sql="INSERT INTO ADDRESS(ID,LINE1,LINE2,PO,PIN,CITY,STATE,COUNTRY)
VALUES
(ucase('$_POST[id]'),ucase('$_POST[line1]'),ucase('$_POST[line2]'),ucase('$_POST[po]'),ucase('$_POST[pin]'),ucase('$_POST[city]'),ucase('$_POST[state]'),ucase('$_POST[country]'))";
if (!mysql_query($sql,$con))
{
die('Error Address: ' . mysql_error());
}

}

echo "1 record added";
echo "<a href='../dash/hod.php'>Go back</a>";
mysql_close($con)
?>