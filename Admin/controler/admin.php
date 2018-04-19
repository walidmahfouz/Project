<?php include 'person.php';?>
<?php include 'MangeStaff.php';?>
<?php include 'MangeInfoHotel.php';?>
<?php
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
 ?>
<?php
$Admin = new admin();
$manageinfohotel=new Manage_info_hotel();
$manageStuff=new mangestaff();
if ($_SERVER["REQUEST_METHOD"]=="POST") {
if (isset($_POST["btnadd"]))
{
if (isset($_POST["ROOM_NUM"])&&isset($_POST["type"])&&isset($_POST["state"])&&isset($_POST["description"])&&isset($_POST["price"])&&isset($_POST["max_adult"])&&isset($_POST["max_kids"]))
{
  $manageinfohotel->addroom($_POST["ROOM_NUM"],$_POST["type"],$_POST["state"],
  $_POST["description"],$_POST["price"],$_POST["max_adult"],$_POST["max_kids"]);
  $room=$_POST["ROOM_NUM"];
  echo $room;
}
else
{
  echo "your data not complete";
}
}
elseif (isset($_POST["updater"])) {
   if (isset($_POST["type1"])) {
      $manageinfohotel->update_room($_POST["ROOM_NUM1"],$_POST["type1"],"","","","","",0);
      echo "pingooooooooooooooooooooooooo";
  }
  else if (isset($_POST["state1"])) {
      $manageinfohotel->update_room($_POST["ROOM_NUM1"],"",$_POST["state1"],"","","","",1);
  }
  else if (isset($_POST["description1"])) {
      $manageinfohotel->update_room($_POST["ROOM_NUM1"],"","",$_POST["description1"],"","","",2);
  }
  else if (isset($_POST["price1"])) {
      $manageinfohotel->update_room($_POST["ROOM_NUM1"],"","","",$_POST["price1"],"","",3);
  }
  else if (isset($_POST["max_adult1"])) {
      $manageinfohotel->update_room($_POST["ROOM_NUM1"],"","","","",$_POST["max_adult1"],"",4);
  }
  else if (isset($_POST["max_kids1"])) {
      $manageinfohotel->update_room($_POST["ROOM_NUM1"],"","","","","",$_POST["max_kids1"],5);
  }
}
else if (isset($_POST["deleteroom"]))
{
  $manageinfohotel->deleteroom($_POST["ROOM_NUM1"]);
}
else if (isset($_POST["addtrip"]))
{
    $manageinfohotel->addtrip($_POST["T_id"],$_POST["descriptiont"],$_POST["duration"],$_POST["deadline"],
    $_POST["discount"],$_POST["max_num"],$_POST["pricet"]);
}
else if (isset($_POST["updatetrip"]))
{
  if(isset($_POST["description2"]))
  {
    $manageinfohotel->updatetrip($_POST["T_id2"],$_POST["description2"],"","","","","",0);
  }
  else if(isset($_POST["duration1"]))
  {
    $manageinfohotel->updatetrip($_POST["T_id2"],"",$_POST["duration1"],"","","","",1);
  }
  else if(isset($_POST["max_num1"]))
  {
    $manageinfohotel->updatetrip($_POST["T_id2"],"","",$_POST["max_num1"],"","","",2);
  }
  else if(isset($_POST["deadline1"]))
  {
    $manageinfohotel->updatetrip($_POST["T_id2"],"","","",$_POST["deadline"],"","",3);
  }
  else if(isset($_POST["price1"]))
  {
    $manageinfohotel->updatetrip($_POST["T_id2"],"","","","",$_POST["price1"],"",4);
  }
  else if(isset($_POST["max_num1"]))
  {
    $manageinfohotel->updatetrip($_POST["T_id2"],"","","","","",$_POST["max_num1"],5);
  }
}
else if(isset($_POST["deletetrip"]))
{
  $manageinfohotel->deletetrip($_POST["T_id2"]);
}
elseif (isset($_POST["addoffer"])) {
      $manageinfohotel->addoffer($_POST['offer_id'],$_POST['content'],$_POST['discount'],$_POST['price'],$_POST['date']);
    }
  else if (isset($_POST["deleteoffer"]))
  {
    $manageinfohotel->deleteoffer($_POST["offer_id1"]);
  }
  elseif(isset($_POST["updateoffer"]))
  {
    if(isset($_POST["content1"]))
    {
      $manageinfohotel->updateoffer($_POST["offer_id1"],$_POST["content1"],"","","",0);
    }
    elseif(isset($_POST["date1"]))
    {
      $manageinfohotel->updateoffer($_POST["offer_id1"],"",$_POST["date1"],"","",1);
    }
    elseif(isset($_POST["discount1"]))
    {
      $manageinfohotel->updateoffer($_POST["offer_id1"],"","",$_POST["discount1"],"",2);
    }
    elseif(isset($_POST["price3"]))
    {
      $manageinfohotel->updateoffer($_POST["offer_id1"],"","","",$_POST["price3"],3);
    }
  }
  elseif (isset($_POST["addstuff"]) ) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "youtube";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $manageStuff->addStuff($_POST["Fname"],$_POST["Lname"],$_POST["SSN"],$_POST["Email"],$_POST["password"],$_POST["Phone"],$_POST["Stype"]);
    $sql="INSERT INTO user (SSN,name,email,password,type) VALUES('$_POST[SSN]','$_POST[Fname].$_POST[Lname]','$_POST[Email]','$_POST[password]','$_POST[Stype]')";
    mysqli_query($conn,$sql);
  }
  elseif (isset($_POST["deleteStuff"])) {
    $manageStuff->deleteStuff($_POST["SSN1"]);
  }
  elseif(isset($_POST["updatestuff"]))
  {
    if(isset($_POST["Fname1"]))
    {
      $manageStuff->updatestuff($_POST["type1"],$_POST["SSN1"],$_POST["Fname"],"","","","",0);
    }
    elseif(isset($_POST["Lname1"]))
    {
      $manageStuff->updatestuff($_POST["type1"],$_POST["SSN1"],"",$_POST["Lname"],"","","",1);
    }
    elseif(isset($_POST["password1"]))
    {
      $manageStuff->updatestuff($_POST["type1"],$_POST["SSN1"],"","",$_POST["password1"],"","",2);
    }
    elseif(isset($_POST["email1"]))
    {
      $manageStuff->updatestuff($_POST["type1"],$_POST["SSN1"],"","","",$_POST["Email1"],"",3);
    }
    if(isset($_POST["Fname1"]))
    {
      $manageStuff->updatestuff($_POST["type1"],$_POST["SSN1"],"","","","",$_POST["Phone1"],4);
    }
  }
}


 ?>
