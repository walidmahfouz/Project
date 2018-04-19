<?php
 session_start();
 function R_Username($email,$password)
 {
     $username;
	 $connect=mysql_connect("localhost","root","");
	 mysql_select_db("projectsoftwear");
	 $query=mysql_query("SELECT UserName FROM staff WHERE Email='$email' AND Password= '$password' AND Stype= 'reseptionist'");
	 if(mysql_num_rows($query)==1)
	 {
		 $arr=array('UserName'=>array());
		 while($username=mysql_fetch_assoc($query))
		 {$arr['UserName'][]=$username['UserName'];}
	  return $arr;
	 }
	 else
	 {
		 return "<h3 style='color:red'>you are not Receptionist</h3>";
	 }
 }



	 $Rusername=R_Username($_SESSION['Email'],$_SESSION['Password']);
	 var_dump($Rusername);
	 if($Rusername!="<h3 style='color:red'>you are not Receptionist</h3>")
	  { 
        $_SESSION['UserName']=$Rusername['UserName']; 
        header('location: /Project/ReceptionistPage/View/ReceptionistPage.php');
	  }
	 else
	 {
		 echo $Rusername;
	 }

?>