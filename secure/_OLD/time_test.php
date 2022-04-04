<!DOCTYPE html>
<html>
<body>
<p>AlarmTest</p>
<?php 
$currenttime = date('i');

    $_SESSION['alarmtime'] = "30";

    $alarm = $_SESSION['alarmtime'];


    echo $currenttime. "\n\r";

    echo "This page will be refreshed in 30 seconds to check the minute value.";

    $charcheck = substr($currenttime, -2);
    
if ($charcheck == $alarm) 
    { echo "THIRTY!";} 
    else 
    {
        echo "This page will be refreshed in 30 seconds to check the minute value.";
        header("Refresh:30"); }
 ?>
</body>
</html>