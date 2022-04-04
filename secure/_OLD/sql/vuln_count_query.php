<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
//Vulnerability Count
//https://nvd.nist.gov/vuln/data-feeds#JSON_FEED

$vuln_count_sql = 'SELECT * FROM vuln_sched 
            WHERE date <> "" ';

$vuln_count_query = mysqli_query($con, $vuln_count_sql);
if (!$vuln_count_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($vuln_count_query))
    {
    if ($row[date] >= $defaultdate) {
        $threat_count++;
    }
}
    
?>