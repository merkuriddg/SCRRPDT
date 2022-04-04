<?php

$coname = $_POST['companyname'];
$coID = $_POST['coID'];

require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error($con));}

$sql="UPDATE NIST_cos SET co_name = '".$coname."' WHERE id = '".$coID."'";
$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)) {
   $con->next_result();
}
$_SESSION['companyname'] = $coname;
$_SESSION['coID'] = $coID;

header('Location: settings.php?c=1');
die();

?>


