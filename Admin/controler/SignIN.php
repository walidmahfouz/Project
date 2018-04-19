<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectsoftwear";
session_start();
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$email=$_POST["username"];
$password1=$_POST["password"];
$sql=$conn->prepare("SELECT email ,password FROM user where email=? and password=? ");
$sql->bind_param("ss",$email,$password1);

  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    $email=test($_POST["username"]);
    $password1=test($_POST["password"]);
    $sql->execute();
    $result=$sql->get_result();
    $i=0;
    while($row= mysqli_fetch_assoc($result))
    {
      $i++;
    }
    if ($i==1)
    {
      /*
      $res=mysqli_query($conn,"SELECT url FROM `user` WHERE email='$email' and password='$password1'");
      /* echo "connected succesfully";
       header("location:"."$res");*/
       $url='';
       $type='';
	   $sql2="SELECT usertype.type FROM usertype INNER JOIN user ON user.type=usertype.U_ID AND user.email='$email' AND user.password='$password1'";
       $sql="SELECT url.link from url INNER JOIN user_url ON url.ID=user_url.url_id INNER join user ON user.ssn=user_url.user_id WHERE user.email='$email' AND user.password='$password1'";
       $result3=mysqli_query($conn,$sql);
	   $result2=mysqli_query($conn,$sql2);
           while($row=mysqli_fetch_array($result3,MYSQL_ASSOC))
           {
               $url=$row["link"];
			 
           }
		   while($row=mysqli_fetch_array($result2,MYSQL_ASSOC))
           {
               $type=$row["type"];
			   
           }

$_SESSION['Email']=$email; 
$_SESSION['Password']=$password1;
 echo "connected succesfully";
   if($type=="stuff")
   {
     header("location:  /Project/Stuff/".$url.".php");
   }
   elseif($type=="f.p.maneger")
   {
	   header("location:  /Project/Stuff/".$url.".php");
   }
   elseif($type=="accountant")
   {
	   header("location:  /Project/Stuff/".$url.".php");
   }
   elseif($type=="H.K")
   {
	   header("location:  /Project/Stuff/".$url.".php");
   }
   elseif($type=="maneger")
   {
	   header("location:  /Project/Stuff/".$url.".php");
   }
   elseif($type=="admin")
   {
     header("location:  /Project/Admin/controler/".$url.".php");
   }
   elseif($type=="reseptionist")
   {
     echo"sssssssssssssssss";
	 header("location:  /Project/ReceptionistPage/Controller/".$url.".php");
   }
   elseif($type=="guest")
   {
     header("location:  /Project/Guest/swe/Home".$url.".php");
   } 
    }
  }
	else {
      echo"not connected";
    }


  
  function test($data)
  {
     $data = str_replace("'", "\\'", $data);
     $data = mysql_real_escape_string($data);
     $data = trim($data);
     $data = strip_tags($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
  }
  #mysqli_query($conn,"select * from users");
?>
