<!DOCTYPE html>
<html>
<head>
    <title>Student</title>
    <script src="tabcontent.js" type="text/javascript"></script>
    <link href="template1/tabcontent.css" rel="stylesheet" type="text/css" />
</head>
<body style="background:#F6F9FC; font-family:Arial;">
    <div style="width: 500px; margin: 0 auto; padding: 120px 0 40px;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Profile</a></li>
            <li><a href="#view2">Edit</a></li>
			<li><a href="#view1">Sem Info</a></li>
            <li><a href="#view3">Result</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
					<?php
					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					
					$id=(int)$_COOKIE["user"];
					$sql=mysql_query("SELECT ID,FIRSTNAME,LASTNAME,SEM,DID,YEAR,ROLL from STUDENT WHERE ID='$id'");
					$sqlp=mysql_query("SELECT NUMBER,TYPE from SPHONE WHERE ID='$id'");
					$sqle=mysql_query("SELECT EMAIL,TYPE from SEMAIL WHERE ID='$id'");
					while($row=mysql_fetch_array($sql))
					{
					echo "HELLO, ".$row['FIRSTNAME']." ".$row['LASTNAME']."<br>";
					echo substr($row['YEAR'],-2).$row['DID'].$row['ROLL']."<br><br>";
					//echo "SEMESTER: ".$row['SEMESTER'];
					}
					
					while($row=mysql_fetch_array($sqlp))
					{
					if($row['TYPE']=='P')
					echo "PRIMARY PHONE NUMBER:".$row['NUMBER']."<br>";
					if($row['TYPE']=='S')
					echo "SECONDARY PHONE NUMBER:".$row['NUMBER']."<br><br>";
					}
					
					while($row=mysql_fetch_array($sqle))
					{
					if($row['TYPE']=='P')
					echo "PRIMARY EMAIL:".$row['EMAIL']."<br>";
					if($row['TYPE']=='S')
					echo "SECONDARY EMAIL:".$row['EMAIL']."<br><br>";
					}
					
				/*	$sql = mysql_query("SELECT * FROM DEPARTMENT");
					
					echo "<table border='1'>
					<tr>
					<th>ID</th>
					<th>NAME</th>
					</tr>";
					
					while($row = mysql_fetch_array($sql))
					{
						echo "<tr>";
						echo "<td>" . $row['ID'] . "</td>";
						echo "<td>" . $row['NAME'] . "</td>";
						echo "</tr>";
					}
					echo "</table>";
				*/mysql_close($con);	
				?>
                
            </div>
            <div id="view2">
                <b>Switch to other templates</b>
                <p>Open this page with Notepad, and update the CSS link to:</P>
                <p>template1 ~ 6.</p>                
            </div>
            <div id="view3">
                <b>Advanced</b>
                <p>We have an advanced version, <a href="http://www.menucool.com/jquery-tabs">McTabs - jQuery Tabs</a>, that is the most feature-rich Tabs.</p>
                <ul>
                    <li>Ajax content</li>
                    <li>Smooth transitional effect</li>
                    <li>Auto advance</li>
                    <li>Bookmark support: select a tab via bookmark anchor</li>
                    <li>URL support: a hash id in the URL can select a tab</li>
                    <li>Select tabs by mouse over</li>
                    <li>... and more</li>                    
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
