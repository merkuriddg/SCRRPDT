<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');

//email
$emailID = $_POST["emailID"];
$weekID = $_POST["weekID"];
$dayID = $_POST["dayID"];
$hourID = $_POST["hourID"];
$mail_type = $_POST["mail_type"];
$mail_to = $_POST["mail_to_id"];
$mail_from = $_POST["mail_from_id"];
$mail_cc1 = $_POST["mail_cc1_id"];
$mail_cc2 = $_POST["mail_cc2_id"];
$mail_cc3 = $_POST["mail_cc3_id"];
$email_subject = $_POST["email_subject"];
$email_body = $_POST["email_body"];
$email_attachment = $_POST["email_attachment"];
$email_attachment_url = $_POST["email_attachment_url"];
$email_body = htmlspecialchars($email_body);
$email_body = mysqli_real_escape_string($con, $email_body);        

$sql = "
    UPDATE email
    SET
    weekID = '$weekID', 
    dayID = '$dayID', 
    hourID ='$hourID', 
    email_type = '$mail_type', 
    email_to = '$mail_to', 
    email_from = '$mail_from', 
    email_cc1 = '$mail_cc1', 
    email_cc2 = '$mail_cc2', 
    email_cc2 = '$mail_cc3', 
    email_subject = '$email_subject', 
    email_body = '$email_body', 
    email_attachment = '$email_attachment',
    email_attachment_url = '$email_attachment_url'
    WHERE
    emailID = '$emailID';";

