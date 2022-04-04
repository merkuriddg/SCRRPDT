<?php
echo '<div class="box box-solid">';
echo '            <div class="box-body">';

//Get_Event
  $result = mysqli_query($con, 
  "CALL get_events('".$_SESSION['weekid']."', '" .$_SESSION['dayid']."')")
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

      
      
echo '              <div class="box-group" id="accordion">';
echo '                <div class="panel box box-primary">';
echo '                  <div class="box-header with-border">';
echo '                    <h4 class="box-title">';
echo '                      <a data-toggle="collapse" data-parent="#accordion" href="#collapse'.$event_id.'">';
echo $event_member_position.' : '.$event_alarmtime.' : '.$event_id;
echo '                      </a>';
echo '                    </h4>';
echo '                  </div>';
echo '                  <div id="collapse'.$event_id.'" class="panel-collapse collapse">';
echo '                    <div class="box-body">      ';


echo '<form action="updateevent.php" method="post">';
echo '<input type="hidden"  name="inputid" id="inputid"  value="'.$event_id.'">';
echo "<table width='100%' border='1'><tr>";
echo "<th>Alarm: ";
echo '<input type="text"  name="inputalarm" id="inputalarm" placeholder="Alarm" value="'.$event_alarm.'">';
echo "</th><th>Decision: ";
echo '<input type="text"  name="inputdecision" id="inputdecision" placeholder="Decision" value="'.$event_decision.'">';
echo "</tr><tr>";
echo "<td>Position: ";
echo '<input type="text"  name="inputmemberposition" id="inputmemberposition" placeholder="C_O" value="'.$event_member_position.'">';
echo "</td><td>Time: ";
echo '<input type="text"  name="inputalarmtime" id="inputalarmtime" placeholder="AlarmTime" value="'.$event_alarmtime.'">';
echo "</td></tr><tr>";
echo "<td>Choice1: ";
echo '<input  name="inputchoice1" id="inputchoice1" placeholder="Choice1" value="'. $event_choice1.'">';
echo "</td><td>Result1: ";
echo '<input  name="inputresult1" id="inputresult1" placeholder="Result1" value="'. $event_result1.'">';
echo "</td></tr><tr><td>Choice2: ";
echo '<input  name="inputchoice2" id="inputchoice2" placeholder="Choice2" value="'. $event_choice2.'">';
echo "</td><td>Result2: ";
echo '<input  name="inputresult2" id="inputresult2" placeholder="Result2" value="'. $event_result2.'">';
echo "</td></tr><tr><td>Choice3: ";
echo '<input  name="inputchoice3" id="inputchoice3" placeholder="Choice3" value="'. $event_choice3.'">';
echo "</td><td>Result3: ";
echo '<input  name="inputresult3" id="inputresult3" placeholder="Result3" value="'. $event_result3.'">';
echo "</td></tr><tr><td>Choice4: ";
echo '<input  name="inputchoice4" id="inputchoice4" placeholder="Choice4" value="'. $event_choice4.'">';
echo "</td><td>Result4: ";
echo '<input  name="inputresult4" id="inputresult4" placeholder="Result4" value="'. $event_result4.'">';
echo "</td></tr><tr><td>Choice5: ";
echo '<input  name="inputchoice5" id="inputchoice5" placeholder="Choice5" value="'. $event_choice5.'">';
echo "</td><td>Result5: ";
echo '<input  name="inputresult5" id="inputresult5" placeholder="Result5" value="'. $event_result5.'">';
echo "</td></tr></table>";
echo '<input class="pull-right" type="submit" value="UPDATE"></form>';


echo '                    </div>';
echo '                  </div>';
echo '                </div>';


  }
$con->next_result();

    
?> 
