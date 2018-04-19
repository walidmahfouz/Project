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

?> 



<?php 
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
		$sql = "INSERT INTO report (supject,Content,ToMail,From,Date,S_SSN)
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
<html>
    <head>
        <title>  report  </title>
    </head>
    <body>
        <?php
        
        $report = new Report();
  
        
        
        
    
      ?>
    </body>
</html>