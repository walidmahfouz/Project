<?php
$connect =mysql_connect("localhost","root","");
mysql_select_db("projectsoftwear");
require 'ReceptionistClass.php';
$reception=new Receptionist();
$array=$reception->getNearestCheckOutroom();
$datastring="";
for($i=0;$i<count($array['roomnumber']);$i++)
{
	 $datastring.="<tr>
	                  <td>".$array['roomnumber'][$i]."</td>
					  <td>".$array['checkOut'][$i]."</td>
					 </tr>";
}
echo $datastring;

?>