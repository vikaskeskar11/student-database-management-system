 <!DOCTYPE html>

<html>
  <head>
    <title>Teacher</title>
    <link rel="stylesheet" type="text/css" href="themes/cupertino/jquery-ui-1.8.custom.css">
    <link rel="stylesheet" type="text/css" href="styles/core.css">
    <script type="text/javascript" src="scripts/jquery-1.4.js"></script>
    <script type="text/javascript" src="scripts/jquery-ui-1.8.custom.min.js"></script>
    <script type="text/javascript" src="scripts/jquery.themeswitcher.js"></script>
    <script type="text/javascript">
      $(function(){

        $('#chaptersAccordion').accordion({ animated: 'bounceslide', navigation: true });

      });
    </script>
	
<script Language="JavaScript">
function getXMLHTTPRequest() {
try {
req = new XMLHttpRequest();
} catch(err1) {
try {
req = new ActiveXObject("Msxml2.XMLHTTP");
} catch (err2) {
try {
req = new ActiveXObject("Microsoft.XMLHTTP");
} catch (err3) {
req = false;
}
}
}
return req;
}
var http = getXMLHTTPRequest();
function showData() {
var myurl = 'getdatat.php';
var one=document.getElementById('sname');
var sname=one.options[one.selectedIndex].value;
//var two=document.getElementById('cat');
//var cat=two.options[two.selectedIndex].value;
var modurl = myurl+"?q="+sname;
http.open("GET", modurl, true);
http.onreadystatechange = useHttpResponse;
http.send(null);
}


function useHttpResponse() {
if (http.readyState == 4) {
if(http.status == 200) {
var mytext = http.responseText;
document.getElementById('data').innerHTML = mytext;
}
} else {
document. getElementById('data').innerHTML = "";
}
}
</script>	
    <style type="text/css">
      #pageContainer {
        width: 888px;
        margin: 8px auto;
        border: 0 ridge #348007;
        background-color: transparent;
        text-align: center;
      }
      #chaptersAccordion {
        clear: both;
        width: 1000px;
        margin:32px 0 32px -100px;
        text-align: left;
      }
      .ui-accordion-header {
        padding: 0 4px;
      }
      .ui-accordion .ui-accordion-content {
        padding: 0;
      }
      .ui-accordion .ui-accordion-content ul {
        list-style: none;
        font-size: 1em;
        margin: 16px 32px;
        padding: 0;
      }
      .ui-accordion .ui-accordion-content li {
        margin: 0 0 3px 0;
        padding: 0;
      }
      .ui-accordion .ui-accordion-content ul li a {
        text-decoration: none;
        font-weight: bold;
      }
      .ui-accordion .ui-accordion-content ul li a:hover {
        color: #40ace4;
      }
	  
label {
    width:150px;
    margin-top: 3px;
    display:inline-block;
    padding:3px;
}






