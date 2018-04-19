<?php
session_start();
session_unset();
session_destroy();
header("location:  /Project/Admin/viewer/index2.php");
exit();
?>