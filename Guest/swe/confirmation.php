<?php

class confirmation{
    private $deadline; 
    private $email;
    private $content;

$servername = "localhost";
$username = "root";
$password = "";
$database= "projectsoftwear";

    
  
    
  
     function setDeadline ($start_date)
    {         
       
        
     $this->deadline=date_add($start_date,date_interval_create_from_date_string("5 days"));
     
    
     }    
    function getDeadline ()
    {
       return $this->deadline;
    
    }    
    
    
    
     function set_To_mail ($mail)
    {         
    
        
             if(filter_var($mail,FILTER_VALIDATE_EMAIL))
            {
                $r = "valid email";  

                $this->email=$mail;
                

            }
         
         else if (filter_var($mail,FILTER_VALIDATE_EMAIL)==false )
            {
                $r= "invalid email,email is required "; 
            }
           
     }       
                
    function get_To_mail ()
    {
       return $this->email;
    
    }    
    
            
   function Set_content($msg)
            {
                 this->content =$msg;
             
            }
    function get_content()
    {
        return $this->content;
    }


    function into_confirmation_db()
       { $connect=mysqli_connect($this->servername,$this->username,$this->password;
        if(!$connect)
          {
             return mysqli_connect_error();
          }
         else{
              $insert=mysql_query("INSERT INTO confirmation(Content,deadline,toGuest) values($this->content,$this->deadline,$this->email");
               
             }
         if(mysqli_query($connect,$insert))
             {
           echo "New record created Successfully";
              }
            else
              {
                    echo "Error: " . $insert . "<br>" . mysqli_error($connect);
              }


$connect->close
}




?>



 
     

        
  