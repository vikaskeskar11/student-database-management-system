<?php
$id=(int)$_COOKIE["user"];
$con=mysql_connect("localhost","root","helloworld");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);


$sql=mysql_query("SELECT r.sid SID,code,st.FIRSTNAME NAME,r.pointer POINTER,r.sem SEMESTER FROM
 result r,student st WHERE code=(SELECT s.code FROM SUBJECT s WHERE s.name='$q') AND st.id=r.sid");





$sql=mysql_query("UPDATE result set result='$r' where ");

echo "<table>
					<tr>
					
					<th><label>SERIAL</label></th>
					<th><label>SID</label></th>
					<th><label>NAME</label></th>
					<th><label>SEMESTER</label></th>
					<th><label>POINTER</label></th>
					<th><label>CHANGE POINTER</label></th>
					<th><label></label></th>
					</tr>";
					
mysql_close($con);
?>