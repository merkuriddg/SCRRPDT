<?php
//include config
require_once('../includes/config.php');

$event_id = $_REQUEST['inputid']; 
$event_alarmtime= $_REQUEST['inputalarmtime']; 
$event_decision = $_REQUEST['inputdecision']; 
$event_choice1 = $_REQUEST['inputchoice1']; 
$event_choice2 = $_REQUEST['inputchoice2']; 
$event_choice3 = $_REQUEST['inputchoice3']; 
$event_choice4 = $_REQUEST['inputchoice4']; 
$event_choice5 = $_REQUEST['inputchoice5']; 
$event_result1 = $_REQUEST['inputresult1']; 
$event_result2 = $_REQUEST['inputresult2']; 
$event_result3 = $_REQUEST['inputresult3']; 
$event_result4 = $_REQUEST['inputresult4']; 
$event_result5 = $_REQUEST['inputresult5']; 

//Update_Event
  $result = mysqli_query($con, "CALL update_event('".$event_id."', '" .$event_alarmtime."', '" .$event_decision."', '" .$event_choice1."', '" .$event_choice2."', '" .$event_choice3."', '" .$event_choice4."', '" .$event_choice5."', '" .$event_result1."', '" .$event_result2."', '" .$event_result3."', '" .$event_result4."', '".$event_result5."')")
      or 
      die("Update fail: " . mysqli_error($con));

$con->next_result();
header('Location: controlpanel.php'); exit(); 
    
?> 
