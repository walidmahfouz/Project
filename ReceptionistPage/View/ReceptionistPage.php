
<?php 
session_start();
$Rusername['UserName']=$_SESSION['UserName']['0'];
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" dir="ltr"> 
<head> 
             <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
             <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
             <script src="jquery.js"></script>
             <script src="htttp://code.jquery.com/jquery-1.9.1.js"></script>
	         <meta charset="UTF-8"/>
			 <meta content="viewport" content="width=device-width , initial-scale=1.0"/>
			<!-- <meta http-equiv="refresh" content="60"/>-->
			 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
			 <link type="text/css" rel="stylesheet" href=" receptionistcss.css"/>
			 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
			 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
             <script  type="text/javascript" src="receptionist.js" ></script> 
             <title> SUNSET Receptionist </title>			 
		 </head>
		 <body>
		    
		     <ul class="header">
				     <li> <span><i class="glyphicon glyphicon-user"> </i> <?php echo $Rusername['UserName'] ;?>  </span></li>
					 <li class="logout"> 
					     <a href="/Project/ReceptionistPage/Controller/logout.php" target="_self"> <span class="glyphicon glyphicon-log-out">  </span> log out </a> 
					 </li>
			 </ul>
		   
             <div id="ReceptionistHome">
			     <div id="manage">
			         <div id="notification">
				         <a href="#reservations"><i class="material-icons">public</i></a>
				     </div>
				     <div id="report">
				         <a href="/Project/Stuff/Sessionstuff.php" target="_blank">Report</a> 
				     </div>
				     <div id="confirmation">
				         <a  href="#confirm">Confirmation </a>
				     </div>
			     </div>	
                  <div id="checkoutsomeone">
					    <form  action="checkinRecephp.php"method="post" id="formcheckout">
						     <input type="number" name="roomnumber" placeholder="enter room number" min="1" />
							 <input type="submit" name="submitcheckout" value="Checkout"/>
						 </form>
				 </div>	
				  <div id="checkINsomeone">
					 <form action="checkinRecephp.php" id="formcheckINsomeone" method="post">
					    <div class="inform">
					     <fieldset name="specificationsReservation"id="specificationsReservation">
						     <legend> specifications  reservation </legend>
							 <div class="first">
                               <label class="left"><i class="fa fa-calendar-o" ></i> Check In</label>
							   
                               <input  type="date"  class="left" name="CheckInRecep" value="" />
							
                               <label class="left"><i class="fa fa-calendar-o" class="left"></i> Check Out</label>
							 
                               <input  type="date" class="left" name="CheckOut" value="" />
						       </div>
                               <div class="second"> 
							   <label class="left"><i class="fa fa-male"class="left"></i> Adults</label>
						
                               <input  type="number" name="Adults" value="" class="left" />
						
                               <label class="left"><i class="fa fa-child" class="left" ></i> Kids</label>
							
                               <input  type="number" name="Kids" value=" "  class="left"/>
							   </div> 
							   <div class="six">
							   <label><i class="material-icons">email</i> Email </label>
							   <input type="email" name="email" value="" />
							   <label><i class=""></i> guest SSN  </label>
							    <input  type="text" name="R_GSSN" value=""/>
							   </div>
							   <div class="third"> 
							   <label><i class=""></i> number of rooms</label>
							   <input  type="number" name="numberofrooms" value="" />
							   <label><i class=""></i> type of rooms</label>
							   <input  type="text" name="typeofrooms" value="" />
							   </div>
                         </fieldset>
						 </div>
						 <div class="five">
						 <input type="submit" value="submit" id="submit"/>
						 </div>
					 </form>
				 </div>	
				 <div id="response">
				     <span>
					      
					 </span>
					 <button>ok</button>
				 </div>
             </div>
			 <div id="reservations">
			     <div class="emptyroom">
				     <button> hide </button>
				     <form action="checkinRecephp.php" method="post" id="formemptyroom">
				         <input list="roomtype" name="roomtype" placeholder=" select type " />
                         <datalist id="roomtype">
                    	     <option value="Single Room">
                             <option value="Double Room">
                             <option value="Tripple Room">
					     </datalist>
						  <input type="submit" value="show"/>
				     </form>
					 <div class="holdtable">
				     <table>
                          <caption> type and the empty rom </caption> 	
						 <thead>
						     <tr>
							     <th>type</th>
								 <th>room</th>
							 </tr>
						 </thead>	  
						 <tbody>
							    
						 </tbody>
				     </table>
					 </div>
				  </div>
				  <div class="nearcheckout">
				         <button  name="nearcheckout" value="shownearcheckout">show near checkout</button>
				     <div class="holdtable">		 
				         <table>
                              <caption> near checkout </caption> 	
						     <thead>
						         <tr>
							         <th>room</th>
								     <th>date</th>
							     </tr>
						     </thead>	  
						     <tbody>
							 
						     </tbody>
				         </table>	 
 				     </div>
				  </div>
				  <div class="showreservation">
				         <button  name="showreservation" value="showreservation" id="showreservation"> Guest<?php echo "'"; ?>s Resevation </button>
				  </div>
				  <div class="showtrep">
				         <button  name="showtrip" value="showtrip" id="showtrip"> Guest<?php echo "'"; ?>s Trip booking</button>
				  </div>
				  <div class="guestresevation">
				       <form action="reservationConfirmation.php" method="post">
					    <div class="inform">
					
						 </div>
						 <div class="five">
						 <input type="submit" value="submit" id="submit"/>
						 </div>
					 </form>	 
				  </div>
                  <a href="#ReceptionistHome"><img src="pageup2.png" alt="Page up" /></a>
			 </div>
			 <div class="confirmation" id="confirm">
			    <div> 
				  <form action="checkinRecephp.php" id="formconfirmation" method="post">
				      <fieldset name="confirmation" class="confirmationfield">
						     
					  </fieldset>
                      <input type="submit" value="send"/>
				 </form>
			    </div>
				<a href="#ReceptionistHome"><img src="pageup2.png" alt="Page up" /></a>
		    </div>
		    <div class="tripreservation">
				 <div class="entertripid">
				         <form action="checkinRecephp.php" method="post">
					         <input type="number" name="numberoftrip" placeholder="Enter trip id" min="1" step="1">
						     <input type="submit" value="submit">
					     </form>
				 </div>
				 <div class="trip">
				     <form action="checkinRecephp.php" method="post">
					   <div class="inform">
					    
					  </div>
					  <div class="five">
						 <input type="submit" value="submit" id="submit"/>
					  </div>
				 </form>	
				</div>
		    </div> 
		
		 </body>
	 </html><!--';
    }
}
?>-->