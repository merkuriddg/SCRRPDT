
<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    

//Vulnerability Count
//https://nvd.nist.gov/vuln/data-feeds#JSON_FEED

$sql4 = 'SELECT * FROM vuln_sched 
            WHERE date <> "" ';

$query4 = mysqli_query($con, $sql4);
if (!$query4) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($query4))
    {
    if ($row[date] >= $defaultdate) {
        $threat_count++;
    }
}

?>