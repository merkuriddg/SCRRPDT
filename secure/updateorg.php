<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

$orgname = $_POST['orgname'];
echo $orgname ;
$orgID = $_POST['orgid'];
echo $orgID ;


if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error($con));}

$sql="UPDATE NIST_orgs SET org_name = '".$orgname."' WHERE id = '".$orgID."'";
echo $sql;

$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)) {
   $con->next_result();
}


$_SESSION['orgname'] = $orgname;
$_SESSION['orgID'] = $orgID;

header('Location: settings.php?o=1');
die();

?>