button.submit {
    background-color: #68b12f;
    background: -webkit-gradient(linear, left top, left bottom, from(#68b12f), to(#50911e));
    background: -webkit-linear-gradient(top, #68b12f, #50911e);
    background: -moz-linear-gradient(top, #68b12f, #50911e);
    background: -ms-linear-gradient(top, #68b12f, #50911e);
    background: -o-linear-gradient(top, #68b12f, #50911e);
    background: linear-gradient(top, #68b12f, #50911e);
    border: 1px solid #509111;
    border-bottom: 1px solid #5b992b;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    -ms-border-radius: 3px;
    -o-border-radius: 3px;
    box-shadow: inset 0 1px 0 0 #9fd574;
    -webkit-box-shadow: 0 1px 0 0 #9fd574 inset ;
    -moz-box-shadow: 0 1px 0 0 #9fd574 inset;
    -ms-box-shadow: 0 1px 0 0 #9fd574 inset;
    -o-box-shadow: 0 1px 0 0 #9fd574 inset;
    color: white;
    font-weight: bold;
    padding: 6px 20px;
    text-align: center;
    text-shadow: 0 -1px 0 #396715;
}
button.submit:hover {
    opacity:.85;
    cursor: pointer;
}
button.submit:active {
    border: 1px solid #20911e;
    box-shadow: 0 0 10px 5px #356b0b inset;
    -webkit-box-shadow:0 0 10px 5px #356b0b inset ;
    -moz-box-shadow: 0 0 10px 5px #356b0b inset;
    -ms-box-shadow: 0 0 10px 5px #356b0b inset;
    -o-box-shadow: 0 0 10px 5px #356b0b inset;
}


#myForm input:focus:invalid, #myForm textarea:focus:invalid { 
    background: #fff url(red.png) no-repeat 98% center;
    box-shadow: 0 0 5px #d45252;
    border-color: #b03535;
}




    </style>
  </head>

  <body class="fancy">

    <div id="pageContainer">
      <img src="images/nitk1.jpg">
      <div id="pageContent">
		<h2>NATIONAL INSTITUTE OF TECHNOLOGY, KARNATAKA</h2>
        <div id="chaptersAccordion">

            <h2>Profile</h2>
            <div>
              <ul>
                <li><?php
					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					
					$id=(int)$_COOKIE["user"];
					$sql=mysql_query("SELECT ID,FIRSTNAME,LASTNAME,DID,DESIGNATION from TEACHER WHERE ID='$id'");
					$sqld=mysql_query("SELECT name from department WHERE ID in (select did from teacher where id='$id')");
					$sqlp=mysql_query("SELECT NUMBER,TYPE from TPHONE WHERE ID='$id'");
					$sqle=mysql_query("SELECT EMAIL,TYPE from TEMAIL WHERE ID='$id'");
					//$sqla=mysql_query("SELECT * from ADDRESS WHERE ID='$id'");
					while($row=mysql_fetch_array($sql))
					{
					if($row['DESIGNATION']=='H')
					$row['DESIGNATION']='Head of Department';
					else if($row['DESIGNATION']=='A')
					$row['DESIGNATION']='Assistant Professor';
					else if($row['DESIGNATION']=='L')
					$row['DESIGNATION']='Lecturer';
					else if($row['DESIGNATION']=='P')
					$row['DESIGNATION']='Professor';
					echo "<h2>".$row['FIRSTNAME']." ".$row['LASTNAME']."<br></h2>";
					echo "<label>ID:</label>".$row['ID']."<br>";
					echo "<label>DESIGNATION:</label>".$row['DESIGNATION']."<br>";
					//echo "<label>SEMESTER:</label>".$row['SEM']."<br>";
					}
					while($row=mysql_fetch_array($sqld))
					{
					echo "<label>DEPARTMENT:</label>".$row['name']."<br>";
					}
					while($row=mysql_fetch_array($sqlp))
					{
					if($row['TYPE']=='P')
					echo "<label>PRIMARY PHONE:</label>".$row['NUMBER']."<br>";
					if($row['TYPE']=='S')
					echo "<label>SECONDARY PHONE:</label>".$row['NUMBER']."<br>";
					//break;
					}
					
					while($row=mysql_fetch_array($sqle))
					{
					if($row['TYPE']=='P')
					echo "<label>PRIMARY EMAIL:</label>".$row['EMAIL']."<br>";
					if($row['TYPE']=='S')
					echo "<label>SECONDARY EMAIL:</label>".$row['EMAIL']."<br>";
					//break;
					}
					
					//while($row=mysql_fetch_array($sqla))
					//{
					//echo "<label>ADDRESS</label>".$row['LINE1'].", ".$row['LINE2'].", ".$row['PO'].", ".$row['PIN'].", ".$row['CITY'].", ".$row['STATE'].", ".$row['COUNTRY']."<br>";
					//}
				mysql_close($con);	
				?></li>
                
              </ul>
            </div>

            <h2>Edit Personal Information</h2>
            <div>
              <ul>
                <li>
				<form id="myForm" action="tmodify.php" method="post">
				
					<h3>Email:</h3><br>
					<label>Primary:</label><input type="email" name="pemail" />
					<label>Secondary:</label><input type="email" name="semail" />
					<br>
					<h3>Phone:</h3><br><label>Primary:</label><input type="tel" name="pphone" pattern="[0-9]{10}"/>
					<label>Secondary:</label><input type="tel" name="sphone" pattern="[0-9]{10}"/><br>
					</li>
					<button class="submit" type="submit">Submit Form</button>
				</form>
<!------------------------------------------------------------------------------------------------------------------------------>



				</li>
                
                
              </ul>
            </div>

            <h2>Courses Offered</h2>
            <div>
              <ul>
                <li><?php
					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					
					$id=(int)$_COOKIE["user"];
					
					
					
					$sql=mysql_query("SELECT S.CODE CODE,S.NAME NAME,S.CREDIT CREDIT,S.CATEGORY CATEGORY FROM
					subject s where s.code in(select i.code from instructor i where i.tid='$id' )
					");
					
					echo "<table>
					<tr>
					<th><label>CODE</label></th>
					<th><label>COURSE NAME</label></th>
					<th><label>CREDIT</label></th>
					<th><label>CATEGORY</label></th>
					</tr>";
					while($row=mysql_fetch_array($sql))
					{
					echo "<tr>";
					if($row['CATEGORY']=='C')
						$row['CATEGORY']='Core';
						else if($row['CATEGORY']=='E')
						$row['CATEGORY']='Elective';
						echo "<td><label>" . $row['CODE'] . "</label></td>";
						echo "<td><label>" . $row['NAME'] . "</label></td>";
						echo "<td><label>" . $row['CREDIT'] . "</label></td>";
						echo "<td><label>" . $row['CATEGORY'] . "</label></td>";
						echo "</tr>";
					}
					echo "</table>";
				mysql_close($con);	
				?></li>
                
              </ul>
            </div>
<!-------------------------------------------------------------------------------------------------------------------------------->				
            <h2>Evaluation</h2>
            <div>
              <ul>
               
                <li>

				<?php

					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					
					$id=(int)$_COOKIE["user"];
					//$sql=mysql_query("SELECT SEM from STUDENT WHERE ID='$id'");
					
					$sql=mysql_query("SELECT S.NAME NAME FROM
					subject s where s.code in(select i.code from instructor i where i.tid='$id' )
					");
					$i=1;
					
					while($row=mysql_fetch_array($sql))
					{
					$aarray[$i]=$row['NAME'];
					$i++;
					}
					
					//options for subjects
					$j=0;
					echo "<label>SUBJECT:</label> <select name='subject' id='sname'";
					while($j<$i)
					{
					//echo $j;
					echo "<option value='".$aarray[$j]."'>".$aarray[$j++]."</option>";
					}
					echo "</select>";
					
					
					//echo "<label>Category:</label> <select name='cat' id='cat'>";
					//echo "<option value='1'>Core</option><option value='2'>Elective</option>";
					
					echo "</select>";
					echo "<button class='submit' type='submit' onclick='showData()'>Submit</button>";
					
					echo "<div id='data'></div>";
					
				mysql_close($con);	
				?>
					
				</li>
              </ul>
            </div>

            
			
			


        </div>

      </div>
    </div>

  </body>
</html>
