<!DOCTYPE html>
<html>
<head>
    <title>SCRRPDT</title>
</head>
<body>
<?php

$uid = "";
$unique_id = "";
$shib_sess = "";
$php_sess = "";
$https = "";
$full_code = "";
// remove all session variables
session_unset();

// destroy the session
session_destroy();

header ("location:https://cyber.rit.edu/");
die;

?>


</body>
</html>