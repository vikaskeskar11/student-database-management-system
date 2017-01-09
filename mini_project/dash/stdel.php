<?php
$id=(int)$_COOKIE["user"];
$t=0;
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);


				$sql=mysql_query("SELECT ID FROM STUDENT WHERE ID='$_POST[stdel]' AND DID=(SELECT DID FROM TEACHER WHERE ID='$id')");
				while($row=mysql_fetch_array($sql))
				{
					$t=1;
					
				}
				
				if($t==0)
				{
					die("No match found<br><a href='hod.php'>Try Again</a>");	
				
				}
				else{
					$sql=mysql_query("DELETE FROM ADDRESS WHERE ID='$_POST[stdel]'");
					
					$sql=mysql_query("DELETE FROM SEMAIL WHERE ID='$_POST[stdel]'");
					
					$sql=mysql_query("DELETE FROM SPHONE WHERE ID='$_POST[stdel]'");
					
					$sql=mysql_query("DELETE FROM RESULT WHERE ID='$_POST[stdel]'");
					
					$sql=mysql_query("DELETE FROM STUDENT WHERE ID='$_POST[stdel]'");

					echo "1 record deleted <br><a href='hod.php'>Go back</a>";
					}
					
					



mysql_close($con);
?>