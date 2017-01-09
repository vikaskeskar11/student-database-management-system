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



					$sql=mysql_query("SELECT ID,FIRSTNAME,LASTNAME,DID,ROLL from STUDENT WHERE ID='$q' AND DID=(SELECT DID FROM TEACHER WHERE ID='$id')");
					$sqlp=mysql_query("SELECT NUMBER,TYPE from SPHONE WHERE ID='$q'");
					$sqle=mysql_query("SELECT EMAIL,TYPE from SEMAIL WHERE ID='$q'");
				
					while($row=mysql_fetch_array($sql))
					{
					$t=1;
					echo "<label>NAME:</label> ".$row['FIRSTNAME']." ".$row['LASTNAME']."<br>";
					echo "<label>ID:</label>".$row['ID']."<br>";
					echo "<label>ROLL:</label>".substr($row['YEAR'],-2).$row['DID'].$row['ROLL']."<br>";
					echo "<label>SEMESTER:</label>".$row['SEM']."<br>";
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
					
					
					}
					
					else{
					echo "No match found";
					}




mysql_close($con);
?>