<?php
require_once('../../includes/config.php');
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error($con));	
}


echo "member_udpate";

//if last_login is empty
if(empty($check)){


//members 
$members_info = $db->prepare("INSERT INTO member_info (memberID, email, profile, last_login) VALUES (:memberID, :email, :profile, :last_login)");
$members_info->execute(array(
    ':email' => $_SESSION['email'],
    ':profile' => $_SESSION['profile'],
    ':last_login' => $_SESSION['last_login'],
));

}
		header('Location: index.php');
?>
