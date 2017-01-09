<?php
$q = intval($_GET['q']);
$id=(int)$_COOKIE["user"];
$t=0;
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);



					$sql=mysql_query("SELECT ID,FIRSTNAME,LASTNAME,DID,SEM,YEAR,ROLL from STUDENT WHERE ID='$q' AND DID=(SELECT DID FROM TEACHER WHERE ID='$id')");
					$sqlp=mysql_query("SELECT NUMBER,TYPE from SPHONE WHERE ID='$q'");
					$sqle=mysql_query("SELECT EMAIL,TYPE from SEMAIL WHERE ID='$q'");
					$sqla=mysql_query("SELECT * from ADDRESS WHERE ID='$q'");
					while($row=mysql_fetch_array($sql))
					{
					$t=1;
					echo "<label>NAME:</label> ".$row['FIRSTNAME']." ".$row['LASTNAME']."<br>";
					echo "<label>ID:</label>".$row['ID']."<br>";
					echo "<label>ROLL:</label>".substr($row['YEAR'],-2).$row['DID'].$row['ROLL']."<br>";
					echo "<label>SEMESTER:</label>".$row['SEM']."<br>";
					$sem=$row['SEM'];
					}
					
					if($t==1)
					{
					while($row=mysql_fetch_array($sqlp))
					{
					if($row['TYPE']=='P')
					echo "<label>PRIMARY PHONE:</label>".$row['NUMBER']."<br>";
					if($row['TYPE']=='S')
					echo "<label>SECONDARY PHONE:</label>".$row['NUMBER']."<br>";
					}
					
					while($row=mysql_fetch_array($sqle))
					{
					if($row['TYPE']=='P')
					echo "<label>PRIMARY EMAIL:</label>".$row['EMAIL']."<br>";
					if($row['TYPE']=='S')
					echo "<label>SECONDARY EMAIL:</label>".$row['EMAIL']."<br>";
					}
					
					while($row=mysql_fetch_array($sqla))
					{
					echo "<label>ADDRESS</label>".$row['LINE1'].", ".$row['LINE2'].", ".$row['PO'].", ".$row['PIN'].", ".$row['CITY'].", ".$row['STATE'].", ".$row['COUNTRY']."<br>";
					}
					echo "<label>RESULT</label><br><br>";
					for($i=1;$i<$sem;$i++)
					{
					echo "<label>Semester '$i'</label><br>";
					
					$sql=mysql_query("SELECT S.CODE CODE,S.NAME NAME,S.CATEGORY CATEGORY,S.CREDIT CREDIT,P.POINTER POINTER FROM
					(SELECT CODE,POINTER FROM RESULT WHERE SID='$q' AND SEM='$i') AS P LEFT JOIN
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
					(SELECT CODE,POINTER FROM RESULT WHERE SID='$q' AND SEM='$i') AS P LEFT JOIN
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
					
					
					
					
					
					
					
					
					
					
					
					
					}
					
					else{
					echo "No match found";
					}




mysql_close($con);
?>