<?php
//include config
require_once('../includes/config.php');
?>


<!DOCTYPE html>
<html>
<body>   
<p>AlarmTest</p>
<?php 
    
$_SESSION['game_week'] = '1';                 
$_SESSION['game_day'] = '1';                 
$_SESSION['member_position'] = 'CFO';                 

    echo "Game Week: ".$_SESSION['game_week'];
    echo "Game Day: ".$_SESSION['game_day'];
    echo "Position: ".$_SESSION['member_position'];

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
  
      
echo "<hr>";
echo "Alarm: ".$_SESSION['1alarm']." | ";      
echo "Time: ".$_SESSION['1alarmtime']." | ";
echo "Choice1: ".$_SESSION['1choice1']." | ";
echo "Choice2: ".$_SESSION['1choice2']."<BR>";
echo "<hr>";
echo "Alarm: ".$_SESSION['2alarm']." | ";      
echo "Time: ".$_SESSION['2alarmtime']." | ";
echo "Choice1: ".$_SESSION['2choice1']." | ";
echo "Choice2: ".$_SESSION['2choice2']."<BR>";
echo "<hr>";
echo "Alarm: ".$_SESSION['3alarm']." | ";      
echo "Time: ".$_SESSION['3alarmtime']." | ";
echo "Choice1: ".$_SESSION['3choice1']." | ";
echo "Choice2: ".$_SESSION['3choice2']."<BR>";
//echo $_SESSION['choice3'];      
//echo $_SESSION['choice4'];      
//echo $_SESSION['choice5'];      
//echo $_SESSION['result1'];      
//echo $_SESSION['result2'];      
//echo $_SESSION['result3'];      
//echo $_SESSION['result4'];      
//echo $_SESSION['result5'];      
      
  }

$con->next_result();

$currenttime = date('i');

    $alarm1 = $_SESSION['1alarmtime'];
    $alarm2 = $_SESSION['2alarmtime'];
    $alarm3 = $_SESSION['3alarmtime'];

    $charcheck = substr($currenttime, -2);
    
if (($charcheck == $alarm1) OR ($charcheck == $alarm2) OR ($charcheck == $alarm3)) 
    {       
        echo $currenttime." = ".$alarm1."/".$alarm2."/".$alarm3."\n\r";
        echo "GO TO MODAL!!!";
        header("location:alarm_modal.php"); 
} 
    else 
    {
        echo $currenttime." = ".$alarm1."/".$alarm2."/".$alarm3."\n\r";
        echo "This page will be refreshed in 30 seconds to check the minute value.";
 header("Refresh:30"); 
    }
 ?>

</body>
</html>

