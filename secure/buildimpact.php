<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error());}

$coID=1;
$memberID = $_SESSION['memberID'];
$MissionID = $_POST['MissionID'];
$DeptID = $_POST['DeptID'];
$SubCategoryID = $_POST['SubCategoryID'];
$ImpactStmt = $_POST['ImpactStmt'];
$Checkboxes=$_POST['checkboxes'];
$Low = "";
$Med = "";
$High = "";
$ImpactStartDate = $_POST['ImpactStartDate'];
$DTG=$ImpactStartDate;
$code = uniqid();
$codex = $code & $ImpactStartDate;
$UID = md5($codex);


foreach ($Checkboxes as $Checkboxes=>$value) {
//echo "Check: ".$value."<br />";
switch ($value){
    case "low":
        $Low="1";
        break;
    case "med":
        $Med="1";
        break;
    case "high":
        $High="1";
        break;
}}

echo '<pre>';
var_dump($_POST);
print_r($_POST); // for viewing it as an array
var_dump($_POST); // for viewing all info of the array
echo '</pre>';



        foreach ($SubCategoryID as $rowValue3) {
            $FunctionID=substr($rowValue3,0,2);
            $CategoryID=substr($rowValue3,3,2);
            $SubCatID = substr($rowValue3,6,2);

            $sql="INSERT INTO NIST_impacts (coID,MemberID,ImpactStmt,MissionID,DeptID,FunctionID,CategoryID,SubCatID,Low,Med,High,ImpactStartDate,TransactionID) VALUES ('".$coID."','".$memberID."','".$ImpactStmt."','".$MissionID."','".$DeptID."','".$FunctionID."','".$CategoryID."','".$SubCatID."','".$Low."','".$Med."','".$High."','".$ImpactStartDate."','".$UID."')";
echo $sql;

            $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
            $con->next_result();


        }

header('Location: impactbuilt.php?md5='.$UID.'&dtg='.$DTG);
die();

?>
