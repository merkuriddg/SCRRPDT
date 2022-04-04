<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');
$id = $_REQUEST['id']; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>


<div class="main">
    <div class="container">
        <h3><a class="" href="../admin/">Admin</a> | Characters:
            <small>
                <select name="chars" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                    <option selected>Select:</option>
<?php 

        $count = 1;    
    $result = mysqli_query($con,"SELECT * FROM contacts ORDER BY lastname, firstname;")
    or die("Query fail: " . mysqli_error($con));
    while ($row = mysqli_fetch_array($result)){   
        $contactID = $row["contactID"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
?>
                    <option value="chars.php?id=<?php echo $contactID; ?>"><?php echo $count.". ".$firstname." ".$lastname; ?></option>
<?php
                    $count++; 
   }
                    $con->next_result();
    ?>                    
                </select>
            </small> </h3>

<?php include('get_member_info.php'); ?>
        
<hr> 
<form action="update_character.php" method="post">
<div class="row">
    <div class="col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Character</span><br>
              <span class="card-text">Name</span>
                  <input type="text" name="inputFName" id="inputFName" placeholder="First Name" value="<?php echo($member_fname);?>" size="10">                     
                  <input type="text" name="inputLName" id="inputLName" placeholder="Last Name" value="<?php echo($member_lname);?>" size="15"><br>
              <span class="card-text">Position</span>
                      <input type="text" name="inputPosisiton" id="inputPosition" placeholder="Position" value="<?php echo($member_position);?>"><br>
              <span class="card-text">Email</span>
                      <input type="text" name="inputEmail" id="inputEmail" placeholder="Email" value="<?php echo($member_email);?>"><br>
              <span class="card-text">Phone</span>
                      <input type="text" name="inputArea_Code" id="inputArea_Code" placeholder="555" value="<?php echo($area_code);?>" size="3">
                      <input type="text" name="inputPhone_Pre" id="inputPhone_Pre" placeholder="555" value="<?php echo($phone_pre);?>" size="3">
                      <input type="text" name="inputPhone_Suff" id="inputPhone_Suff" placeholder="1212" value="<?php echo($phone_suff);?>" size="4"><br>
              <span class="card-text">Profile</span>
                    <input type="text" name="inputProfile" id="inputProfile" placeholder="Profile" value="<?php echo($member_other);?>"><br>
            </div>
          </div>
      </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Details:</span><br>

              <span class="card-text">Education</span>
                  <input type="text" name="inputEducation" id="inputEducation" placeholder="Education" value="<?php echo($member_education);?>"><br>
              <span class="card-text">Location</span>
                      <input type="text" name="inputLocation" id="inputLocation" placeholder="Location" value="<?php echo($member_location);?>"><br>
              <span class="card-text">Skills</span>
                    <input type="text" name="inputSkills" id="inputSkills" placeholder="Skills" value="<?php echo($member_skills);?>"><br>
              <span class="card-text">Notes</span>
                      <input type="text" name="inputNotes" id="inputNotes" placeholder="Notes" value="<?php echo($member_notes);?>"><br>
              <span class="card-text">Experience</span>
                      <input type="text" name="inputExperience" id="inputExperience" placeholder="Experience" value="<?php echo($member_experience);?>">
            </div>
          </div>
      </div>
        <div class="col-lg-4 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Social:</span><br>
              <span class="card-text">Blinkedln</span>
                      <input type="text" name="inputBlinkedln" id="inputBlinkedln" placeholder="Name here" value="<?php echo($member_blinked_name);?>"><br>
              <span class="card-text">Instagram</span>
                      <input type="text" name="inputInstagram" id="inputInstagram" placeholder="Name here " value="<?php echo($member_instagram_name);?>"><br>
              <span class="card-text">Skwalk</span>
                      <input type="text" name="inputSkwalk" id="inputSkwalk" placeholder="Name here" value="<?php echo($member_skwalk_name);?>"><br>
              <span class="card-text">SnapChat</span>
                      <input type="text" name="inputSnapchat" id="inputSnapchat" placeholder="Name here" value="<?php echo($member_snapchat_name);?>">
              </div>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-sm-6">
              <form id="upload" action="photo_upload.php" enctype="multipart/form-data" method="post">
                        Current:
                            <img src="../dist/img/<?php echo $member_img; ?>" class="img-circle" alt="Image of <?php echo $member_name; ?>" height="100">

                        New:
                            <img id="blah" src="#" alt="Your New Image"  height="100"/>
                        <br>
							<input type="file" name="user_photo" id="user_photo" size="15">
                            <button type="submit" class="btn btn-primary"> Upload Photo </button>
				</form>
        </div>
        <div class="col-lg-8 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Details:</span><br>
              <span class="card-text">Backstory</span>
            <textarea rows="3"><?php echo $member_backstory; ?></textarea>
        </div>
        </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="text-center">
              <button type="submit" class="btn btn-danger">UPDATE CHARACTER RECORD</button>
            </div>
        </div>
    </div>
</form>           
        
 
<script type="application/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#user_photo").change(function(){
        readURL(this);
    });
  </script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../bower_components/jquery/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/js/bootstrap.bundle.min.js"></script>
              
          </div>
        </div>
    
</body>
</html> 
