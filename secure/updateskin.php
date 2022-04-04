<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

$skin = $_POST['skin'];
echo $skin;

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error($con));}

$sql0="UPDATE NIST_settings SET selected = '' WHERE setting = 'css'";
echo $sql;

$result = mysqli_query($con,$sql0) or die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)) {
   $con->next_result();
}


$sql1="UPDATE NIST_settings SET selected = '1' WHERE value = '".$skin."' AND setting = 'css' ";
echo $sql;

$result = mysqli_query($con,$sql1) or die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)) {
   $con->next_result();
}

echo $skin;

$_SESSION['css'] = $skin;

header('Location: settings.php?i=1');
die();

?>


