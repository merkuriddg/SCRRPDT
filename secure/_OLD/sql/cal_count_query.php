<?php
//Set Date
$defaultdate= date("Y-m-d");
    

//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    

//Calendar Count
$cal_count_sql = 'SELECT * FROM calendar_sched 
            WHERE date <> "" ';

$cal_count_query = mysqli_query($con, $cal_count_sql);
if (!$cal_count_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

//loop thru all records
    while ($row = mysqli_fetch_array($cal_count_query))
    {
    //check to see if future events exist
        if ($row[date] >= $defaultdate) {
        $cal_count++;
        $_SESSION['cal_count'] = $cal_count;
    }
}
?>