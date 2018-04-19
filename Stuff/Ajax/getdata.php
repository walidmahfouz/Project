<?php
$host="localhost";
$username="root";
$password="";
$db="faculty";
$con=  mysql_connect($host, $username,$password)or die("not connected");
if($con){
    $dbs=  mysql_select_db($db);
    echo"ali";
}
$str=$_GET['id'];
$sql="select * from subject where dept='$str';";
$result=  mysql_query($sql);
if($result){
    echo '<br><br><br>';
echo '<table border="1" width="80%" cellpadding="0">
            <thead >
                <tr bgcolor="66FF33">
                    <th>id</th>
                    <th>name</th>
                     <th>dept</th>
                    <th>instructor</th>
                     <th>code</th>
                   </tr>
            </thead><tbody>';
$i=0;
  $color="";
            while($row=  mysql_fetch_assoc($result)){
                if($i%2==0){
                    $color="FFFF33";
                }
                else{
                    $color="CC6633";
                }
                $id=$row['id'];
                $name=$row['name'];
                $dept=$row['dept'];
                $instructor=$row['instructor'];
                $code=$row['code'];
                echo '
                <tr bgcolor='.$color.'>
                    <td>'.$id.'</td>
                    <td>'.$name.'</td>
                
                <td>'.$dept.'</td>
                    <td>'.$instructor.'</td>
                    <td>'.$code.'</td>
                </tr>'
            ;
                $i++;
            }
     echo   '</tbody></table>';
}
?>

