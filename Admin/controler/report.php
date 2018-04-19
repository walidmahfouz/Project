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
    
   private  $to;
   private  $from;
   private  $Date;
   private  $subject;
   private  $content;
    
   public function setTo ($x){
       $this -> to = $x;
    }
    public function getTo (){
       return $this->to;
    } 
    
    
       public function setFrom ($x){
       $this -> from = $x;
    }
    public function getFrom (){
       return $this-> from;
    }
    
    
      public function setDate ($x){
       $this -> Date = $x;
    }
    public function getDate (){
       return $this-> Date;
    }
    
           public function setSubject ($x){
       $this->subject = $x;
    }
    public function getSubject (){
       return $this->subject;
    }
    
          public function setContent ($x){
       $this->content = $x;
    }
    public function getContent (){
       return $this-> subject;
    }
    
    
    public function sendReport($supject,$Content,$To,$From,$Date,$S_SSN){
        
    $sql = "INSERT INTO report (supject,Content,To,From,Date,S_SSN)
    VALUES ($supject,$Content,$To,$From,$Date,$S_SSN)";
    mysql_query($sql);
        
    if (mysql_query($sql)){
        return true;
    }
        else {
            return false;
        }
        
        if ($supject != null){
            return true;
        }
        else {
            return false;
        }
        
        if ($Content != null){
            return true;
        }
        else {
            return false;
        }
        
         if ($To != null){
            return true;
        }
        else {
            return false;
        }
        
        if ($From != null){
            return true;
        }
        else {
            return false;
        }
        
        if ($Date != null){
            return true;
        }
        else {
            return false;
        }
        
        if ($S_SSN != null){
            return true;
        }
        else {
            return false;
        }
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
        
       
        $report->setSubject('hjdkjbkj');

        echo $report->getSubject();
        
        
        
    
      ?>
    </body>
</html>