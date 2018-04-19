<?php
$connect=mysql_connect("localhost","root","");
mysql_select_db("projectsoftwear");
if($connect)
{
	 echo "welcome";
}
else
{
	 echo":))";
}

class Reservation
{
	private Static $Reservation_ID;
	private $Reservation_Date;
	private $Checkin;
	private $CheckOut;
	private $NumofAdult;
	private $NumOfkids;
	private $Numofrooms;
	private $ExtraOrder;
	private $Extrabed;
	private $Roomnumber;
	private $servername="localhost";
    private $username="root";
    private $password="";
    private $db="projectsoftwear";  
	public function __Construct()
	{
		 $connect=mysql_connect("localhost","root","");
mysql_select_db("projectsoftwear");
	}
	 function SetDate($Reservation_Date)
	{
	 	 $this->Reservation_Date=$Reservation_Date;
	}
	 function SetCheckin($Checkin)
	{
	 	 $this->Checkin=$Checkin;
	}
	 function SetCheckOut($CheckOut)
	{
	 	 $this->CheckOut=$CheckOut;
	}
	 function SetNumofAdult($Reservation_Date)
	{
	 	 $this->NumofAdult=$Reservation_Date;
	}
	 function SetNumofrooms($Numofrooms)
	{
	 	 $this->Numofrooms=$Numofrooms;
	}
	 function SetExtraOrder($ExtraOrder)
	{
	 	 $this->ExtraOrder=$ExtraOrder;
	}
	 function SetExtrabed($Extrabed)
	{
	 	 $this->Extrabed=$Extrabed;
	}
	 function SetRoomnumber($Roomnumber)
	{
	 	 $this->Roomnumber=$Roomnumber;
	}
	 function SetNumofKids($NumOfkids)
	{
	 	 $this->NumOfkids=$NumOfkids;
	}
	 function getReservationDate()
	{
	 	 return $this->Reservation_Date;
	}
	 function gettCheckin()
	{
	 	 return $this->Checkin;
	}
	 function getRoomnumber()
	{
	     return	$this->Roomnumber;
	}
	 function getCheckOut()
	{
	 	 return $this->CheckOut;
	}
	 function getNumofAdult()
	{
	 	 return $this->NumofAdult;
	}
	 function getNumofrooms()
	{
	 	 return $this->Numofrooms;
	}
	 function gettExtraOrder()
	{
	 	 return $this->ExtraOrder;
	}
	 function getExtrabed()
	{
	 	 return $this->Extrabed;
	}
	 function getNumofKids()
	{
	 	 return $this->NumOfkids;
	}
	 function InsertReservation($CheckOut,$typeofroom,$Checkin,$NumofAdult=0,$NumOfkids=0,$Numofrooms,$ExtraOrder="",$Extrabed=0,$guest_id,$Reservation_Date,$email)
	{

	        $query=mysql_query("SELECT ROOM_NUM FROM room WHERE type='$typeofroom' AND state = 0 ORDER BY ROOM_NUM ASC LIMIT $Numofrooms");
			$numroom=array("ROOM_NUM"=>array());
		 if(mysql_num_rows($query)>0)
			{
			    while($result=mysql_fetch_array($query,MYSQL_ASSOC))
				{
					 $numroom['ROOM_NUM'][]=$result['ROOM_NUM'];
				}
				var_dump($numroom['ROOM_NUM']);
				for($i=0;$i<count($numroom['ROOM_NUM']);$i++)
				{
				  
				  $numr=$numroom['ROOM_NUM'][$i];
				  echo $numr;
			      mysql_query("INSERT INTO resevation(checkIn,checkOut,numofadult,numofroom,extra_order,extraBed,roomnumber,guest_id,numOfkids,reservationdate,typeofRoom,Email)
			                                   VALUES
			      	                                 ('$Checkin','$CheckOut',$NumofAdult,$Numofrooms,'$ExtraOrder','$Extrabed','$numr','$guest_id','$NumOfkids','$Reservation_Date','$typeofroom','$email')");
			     
			    }
			}
			else
			{
				return "there is no room available for this type";
			}
	}
}
?>
