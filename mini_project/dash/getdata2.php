<?php
$q = intval($_GET['q']);
$id=(int)$_COOKIE["user"];
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);



if($q<9)
{
$sql=mysql_query("SELECT S.CODE CODE,S.NAME NAME,S.CATEGORY CATEGORY,S.CREDIT CREDIT,P.POINTER POINTER FROM
					(SELECT CODE,POINTER FROM RESULT WHERE SID='$id' AND SEM='$q') AS P LEFT JOIN
					SUBJECT AS S ON P.CODE=S.CODE");




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

  $sql=mysql_query("SELECT SUM(S.CREDIT) CREDIT,SUM(S.CREDIT*P.POINTER) POINTER FROM
					(SELECT CODE,POINTER FROM RESULT WHERE SID='$id' AND SEM='$q') AS P LEFT JOIN
					SUBJECT AS S ON P.CODE=S.CODE");

					
while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  
  echo "<td><label>TOTAL:</label></td><td><label></label></td>";
  echo "<td><label></label></td>";
  echo "<td><label></label></td>";
  echo "<td><label>" . $row['CREDIT'] . "</label></td>";
  if($row['CREDIT']!=0)
	echo "<td><label>" . $row['POINTER']*1.00/$row['CREDIT'] . "</label></td>";
   
  echo "</tr>";
  }					

  
  echo "</table>";
}

else{
$i=1;
$sql=mysql_query("SELECT SUM(S.CREDIT) CREDIT,SUM(S.CREDIT*P.POINTER) POINTER FROM
					(SELECT SEM,CODE,POINTER FROM RESULT WHERE SID='$id' AND SEM<(SELECT SEM FROM STUDENT WHERE ID='$id')) AS P LEFT JOIN
					SUBJECT AS S ON P.CODE=S.CODE GROUP BY P.SEM");

					
	echo "<table>
					<tr>
					
					<th><label></label></th>
					<th><label>SEM</label></th>
					<th><label>CREDIT</label></th>
					<th><label>RESULT</label></th>
					<th><label></label></th>
					
					</tr>";
					

while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  
  echo "<td><label></label></td><td><label>" . $i++ . "</label></td>";
  echo "<td><label>" . $row['CREDIT'] . "</label></td>";
  echo "<td><label>" . $row['POINTER']*1.00/$row['CREDIT'] . "</label></td>";
  echo "<td><label></label></td>";
   
  echo "</tr>";
  }
  $sql=mysql_query("SELECT SUM(S.CREDIT) CREDIT,SUM(S.CREDIT*P.POINTER) POINTER FROM
					(SELECT CODE,POINTER FROM RESULT WHERE SID='$id' AND SEM<(SELECT SEM FROM STUDENT WHERE ID='$id')) AS P LEFT JOIN
					SUBJECT AS S ON P.CODE=S.CODE");
  
  while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  
  echo "<td><label>TOTAL</label></td><td><label></label></td>";
  echo "<td><label>" . $row['CREDIT'] . "</label></td>";
  echo "<td><label>" . $row['POINTER']*1.00/$row['CREDIT'] . "</label></td>";
  echo "<td><label></label></td>";
   
  echo "</tr>";
  }
  
  
echo "</table>";					
}


mysql_close($con);
?>