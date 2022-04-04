<?php
ini_set('log_errors', 1);
ini_set('display_errors', 1);
#Logged In?
//if not logged in redirect to login page
if (($_SESSION['un']=="") || ($_SERVER["PHP_AUTH_USER"]=="")) {
    $_SESSION['un'] = 'jxc9224';
    //header("Location: logout.php");
    //exit();
}


// Program to display URL of current page.
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $link = "https";
else
    $link = "http";

// Here append the common URL characters.
$link .= "://";
// Append the host(domain name, ip) to the URL.
$link .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$link .= $_SERVER['REQUEST_URI'];

// Get the File Name
$page_title = substr(strrchr($link, "/"), 1);
$page_len = intval(strlen($page_title));
$page_end = substr(strrchr($page_title, "."), 0);
$page_len2 = intval(strlen($page_end));
$length = intval($page_len) - intval($page_len2);
$pos = strpos($page_title, ' ', $length);
$page_case = substr($page_title,0,$length);
if ($page_case=="") {$page_case="index.php";}

//$sqlCheck="SELECT * FROM ";
//Eg. Check for https://sso.brown.edu/idp/shibboleth" in the Shib-Identity-Provider
#
##Insert_Tracker
$trackerdate= date("Y-m-d  H:i:s");
//echo $_SESSION['un']. ", ". $trackerdate . ", ". $page_case;
$result = mysqli_query($con, "CALL insert_tracker('" .$_SESSION['un']. "', '". $trackerdate . "', '". $page_case . "')") or  die("INSERT failed: " . mysqli_error($con));
// $con->next_result();
?>