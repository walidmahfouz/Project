<?php 

include'reservation.php';
 include'guest.php';
$guest=new guest;
$reservation=new Reservation;
?> 
<!DOCTYPE html>

<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
   if(isset($_POST['category']))
      {
      	   $eo =$_POST['EO'];
      	    $eb=$_POST['EB'];
      	    $m=$_POST['mail'];
      	    $s=$_POST['SsN'];
      	    $c=$_POST['category'];
      	    $c1=$_POST['category1'];
      	    $dr=$_POST['DATE_IN_R'];
      	    $dc=$_POST['DATE_IN_C'];
      	    $do=$_POST['date_out'];
      	    $c2=$_POST['category2'];
      	    $c3=$_POST['category3'];


      $reservation->InsertReservation($do,$c,$dc,$c2,$c3,$c1,$eo,$eb,$s,$dr,$m);
      }

}


?>



<html>
<head>
<title>Guest|make reservation</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classy Hotel Booking Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- js -->
<script src="js/jquery-2.1.3.min.js" type="text/javascript"></script>
<!-- //js -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="main">
		<h1 class="w3layouts_head">make reservation</h1>
		<div class="w3layouts_main_grid">
			<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" class="w3_form_post">
				<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">

						<h5>extra</h5>

						
						<div class="nam">
							<input type="text" name="EO" placeholder="Extra Order" required="">
						</div>
						<div class="nam1">
							<input type="text" name="EB" placeholder="Extra Bed" required="">
						</div>

						<div class="clear"></div>

					</div>
				</div>
  						<div class="clear"></div>
                    <h5>email</h5>
				<div class="nam1">
							<input type="email" name="mail" placeholder="Email" required="">
						</div>

						  						<div class="clear"></div>



						<div class="w3_agileits_main_grid w3l_main_grid">
												<div class="agileits_grid">


				<h5> SSN * </h5>
					    	<input type="text" name="SsN" placeholder="SSN number" required="">

						</div>
					</div>
				
				<div class="agileits_main_grid w3_agileits_main_grid">
					<div class="wthree_grid">
						<h5>Room Type</h5>
						<select id="category" name="category" >
							<option value="Single Room">Single Room</option>
							<option value="Double Room">Double Room</option>
							<option value="Tripple Room">Tripple Room</option>
							
						</select>
					</div>
				</div>
										<div class="clear"> </div>

				 	<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of rooms *</h5>
						<select id="category1" name="category1">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
						</select>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Reservation Date*</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input class="date" id="datepicker" name="DATE_IN_R" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check In  *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input name="DATE_IN_C" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '13/8/2016';}" required="">
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileits_w3layouts_main_grid w3ls_main_grid">
					<div class="agileinfo_grid">
					<h5>Check Out  *</h5>
						
						<div class="agileits_w3layouts_main_gridl">
							<input  name="date_out" type="date" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '08/13/2016';}" required="">
						</div>
						
						<div class="clear"> </div>
					</div>
				</div>
				<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of adults *</h5>
						<select id="category1" name="category2">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				 	<div class="clear"> </div>

				 	<div class="agileinfo_main_grid">
					<div class="agileits_w3layouts_grid">
						<h5>Number of kids *</h5>
						<select id="category1" name="category3">
							<option value="0">0</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
						</select>
					</div>
				</div>
				<div class="clear"> </div>



				
				
				
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="Book Now">
					</div>
					<div class="clear"> </div>
				</div>
			</form>
		</div>
		<!-- Calendar -->

				
				
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="cancel&save" name="canceltrip">
					</div>
					<div class="clear"> </div>
				</div>
			</form>
		</div>
			<link rel="stylesheet" href="css/jquery-ui.css" />
			<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker,#datepicker1" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
		<div class="agileits_copyright">
			<p>© 2017 Classy Hotel Booking Widget. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
</body>
</html>