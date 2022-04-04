<?php
//include config
require_once('../includes/config.php');

$news_id = $_REQUEST['inputid']; 
$newstitle1 = $_REQUEST['inputtitle1']; 
$newstitle2 = $_REQUEST['inputtitle2']; 
$newstitle3 = $_REQUEST['inputtitle3']; 
$news_paragraph1 = $_REQUEST['inputstory1']; 
$news_paragraph2 = $_REQUEST['inputstory2']; 
$news_paragraph3 = $_REQUEST['inputstory3']; 
$newsimg1 = $_REQUEST['inputimg1']; 
$newsimg2 = $_REQUEST['inputimg2']; 
$newsimg3 = $_REQUEST['inputimg3']; 

      
$sql = "CALL update_news('".$news_id."', '" .$newstitle1."', '" .$newstitle2."', '" .$newstitle3."', '" .$news_paragraph1."', '" .$news_paragraph2."', '".$news_paragraph3."', '" .$newsimg1."', '" .$newsimg2."', '" .$newsimg3."')";
//Update_Event
  $result = mysqli_query($con, $sql)
      or 
      die("Update fail: " . mysqli_error($con));
$con->next_result();
$url = "controlpanel.php?weekid=".$_SESSION['weekid']."&dayid=".$_SESSION['dayid'];
header('Location:'.$url); 
exit(); 
    
?> 
