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
class person
{
public $Fname;
public $Lname;
public $password;
public $email="magdy@sunset.com";
public $ssn;
public $phoneNum;
function login($email,$password)
{

}
function setFname($name)
{
    $this->Fname=$name;
}
function setLanme($name)
{
    $this->Lname=$name;
}
function setpassword($pass)
{
    $this->password=$pass;
}
function setemail($email)
{
    $this->email=$email;
}
function setphone($phone)
{
    $this->phoneNum=$phone;
}
function getFname()
{
    return $Fname;
}
function getLname()
{
    return $Lname;
}
function getpassword()
{
    return $this->password;
}
function getemail()
{
    return $this->email;
}
function getssn()
{
    return $this->ssn;
}
function getphone()
{
    return $this->phoneNum;
}
}
?>
