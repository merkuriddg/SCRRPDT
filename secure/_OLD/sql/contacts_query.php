<?php
// Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

$contacts_query = 'SELECT * 
		FROM member_info ORDER BY lname';
		
$query = mysqli_query($con, $contacts_query);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($con));
}
?>
   