<?php
$con=mysql_connect("localhost","root","MANI28ADMIN");
if(!$con)
{
	die("Could not connect".mysql_error());
}
mysql_select_db("DBMS",$con);

$sql="
CREATE TRIGGER INS_STUD_TRIG BEFORE INSERT 
		ON STUDENT
		FOR EACH ROW BEGIN
		IF (NEW.GENDER!='F' AND NEW.GENDER!='M')
		THEN
		SIGNAL SQLSTATE '20000' SET MESSAGE_TXT='INVALID GENDER FIELD ERROR';
		
		END IF;
		END; 
		";

if(!mysql_query($sql,$con))
die(mysql_error());
mysql_close($con);
?>