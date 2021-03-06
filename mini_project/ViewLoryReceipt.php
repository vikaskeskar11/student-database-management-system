<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">
<link href="css/input.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	

	<?php include 'header.php';?>
<?php include 'config.php';?>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main" >			
		<form action="ViewLoryReceipt.php" method="POST" name="myForm">
		
		<div class="row" >
			<div class="col-lg-12">
				<h2 class="page-header" style="color:#1F618D  ;">View Lory Receipt</h2>
			</div>
			
			
			
			<div class="col-lg-12" style="padding:20px;">
			
				
				<div class="col-lg-12" >
					
					<div class="col-lg-12" >
						
						<label class="col-md-1 control-label" for="name">LR NO. </label>
									<div class="col-md-2">
									<input  id="lrno"  name="lrno"  type="number"  class="form-control">
									</div>									
									<div class="form-group col-md-1">
									<button type="button" onClick="getDataOfPerson();" class="btn btn-primary">OK</button>
									<br>
									</div>	
									
									
									<label class="col-md-1 control-label" for="name">LR ID. </label>
									<div class="col-md-3">
									<input  id="lrid"  name="lrid"  type="number"   class="form-control">
									</div>
									
									
									
									<label class="col-md-2 control-label" for="name" align="center">LR DATE </label>
									<div class="col-md-2">
									<input  id="lrdate"  name="lrdate"  type="date"   class="form-control">
									<br>
									</div>
										
						</div>
						
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Vehicle </label>
									<div class="col-md-9">
									<input  id="vehicle"  name="vehicle"  type="text" placeholder="Vehical"  class="form-control">
									</div>
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
						
							
				
								</div>
					</div>	
				<br>
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Locations</h4>
					</div>
			
					
				
								
								
								
								<div class="col-md-12">
				
								
								
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">From</label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="citylist" id="lrfrom"  name="lrfrom"  type="text" placeholder="From"  class="form-control">';
									echo '<datalist id = "citylist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['city_name'].'</option>';
									}
							
									echo '</datalist>';
										}
										
									}
									?><br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message" align="center">To</label>
									<div class="col-md-4">
									<?php
									if($conn){
										$query = 'select city_name from cities';
										$result = mysqli_query($conn,$query);
										if(mysqli_num_rows($result)>0)
										{
									echo '<input  list="citylist" id="lrto"  name="lrto"  type="text" placeholder="To"  class="form-control">';
									echo '<datalist id = "citylist">';
									//echo '<option>Please Select Person</option>';
									while($row = mysqli_fetch_assoc($result))
									{	
										echo '<option>'.$row['city_name'].'</option>';
									}
							
									echo '</datalist>';
										}
										
									}
									
									?><br>
									</div>	
								</div>
								
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Distance</label>
									<div class="col-md-4">
									<input required type="number" placeholder="Distance in Kilo Meters" name="lrdistance" id="lrdistance" class="form-control">
									<br>
									</div>
									
									
								<div class="form-group">
									<label class="col-md-2 control-label" for="message">Days Required</label>
									<div class="col-md-4">
									<input required type="number" placeholder="days Rquired" name="lrdaysreq" id="daysreq" class="form-control">
									<br>
									</div>	
								</div>
										
					<br>
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Parties</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Consigner </label>
									<div class="col-md-9">
									<input  id="consigner"  name="consigner"  type="text" placeholder="consigner"  class="form-control">
									</div>
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
						
						<div class="form-group">
									<label class="col-md-1 control-label" for="name">Consignee </label>
									<div class="col-md-9">
									<input  id="consignee"  name="consignee"  type="text" placeholder="consignee"  class="form-control">
									</div>
									
									<div class="form-group col-md-2">
								<button type="submit" class="btn btn-primary">New</button>
								<br>
								</div>	
						</div>
					
							   
					
							
					
					
					
					<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Packaging</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Packages </label>
									<div class="col-md-2">
									<input  id="packages"  name="packages"  type="text" placeholder="packages"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name">Method </label>
									<div class="col-md-2">
									<select id="method" class="form-control" name="methods">
										<option>Nos.</option>
										<option>Kg</option>
										<option>Quintle</option>
									</select></div>
									
									<label class="col-md-2 control-label" for="name" align="center">Weight </label>
									<div class="col-md-2">
									<input  id="wt"  name="wt" placeholder="Weight" type="number"   class="form-control">
									<br>
									</div>
									<div class="col-md-2">
									<select class="form-control" name="local_district">
										<option>M.Tons</option>
										<option>Kg</option>
										<option>Quintle</option>
									</select><br>
									</div>
										
						</div>
						
						<div class="form-group">
									<label class="col-md-2 control-label" for="name">Descr. </label>
									<div class="col-md-10">
									<input  id="desc"  name="desc"  type="text" placeholder="Descr."  class="form-control">
									</div>
									
										
						</div>
					
							   
					
							
					<br>
					
						<div class="col-lg-12">
					<h4 class="page-header" style="color:#1F618D  ;">Invoice Information</h4>
					</div>
			
					
					<div class="form-group">
									<label class="col-md-2 control-label" for="name">Invoices </label>
									<div class="col-md-3">
									<input  id="inv1"  name="inv1"  type="text" placeholder="Invoice 1"  class="form-control">
									</div>
									<div class="col-md-2">
									<input  id="inv2"  name="inv2"  type="text" placeholder="Invoice 2"  class="form-control">
									</div>
									<div class="col-md-3">
									<input  id="inv3"  name="inv3"  type="text" placeholder="Invoice 3"  class="form-control">
									</div>
									<div class="col-md-2">
									<input  id="inv4"  name="inv4"  type="text" placeholder="Invoice 4"  class="form-control">
									<br>
									</div>
									
											   
					
							
					
					
					
					<div class="form-group">
									<label class="col-md-1 control-label" for="name">Quantity </label>
									<div class="col-md-3">
									<input  id="qty"  name="qty"  type="number" placeholder="Quantity"  class="form-control">
									</div>
									
									<label class="col-md-1 control-label" for="name"> </label>
									<div class="col-md-2">
									</div>
									
									<label class="col-md-2 control-label" for="name" align="center"> DATE </label>
									<div class="col-md-3">
									<input  id="date"   name="date"  type="date"   class="form-control">
									<br><br><br>
									</div>
										
						</div>		
					<div class="form-group">
					<br><br>
								<button type="submit" class="btn btn-primary" style="width:100px;">Ok</button>
								
								
								<button type="submit" class="btn btn-primary" style="width:100px;">Cancle</button>
								<br><br>
								</div>	
					
							   
					
					
					
					
					
					
				
				
							
		
			</div>	
			
			
			
			
			
			
		</div><!--/.row-->
		

	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})

 function getDataOfPerson() 
  {	
  var name=document.getElementById("lrno").value;
alert(name);
	if(name=="")
	{
		window.alert("Enter LR NO First");
	}else{
	$.ajax({                                      
      url: 'vehicle_support_file.php',                  //the script to call to get data          
      data: "lrno="+name,                        //you can insert url argumnets here to pass to api.php for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
		  
       
      //$('#output').html("<b>id: </b>"+id+"<b> name: </b>"+vname);//Set output element html
	   window.alert(data);
	  document.getElementById('lrid').value=data[0];
	  
	   document.getElementById('lrdate').value=data[2];
	   document.getElementById('vehicle').value=data[3];
	   document.getElementById('lrfrom').value=data[4];
	   document.getElementById('lrto').value=data[5];
	   document.getElementById('lrdistance').value=data[6];
	   document.getElementById('daysreq').value=data[7];
	   document.getElementById('consigner').value=data[8];
	   document.getElementById('consignee').value=data[9];
	   document.getElementById('packages').value=data[10];
	   document.getElementById('method').value=data[11];
	   document.getElementById('wt').value=data[12];
	    document.getElementById('desc').value=data[13];
	   document.getElementById('inv1').value=data[14];
	   document.getElementById('inv2').value=data[15];
	   document.getElementById('inv3').value=data[16];
	   document.getElementById('inv4').value=data[17];
	   document.getElementById('qty').value=data[18];
	   document.getElementById('date').value=data[19];
	  
	   

	  } 
    });
 
}
  	
  }

	</script>	
</body>

</html>
