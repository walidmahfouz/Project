<?php

/*$dsn='mysql:host=localhost;dbname=projectsoftwear';
$user='root';
$pass='';
try {
	$db= new PDO($dsn,$user,$pass);
	echo"connecttedddddddddd";
  

}
catch(PDOException $e)
{
	echo"failedddddddddddd";
}

*/

$servername = "localhost";
$username = "root";
$password = "";
$database= "projectsoftwear";
$connect=mysqli_connect($servername,$username,$password,$database);
if(!$connect)
{
	echo ":))";
}
else
{
	echo"welcome";

}





?>