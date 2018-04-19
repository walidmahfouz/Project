<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "projectsoftwear";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if($_SERVER['REQUEST_METHOD']=="POST")
{
    if(isset($_POST['text']))
    {
        echo "done";
    }
    if(isset($_POST['send']))
    {
        $id=0;
 
    $sql="INSERT INTO `report` (`R_id`, `supject`, `Content`, `TO`, `From`, `Date`, `S_SSN`) VALUES($id,'$_POST[message]', '$_POST[content]','$_POST[text]','$_POST[from]' ,'$_POST[date]' ,'451515515515' )";
      if(mysqli_query($conn,$sql))
      {
       echo "working";
      }
        else{
            echo "error";
        }
    }
    else if(isset($_POST['notfication']))
    {
      $sql="select count(Seen) as SEEN from report where Seen = 0";
      $res=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_assoc($res))
      {
       echo $row['SEEN'];
          
      }
    }
    
}
else 
{
    echo "not working";
}
?>