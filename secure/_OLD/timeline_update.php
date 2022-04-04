<?php
$currentpage = $_SERVER['PHP_SELF'];
echo $currentpage;
echo $code;

switch ($currentpage) {
    case "dashboard.php":
        $pagecode = "00";
}


<!-- timeline entry codes

00 You completed your Onboarding
01 You submitted HR forms
02 You updated your profile
03 You updated your profile image
04 You completed your performance evaluation
05
06
07
08
99  You completed the daily R&R
 -->
    
    
    
<?php



//Update_Timeline
//run the store proc
  $result = mysqli_query($con, 
  "CALL insert_timeline('" .$_SESSION['memberID']. "', '". $defaultdate . "', '". $code . "', '". $notes . "', '". $img . "', '". $OtherMemberID . "')")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set

$con->next_result();

?>                           