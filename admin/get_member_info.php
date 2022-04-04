<!--
    $member_id = ""; 
    $member_fname = ""; 
    $member_lname = ""; 
    $member_mw = ""; 
    $member_img = ""; 
    $position = ""; 
    $member_position = ";" 
    $email = ""; 
    $profile = ""; 
    $area_code = ""; 
    $phone_pre = ""; 
    $phone_suff = ""; 
    $other = ""; 
    $education = ""; 
    $experience = ""; 
    $location = ""; 
    $skills = ""; 
    $notes = ""; 
    $blinked_name = ""; 
    $instagram_name = ""; 
    $skwalk_name = ""; 
    $snapchat_name = "";
-->
<?php
//Clear Member Info


//Get_Member_info
$result = mysqli_query($con,"CALL get_member_info('" .$id. "');")
or 
die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)){   
    $member_id = $row['memberID']; 
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $member_mw = $row['mw']; 
    $member_img = $row['img']; 
    $position = $row['position']; 
    $member_position = $row['member_position']; 
    $member_email = $row['email']; 
    $member_profile = $row['profile']; 
    $area_code = $row['area_code']; 
    $phone_pre = $row['phone_pre']; 
    $phone_suff = $row['phone_suff']; 
    $member_other = $row['other']; 
    $member_education = $row['education']; 
    $member_experience = $row['experience']; 
    $member_location = $row['location']; 
    $member_skills = $row['skills']; 
    $member_notes = $row['notes']; 
    $member_blinked_name = $row['blinked_name']; 
    $member_instagram_name = $row['instagram_name']; 
    $member_skwalk_name = $row['skwalk_name']; 
    $member_snapchat_name = $row['snapchat_name'];

      
      if ($email=="") {
          $email=strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com";
      }

      if ($area_code == NULL) 
      {$full_phone = "";}
      else
{    $full_phone =  "(".$area_code.") ".$phone_pre."-".$phone_suff;   }

    $member_name = $member_fname . " " . $member_lname;
    $member_phone = "(" . $area_code . ") " . $phone_pre . "-" . $phone_suff;


      $no 	= 1;
    $total 	= 0;

}
                    $con->next_result();


?>