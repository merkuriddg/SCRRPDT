<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
//Threat Count
//https://github.com/hslatman/awesome-threat-intelligence
//https://support.kaspersky.com/13849#block4
    
$threat_count_sql = 'SELECT * FROM threat_sched 
            WHERE date <> "" ';

$threat_count_query = mysqli_query($con, $threat_count_sql);
if (!$threat_count_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($threat_count_query))
    {
    if ($row[date] >= $defaultdate) {
        $threat_count++;
    }
}
     
?>