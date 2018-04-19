<?php

//include'db.php';
$servername="localhost";
$username="root";
$password="";
$connect= mysql_connect($servername,$username,$password);
mysql_select_db("projectsoftwear");
if($connect==mysql_error())
{
  echo ":))";
}
else
{
  echo"welcome";

}
//include 'offer.php';
//include 'trip.php';
//include'reservation.php';
//include 'delete_reservation.php';
class guest{





private $ssn;



public function edit_db($ssn,$fname,$lname,$username,$pass,$email,$country,$phone,$age)
{

   
$update=mysql_query("UPDATE guest SET Fname='$fname',
                                      Lname='$lname',
                                      userName='$username',
                                      Password='$pass',
                                      Email='$email',
                                      country='$country',
                                      phone=$phone,
                                      Age=$age

 WHERE guest.G_SSN=$ssn");

//mysql_error($connect);


}
function cancel_trip($ssN)
{

   $sql= mysql_query("DELETE FROM booktrip WHERE G_SSn=$ssN");
 
   
}

function Feedback_DB($f,$ssn)
{

   
   $insert= mysql_query("UPDATE guest set FeedBack='$f' WHERE G_SSN=$ssn ");

  
}


function Show_Feedback()
{
  $show=mysql_query("SELECT FeedBack FROM guest");
  $arr=array('FeedBack'=>array());
  while($row=mysql_fetch_assoc($show))
{
   $arr['FeedBack'][]=$row['FeedBack'];
}
return $arr;
}

function Show_Trip()
{
$show=mysql_query("SELECT * FROM Trip ");
while( $row = mysql_fetch_assoc( $show ))
{

}

}

 function cancel_reservation($id,$RID)
{
   $sql= mysql_query("delete from resevation where guest_id =$id or R_ID=$RID  order by reservationdate DESC limit 1 ");
   
   

}


}




//$guest=new guest;

//$guest->edit_db(4523421,'MOHAMED','magdy',2,'123hfheke','a@gmail.com','london',2900021,21);
//$guest->cancel_trip(22);

/*$reservation= new Reservation;

$reservation->InsertReservation('2018-5-9','single','2018-5-9',0,0,1,"",0,22,'2017-5-6','ss@gmail.com');*/




//$guest->Feedback_DB('best hotel ever',4523421);

/*$offer=new offers;
$offer->BookThisOffer(1, 22,0);*/

/*$trip=new Trip;
$trip->bookThisTrip(1, 22,0);*/

/*
$reservation= new Reservation;

$reservation->InsertReservation('2018-5-9','single','2018-5-9',0,0,1,"",0,22,'2017-5-6','sskkkkk@gmail.com');*/

?>