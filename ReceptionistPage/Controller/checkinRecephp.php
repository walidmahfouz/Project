<?php
$connect =mysql_connect("localhost","root","");
mysql_select_db("projectsoftwear");
require 'ReceptionistClass.php';
$reception=new Receptionist();
if($_SERVER['REQUEST_METHOD']=="POST")
 {
	if(isset($_POST['roomnumber']))
	{
		if(empty($_POST['roomnumber']))
		 {
			 echo "please select room";
		 }
		 else
		 {
			 $result=mysql_query("SELECT ROOM_NUM FROM room ");
			 $number=array();
			 while($num=mysql_fetch_array($result,MYSQL_NUM))
			 {
				 $number[]=$num[0];
			 }
			 if(in_array($_POST['roomnumber'],$number))
			 {
				 $var=$reception->CheckOutGuest($_POST['roomnumber']);
				 if($var==true)
				 {
					 echo "the room is checkout";
				 }
				 else
				 {
					 echo "process failed";
				 }
			 }
			 else
			 {
				 echo "the room doesn't exsist";
			 }
		 }
	}elseif(isset($_POST['roomtype']))
	{
		if(empty($_POST['roomtype']))
		 {
			 echo "<tr><td> please select type </td></tr>";
		 }
		 else
		 {
			 $result=$reception->get_empty_room_type_num($_POST['roomtype']);
			 $dataString=" ";
             for($i=0;$i<count($result['ROOM_NUM']);$i++)
             {
	            $dataString.="<tr>
	                  <td>".$result['type'][$i]."</td>
					  <td>".$result['ROOM_NUM'][$i]."</td>
					 </tr>";
             }
			 echo $dataString;
		 }
	}elseif(isset($_POST['CheckInRecep']))
	{
		if(empty($_POST['CheckInRecep']) || empty($_POST['CheckOut']) || empty($_POST['CheckOut']) || empty($_POST['email']) || empty($_POST['numberofrooms']) || empty($_POST['typeofrooms']) || empty($_POST['R_GSSN']))
		 {
			 echo "Please fill all required inputs";
		 }
		 elseif(strtotime($_POST['CheckOut'])<time() || strtotime($_POST['CheckInRecep']) < time() || strtotime($_POST['CheckOut']) < strtotime($_POST['CheckInRecep']))
		 {
			 echo "Please the date must be bigger than or equle of today date and checkout date shoud be bigger than or equle checkin date ";
		 }elseif(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)===false)
		 {
			 
			 echo "Please write the email on it's right form "; 
			 
		 }elseif(filter_var($_POST['R_GSSN'],FILTER_VALIDATE_INT)===false)
		 {
			 echo "Please write the SSN on it's right form "; 
		 }
		else
		    {
			 $_POST['email']=Test_input($_POST['email']);
			 $_POST['typeofrooms']=filter_var($_POST['typeofrooms'],FILTER_SANITIZE_STRING);
			 $_POST['typeofrooms']=Test_input($_POST['typeofrooms']);
			 $_POST['R_GSSN']=Test_input($_POST['R_GSSN']);
			 $arr=$reception->checkIN($_POST['CheckOut'],$_POST['typeofrooms'],$_POST['CheckInRecep'],$_POST['Adults'],$_POST['Kids'],$_POST['numberofrooms'],"",0,$_POST['R_GSSN'],date("Y-m-d"));
			 $data="Success :";
			     if($arr!= "there is no room available for this type" )
			     {
					 for($i=0;$i<count($arr['ROOM_NUM']);$i++)
				     {
					     $data.=" ".$arr['ROOM_NUM'][$i]." :";
				     }
				      echo $data;
			     }
			     else
			     {
				     echo "there is no room available for this type";
			     }
		    }
		 
	}elseif(isset($_POST['toconfirm']))
	{ 
	  for($i=0;$i<count($_POST['toconfirm']);$i++)
	  {
	   if( empty($_POST['toconfirm'][$i]) || empty($_POST['deadline'][$i]) || empty($_POST['message'][$i]))
		 {
			 echo "Please fill all required confirmation inputs in confirmation number ".$i ;
		 }
		 elseif(filter_var($_POST['toconfirm'][$i],FILTER_VALIDATE_EMAIL)===false)
		 {
			 
			 echo "Please write the email in Confirmation number ".$_POST['toconfirm'][$i]." on it's right form "; 
			 
		 }elseif(strtotime($_POST['deadline'][$i])<time())
		 {
			 echo "Please the date in Confirmation number ".$_POST['deadline'][$i]."  must be bigger than or equle of today date ";
		 }
		 else
		 {
			 $_POST['toconfirm'][$i]=Test_input($_POST['toconfirm'][$i]);
			 $_POST['message'][$i]=Test_input($_POST['message'][$i]);
			 $_POST['message'][$i]=filter_var($_POST['message'][$i],FILTER_SANITIZE_STRING);
			 $confirm=new  confirmation();
             $reception->confirm=$confirm;
			 $reception->confirm->Sendconfermation($_POST['toconfirm'][$i],$_POST['deadline'][$i],$_POST['message'][$i]); 
	     }
	 }
	}elseif(isset($_POST['numberoftrip']))
	{
		 if(empty($_POST['numberoftrip']))
		 {
			 echo "<center style='text-align:center;color:red'><h1> Please select trip</h1> </center>";
		 }
		 else
		 {
			 $tripid=$_POST['numberoftrip'];
			 $reception->SelectTrip($_POST['numberoftrip']);
			 $reception->setNotificationtrip();
			 $notification=$reception->getNotificationtrip();
			 $arrtrip=$reception->showResevationTrip();
			 $currentnumber=$reception->Peoplebookingtrip();
			 $datatrip='<fieldset name="specificationsReservation"id="specificationsReservation">
						<legend> '.$notification.' specifications Trip reservation </legend>';
			 for($i=0;$i<count($arrtrip['Email']);$i++)
			 {
				  $datatrip.='
							 <div class="first">
                               <label class="left">Destination</label>
							   
                               <input  type="text"  class="left" name="Destination" value="'. $arrtrip["destination"][$i] .'" readonly>
							
                               <label class="left">Duration</label>
							 
                               <input  type="text" class="left" name="Duration" value=" '.$arrtrip["Duration"][$i] .'" readonly>
						       </div>
                               <div class="second"> 
							   <label><i class=""></i> Current number </label>
							   <input type="number" value=" '. $currentnumber .'" name="peoplebooking" readonly >
							   
						
                               <label class="left"> Max Number </label>
							
                               <input  type="text" name="MaxNumber" value="'. $arrtrip["Max_number"][$i] .'  class="left" readonly>
							   </div> 
							   <div class="six">
							   <label><i class="material-icons">email</i> Email </label>
							   <input type="email" name="email" value="'. $arrtrip["Email"][$i] .' readonly >
							   <label class="left">Deadline</label>
                               <input  type="text" name="Deadline" value="<?php echo $arrtrip["deadline"][$i] ;?>" class="left" readonly>
							   </div>
							   <div class="hidedive">
							   <input  type="text" name="tripGSSN[]" value="'. $arrtrip["G_SSN"][$i] .'  readonly>
						       </div> 
                         </fieldset>
						 <div class="four"> 
						 <input type="checkbox" name="chooseTrip[]" value="Accept"><label> Accept </label> 
						 <input type="checkbox" name="chooseTrip[]" value="not Accept"><label> not Accept </label>
						 <input type="checkbox" name="chooseTrip[]" value="waiting list"><label>waiting list </label>
						 </div>';
			 }
			 echo $datatrip;
			 
		 }
	}elseif(isset($_POST['chooseTrip']))
	{
			 for($i=0;$i<count($_POST['chooseTrip']);$i++)
			 {
				 if($_POST['chooseTrip'][$i]=="Accept")
				 {
					 $reception->AcceptbookTrip($tripid,$_POST['tripGSSN'][$i]);
				 }elseif($_POST['chooseTrip'][$i]=="not Accept")
				 {
					 $reception->NotAcceptbookTrip($tripid,$_POST['tripGSSN'][$i]);
				 }elseif($_POST['chooseTrip'][$i]=="waiting list")
				 {
					 $reception->addwaitlistTrip($tripid,$_POST['tripGSSN'][$i]);
				 }
			 }
	}
	
 } 
else 
 {
	 echo "yor not allowed to access this page";
 }
 
 function Test_input($input)
 {
	 $input = trim($input);
     $input = stripslashes($input);
     $input = htmlspecialchars($input);
     return $input;
 }