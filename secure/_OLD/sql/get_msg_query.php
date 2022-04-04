
<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());	
}

if (isset($_SESSION['memberID'])) {
  $memberID = trim($_SESSION['memberID']);
}
    
//Get Mail
$get_msg_sql = "SELECT * FROM email_sched WHERE  (toID = '" . $memberID."')";
		
$get_msg_query = mysqli_query($con, $get_msg_sql);

if (!$get_msg_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

while ($row = mysqli_fetch_array($get_msg_query))
		    $_SESSION['emailID'] = $row['emailID'];
		    $_SESSION['memberID'] = $row['memberID'];
		    $_SESSION['toID'] = $row['toID'];
		    $_SESSION['week'] = $row['week'];
		    $_SESSION['day'] = $row['day'];
		    $_SESSION['mail_read'] = $row['mail_read'];
		    $_SESSION['msg_type'] = $row['type'];
		    $_SESSION['msg_from'] = $row['from'];
		    $_SESSION['from_email'] = $row['from_email'];
		    $_SESSION['msg_subject'] = $row['subject'];
		    $_SESSION['msg_message'] = $row['message'];
		    $_SESSION['msg_date'] = $row['date'];
		    $_SESSION['msg_time'] = $row['time'];
            
}

?>