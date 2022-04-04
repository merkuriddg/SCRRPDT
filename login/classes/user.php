<?php
#check UID and full_code match still?

if (($_SESSION['uid']<>"")&&($_SESSION['full_code']<>""))  {
	$_SESSION['loggedin'] = true;
	$_SESSION['user'] = $_SESSION['uid'];
}
?>
