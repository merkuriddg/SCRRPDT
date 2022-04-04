<?php

$missioninput = $_POST['missioninput'];
$mission_id = $_POST['mission_id'];
$mission_no = $_POST['mission_no'];
$mission_code = $_POST['mission_code'];
$mission_count = $_POST['mission_count'];
$mission_count = $mission_count + 1;
echo "Mission: ".$mission."<br>";
echo "MissionInput: ".$missioninput."<br>";
echo "MissionID: ".$mission_id."<br>";
echo "MissionNo: ".$mission_no."<br>";
echo "MissionCode: ".$mission_code."<br>";

require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error($con));}


if ($mission_code == "edit") {
echo "EDIT!";
   $sql="UPDATE NIST_missions SET mission = '".$missioninput."' WHERE coID = '".$coID."' AND mission_no = '".$mission_id."'";
   $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result)) {
      $con->next_result();
   }
}
elseif ($mission_code == "add"){
   echo "ADD!";
   $sql="INSERT INTO NIST_missions (coID, mission_no, mission) VALUES ('".$coID."', '".$mission_count."', '".$missioninput."')";
   $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result)) {
      $con->next_result();
   }
}
elseif ($mission_code == "delete") {
   echo "DEL!";
   $sql="DELETE FROM NIST_missions WHERE coID = '".$coID."' AND mission_no = '".$mission_id."'";
   $result = mysqli_query($con, $sql) or die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result)) {
      $con->next_result();
   }
}


header('Location: objectives.php?o=1');
die();

?>


