
<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
//Threat Count
//https://github.com/hslatman/awesome-threat-intelligence
//https://support.kaspersky.com/13849#block4
    
$sql3 = 'SELECT * FROM threat_sched 
            WHERE date <> "" ';

$query3 = mysqli_query($con, $sql3);
if (!$query3) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($query3))
    {
    if ($row[date] >= $defaultdate) {
        $threat_count++;
    }
}
 
?>