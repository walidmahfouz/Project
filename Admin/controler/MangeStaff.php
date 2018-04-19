<?php include 'H.kManger.php'; ?>
<?php include  'chefManger.php'; ?>
<?php include  'Generalmanger.php'; ?>
<?php include  'accontantManger.php'; ?>
<?php

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
?>
