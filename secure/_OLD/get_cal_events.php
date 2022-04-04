<?php
//include config
require_once('../includes/config.php');

$currenttime = date("H:i");


//Get_Event
  $result = mysqli_query($con, 
  "CALL get_events('".$_SESSION['game_week']."', '" .$_SESSION['game_day']."')")
      or 
      die("Query fail: " . mysqli_error($con));
  while ($row = mysqli_fetch_array($result)){   
    $event_id = $row['id']; 
    $event_alarm = $row['alarm']; 
    $event_alarmtime= $row['alarmtime']; 
    $event_member_position = $row['member_position']; 
    $event_decision = $row['decision']; 
    $event_choice1 = $row['choice1']; 
    $event_choice2 = $row['choice2']; 
    $event_choice3 = $row['choice3']; 
    $event_choice4 = $row['choice4']; 
    $event_choice5 = $row['choice5']; 
    $event_result1 = $row['result1']; 
    $event_result2 = $row['result2']; 
    $event_result3 = $row['result3']; 
    $event_result4 = $row['result4']; 
    $event_result5 = $row['result5']; 

$con->next_result();
echo "<table width='100%' border='1'><tr>";
echo "<th><a href='eventeditor.php?id=".$event_id."'>Alarm:". $event_alarm."</a></th><th>Decision:". $event_decision."</th>";
echo "</tr><tr>";
echo "<td>Position: ".$event_member_position."</td><td>Time: ".$event_alarmtime."</td>";
echo "</tr><tr>";
echo "<td>Choice1:". $event_choice1."</td><td>Result1:". $event_result1."</td>";
echo "</tr><tr>";
echo "<td>Choice2:". $event_choice2."</td><td>Result2:". $event_result2."</td>";
echo "</tr><tr>";
echo "<td>Choice3:". $event_choice3."</td><td>Result3:". $event_result3."</td>";
echo "</tr><tr>";
echo "<td>Choice4:". $event_choice4."</td><td>Result4:". $event_result4."</td>";
echo "</tr><tr>";
echo "<td>Choice5:". $event_choice5."</td><td>Result5:". $event_result5."</td>";
echo "</tr></table>";
  }

    
?> 