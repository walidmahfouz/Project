<?php
 session_start();
 $Rusername="";
 function R_Username($email,$password)
 {
     $username;
	 $connect=mysql_connect("localhost","root","");
	 mysql_select_db("projectsoftwear");
	 $query=mysql_query("SELECT UserName FROM staff WHERE Email='$email' AND Password= '$password' AND Stype= 'admin'");
	 if(mysql_num_rows($query)==1)
	 {
		 $username=mysql_fetch_assoc($query);
		 
		 return $username['UserName'];
	 }
	 else
	 {
		 return "<h3 style='color:red'>you are not Admin</h3>";
	 }
 }



	 $Rusername=R_Username($_SESSION['Email'],$_SESSION['Password']);
	 if($Rusername!="<h3 style='color:red'>you are not Admin</h3>")
	     header('location: /Project/Admin/viewer/AdminMangment.php');
	 else
	 {
		 echo $Rusername;
	 }

?>