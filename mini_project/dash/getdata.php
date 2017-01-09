<?php
$q = intval($_GET['q']);
$R=intval($_GET['r']);
$id=(int)$_COOKIE["user"];
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);

if($R==1)
{
$r='C';
}
else if($R==2)
{
$r='E';
}
if($q%2!=0)
{
$p=($q+1)/2;
$p=$p*10;
}
else
{
$p=$q/2;
$p=$p*10+5;
}
$p=$p*10;
$m=$p+50;
//$p="%%".$p."%";

$sql=mysql_query("SELECT CODE,NAME,CREDIT FROM SUBJECT WHERE DID=(SELECT DID FROM STUDENT WHERE ID='$id') AND SUBSTR(CODE,3,3)<'$m' AND SUBSTR(CODE,3,3)>='$p' AND CATEGORY='$r'");




					echo "<table>
					<tr>
					<th><label></label></th>
					<th><label>SERIAL</label></th>
					<th><label>CODE</label></th>
					<th><label>NAME</label></th>
					<th><label>CREDIT</label></th>
					<th><label></label></th>
					</tr>";
					
$i=1;
while($row=mysql_fetch_array($sql))
{
  echo "<tr>";
  
  echo "<td><label></label></td><td><label>".$i++."</label></td><td><label>" . $row['CODE'] . "</label></td>";
  echo "<td><label>" . $row['NAME'] . "</label></td>";
  echo "<td><label>" . $row['CREDIT'] . "</label></td>";
    echo "<label></label>";
  echo "</tr>";
  }

echo "</table>";


mysql_close($con);
?>