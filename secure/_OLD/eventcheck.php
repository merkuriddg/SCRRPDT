<base target="_parent">
<b>Event Checker</b>
<?php 
require_once('../includes/config.php');

//    echo "Game Week: ".$_SESSION['game_week'];
//    echo "Game Day: ".$_SESSION['game_day'];
//    echo "Position: ".$_SESSION['member_position'];
$_SESSION['member_position'] = 'CFO';
      //Get_Alarms
  $result = mysqli_query($con, 
  "CALL get_events_by_position('".$_SESSION['game_week']."', '" .$_SESSION['game_day']."', '" .$_SESSION['member_position']. "')")
      or 
      die("Query fail: " . mysqli_error($con));
  while ($row = mysqli_fetch_array($result)){   
    $_SESSION['member_position'] = $row['member_position']; 

if ($row['alarm'] == '1') 
{
    $_SESSION['1alarm'] = $row['alarm']; 
    $_SESSION['1alarmtime'] = $row['alarmtime']; 
    $_SESSION['1choice1'] = $row['choice1']; 
    $_SESSION['1choice2'] = $row['choice2']; 
    $_SESSION['1choice3'] = $row['choice3']; 
    $_SESSION['1choice4'] = $row['choice4']; 
    $_SESSION['1choice5'] = $row['choice5']; 
    $_SESSION['1result1'] = $row['result1']; 
    $_SESSION['1result2'] = $row['result2']; 
    $_SESSION['1result3'] = $row['result3']; 
    $_SESSION['1result4'] = $row['result4']; 
    $_SESSION['1result5'] = $row['result5']; 
        
    }
else if ($row['alarm'] == '2')      
{
    $_SESSION['2alarm'] = $row['alarm']; 
    $_SESSION['2alarmtime'] = $row['alarmtime']; 
    $_SESSION['2choice1'] = $row['choice1']; 
    $_SESSION['2choice2'] = $row['choice2']; 
    $_SESSION['2choice3'] = $row['choice3']; 
    $_SESSION['2choice4'] = $row['choice4']; 
    $_SESSION['2choice5'] = $row['choice5']; 
    $_SESSION['2result1'] = $row['result1']; 
    $_SESSION['2result2'] = $row['result2']; 
    $_SESSION['2result3'] = $row['result3']; 
    $_SESSION['2result4'] = $row['result4']; 
    $_SESSION['2result5'] = $row['result5']; 
}
else if ($row['alarm'] == '3') 
{
    $_SESSION['3alarm'] = $row['alarm']; 
    $_SESSION['3alarmtime'] = $row['alarmtime']; 
    $_SESSION['3choice1'] = $row['choice1']; 
    $_SESSION['3choice2'] = $row['choice2']; 
    $_SESSION['3choice3'] = $row['choice3']; 
    $_SESSION['3choice4'] = $row['choice4']; 
    $_SESSION['3choice5'] = $row['choice5']; 
    $_SESSION['3result1'] = $row['result1']; 
    $_SESSION['3result2'] = $row['result2']; 
    $_SESSION['3result3'] = $row['result3']; 
    $_SESSION['3result4'] = $row['result4']; 
    $_SESSION['3result5'] = $row['result5']; 

}
}

$con->next_result();

$currenttime = date('i');

    $alarm1 = $_SESSION['1alarmtime'];
    $alarm2 = $_SESSION['2alarmtime'];
    $alarm3 = $_SESSION['3alarmtime'];

    $charcheck = substr($currenttime, -2);

if (($charcheck == $alarm1) OR ($charcheck == $alarm2) OR ($charcheck == $alarm3)) 
    {       
    echo "<script type='text/javascript'>top.window.location = 'event_template.php'</script>";    

//Select Day/Event Music
  $result = mysqli_query($con, 
//  "CALL get_music('.$_SESSION[weekID].','.$_SESSION[dayID].')")
    "CALL get_music('1','1')")
      or 
      die("Query fail: " . mysqli_error($con));
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
    $song_title = $row['song_title']; 
      
        }

    } 
    else 
    {
        echo $currenttime." = ".$alarm1."/".$alarm2."/".$alarm3."\n\r";
    header("Refresh:30"); 
    }
 ?>
