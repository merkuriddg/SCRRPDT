<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

if (isset($_SESSION['memberID'])) {
  $memberID = trim($_SESSION['memberID']);
}

//Mail Count
$msg_count_sql = "SELECT COUNT(*) AS 'COUNT' FROM email_sched WHERE (mail_read <> 'Y') AND (toID = '" . $memberID."')";

		
$msg_count_total_query = mysqli_query($con, $msg_count_total_sql);

    if (!$msg_count_query) {
        die ('SQL Error: ' . mysqli_error($con));
    }

        while ($row = mysqli_fetch_array($msg_count_total_query))
        {
        $msg_count_total = $row["COUNT"];
           $_SESSION['msg_count_total'] = $msg_count_total;
     }

?>