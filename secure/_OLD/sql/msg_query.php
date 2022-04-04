
<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
//Mail Count
$sql1 = 'SELECT COUNT(*)  AS "COUNT"
		FROM email_sched WHERE checked <> "Y"';
		
$query1 = mysqli_query($con, $sql1);

if (!$query1) {
	die ('SQL Error: ' . mysqli_error($con));
}

while ($row = mysqli_fetch_array($query1))
{
$msg_count = $row["COUNT"];
}

?>