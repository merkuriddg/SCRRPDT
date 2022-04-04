<?php
require_once('../includes/config.php');
include('logged_in.php');
$id=$_GET['id'];

    
$sql="UPDATE mail SET mail_code = 't' WHERE mailID = '".$id."'";
//echo $sql_stmt;
mysqli_query($con,$sql);        

mysqli_close($con);     


    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>