$update = mysqli_query($con,$sql)
    or die("Query fail: " . mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php'); ?>
<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- include summernote css/js -->
<link href="../summernote/dist/summernote-lite.css" rel="stylesheet">
<script src="../summernote/dist/summernote-lite.js"></script>
</head>
<body>
<?php include('menu.php'); ?>


<div class="main">
    <div class="container">
        <h3><a class="" href="../admin/">Admin</a> |             <a class="" href="email.php">Email:</a>
            <br>
            <small><a class="" href="newemail.php">Create a New Email?</a>
            </small>
                </h3>
        <hr> 
<form method="post" action="updateemail.php">        
<input type="hidden" name="emailID" value="<?php echo $emailID; ?>">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
               <span class="card-text">Week, Day, Hr is actually<br>
                Weeks (12) = Game Months 1-12 (1 year)<br>
                Days (31)  = Game Days 1-31 (in a month)<br>
                Hours (3) = Game Hrs 1-3 (Morn/Noon/Night)
                  </span><br>

                <select name="weekID" size="1">
                    <option value="" <?php if ($weekID=='') {echo 'selected';} ?>></option>
                    <option value="01" <?php if ($weekID=='01') {echo 'selected';} ?>>01</option>
                    <option value="02" <?php if ($weekID=='02') {echo 'selected';} ?>>02</option>
                    <option value="03" <?php if ($weekID=='03') {echo 'selected';} ?>>03</option>
                    <option value="04" <?php if ($weekID=='04') {echo 'selected';} ?>>04</option>
                    <option value="05" <?php if ($weekID=='05') {echo 'selected';} ?>>05</option>
                    <option value="06" <?php if ($weekID=='06') {echo 'selected';} ?>>06</option>
                    <option value="07" <?php if ($weekID=='07') {echo 'selected';} ?>>07</option>
                    <option value="08" <?php if ($weekID=='08') {echo 'selected';} ?>>08</option>
                    <option value="09" <?php if ($weekID=='09') {echo 'selected';} ?>>09</option>
                    <option value="10" <?php if ($weekID=='10') {echo 'selected';} ?>>10</option>
                    <option value="11" <?php if ($weekID=='11') {echo 'selected';} ?>>11</option>
                    <option value="12" <?php if ($weekID=='12') {echo 'selected';} ?>>12</option>
                </select>
                <select name="dayID" size="1">
                    <option value="" <?php if ($dayID=='') {echo 'selected';} ?>></option>
                    <option value="01" <?php if ($dayID=='01') {echo 'selected';} ?>>01</option>
                    <option value="02" <?php if ($dayID=='02') {echo 'selected';} ?>>02</option>
                    <option value="03" <?php if ($dayID=='03') {echo 'selected';} ?>>03</option>
                    <option value="04" <?php if ($dayID=='04') {echo 'selected';} ?>>04</option>
                    <option value="05" <?php if ($dayID=='05') {echo 'selected';} ?>>05</option>
                    <option value="06" <?php if ($dayID=='06') {echo 'selected';} ?>>06</option>
                    <option value="07" <?php if ($dayID=='07') {echo 'selected';} ?>>07</option>
                    <option value="08" <?php if ($dayID=='08') {echo 'selected';} ?>>08</option>
                    <option value="09" <?php if ($dayID=='09') {echo 'selected';} ?>>09</option>
                    <option value="10" <?php if ($dayID=='10') {echo 'selected';} ?>>10</option>
                    <option value="11" <?php if ($dayID=='11') {echo 'selected';} ?>>11</option>
                    <option value="12" <?php if ($dayID=='12') {echo 'selected';} ?>>12</option>
                    <option value="13" <?php if ($dayID=='13') {echo 'selected';} ?>>13</option>
                    <option value="14" <?php if ($dayID=='14') {echo 'selected';} ?>>14</option>
                    <option value="15" <?php if ($dayID=='15') {echo 'selected';} ?>>15</option>
                    <option value="16" <?php if ($dayID=='16') {echo 'selected';} ?>>16</option>
                    <option value="17" <?php if ($dayID=='17') {echo 'selected';} ?>>17</option>
                    <option value="18" <?php if ($dayID=='18') {echo 'selected';} ?>>18</option>
                    <option value="19" <?php if ($dayID=='19') {echo 'selected';} ?>>19</option>
                    <option value="20" <?php if ($dayID=='20') {echo 'selected';} ?>>20</option>
                    <option value="21" <?php if ($dayID=='21') {echo 'selected';} ?>>21</option>
                    <option value="22" <?php if ($dayID=='22') {echo 'selected';} ?>>22</option>
                    <option value="23" <?php if ($dayID=='23') {echo 'selected';} ?>>23</option>
                    <option value="24" <?php if ($dayID=='24') {echo 'selected';} ?>>24</option>
                    <option value="25" <?php if ($dayID=='25') {echo 'selected';} ?>>25</option>
                    <option value="26" <?php if ($dayID=='26') {echo 'selected';} ?>>26</option>
                    <option value="27" <?php if ($dayID=='27') {echo 'selected';} ?>>27</option>
                    <option value="28" <?php if ($dayID=='28') {echo 'selected';} ?>>28</option>
                    <option value="29" <?php if ($dayID=='29') {echo 'selected';} ?>>29</option>
                    <option value="30" <?php if ($dayID=='30') {echo 'selected';} ?>>30</option>
                    <option value="31" <?php if ($dayID=='31') {echo 'selected';} ?>>31</option>
                </select>
                <select name="hourID" size="1">
                    <option value="" <?php if ($hourID=='') {echo 'selected';} ?>></option>
                    <option value="01" <?php if ($hourID=='01') {echo 'selected';} ?>>01</option>
                    <option value="02" <?php if ($hourID=='02') {echo 'selected';} ?>>02</option>
                    <option value="03" <?php if ($hourID=='03') {echo 'selected';} ?>>03</option>
                </select>

                <span class="card-text">Type</span>
                <select name="mail_type">
                    <option value="" <?php if ($mail_type=='') {echo 'selected';} ?>></option>
                    <option value="normal" <?php if ($mail_type=='normal') {echo 'selected';} ?>>Normal</option>
                    <option value="phish" <?php if ($mail_type=='phish') {echo 'selected';} ?>>Phish</option>
                    <option value="other" <?php if ($mail_type=='other') {echo 'selected';} ?>>Other</option>
                </select><br><br>

       
              
                            
              </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
                <span class="card-text">To:</span>
                <input type="text" name="email_to" placeholder="To" value="<?php echo $mail_to; ?> " size="50"><br>
                <span class="card-text">From:</span>
                <input type="text" name="email_from" placeholder="From" value="<?php echo $mail_from; ?> " size="50"><br>
                <span class="card-text">CC1:</span>
                <input type="text" name="email_cc1" placeholder="CC1" value="<?php echo $mail_cc1; ?> " size="50"><br>
                <span class="card-text">CC2:</span>
                <input type="text" name="email_cc2" placeholder="CC2" value="<?php echo $mail_cc2; ?> " size="50"><br>
                <span class="card-text">CC3:</span>
                <input type="text" name="email_cc3" placeholder="CC3" value="<?php echo $mail_cc3; ?> " size="50"><br>
              <span class="card-text">Subject</span>
                <input type="text" name="email_subject" placeholder="Subject" value="<?php echo $email_subject; ?> " size="50"><br>
                
                <textarea id="summernote" name="email_body" placeholder="Body"><?php echo $email_body; ?></textarea>


            </div>
          </div>
        </div>
    </div>
      <div class="row">
            <div class="col-lg-12 col-sm-12">
          <div class="card">
            <div class="card-body text-center">
                    <hr>
                   --==  FUTURE SECTION FOR ADDING ATTACHMENTS!!! ==--
                    <hr>

<!--                
                <span class="card-text">Attachments</span><br>
                <textarea name="email_attachment" placeholder="Attachment"><?php echo $email_attachment; ?></textarea><br>

              <span class="card-text">Attachment</span><br>
              <form id="upload" action="news_img_upload.php" enctype="multipart/form-data" method="post"><center>
                        Current:<br>
                            <img src="../secure/email/<?php echo $email_attachment_url; ?>" class="img-circle" alt="Email Attachment" height="75"><br>

                        New:<br>
                            <img id="blah" src="#" alt="News Image"  height="75"/>
                        <br>
							<input type="file" name="email_attachment_url" id="email_attachment_url" size="15">
                            <button type="submit" class="btn btn-primary"> Upload Attachment </button>
                  </center>
				</form>              
-->       
              
              </div>
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="text-center">
                  <button type="submit" class="btn btn-danger">UPDATE EMAIL RECORD</button>
                </div>
            </div>
        </div>
    </form>           

    </div>
</div>
<!-- Page Script -->
<script type="text/javascript" >
      $('#summernote').summernote({
        placeholder: 'Body',
        tabsize: 2,
        height: 150
      });
    </script>
    
</body>
</html> 