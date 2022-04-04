<?php

//Get_Member_info
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_member_info('" .$id. "')")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
//    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
    $member_id = $row['memberID']; 
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $member_mw = $row['mw']; 
    $member_img = $row['img']; 
    $position = $row['position']; 
    $member_position = $row['member_position']; 
    $email = $row['email']; 
    $profile = $row['profile']; 
    $area_code = $row['area_code']; 
    $phone_pre = $row['phone_pre']; 
    $phone_suff = $row['phone_suff']; 
    $other = $row['other']; 
    $education = $row['education']; 
    $experience = $row['experience']; 
    $location = $row['location']; 
    $skills = $row['skills']; 
    $notes = $row['notes']; 
    $blinked_name = $row['blinked_name']; 
    $instagram_name = $row['instagram_name']; 
    $skwalk_name = $row['skwalk_name']; 
    $snapchat_name = $row['snapchat_name'];
      
      if ($email=="") {
          $email=strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com";
      }

      if ($area_code == NULL) 
      {$full_phone = "";}
      else
{    $full_phone =  "(".$area_code.") ".$phone_pre."-".$phone_suff;   }


      $no 	= 1;
    $total 	= 0;

?>
