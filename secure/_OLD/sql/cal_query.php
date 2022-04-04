<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
//Calendar 
$cal_sql = 'SELECT * FROM calendar_sched 
            WHERE date = ' . $defaultdate;

$cal_query = mysqli_query($con, $cal_sql);
if (!$cal_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($cal_query))
    {
    if ($row[date] >= $defaultdate) {
        echo ($row[event]);
    }
}

?>