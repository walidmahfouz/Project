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

class Room {
    
    
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
    
      public function setType ($x){
       $this -> type = $x;
    }
    public function getType (){
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
    
    
       public function setprice ($x){
       $this -> price = $x;
    }
    public function getprice (){
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
    
    
    
    
     public function insertRoom($ROOM_NUM,$type,$state,$description,$price,$max_adult,$max_kids){
        
    $sql = "INSERT INTO room (ROOM_NUM,type,state,description,price,max_adult,max_kids)
    VALUES ($ROOM_NUM,$type,$state,$description,$price,$max_adult,$max_kids)";
    mysql_query($sql);
    
        
    }
    
    public function get_empty_room_type($type)
    {
     
          $sql = "select ROOM_NUM,type from room where state=0";
        $query =   mysql_query($sql);
           $arr= mysql_fetch_assoc ($query);
          return $arr ;
    }
}

?>

<html>
    <head>
        <title>  room  </title>
    </head>
    <body>
        <?php
        
        $room = new Room();
        
       
        $room->setmax_kids(54);

        echo $room->getmax_kids();

      ?>
    </body>
</html>