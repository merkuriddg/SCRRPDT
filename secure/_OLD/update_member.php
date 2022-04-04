<?php
echo '<pre>';
var_dump($_POST);
print_r($_POST); // for viewing it as an array
var_dump($_POST); // for viewing all info of the array
echo '</pre>';
//die();

require_once('../includes/config.php');
// Check connection
if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$_SESSION['fname'] = mysqli_real_escape_string($con, $_REQUEST['inputFName']);
$_SESSION['lname'] = mysqli_real_escape_string($con, $_REQUEST['inputLName']);
$_SESSION['email'] = mysqli_real_escape_string($con, $_REQUEST['inputEmail']);
$_SESSION['profile'] = mysqli_real_escape_string($con, $_REQUEST['inputProfile']);
$_SESSION['area_code'] = mysqli_real_escape_string($con, $_REQUEST['inputArea_Code']);
$_SESSION['phone_pre'] = mysqli_real_escape_string($con, $_REQUEST['inputPhone_Pre']);
$_SESSION['phone_suff'] = mysqli_real_escape_string($con, $_REQUEST['inputPhone_Suff']);
$_SESSION['other'] = mysqli_real_escape_string($con, $_REQUEST['inputOther']);
$_SESSION['education'] = mysqli_real_escape_string($con, $_REQUEST['inputEducation']);
$_SESSION['experience'] = mysqli_real_escape_string($con, $_REQUEST['inputExperience']);
$_SESSION['location'] = mysqli_real_escape_string($con, $_REQUEST['inputLocation']);
$_SESSION['skills'] = mysqli_real_escape_string($con, $_REQUEST['inputSkills']);
$_SESSION['notes'] = mysqli_real_escape_string($con, $_REQUEST['inputNotes']);
$_SESSION['blinked_name'] = mysqli_real_escape_string($con, $_REQUEST['inputBlinkedln']);
$_SESSION['instagram_name'] = mysqli_real_escape_string($con, $_REQUEST['inputInstagram']);
$_SESSION['skwalk_name'] = mysqli_real_escape_string($con, $_REQUEST['inputSkwalk']);
$_SESSION['snapchat_name'] = mysqli_real_escape_string($con, $_REQUEST['inputSnapchat']);

//run the store proc
  $result = mysqli_query($con, 
  "CALL update_member_info('" .$_SESSION['memberID']. "', '" .
                         $_SESSION['fname']. "', '" .
                         $_SESSION['lname']. "', '" .
                         $_SESSION['email']. "', '" .
                         $_SESSION['profile']. "', '" .
                         $_SESSION['area_code']. "', '" .
                         $_SESSION['phone_pre']. "', '" .
                         $_SESSION['phone_suff']. "', '" .
                         $_SESSION['other']. "', '" .
                         $_SESSION['education']. "', '" .
                         $_SESSION['experience']. "', '" .
                         $_SESSION['location']. "', '" .
                         $_SESSION['skills']. "', '" .
                         $_SESSION['notes']. "', '" .
                         $_SESSION['blinked_name']. "', '" .
                         $_SESSION['instagram_name']. "', '" .
                         $_SESSION['skwalk_name']. "', '" .
                         $_SESSION['snapchat_name']. "')")
      or 
      die("Query fail: " . mysqli_error());
$con->next_result();
 
header('Location: profile.php#userinfo');
die();
?>                 
