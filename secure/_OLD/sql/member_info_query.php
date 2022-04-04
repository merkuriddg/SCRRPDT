<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error($con));	
}

echo 'get member_info_query';

//member_info Query 
$member_info = 'SELECT * FROM member_info 
            WHERE memberID = ' . $_SESSION['memberID'];

$member_query = mysqli_query($con, $member_info);
if (!$member_query) {
	die ('SQL Error: ' . mysqli_error($con));
}

    while ($row = mysqli_fetch_array($member_query))
    {
		    $_SESSION['fname'] = $row['fname'];
		    $_SESSION['lname'] = $row['lname'];
		    $_SESSION['mw'] = $row['mw'];
		    $_SESSION['img'] = $row['img'];
		    $_SESSION['email'] = $row['email'];
		    $_SESSION['position'] = $row['position'];
		    $_SESSION['member_position'] = $row['member_position'];
		    $_SESSION['profile'] = $row['profile'];
		    $_SESSION['groupID'] = $row['groupID'];
		    $_SESSION['phone'] = $row['phone'];
		    $_SESSION['area_code'] = $row['area_code'];
		    $_SESSION['phone_pre'] = $row['phone_pre'];
		    $_SESSION['phone_suff'] = $row['phone_suff'];
		    $_SESSION['notes'] = $row['notes'];
		    $_SESSION['other'] = $row['other'];
		    $_SESSION['blinked_name'] = $row['blinked_name'];
		    $_SESSION['instagram_name'] = $row['instagram_name'];
		    $_SESSION['skwalk_name'] = $row['skwalk_name'];
		    $_SESSION['snapchat_name'] = $row['snapchat_name'];
		    $_SESSION['fb_name'] = $row['fb_name'];
		    $_SESSION['education'] = $row['education'];
		    $_SESSION['experience'] = $row['experience'];
		    $_SESSION['location'] = $row['location'];
		    $_SESSION['skills'] = $row['skills'];
		    $_SESSION['first_login'] = $row['first_login'];
		    $_SESSION['last_login'] = $row['last_login'];
            
}
$_SESSION['fullname'] = $_SESSION['fname'] . ' ' . $_SESSION['lname'] ;
echo 'worked';

?>
