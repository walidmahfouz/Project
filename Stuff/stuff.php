<?php include_once 'person.php';?>
<?php require'fpdf.php';?>
<?php

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
  echo "PDF created";
  $sql2="UPDATE report SET SEEN = 1 where TOMail='$this->email' AND seen= 0 ";
  $result=mysqli_query($conn, $sql);
  if ($result->num_rows>0) {
    $su;
    $co;

    $pdf=new FPDF();
    $pdf->AddPage();
    $pdf->Setfont('Arial','B',18);
      echo "New record created successfully";
      while($row=$result->fetch_assoc())
      {
       $pdf->Cell(100,10,$row["supject"]);
       $pdf->LN();
       $pdf->Cell(100,10,$row["content"]);
       $pdf->LN();
       ob_end_clean();
       $pdf->output();

      }
      mysqli_query($conn, $sql2);

  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
}


    }
}
?>
<?php
$stuff=new stuff();
$stuff->reciveReport();

 ?>