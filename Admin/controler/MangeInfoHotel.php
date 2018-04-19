<?php include 'offer.php' ?>
<?php include 'trip.php'  ?>
<?php include 'room.php'  ?>
<?php

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

$sql="INSERT INTO `trip` (`T_Id`, `discription`, `Duration`, `discount`, `deadline`, `Max_number`, `Price`)
VALUES ($t_id, '$discription', '$duration', '$deadline', '$discount', '$max_number', '$price')";
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
  $sql="INSERT INTO `offer` (`OfferID`, `Content`, `deadline`, `Discount`, `Price`)
  VALUES ($offer_id, '$content', $deadline,$discount, $price)";
  if(mysqli_query($conn,$sql))
  {
    echo "done";
  }

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
 ?>
 