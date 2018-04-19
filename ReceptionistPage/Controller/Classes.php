<?php
class Trip
	{
		private $discription;
		private $price;
		private $duration;
		private $discount;
		private $maxnumber;
		private $deadline;
		private $id;
		private $checks=false;
		private $person;
		private $today;

		public function __construct()
		{
            $today=date("Y-m-d");
		}

		public function checkTrip($deadline)
		{
			if ($deadline>=$this->today )
			{
				$this->checks=true;
			}
			else
			{
				$this->checks=false;
			}

		}

		public function acceptTrip($description, $price, $deadline, $discount=0)
		{

			if (!$conn)
			{
 			    die("Connection failed: " . mysqli_connect_error());
			}
			else
			{
            if($this->checks===true)
			{
			      $sql = "insert into offers (description , deadline , discount , price )
					      values ($content, $deadline, $discount, $price)";

		    if (mysql_query($sql))
		    {
		         return true;
			}
    		else
    		{
			     return false;
			}
		   }
		}
		}

	 function bookThisTrip($tripid, $guestid, $accept)
		{

          $sql = "insert into offers (tripid, guestid, accept)
					values ($tripid, $guestid, $accept)";

			mysql_query($sql);
		  
		}


		 function setDescription ($description)
		{
			$this->content=$description;
		}

		 function setDeadline ($deadline)
		{
			$this->deadline=$deadline;
		}

		 function setPrice ($price)
		{
			$this->price=$price;
		}

		 function setDiscount ($discount)
		{
			$this->discount=$discount;
		}
		function setduration($du)
		{
			$this->duration=$du;
		}
		function getduration()
		{
			return $this->duration;
		}

	   function getDescription ()
		{
			return $this->description;
		}

		 function getDeadline ()
		{
			return $this->deadline;
		}

		function getPrice ()
		{
			return $this->price;
		}

		 function getDiscount ()
		{
			return $this->discount;
		}
		function setid($id)
		{
			$this->id=$id;
		}
		function getid()
		{
			return $this->id;
		}
		function setmaxnum($max)
		{
			$this->maxnumber=$max;
		}
		function getmaxnum()
		{
			return $this->maxnumber;
		}
	}
	class Room 
	{
       private $ROOM_NUM;
       private $type;
       private $state;
       private $description;
       private $price;
       private $max_adult;
       private $max_kids;
    
     public function setROOM_NUM ($x){
           $this -> ROOM_NUM = $x;
           }
    public function getROOM_NUM (){
       return $this->ROOM_NUM;
    }

      public function setTyper ($x){
       $this -> type = $x;
    }
    public function getTyper (){
       return $this->type;
    }


        public function setstate ($x){
       $this -> state = $x;
    }
    public function getstate (){
       return $this->state;
    }


       public function setdescription ($x){
       $this -> description = $x;
    }
    public function getdescription (){
       return $this->description;
    }


       public function setpricer ($x){
       $this -> price = $x;
    }
    public function getpricer (){
       return $this->price;
    }



     public function setmax_adult ($x){
       $this -> max_adult = $x;
    }
    public function getmax_adult (){
       return $this->max_adult;
    }


      public function setmax_kids ($x){
       $this -> max_kids = $x;
    }
    public function getmax_kids (){
       return $this->max_kids;
    }
    function setstater($s)
    {
      $this->state=$s;
    }
    function getstater($s)
    {
      return $this->state;
    }

    
    
    
    
     public function insertRoom($ROOM_NUM,$type,$state,$description,$price,$max_adult,$max_kids){
        
         $sql = "INSERT INTO room (ROOM_NUM,type,state,description,price,max_adult,max_kids)
                   VALUES ($ROOM_NUM,$type,$state,$description,$price,$max_adult,$max_kids)";
         mysql_query($sql);  
    }
    
    public function get_empty_room_type($type)
    {
         $sql = "SELECT ROOM_NUM,type FROM room WHERE state=0 AND type='$type'";
         $query = mysql_query($sql);
		 $array=array("ROOM_NUM"=>array(),"type"=>array());
		 while($arr=mysql_fetch_assoc($query))
		 {
			  $array['ROOM_NUM'][]=$arr['ROOM_NUM'];
			  $array['type'][]=$arr['type'];
		 }
         return $array ;
    }
   }
   class offer
	{
		private $discount;
		private $price;
		private $content;
		private $date;
		private $id;
		private $today;
		private $deadline;
		private $check=false;
		public Function __construct()
		{
			$today = date('Y-m-d');
		}

		public function checkOffer($deadline)
		{
			if ($this->today <= $deadline)
			{
				$this->check=true;
			}
			else
			{
				$this->check = false;
			}
		}

		public function AcceptOffer($content, $deadline, $discount=0, $price )
		{

			if (!$conn)
			{
 			    die("Connection failed: " . mysqli_connect_error());
			}else
			{
                 if($this->check===true)
			     {
				     $sql = "insert into offer (Content,deadline,Discount ,Price)
					 values ($content, $deadline, $discount, $price)";

			        if (mysql_query($sql))
		             {
		                 return true;
			         }
    		         else
    		         {
			             return false;
			         }
			     }
			     else
			     {
				     return false;
			     }

		    }
		}

		public function BookThisOffer($offerid, $guestid, $accept)
		{

             $sql = "INSERT INTO bookoffer (B_OfferID, B_GuestId, Accept)
					VALUES ($offerid, $guestid, $accept)";

			 mysql_query($sql);
		        
		}
    function setofferid($ido)
		{
			$this->id=$ido;
		}
		public function setContent ($content)
		{
			$this->content=$content;
		}

		public function setDeadline ($deadline)
		{
			$this->deadline=$deadline;
		}

		public function setPrice ($price)
		{
			$this->price=$price;
		}

		public function setDiscount ($discount)
		{
			$this->discount=$discount;
		}

		public function getContent ()
		{
			return $this->content;
		}

		public function getDeadline ()
		{
			return $this->deadline;
		}

		public function getPrice ()
		{
			return $this->price;
		}

		public function getDiscount ()
		{
			return $this->discount;
		}


	}
	class confirmation{
    private $deadline; 
    private $email;
    private $content;

     function setDeadline ($start_date)
    {         
       
        
     $this->deadline=date_add($start_date,date_interval_create_from_date_string("5 days"));
     
    
     }    
    function getDeadline ()
    {
       return $this->deadline;
    
    }    
    
    
    
     function set_To_mail ($mail)
    {         
    
        
             if(filter_var($mail,FILTER_VALIDATE_EMAIL))
            {
                $r = "valid email";  

                $this->email=$mail;
                

            }
         
         else if (filter_var($mail,FILTER_VALIDATE_EMAIL)==false )
            {
                $r= "invalid email,email is required "; 
            }
           
     }       
                
    function get_To_mail ()
    {
       return $this->email;
    
    }    
    
            
    function Set_content($msg)
    {
              $this->content=$msg;
    }
    function get_content()
    {
        return $this->content;
    }

 public function Sendconfermation($to,$deadline,$subject)
{
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->CharSet="UTF-8";
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->Username = 'mahmodkamal167@gmail.com';
  $mail->Password = '26383693';
  $mail->SMTPAuth = true;
  $mail->From = 'receptionist';
  $mail->FromName = 'mahmod kamal';
  $mail->AddAddress($to);
  //$mail->AddReplyTo('phoenixd110@gmail.com', 'Information');

  $mail->IsHTML(true);
  $mail->Subject    ="confermation" ;
  $mail->AltBody    = "To our guest ";
  $mail->Body    = $subject.$deadline;

  if(!$mail->Send())
  {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
    echo "Message sent!";
  }
	}
}

