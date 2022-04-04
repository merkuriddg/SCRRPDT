<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error());}

$coID=1;
$MemberID = $_SESSION['MemberID'];
$Profile = $_POST['Profile'];
$ProfileName = $_POST['profname'];
$MissionID = $_POST['MissionID'];
$DeptID = $_POST['DeptID'];
$Template = $_POST['$Template'];

$SubCategoryID = $_POST['SubCategoryID'];

$MIL = $_POST['MIL'];
$ProfileStartDate = $_POST['ProfileStartDate'];
$DTG=$ProfileStartDate;
$code = uniqid();
$codex = $code & $ProfileStartDate;
$UID = md5($codex);


foreach ($MissionID as $key => $rowValue1)
{
    foreach ($DeptID as $rowValue2) {
        foreach ($SubCategoryID as $rowValue3) {
            $FunctionID=substr($rowValue3,0,2);
            $CategoryID=substr($rowValue3,3,2);
            $SubCatID = substr($rowValue3,6,2);

            $sql="INSERT INTO NIST_profiles (coID,MemberID,Profile,ProfileName,MissionID,DeptID,TemplateID,FunctionID,CategoryID,SubCatID,MIL,ProfileStartDate,TransactionID) VALUES ('".$coID."','".$MemberID."','".$Profile."','".$ProfileName."','".$rowValue1."','".$rowValue2."','".$Template."','".$FunctionID."','".$CategoryID."','".$SubCatID."','".$MIL."','".$ProfileStartDate."','".$UID."')";
            $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
            $con->next_result();


        }
    }
}

header('Location: profilebuilt.php?md5='.$UID.'&dtg='.$DTG);
die();

?>
