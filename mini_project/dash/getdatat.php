<?php
$q = ($_GET['q']);
//$R=intval($_GET['r']);

$id=(int)$_COOKIE["user"];
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);

$sql=mysql_query("SELECT DID FROM TEACHER WHERE ID='$id'");
while($row=mysql_fetch_array($sql))
$did=$row['DID'];
$sql=mysql_query("SELECT r.sid SID,r.code,st.FIRSTNAME NAME, st.LASTNAME LAST,r.pointer POINTER,r.sem SEMESTER FROM
 result r,student st WHERE code=(SELECT s.code FROM SUBJECT s WHERE s.name='$q' AND SUBSTR(CODE,1,2)='$did') AND st.id=r.sid");




					echo "<form action='tm.php' method='post'><table>
					
					<tr>
					
					<th><label>SERIAL</label></th>
					<th><label>SID</label></th>
					<th><label>NAME</label></th>
					<th><label>SEMESTER</label></th>
					<th><label>POINTER</label></th>
					<th><label>CHANGE POINTER</label></th>
					<th><label></label></th>
					</tr>";
					
$i=1;
$j=1;
while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  echo "<td><label>".$i."</label></td><td><label>" . $row['SID'] . "</label></td>";
  echo "<td><label>" . $row['NAME'] ." ".$row['LAST']. "</label></td>";
  echo "<td><label>" . $row['SEMESTER'] . "</label></td>";
  if($row['POINTER']==1)
  {
	$row['POINTER']="FF";
  }
  if($row['POINTER']==2)
  {
	$row['POINTER']="FA";
  }
  echo "<td><label>" . $row['POINTER'] . "</label></td>";
  $cp='cpointer'.$i;
  $i++;
  //echo "<td><label>" . $row['code'] . "</label></td>";
  echo "<td><label>
		<select name='".$cp."'>
		<option value='empty3'>-----select-----</option>
		<option value='1'>FF</option>
		<option value='2'>FA</option>
		<option value='4'>4</option>
		<option value='5'>5</option>
		<option value='6'>6</option>
		<option value='7'>7</option>
		<option value='8'>8</option>
		<option value='9'>9</option>
		<option value='10'>10</option>
		<select/></label></td>";
  
  //echo "<td><label><input type='text' name='pointer' pattern ='[ 9]'/> </label></td>";
  //echo "<td><label>" . $row['POINTER'] . "</label></td>";
    echo "<label></label>";
  echo "</tr>";
  }

echo "</table>";

setcookie("code",$row['code'],time()+3600);
setcookie("q",$q,time()+3600);
echo "<button class='submit' type='submit'>Update Result</button></form>";
mysql_close($con);
?>