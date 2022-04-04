<?php


//Get_Member_info
$_SESSION['uid']= $_SESSION['un'];
$sql="SELECT * from member_info where uid='".$_SESSION['uid']."';";
  $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
  while ($row = mysqli_fetch_array($result)){   
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $member_img = $row['img']; 
    $member_level = $row['level']; 
    $member_email = $row['email']; 
//    $member_team = $row['member_team'];
//    $member_position = $row['member_position'];
//    $member_profile = $row['profile'];
    $member_groupID = $row['groupid']; 
    $member_area_code = $row['area_code']; 
    $member_phone_pre = $row['phone_pre']; 
    $member_phone_suff = $row['phone_suff']; 
    $member_notes = $row['notes']; 
//    $member_other = $row['other'];
    $first_login = $row['first_login'];
    $last_login = $row['last_login']; 
  }
//$_SESSION['memberID'] = $_SESSION['memberID'];
$_SESSION['member_fname'] = $member_fname;
$_SESSION['member_lname'] = $member_lname;
$_SESSION['member_name'] = $member_fname . " " . $member_lname;
$_SESSION['member_img'] = $member_img;
$_SESSION['member_level'] = $member_level;
$_SESSION['member_email'] = $member_email;
//$_SESSION['member_team'] = $member_team;
//$_SESSION['member_profile'] = $member_profile;
$_SESSION['member_groupID'] = $member_groupID;
//$_SESSION['member_position'] = $member_position;
$_SESSION['member_area_code'] = $member_area_code; 
$_SESSION['member_phone_pre'] = $member_phone_pre; 
$_SESSION['member_phone_suff'] = $member_phone_suff; 
$_SESSION['member_phone'] = "(" . $member_area_code . ") " . $member_phone_pre . "-" . $member_phone_suff;
$_SESSION['member_notes'] = $member_notes;
//$_SESSION['member_other'] = $member_other;
$_SESSION['first_login'] = $first_login;
$_SESSION['last_login'] = $last_login;
$con->next_result();
?>    