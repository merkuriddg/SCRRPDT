<?php
echo "member_query";

require_once('../../includes/config.php');

//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error($con));	
}



//members 
$members_info = 'SELECT * FROM members
            WHERE memberID = ' . $_SESSION[memberID];

$member_query = mysqli_query($con, $members_info);
if (!$member_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($member_query))
    {
		    $_SESSION['username'] = $row['username'];
		    $_SESSION['email'] = $row['email'];
		    $_SESSION['last_login'] = $row['last_login'];
            
}
echo "member_query2";
echo $_SESSION['username'];
		header('Location: member_update.php');

?>