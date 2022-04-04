<?php

$goalinput = $_POST['goalinput'];
$goal_id = $_POST['goal_id'];
$goal_no = $_POST['goal_no'];
$goal_code = $_POST['goal_code'];
$goal_count = $_POST['goal_count'];
$goal_count = $goal_count + 1;

require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error($con));}


if ($goal_code == "edit") {
echo "EDIT!";
   $sql="UPDATE NIST_goals SET goal = '".$goalinput."' WHERE coID = '".$coID."' AND id = '".$goal_id."'";
   $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result)) {
      $con->next_result();
   }
}
elseif ($goal_code == "add"){
   echo "ADD!";
   $sql="INSERT INTO NIST_goals (coID, goal_no, goal) VALUES ('".$coID."', '".$goal_count."', '".$goalinput."')";
   $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result)) {
      $con->next_result();
   }
}
elseif ($goal_code == "delete") {
   echo "DEL!";
   $sql="DELETE FROM NIST_goals WHERE coID = '".$coID."' AND goal_no = '".$goal_id."'";
   $result = mysqli_query($con, $sql) or die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result)) {
      $con->next_result();
   }
}


header('Location: goals.php?g=1');
die();

?>


