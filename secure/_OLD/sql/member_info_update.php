<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error($con));	
}

echo 'member_info_update';

//if id is number and the active token is not empty carry on
if(is_numeric($_SESSION['memberID']) ){


//members 
$members_info = $db->prepare("UPDATE member_info 
SET first_login = :first_login
WHERE memberID = ' . $_SESSION[memberID].'");
$members_info->execute(array(
    ':first_login' => 'Y'
));


}
?>