class Receptionist //extends Staff
{
 private static $notificationtrip=0;	
 private static $notificationreservation=0;
 public  $confirm;
 private $selecttrip;
 private $bool; 
 public function __construct()
 {
	 $confirm=new Confirmation();
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
 public function WaitingListReservation ($R_ID,$Gssn,$roomNumber)
 {
	  mysql_query("INSERT INTO waitlist(W_Gssn,W_Rnumber,R_id) VALUES($Gssn,$roomNumber,$R_ID");
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
class Report{
    
   private  $To;
   private  $From;
   private  $Date;
   private  $supject;
   private  $content;
    
   public function setTo ($x){
       $this -> To = $x;
    }
    public function getTo (){
       return $this->To;
    } 
    
    
       public function setFrom ($x){
       $this -> From = $x;
    }
    public function getFrom (){
       return $this-> From;
    }
    
    
      public function setDate ($x){
       $this -> Date = $x;
    }
    public function getDate (){
       return $this-> Date;
    }
    
           public function setSubject ($x){
       $this->supject = $x;
    }
    public function getSubject (){
       return $this->supject;
    }
    
          public function setContent ($x){
       $this->content = $x;
    }
    public function getContent (){
       return $this-> subject;
    }
    
    
 public function sendReport($supject,$Content,$To,$From,$Date,$S_SSN){
      

     if($supject==null||$Content==null|| $To==null|| $From==null|| $Date==null|| $S_SSN==null) 
	 {
		 return false;
	 }
    else
	{
		$sql = "INSERT INTO report (supject,Content,To,From,Date,S_SSN)
        VALUES ($supject,$Content,$To,$From,$Date,$S_SSN)";
		if(mysql_query($sql))
		{
			return true;
		}
		else
		{
			return false;
		}
	}	 
    
}
class person
{
public $Fname;
public $Lname;
public $password;
public $email="magdy@sunset.com";
public $ssn;
public $phoneNum;
function login($email,$password)
{

}
function setFname($name)
{
    $this->Fname=$name;
}
function setLanme($name)
{
    $this->Lname=$name;
}
function setpassword($pass)
{
    $this->password=$pass;
}
function setemail($email)
{
    $this->email=$email;
}
function setphone($phone)
{
    $this->phoneNum=$phone;
}
function getFname()
{
    return $Fname;
}
function getLname()
{
    return $Lname;
}
function getpassword()
{
    return $this->password;
}
function getemail()
{
    return $this->email;
}
function getssn()
{
    return $this->ssn;
}
function getphone()
{
    return $this->phoneNum;
}
}
class stuff extends person
{
    private $birthdate;
    private $departmentManger;
    private $username;
    public function setuser($var)
    {
       # $username=parent::getemail();
        $username=$var;

    }
    function reciveReport()
    {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectsoftwear";
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
#if (isset($_post["show"]))
{
  $sql = "select supject,content FROM report where TOMail='$this->email' and seen= 0";
  $pdf=new FPDF();
  $pdf->AddPage();
  $pdf->Setfont('Arial','B',18);
  $sql2="UPDATE report SET SEEN = 1 where TOMail='$this->email' AND seen= 0 ";
  $result=mysqli_query($conn, $sql);
  if ($result->num_rows>0) {
      echo "New record created successfully";
      while($row=$result->fetch_assoc())
      {
          $pdf->Cell(100,10,"subject". $row["supject"]);
          $pdf->LN();
          $pdf->Cell(100,10, "content".$row["content"]);
          $pdf->LN();

      }
        $pdf->output();
      mysqli_query($conn, $sql2);
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}

    }
}
class ChefManger extends stuff
{
    
}
class accountantManger extends person
{
  
    function sendreport()
    {

    }
}
class admin extends person
{
  public  $manageStuff;
  public $manageinfohotel;
  function __consruct()
  {
    $this->manageStuff=new mangestaff();
    $this->manageinfohotel=new Manage_info_hotel();
  }
}
class Manage_info_hotel
{
private $offer;
private $trip;
public $room;
function __construct()
{
  $this->offer=new offer();
  $this->trip=new trip();
  $this->room=new room();
}
function test($data)
{
   $data = str_replace("'", "\\'", $data);
   $data = mysql_real_escape_string($data);
   $data = trim($data);
   $data = strip_tags($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);


    return $data;
}
function addroom($roomnum,$type,$state,$description,$price,$max_adult,$max_kids)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
    $roomnum=$this->test($roomnum);
    $type=$this->test($type);
    $state=$this->test($state);
    $description=$this->test($description);
    $price=$this->test($price);
    $max_adult=$this->test($max_adult);
    $max_kids=$this->test($max_kids);

  $this->room->setROOM_NUM($roomnum);
  $this->room->setTyper($type);
  $this->room->setstater($state);
  $this->room->setDescription($description);
  $this->room->setpricer($price);
  $this->room->setmax_adult($max_adult);
  $this->room->setmax_kids($max_kids);


  $sql="INSERT INTO `room` (`ROOM_NUM`, `type`, `state`, `description`, `price`, `max_adult`, `max_kids`)
   VALUES ('$roomnum', '$type', '$description', '$state', '$price', '$max_adult', '$max_kids')";
if (! mysqli_query($conn,$sql))
{
echo "string";
}
}
function deleteroom($roomnum)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $roomnum=$this->test($roomnum);
  $sql="DELETE FROM `room` WHERE ROOM_NUM='$roomnum' ";
  mysqli_query($conn,$sql);
}
function update_room($roomnum,$type,$state,$description,$price,$max_adult,$max_kids,$update_type)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $roomnum=$this->test($roomnum);
  $type=$this->test($type);
  $state=$this->test($state);
  $description=$this->test($description);
  $price=$this->test($price);
  $max_adult=$this->test($max_adult);
  $max_kids=$this->test($max_kids);
  if($update_type==0)
  {
    $sql="update room set type='$type'where ROOM_NUM='$roomnum'";
    mysqli_query($conn,$sql);
  }
  if($update_type==1)
  {
    $sql="update room set state='$state'where ROOM_NUM='$roomnum'";
    mysqli_query($conn,$sql);
  }if($update_type==2)
  {
    $sql="update room set description ='$description'where ROOM_NUM='$roomnum'";
    mysqli_query($conn,$sql);
  }if($update_type==3)
  {
    $sql="update room set price='$price'where ROOM_NUM='$roomnum'";
    mysqli_query($conn,$sql);
  }if($update_type==4)
  {
    $sql="update room set max_adult='$max_adult'where ROOM_NUM='$roomnum'";
    mysqli_query($conn,$sql);
  }if($update_type==5)
  {
    $sql="update room set max_kids='$max_kids'where ROOM_NUM='$roomnum'";
    mysqli_query($conn,$sql);
  }

}
function addtrip($t_id,$discription,$duration,$discount,$deadline,$max_number,$price)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $t_id=$this->test($t_id);
  $discription=$this->test($discription);
  $duration=$this->test($duration);
  $discount=$this->test($deadline);
  $deadline=$this->test($deadline);
  $max_number=$this->test($max_number);
  $price=$this->test($price);

$this->trip->setid($t_id);
$this->trip->setdescription($discription);
$this->trip->setduration($duration);
$this->trip->setDeadline($deadline);
$this->trip->setDiscount($discount);
$this->trip->setmaxnumtest($max_number);
$this->trip->setprice($price);

$sql="INSERT INTO `trip` (`T_Id`, `discription`, `Duration`, `discount`, `deadline`, `Max_number`, `Price`)
VALUES ($t_id, '$description', '$duration', '$deadline', '$discount', '$max_number', '$price');";
mysqli_query($conn,$sql);
}
function deletetrip($trip_id)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $trip_id=$this->test($trip_id);
  $sql="DELETE from trip where T_Id='$trip_id'";
  mysqli_query($conn,$sql);
}
function updatetrip($t_id,$discription,$duration,$discount,$deadline,$max_number,$price,$update_type)
{
  $t_id=$this->test($t_id);
  $discription=$this->test($t_id);
  $duration=$this->test($duration);
  $discount=$this->test($discount);
  $deadline=$this->test($deadline);
  $max_number=$this->test($max_number);
  $price=$this->test($Price);
  if($update_type==0)
  {
    $sql="update trip set discription='$discription'where T_Id='$t_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==1)
  {
    $sql="update trip set Duration ='$duration'where T_Id='$t_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==2)
  {
    $sql="update trip set Discount='$discount'where T_Id='$t_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==3)
  {
    $sql="update trip set deadline='$deadline'where T_Id='$t_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==4)
  {
    $sql="update trip set  price='$price'where T_Id='$t_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==5)
  {
    $sql="update trip set Max_number ='$maxnumber'where T_Id='$t_id'";
    mysqli_query($conn,$sql);
  }
}
function addoffer($offer_id,$content,$deadline,$discount,$price)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $offer_id=$this->test($offer_id);
  $content=$this->test($content);
  $deadline=$this->test($deadline);
  $discount=$this->test($discount);
  $price=$this->test($price);


  $this->offer->setofferid($offer_id);
  $this->offer->setContent($content);
  $this->offer->setDeadline($deadline);
  $this->offer->setDiscount($discount);
  $this->offer->setPrice($price);
  $sql="INSERT INTO `offer` (`OfferID`, `Content`, `deadline`, `Discount`, `Price`)
  VALUES ('$offer_id', '$content', '$deadline', '$discount', '$price');";
  mysqli_query($conn,$sql);
}
function deleteoffer($offerid)
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "projectsoftwear";
   // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // Check connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $offerid=$this->test($offerid);
  $sql="delete from offer where OfferID='$offerid'";
  mysqli_query($conn,$sql);
}
function updateoffer($offer_id,$content,$deadline,$discount,$price,$update_type)
{
  $offer_id=$tis->test($offer_id);
  $content=$this->test($content);
  $deadline=$tis->test($deadline);
  $discount=$this->test($discount);
  $price=$this->test($price);
  if($update_type==1)
  {
    $sql="update offer set deadline ='$deadline'where OfferID='$offer_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==0)
  {
    $sql="update offer set Content ='$content'where OfferID='$offer_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==2)
  {
    $sql="update offer set Discount ='$discount'where OfferID='$offer_id'";
    mysqli_query($conn,$sql);
  }
  if($update_type==3)
  {
    $sql="update offer set price ='$price'where OfferID='$offer_id'";
    mysqli_query($conn,$sql);
  }
}


}
class mangestaff
{
  private $ssn;
  public  $hkmanger;
  public  $generalmanger;
  public  $accountantManger;
  public  $chefManger;
  public function __construct()
  {
    $this->hkmanger=new HKManger();
    $this->generalmanger= new genral_manger();
    $this->accountantManger= new accountantManger();
    $this->chefManger=new chefManger();
  }
  public function getname ()
  {
    echo $this->hkmanger->name;
  }
  public function StuffSSN($key)
  {
    if ($key==0)
    {
      $this->ssn=$this->hkmanger->ssn;
    }
  }
  function test($data)
  {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
      return $data;
  }
  public function addStuff($Fname,$Lname,$ssn,$Email,$password,$phone,$type)
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectsoftwear";
     // Create connection
    $conn = mysqli_connect($servername,$username,$password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    $Fname=$this->test($Fname);
    $Lname=$this->test($Lname);
    $ssn=$this->test($ssn);
    $Email=$this->test($Email);
    $password=$this->test($password);
    $phone=$this->test($phone);
    $type=$this->test($type);
    $sql="INSERT INTO `staff` (`SSN`, `Fname`, `Lname`, `Password`, `Phone`, `Stype`, `Email`)
    VALUES ('$ssn', '$Fname', '$Lname', '$password', '$phone',' $type',' $Email')";
    if(!mysqli_query ($conn,$sql))
    {
      echo "not working";
    }
  }

  public function deleteStuff($type,$ssn)
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectsoftwear";
     // Create connection
    $conn = mysqli_connect($servername,$username,$password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    $sql="delete from staff where Stype ='$type'and SSN='$ssn';";
    mysql_query($con,$sql);
  }
  public function updatestuff($type,$ssn,$Fname,$Lname,$Email,$password,$phone,$updateType)
  {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectsoftwear";
     // Create connection
    $conn = mysqli_connect($servername,$username,$password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
    if($updateType==0){
     $sql="update staff set Fname='$Fname'where SSN='$ssn'and Stype='$type'";
     mysqli_query($sql);
  }

    if($updateType==1){
     $sql="update staff set Lname='$Lname'where SSN='$ssn'and Stype='$type'";
     mysqli_query($sql);
  }
    if($updateType==2){
     $sql="update staff set password='$password'where SSN='$ssn'and Stype='$type'";
     mysqli_query($sql);
  }
    if($updateType==3){
     $sql="update staff set email='$email'where SSN='$ssn'and Stype='$type'";
     mysqli_query($sql);
  }
    if($updateType==4){
     $sql="update staff set phone='$phone'where SSN='$ssn'and Stype='$type'";
     mysqli_query($sql);
  }
}
}
class HKManger extends person
{
    public $name;
    function sendreport()
    {

    }
}
class genral_manger extends stuff
{
    function sendreport()
    {

    }

    function showNotfication()
    {
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "projectsoftwear";
       // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
      // Check connection
      if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      $sql="select count(seen) from report where seen = 0";
      $sql2="update report set seen=1 where seen =0";
      mysqli_query($conn,$sql);
      mysqli_query($conn,$sql2);
    }
}

?>