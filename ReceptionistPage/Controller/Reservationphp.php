<?php
$connect =mysql_connect("localhost","root","");
mysql_select_db("projectsoftwear");
require 'ReceptionistClass.php';
 $reception=new Receptionist();
if($_SERVER['REQUEST_METHOD']=="POST")
  {
      $reception->setNotificationReservation();
      $notifiction=$reception->getNotificationReservation();
	  $array=$reception->showResevation();
	  $dataform='<fieldset name="specificationsReservation"id="specificationsReservation">
						     <legend> '.$notifiction.' specifications  reservation </legend> </fieldset> ';
							 
	 for($i=0;$i<count($array['R_ID']);$i++)
	  {
		 $dataform.='
					            <div class="first">
                               <label class="left"><i class="fa fa-calendar-o" ></i> Check In</label>
							   
                               <input  type="text"  class="left" name="CheckIn" value="'.$array['checkIn'][$i].'" readonly>
							
                               <label class="left"><i class="fa fa-calendar-o" class="left"></i> Check Out</label>
							 
                               <input  type="text" class="left" name="CheckOut" value="'.$array['checkOut'][$i].'" readonly>
						       </div>
                               <div class="second"> 
							   <label class="left"><i class="fa fa-male"class="left"></i> Adults</label>
						
                               <input  type="text" name="Adults" value="'.$array['numofadult'][$i].'" class="left" readonly>
						
                               <label class="left"><i class="fa fa-child" class="left" ></i> Kids</label>
							
                               <input  type="text" name="Kids" value="'.$array['numOfkids'][$i].'"  class="left" readonly>
							   </div> 
							   <div class="six">
							   <label><i class="material-icons">email</i> Email </label>
							   <input type="email" name="email[]" value="'.$array['Email'][$i].'" readonly >
							   <label><i class=""></i> Room number  </label>
							   <input type="text" name="roomnumberR[]" value="'.$array['roomnumber'][$i].'" readonly >
							   </div>
							   <div class="third"> 
							   <label><i class=""></i> number of rooms</label>
							   <input  type="text" name="numberofrooms" value="'.$array['numofroom'][$i].'"  readonly>
							   <label><i class=""></i> type of rooms</label>
							   <input  type="text" name="typeofrooms" value="'.$array['typeofRoom'][$i].'" readonly>
							   </div>
							   <div class="hidedive">
							     <input  type="text" name="RID[]" value="'.$array['R_ID'][$i].'"  readonly>
								 <input  type="text" name="R_GSSN[]" value="'.$array['guest_id'][$i].'"  readonly>
							  </div>
                             </fieldset>   
						  <div class="four"> 
						 <input type="checkbox" name="choose[]" value="Accept"><label> Accept </label> 
						 <input type="checkbox" name="choose[]" value="not Accept" ><label> not Accept </label>
						 <input type="checkbox" name="choose[]" value="waiting list" ><label>waiting list </label>
	                     </div>';
					} 
				 echo $dataform;
  }