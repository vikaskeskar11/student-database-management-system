 <!DOCTYPE html>

<html>
  <head>
    <title>HOD</title>
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
var myurl = 'hodt.php';
var one=document.getElementById('sem');
var sem=one.options[one.selectedIndex].value;
var modurl = myurl+"?q="+sem;
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
	
	
	<script Language="JavaScript">
function getXMLHTTPRequests() {
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
function showDatas() {
var myurl = 'hods.php';
var one=document.getElementById('id');
var id=one.value;
var modurl = myurl+"?q="+id;
http.open("GET", modurl, true);
http.onreadystatechange = useHttpResponses;
http.send(null);
}
function useHttpResponses() {
if (http.readyState == 4) {
if(http.status == 200) {
var mytext = http.responseText;
document.getElementById('datas').innerHTML = mytext;
}
} else {
document. getElementById('datas').innerHTML = "";
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
        
		<a href="teaches.php">Teaching Profile</a>
            
		<div id="chaptersAccordion">

            
            <h2>Add Department Information</h2>
            <div>
              <ul>
                <li><a href="../insert/student.html">Student</a></li>
                <li><a href="../insert/subject.html">Subject</a></li>
				<li><a href="../insert/teacher.html">Teacher</a></li>
              </ul>
            </div>
			
			  <h2>View Current Semester Information</h2>
            <div>
              <ul>
               
                <li>
				<?php

					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					
					$id=(int)$_COOKIE["user"];
					$sql=mysql_query("SELECT DID from TEACHER WHERE ID='$id'");

					while($row=mysql_fetch_array($sql))
					{
					$did=$row['DID'];
	
					}
					
					echo "<label>Semester:</label> <select name='sem' id='sem'>";
					for($i=1;$i<=8;$i++)
					{
					echo "<option value='".$i."'>".$i."</option>";
					}
					echo "</select>";
					
					
					echo "<button class='submit' onClick='showData()'>Submit</button>";
					echo "<div id='data'></div>";
					
				mysql_close($con);	
				?>
					
				</li>
              </ul>
            </div>

			<h2>View Student Information</h2>
            <div>
              <ul>
               
                <li>
				<?php

					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					session_start();
					$id=(int)$_COOKIE["user"];
					$_SESSION['id']=$id;
					
echo "<li><label id='r'>Id:</label><input type='text' name='id' id='id' placeholder='111381' required pattern='[0-9]{6}'/>";
					
					
					echo "<button class='submit' onClick='showDatas()'>Submit</button>";
					echo "<div id='datas'></div>";
					
				mysql_close($con);	
				?>
				</li>
				</ul>	
						
			  </div>
			  
			<!--  <h2>View Teacher Information</h2>
            <div>
              <ul>
               
                <li>
				</*?php

					$con = mysql_connect("localhost","root","MANI28ADMIN");
					mysql_select_db("DBMS", $con);
					
					$id=(int)$_COOKIE["user"];
					
					
echo "<li><label id='r'>Id:</label><input type='text' name='id' id='id' placeholder='12345' required pattern='[0-9]{5}'/>";
					
					
					echo "<button class='submit' onClick='showDatat()'>Submit</button>";
					echo "<div id='datas'></div>";
					
				mysql_close($con);	
				?>
				</li>
				</ul>	
						
			  </div>
			  -->
			  
			  <h2>Change Instructor</h2>
            <div>
              <ul>
               
                <li>
				
					<form id="myForm" action="imodify.php" method="post">
					<label id='r'>Subject Code:</label><input type='text' name='sub' id='sub' placeholder='IT123' required pattern='[a-z|A-Z]{2}[0-9]{3}'/><br>
					<label id='r'>Current Instructor Id:</label><input type='text' name='cid' id='cid' placeholder='12345'  pattern='[0-9]{5}'/><br>
					<label id='r'>New Instructor Id:</label><input type='text' name='nid' id='nid' placeholder='12345' required pattern='[0-9]{5}'/><br>
					<button class='submit' type='submit'>Submit</button>
					</form>
				
				
				</li>
              </ul>
            </div>
			
			<h2>Delete Student</h2>
            <div>
              <ul>
               
                <li>
				
					<form id="myForm" action="stdel.php" method="post">
					<label id='r'>Student Id:</label><input type='text' name='stdel' id='stdel' placeholder='111381' required pattern='[0-9]{1}[1-9]{5}'/><br>
					<button class='submit' type='submit'>Submit</button>
					</form>
				
				
				</li>
              </ul>
            </div>
			
			  
			  
			  

      </div>
    </div>

  </body>
</html>
