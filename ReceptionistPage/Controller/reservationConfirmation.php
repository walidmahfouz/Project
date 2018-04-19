<?php
$connect =mysql_connect("localhost","root","");
mysql_select_db("projectsoftwear");
require 'ReceptionistClass.php';
$reception=new Receptionist();
if($_SERVER['REQUEST_METHOD']=="POST")
  {if(isset($_POST["choose"]))
		 {
			 for($i=0;$i<count($_POST['choose']);$i++)
			 {
				 if($_POST['choose'][$i]=="Accept")
				 {
					 $reception->Acceptreservation ($_POST['RID'][$i],$_POST['roomnumberR'][$i]);
				 }elseif($_POST['choose'][$i]=="not Accept")
				 {
					 $reception->NotAcceptreservation($_POST['RID'][$i]);
				 }elseif($_POST['choose'][$i]=="waiting list")
				 {
					 $reception->WaitingListReservation($_POST['RID'][$i],$_POST['R_GSSN'][$i],$_POST['roomnumberR'][$i]);
				 }elseif($_POST['choose'][$i]=="")
				 {
					 echo "<h1 style='color:red'>Please choose the option in reservation number ".$i."</h1>";
				 }
			 }
			 $data="";
			 for($i=0;$i<count($_POST['choose']);$i++)
			 {
				 $data.="<legend> Send Confirmation </legend>
							 <input type='email' name='toconfirm[]' placeholder='enter email of the guest Ex: SSS@SUNSET.com' value='".$_POST["email"][$i]."' />
							 <input type='date' name='deadline[]' value=''/>
							 <textarea name='message[]' placeholder=' write the message here ' value='' rows='60' cols='20' ></textarea>";
			 }
			 echo $data;
		 }	
  }