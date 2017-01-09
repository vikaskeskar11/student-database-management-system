<?php
$q = intval($_GET['q']);
$id=(int)$_COOKIE["user"];
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);



$sql=mysql_query("SELECT DID FROM TEACHER WHERE ID='$id'");

while($row=mysql_fetch_array($sql))
{
$did=$row['DID'];
}

$sql=mysql_query("SELECT CODE FROM RESULT WHERE SUBSTR(CODE,1,2)='$did' AND SEM='$s' AND SID in(SELECT ID FROM STUDENT WHERE YEAR='$q') ");


$i=0;
while($row=mysql_fetch_array($sql))
{
$array[$i++]=$row['CODE'];
}

$sql=mysql_query("SELECT R.SID,R.POINTER FROM (SELECT SID,POINTER FROM RESULT WHERE CODE='') R FULL JOIN (SELECT SID,POINTER FROM RESULT WHERE CODE='') S
ON R.SID=S.SID ");


$sql=mysql_query();

					echo "<table>
					<tr>
					
					<th><label></label></th>
					<th><label>CODE</label></th>
					<th><label>NAME</label></th>
					<th><label>CATEGORY</label></th>
					<th><label>CREDIT</label></th>
					<th><label>RESULT</label></th>
					
					</tr>";
					

while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  
  echo "<td><label></label></td><td><label>" . $row['CODE'] . "</label></td>";
  echo "<td><label>" . $row['NAME'] . "</label></td>";
  echo "<td><label>" . $row['CATEGORY'] . "</label></td>";
  echo "<td><label>" . $row['CREDIT'] . "</label></td>";
	echo "<td><label>" . $row['POINTER'] . "</label></td>";
   
  echo "</tr>";
  }




mysql_close($con);
?>