<?php
$q = intval($_GET['q']);
$id=(int)$_COOKIE["user"];
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);




$sql=mysql_query("SELECT S.CODE CODE,S.NAME NAME,S.CREDIT CREDIT,S.CATEGORY CATEGORY,T.FIRSTNAME FIRST,T.MIDNAME MID,T.LASTNAME LAST FROM
					(SELECT CODE,TID FROM RESULT WHERE SUBSTR(CODE,1,2)=(SELECT DID FROM TEACHER WHERE ID='$id') AND SEM='$q' AND SID IN 
					(SELECT ID FROM STUDENT WHERE SEM='$q' AND DID=(SELECT DID FROM TEACHER WHERE ID='$id')))
					AS P LEFT JOIN
					SUBJECT AS S ON P.CODE=S.CODE LEFT JOIN (SELECT ID,FIRSTNAME,MIDNAME,LASTNAME FROM TEACHER) AS T ON T.ID=P.TID group by p.code
					");




					echo "<table>
					<tr>
					
					<th><label></label></th>
					<th><label>CODE</label></th>
					<th><label>NAME</label></th>
					<th><label>CATEGORY</label></th>
					<th><label>CREDIT</label></th>
					<th><label>TEACHER</label></th>
					
					</tr>";
					

while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  
  echo "<td><label></label></td><td><label>" . $row['CODE'] . "</label></td>";
  echo "<td><label>" . $row['NAME'] . "</label></td>";
  echo "<td><label>" . $row['CATEGORY'] . "</label></td>";
  echo "<td><label>" . $row['CREDIT'] . "</label></td>";
	echo "<td><label>" . $row['FIRST'] .' '.$row['MID'].' '.$row['LAST']. "</label></td>";
   
  echo "</tr>";
  }

   
  echo "</table>";


mysql_close($con);
?>