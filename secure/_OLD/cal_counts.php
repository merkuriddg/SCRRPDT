<?php 
$result = mysqli_query($con, 
//  "CALL get_cal_count('" .$_SESSION['memberID']. "')")
  "CALL get_cal_count('3')")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
    $cal_count = $row[0]; 
  }
$_SESSION['cal_count'] = $cal_count;

$con->next_result();

?>