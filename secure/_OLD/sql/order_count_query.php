<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}
    
//Orders Count
$orders_count_sql = 'SELECT COUNT(*)  AS "COUNT"
		FROM orders WHERE date =' . $defaultdate;
		
$orders_count_query = mysqli_query($con, $orders_count_sql);

if (!$orders_count_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

while ($row = mysqli_fetch_array($orders_count_query))
{
$orders_count = $row["COUNT"];
}

?>