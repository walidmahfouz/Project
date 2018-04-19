<!DOCTYPE html>
<?php

include 'guest.php';

include'trip.php';
include'offer.php';
$trip=new Trip;
if($_SERVER['REQUEST_METHOD'])
{
    if(isset($_POST['gg']))
    {
        $guest=$_POST['gg'];
        $Trip=$_POST['tt'];
        $a=0;
        $trip->bookThisTrip($guest,$Trip,$a);


    }
}
        


                

                $offer=new offers;
 if($_SERVER['REQUEST_METHOD'])
{
    if(isset($_POST['go']))
    {
        $guest=$_POST['go'];
        $Trip=$_POST['to'];
        $a=0;

       // $offer->BookThisOffer($Trip,$guest,$a);


    }
}



?>

<html dir="ltr" lang="en-US">
    <!--<![endif]-->
    <head>
        
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width" />
        
        <title>Guest | Home</title>
        <style>
            .cont>div{
                width: 0%;
                float: left;

            }


        </style>
        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico" />
        <link rel="icon" type="image/x-icon" href="images/favicon.ico" />
        <!-- [favicon] end --> 
        
        <!-- CSS Main -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 960px)" href="css/lessthen960.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="css/lessthen600.css" />
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 480px)" href="css/lessthen480.css" />
        <link rel="stylesheet" type="text/css" media="all" href="css/memento.css"  />
        
        <!-- CSS Plugin -->
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all" />
        <link rel="stylesheet" href="css/tipsy.css" type="text/css" media="all" />
        <link rel='stylesheet' href='css/buttons.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/labels.min.css' type='text/css' media='all' />
		<link rel='stylesheet' href='css/wells.min.css' type='text/css' media='all' />
        
        <!-- CSS Slider -->
        <link rel="stylesheet" href="css/slider-thumbnails.css" type="text/css" media="all" />
        
        <link rel="stylesheet" type="text/css" media="all" href="css/homes/home.css" />
        
        <link rel='stylesheet' href='css/slider-elastic.css' type='text/css' media='all' />
        

        <!-- FONTS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans&amp;subset=latin%2Ccyrillic%2Cgreek&amp;ver=3.4.1" type="text/css" media="all" />
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Shadows+Into+Light&amp;subset=latin%2Ccyrillic%2Cgreek&amp;ver=3.4.1" type="text/css" media="all" />
        <link rel='stylesheet' href='http://yourinspirationweb.com/demo/memento/wp-content/themes/memento/core/includes/css/font-awesome.css?ver=3.4.1' type='text/css' media='all' />
        <link rel='stylesheet' href='http://yourinspirationweb.com/demo/memento/wp-content/themes/memento/fonts/socialico/stylesheet.css?ver=3.4.1' type='text/css' media='all' />
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed%3A300%7CPlayfair+Display%3A400italic&#038;ver=3.4.1' type='text/css' media='all' />
        
        <!-- JavaScripts -->
        <script type="text/javascript">
            var yiw_prettyphoto_style = 'pp_default';
        </script>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery.cycle.min.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="js/jquery.tipsy.js"></script>
        <script type="text/javascript" src="js/jquery.tweetable.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.min.js"></script>
        <script type="text/javascript" src="js/jquery.aw-showcase.js"></script>
        <script type="text/javascript" src="js/superfish.js"></script>
        <script type='text/javascript' src="js/jquery.eislideshow.js"></script>
        <script type='text/javascript' src="js/swfobject.js"></script>
        <script type='text/javascript' src='js/jquery.cookie.js'></script>
        <script type='text/javascript' src='js/buttons.min.js'></script>
        <script type='text/javascript' src='js/layerslider.kreaturamedia.jquery-min.js'></script>
        <script type='text/javascript' src='js/jquery.quicksand.js'></script>
        
    </head>
    <body class="no_js responsive boxed-layout chrome ">
        
        <!-- TOPBAR -->
        <div id="topbar">
            <div class="inner group">
                
                <div class="topbar-left">
                    <!-- START TWITTER -->
                    <div id="twitter-slider" class="group">
                        <div class="tweets-list"></div>
                        <script type="text/javascript" src="js/twitter.js" ></script>	
                    </div>
                    <!-- END TWITTER -->
                </div>
                
                <div class="topbar-right">
                    <ul class="topbar-level-1">
                        <li>
                            <ul class="sub-menu">
                                <li><a href="#">And submenu</a></li>
                                <li><a href="#"><i class="icon-home"></i>with icons</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                
            </div>
        </div>
        <!-- END TOPBAR -->
        
        <!-- START WRAPPER -->
        <div class="wrapper group">
            <!-- START HEADER -->
            <div id="header" class="group">
                <div class="group inner">
                    
                    <!-- START LOGO -->
                    <div id="logo" class="group">
                        <h1>
                            <a href="home.php" class="logo-text">Sunset Hotel</a>                        
                        </h1>
                        <p>Sharm El-Sheikh Resort</p>
                    </div>
                    <!-- END LOGO -->  
                    
                    <!-- START NAV -->
                    <div id="nav" class="group">
                        <ul id="menu-main-nav" class="level-1">
                            

                            
                            <li>
                              <a href="Home.php">home</a>
                               
                            </li>



                            <li>
                                <a target="_blank" href="book.php">reserve rooms</a>
                            </li>

                             <li>
                                <a target="_blank" href="delete_reservation.php">delete reservation</a>
                            </li>


                            <li>
                                <a href="cancel.php" target="_blank">cancel trip</a>
                            </li>

                            <li>
                                <a target="_blank" href="Gedit.php" >account settings</a>
                            </li>

                             <li>
                                <a target="_blank"  href="feedback.php">send feedback</a>
                            </li>

                            <li>
                                <a href="######">log out </a>
                            </li>


             
                            
                            
                        </ul>
                    </div>
                    <!-- END NAV -->     
                </div>
            </div>
            <!-- END HEADER -->
        
            <!-- SLIDER -->
         	<div id="slider" class="ei-slider elastic">
			    
			    <div class="ei-slider-loading">Loading</div>
			    
			    <ul class="ei-slider-large">
			        <li class="last slide-3 slide align- image-content-type">
                        <a ><img src="images/slider-elastic/cropped-0012.jpg" width="1000" height="338" alt="" /></a>
                        <div class="ei-title">
                        </div>
                    </li> 

                    <li class="first slide-1 slide align- image-content-type">
			            <img src="images/slider-elastic/sci1.jpg" width="1920" height="400" alt="Love the sport" />
			            <div class="ei-title">
			                <h2>Enjoy Our Trips</h2>
			                <h3>..feel the music</h3>
			            </div>
			        </li> 

			        <li class="slide-2 slide align- image-content-type">
			            <img src="images/slider-elastic/red-passion.jpg" width="1280" height="500" alt="Love the red fruit.." />
			            <div class="ei-title">
			                <h2>Love the red fruit..</h2>
			                <h3>..fruit of passion</h3>
			            </div>
			        </li>
			     
			    </ul>
			    
			    <!-- ei-slider-large -->
			    <ul class="ei-slider-thumbs">
			        <li class="ei-slider-element">Current</li>
			        <li><a href="#">Love the sport - ..feel the music</a><img src="images/slider-elastic/sci1-150x59.jpg" alt="Love the sport - ..feel the music" /></li>
			        <li><a href="#">Love the red fruit.. - ..fruit of passion</a><img src="images/slider-elastic/red-passion-150x59.jpg" alt="Love the red fruit.. - ..fruit of passion" /></li>
			        <li><a href="#"> - </a><img src="images/slider-elastic/cropped-0012-150x59.jpg" alt=" - " /></li>
			    </ul>
			    <!-- ei-slider-thumbs -->    
			    <div class="shadow"></div>
			</div>
			<!-- ei-slider -->    
			<!-- END #slider -->
			<script type="text/javascript">      
		        var     yiw_slider_type = 'elastic',
		                yiw_slider_elastic_speed = 800,
		                yiw_slider_elastic_timeout = 3000,
		                yiw_slider_elastic_autoplay = true,
		                yiw_slider_elastic_animation = 'sides';
		    </script>
			<!-- /SLIDER -->
            
            

                <div class="inner home-row group">
			    
                <div  <div class="widget-first widget one-third widget-icon-text group">
                    <h2><img class="icon-img" src="images/icons/smile.png" alt="" />Trip</h2>
                   <?php

                   $guest=new guest;
                   $a=$guest->Show_Trip();

                    echo'<p>'. $a.' </p> ';


                    ?>


                 </div>
                
                <div class="widget one-third widget-icon-text group">
                    <h2> <img class="icon-img" src="images/icons/smile.png" alt="" />Trip</h2>
                    <p></p>

                </div>
                
                <div class="widget-last widget one-third widget-icon-text group">
                    <h2> <img class="icon-img" src="images/icons/smile.png" alt="" />Trip</h2>
                    <p></p>

                </div>
                
			    </div>

            </div>
             <div class="inner home-row group">
                
                <div  <div class="widget-first widget one-third widget-icon-text group">
                    <h2><img class="icon-img" src="images/icons/smile.png" alt="" /> Offer</h2>
                    <p> </p>

                </div>
                
                <div class="widget one-third widget-icon-text group">
                    <h2><img class="icon-img" src="images/icons/smile.png" alt="" /> Offer</h2>
                    <p></p>

                </div>
                
                <div class="widget-last widget one-third widget-icon-text group">
                    <h2><img class="icon-img" src="images/icons/smile.png" alt="" />Offer</h2>
                    <p></p>

                </div>
                
                </div>
                
            </div>

            <div class="main">

              
        <h3 class="w3layouts_head">BOOK TRIP </h3>
        <div class="w3layouts_main_grid">
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="w3_form_post">
                
                    <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>SSN </h5>
                            <input type="text" name="gg" placeholder="ex:29700000000000" required="">
                    </div>
                </div>

                  <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Trip ID </h5>
                            <input type="text" name="tt" placeholder="" required="">
                    </div>
                </div>


                
                
                <div class="w3_main_grid">
                    
                    <div class="w3_main_grid_right">
                        <input type="submit" value="book this trip" name="booktrip">
                    </div>
                    <div class="clear"> </div>
                </div>
            </form>
                                    <div class="clear"></div>
                                            <h3 class="w3layouts_head">Reserve Offer </h3>


             <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="w3_form_post">
                
                    <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>SSN </h5>
                            <input type="text" name="go" placeholder="ex:29700000000000" required="">
                    </div>
                </div>

                  <div class="w3_agileits_main_grid w3l_main_grid">
                    <div class="agileits_grid">
                        <h5>Offer ID </h5>
                            <input type="text" name="to" placeholder="" required="">
                    </div>
                </div>


                
                
                <div class="w3_main_grid">
                    
                    <div class="w3_main_grid_right">
                        <input type="submit" value="reserve offer" name="offer">
                    </div>
                    <div class="clear"> </div>
                </div>
            </form>


        </div>
			<div class="inner home-testimonials home-section group">
			    <div class="title">
			        <h2><img src="images/icons/comment.png" alt="icon-adjust" /> People <span>love Sunset</span></h2>
			        <p>feedback from our customers</p>
			    </div>
			  <?php 
                   $guest=new guest;
                  $a= $guest->Show_Feedback();
                foreach( $a['FeedBack']as $s )
               echo ' <ul class="list-testimonials" style="float: left;">
			        <li>
			            <p> '. $s. '<p>
			        </li>
			       
			    </ul>';
                ?>

			    <script type="text/javascript">
			        jQuery(function($){
			            $('.home-testimonials ul').width( 920 - $('.home-testimonials .title').outerWidth() - 20 );
			            $('.home-testimonials ul').cycle({
			                fx: 'scrollHorz',
			                speed: 600,
			                timeout: 8000            });
			        });
			    </script>	      
			</div>
			<div class="clear"></div>
		</div>     
		<!-- END WRAPPER -->


        
        <div id="footer" class="sidebar-right">
            <div class="group inner footer_row_1 footer_cols_3">
                

                        <script type="text/javascript">
                            var messages_form_footer = {
                            	name: "Insert your name",
                            	email: "Insert your email",
                            	message: "Insert your message"
                            };
                        </script>
                    </div>
                </div>
                
            </div>
        </div>
        

        <!-- START FOOTER -->
        <div id="copyright" class="group">
            <div class="inner group">
                <div class="left">
                    <p>
                    	Copyright <strong>Sunset</strong></a> 2017 -
                    	 <strong>Guest</strong>
                    </p>
                </div>
        </div>
        
        <script type="text/javascript" src="js/jquery.custom.js"></script>
        <script type="text/javascript" src="js/contact.js"></script>
        
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36516261-21']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>		
    </body>
</html>