<?php
require_once ('PHPMailer_5.2.4/class.phpmailer.php');
class confirmation{
    private $deadline; 
    private $email;
    private $content;

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
	   $this->content=$msg;
   }
    function get_content()
    {
        return  $this->content;
    }

 public function Sendconfermation($to,$deadline,$subject)
{
  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->CharSet="UTF-8";
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'smtp.gmail.com';
  $mail->Port = 465;
  $mail->Username = 'mahmodkamal167@gmail.com';
  $mail->Password = '26383693';
  $mail->SMTPAuth = true;
  $mail->From = 'receptionist';
  $mail->FromName = 'mahmod kamal';
  $mail->AddAddress($to);
  //$mail->AddReplyTo('phoenixd110@gmail.com', 'Information');

  $mail->IsHTML(true);
  $mail->Subject    ="confermation" ;
  $mail->AltBody    = "To our guest ";
  $mail->Body    = $deadline.$subject;

 if(!$mail->Send())
  {
    echo "Mailer Error: " . $mail->ErrorInfo;
  }
  else
  {
    echo "Message sent!";
  }
}
}
/*$confirm=new  confirmation();
$confirm->Sendconfermation('mokaxxx4@gmail.com','2017-5-6','fdsfdsfdsf');*/
?>