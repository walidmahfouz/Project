<?php
require 'room.php';
require 'confirmation.php';
class Receptionist //extends Staff
{
 private static $notificationtrip=0;	
 private static $notificationreservation=0;
 public  $confirm;
 private $selecttrip;
 private $bool; 
 public function __construct()
 {
	$confirm=new confirmation;
 } 
 public function SelectTrip($selecttrip)
 {
	 $this->selecttrip=$selecttrip;
 }
 public function getselectTrip()
 {
	 return $this->selecttrip;
 }
 public function setNotificationtrip()
 {
	 $query=mysql_fetch_assoc(mysql_query("SElECT COUNT(T_id) as number FROM booktrip WHERE booktrip.T_id=$this->selecttrip And booktrip.Accept=0  "));
	 self::$notificationtrip=$query['number'];
 }
 public function getNotificationtrip()
 {
	  return self::$notificationtrip;
 }
 public function showResevationTrip()
 {
	 $query=mysql_query("SElECT trip.destination,trip.Duration,trip.deadline,trip.Max_number,guest.Email,guest.G_SSN FROM trip INNER JOIN booktrip on trip.T_id=booktrip.T_id AND trip.T_id=$this->selecttrip INNER JOIN guest on guest.G_SSN=booktrip.G_SSn WHERE booktrip.Accept=0 ");
	 $arr=array('destination'=>array(),'Duration'=>array(),'deadline'=>array(),'Max_number'=>array(),'Email'=>array(),'G_SSN'=>array());
	 while($result=mysql_fetch_array($query,MYSQL_ASSOC))
	 {
		 $arr['destination'][]=$result['destination'];
     	 $arr['Duration'][]=$result['Duration'];
		 $arr['deadline'][]=$result['deadline'];
		 $arr['Max_number'][]=$result['Max_number'];
		 $arr['Email'][]=$result['Email'];
		 $arr['G_SSN'][]=$result['G_SSN'];
	 } 
	 return $arr;
 }
 public function Peoplebookingtrip()
 {
	 $query=mysql_fetch_assoc(mysql_query("SELECT COUNT(T_id) AS total FROM booktrip WHERE booktrip.T_id=$this->selecttrip AND booktrip.Accept=1"));
	 return $query['total'];
 }
 public function AcceptbookTrip($tripid,$GSSN)
 {
	 mysql_query("UPDATE booktrip SET booktrip.Accept = 1 WHERE booktrip.T_id=$tripid and booktrip.G_SSn=$GSSN ");
 }
 public function NotAcceptbookTrip($tripid,$GSSN)
 {
	 mysql_query("UPDATE booktrip SET booktrip.Accept = 2 WHERE booktrip.T_id=$tripid and booktrip.G_SSn=$GSSN");
 }
 public  function addwaitlistTrip($tripid,$GuestID)
 {
	 mysql_query("INSERT INTO waitlisttrip(T_id,GuestID) VALUES($tripid,$GuestID)");
 }
  public function setNotificationReservation()
 {
	 $query=mysql_fetch_assoc(mysql_query("SElECT COUNT(R_ID) as number FROM resevation WHERE resevation.Accept=0 "));
	 
	  self::$notificationreservation=$query['number'];
 }
 public function getNotificationReservation()
 {
	  return self::$notificationreservation;
 }
 public function showResevation()
 {
	 $query=mysql_query("SElECT * FROM resevation WHERE resevation.Accept=0 ");
     $arr=array('checkIn'=>array(),'checkOut'=>array(),'numofadult'=>array(),'numofroom'=>array(),'roomnumber'=>array(),'guest_id'=>array(),'numOfkids'=>array(),'typeofRoom'=>array(),'Email'=>array(),'R_ID'=>array());
	 while($result=mysql_fetch_array($query,MYSQL_ASSOC))
	 {
		 $arr['checkIn'][]=$result['checkIn'];
     	 $arr['checkOut'][]=$result['checkOut'];
		 $arr['numofadult'][]=$result['numofadult'];
		 $arr['numofroom'][]=$result['numofroom'];
		 $arr['roomnumber'][]=$result['roomnumber'];
		 $arr['guest_id'][]=$result['guest_id'];
		 $arr['numOfkids'][]=$result['numOfkids'];
		 $arr['typeofRoom'][]=$result['typeofRoom'];
		 $arr['Email'][]=$result['Email'];
		 $arr['R_ID'][]=$result['R_ID'];
	 } 
	 return $arr;
 }
 public function Acceptreservation ($R_ID,$roomNumber)
 {
	 mysql_query("UPDATE resevation SET resevation.Accept = 1 WHERE resevation.R_ID=$R_ID");
	 mysql_query("UPDATE room SET room.state = 1 WHERE room.ROOM_NUM=$roomNumber");
 }
 public function NotAcceptreservation ($R_ID)
 {
	 mysql_query("UPDATE resevation SET resevation.Accept = 2 WHERE resevation.R_ID='$R_ID'");
 }
 public function WaitingListReservation($R_ID,$Gssn,$roomNumber)
 {
	  mysql_query("INSERT INTO waitlist(W_Gssn,W_Rnumber,R_id) VALUES($Gssn,$roomNumber,$R_ID)");
 }
 public function  CheckOutGuest($roomnumber)
 {
	 if(mysql_query("UPDATE room SET room.state=0 WHERE room.ROOM_NUM =$roomnumber "))
	 { 
         return true;
	 }
	 else 
	 {
		 return false;
	 }
 }
 public function get_empty_room_type_num($type)
 {
	 $room=new Room();
	 return  $room->get_empty_room_type($type);
 }
 public function getNearestCheckOutroom()
 {
	 $CurrentDay=date("Y-m-d");
	 $lengthdate=date_create($CurrentDay) ;
	 date_add($lengthdate,date_interval_create_from_date_string("5 days"));
	 $checkdate=date_format($lengthdate,"Y-m-d");
	 $arrResult=mysql_query("SELECT resevation.roomnumber ,resevation.checkOut FROM resevation WHERE resevation.checkOut BETWEEN STR_TO_DATE('$checkdate', '%Y-%m-%d') AND STR_TO_DATE('$CurrentDay', '%Y-%m-%d') AND resevation.Accept=1 ");
	 $arr=array("roomnumber"=>array(),"checkOut"=>array());
	 while($result=mysql_fetch_array($arrResult,MYSQL_ASSOC))
	 {
		 $arr["roomnumber"][]=$result["roomnumber"];
		 $arr["checkOut"][]=$result["checkOut"];
	 }
	 return $arr;
 }
 public function checkIN($CheckOut,$typeofroom,$Checkin,$NumofAdult=0,$NumOfkids=0,$Numofrooms,$ExtraOrder="",$Extrabed=0,$guest_id,$Reservation_Date)
 {
	 $query=mysql_query("SELECT ROOM_NUM FROM room WHERE type='$typeofroom' AND state = 0 ORDER BY ROOM_NUM ASC LIMIT $Numofrooms");
            $numroom=array('ROOM_NUM'=>array());
			if(mysql_num_rows($query)>0)
			{
			    while($result=mysql_fetch_array($query,MYSQL_ASSOC))
				{
					 $numroom['ROOM_NUM'][]=$result['ROOM_NUM'];
				}
			    for($i=0;$i<count($numroom['ROOM_NUM']);$i++)
				{
					
				  $numR=$numroom['ROOM_NUM'][$i];
			      mysql_query("UPDATE room SET room.state = 1 WHERE ROOM_NUM=$numR");
				  mysql_query("INSERT INTO reservation(checkIn,checkOut,numofadult,numofroom,extra_order,extraBed,roomnumber,guest_id,numOfkids,reservationdate,typeofRoom,Accept) VALUES($Checkin,$CheckOut,$NumofAdult,$Numofrooms,$ExtraOrder,$Extrabed,$numR,$guest_id,$NumOfkids,$Reservation_Date,$typeofroom,1)");
				  
			    }
			 return $numroom;
			}
			else
			{
				return "there is no room available for this type";
			}
}
}

?>
