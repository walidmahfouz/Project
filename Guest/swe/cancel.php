
<!DOCTYPE html> 
<?php
include'guest.php';
$guest=new guest;
if($_SERVER['REQUEST_METHOD']=='POST')
{
   if(isset($_POST['Ssn']))
      {
      	    $s=$_POST['Ssn'];

      	$guest->cancel_trip($s);
      }

}

?>
<html>
<head>


<title>Guest | cancel trip</title>
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
		<h1 class="w3layouts_head">Cancel Trip </h1>
		<div class="w3layouts_main_grid">
			<form action="<?php $_SERVER['PHP_SELF']?>" method="post" class="w3_form_post">
				
					<div class="w3_agileits_main_grid w3l_main_grid">
					<div class="agileits_grid">
						<h5>SSN </h5>
							<input type="text" name="Ssn" placeholder="ex:29700000000000" required="">
					</div>
				</div>

				
				
				<div class="w3_main_grid">
					
					<div class="w3_main_grid_right">
						<input type="submit" value="cancel&save" name="canceltrip">
					</div>
					<div class="clear"> </div>
				</div>
			</form>
		</div>
		<!-- Calendar -->
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