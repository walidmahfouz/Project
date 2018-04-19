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
     
         $sql = "SELECT ROOM_NUM,type FROM room WHERE state=0 AND type='$type'";
         $query =mysql_query($sql);
		 $array=array("ROOM_NUM"=>array(),"type"=>array());
		 while($arr=mysql_fetch_array($query,MYSQL_ASSOC))
		 {
			  $array['ROOM_NUM'][]=$arr['ROOM_NUM'];
			  $array['type'][]=$arr['type'];
		 }
         return $array ;
    }
}
?>
