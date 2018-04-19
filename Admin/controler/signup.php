
<?php

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

        $Fname="";
        $Lname="";
        $ssn="";
        $phone="";
        $userName="";
        $Password="";
        $password_confirm="";
        $country="";
        $email  ="" ;

		if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $Fname = test($_POST["Fname"]);
        echo $Fname;
        $Lname = test($_POST["Lname"]);
        echo "<br>". $Lname . "<br>";
        $country = test($_POST["country"]);
        echo $country. "<br>";
        $ssn = test ($_POST["ssn"]);
      echo $ssn . "<br>";
        $phone = test($_POST["phone"]);
    echo $phone . "<br>";
        $userName= test($_POST["username"]);
       echo $userName . "<br>";
        $email = test($_POST["email"]);
        $password=test($_POST["password"]);
        //echo $email. "<br>";
        //$sql->execute();
        //$sql2->execute();
        echo "NEW RECORD";
		
		
    }
	$sql="INSERT INTO `guest` (`G_SSN`, `Fname`, `Lname`, `userName`, `Password`, `Email`, `FeedBack`, `country`, `phone`, `Age`) 
	VALUES ($ssn,$Fname,$Lname,$username,$password,$email,'o',$country,$phone,'123')";
//$sql2="INSERT INTO `user` (`SSN`, `name`, `email`, `password`, `type`)  VALUES ($ssn,$Fname,$email,$password,1)";


if(mysqli_query($conn,$sql))
{
	echo "working";
}
else{
	 mysqli_connect_error($conn);
}

//$sql->bind_param("issssssi",);
//$sql2->bind_param("isssss");
       
    
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
     function test2()
     {
       if(strcmp($password,$_POST["password_confirm"]))
         {
             $password_confirm=test($_POST["password_confirm"]);
             return 0;
         }
         else
          return 1;
     }
    ?>
