<?php
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
