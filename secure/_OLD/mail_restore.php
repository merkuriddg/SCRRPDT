<?php
require_once('../includes/config.php');
include('logged_in.php');
$id=$_GET['id'];

    
$sql_stmt="UPDATE mail SET mail_code = 'u' WHERE mailID = '".$id."'";
echo $sql_stmt;
mysqli_query($con,$sql_stmt);        

mysqli_close($con);     


    if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }
?>
