<?php
session_start();

 function R_Username($email,$password)
 {
     $username;
	 $connect=mysql_connect("localhost","root","");
	 mysql_select_db("projectsoftwear");
	 $query=mysql_query("SELECT staff.UserName,staff.Stype FROM staff WHERE Email='$email' AND Password='$password' ");
     $array=array('UserName'=>array(),'Stype'=>array());
	 if(mysql_num_rows($query)==1)
	 {
		while($username=mysql_fetch_assoc($query))
		{
		   $array['UserName'][]=$username['UserName'];
		   $array['Stype'][]=$username['Stype'];
		}
		return $array;
	 }
	 else
	 {
		 return "<h3 style='color:red'>you are not staff</h3>";
	 }
 }
     $S_SSn=mysql_query("SELECT SSN from staff where Email='$_SESSION[Email]' AND Password='$_SESSION[Password]'");   

     $display1;
     $display2;
	 
	 $Susername=R_Username($_SESSION['Email'],$_SESSION['Password']);
	 var_dump($Susername);
	 if($Susername=="<h3 style='color:red'>you are not Staff</h3>")
	      echo $Susername;
	 else
	 {
     if($Susername['Stype']=='receptionist')
     {
        $display1='none';
        $display2='inline-block';
     }
     
     	 else
	 {
     if($Susername['Stype']=='f.p.maneger')
     {
        $display1='none';
        $display2='inline-block';
     }
     
   else
	 {
     if($Susername['Stype']=='accountant')
     {
        $display1='inline-block';
        $display2='inline-block';
     }
     
   else
	 {
     if($Susername['Stype']=='H.K')
     {
        $display1='inline-block';
        $display2='inline-block';
     }
     
      else
	   {
         if($Susername['Stype']=='maneger')
         {
           $display1='none';
           $display2='inline-block';
         }
	 }
	 }
	 }
	 
	 }
	 $_SESSION['UserName']=$Susername['UserName']['0'];
	 $_SESSION['display1']=$display1;
	 $_SESSION['display2']=$display2;
	 include 'var.php';
	 header("location:  /Project/Stuff/staff_page.php");
	}
	
?>