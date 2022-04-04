<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');
$id = $_REQUEST['id'];
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

            <small>
                <select name="news" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                    <option selected>Select:</option>
<?php 

    $count = 1;    
    $sql = "
    SELECT * FROM email 
    ORDER BY weekID, dayID, hourID ASC;";
    
    $result = mysqli_query($con,$sql)
    or die("Query fail: " . mysqli_error($con));
    
    while ($row = mysqli_fetch_array($result)){   
        $emailID = $row["emailID"];
        $weekID = $row["weekID"];
        $dayID = $row["weekID"];
        $hourID = $row["weekID"];
        $mail_type = $row["email_type"];
        $mail_to = $row["email_to"];
        $mail_from = $row["email_from"];
        $mail_cc1 = $row["email_cc1"];
        $mail_cc2 = $row["email_cc2"];
        $mail_cc3 = $row["email_cc3"];
        $email_subject = $row["email_subject"];
        $email_body = $row["email_body"];
        $email_attachment = $row["email_attachment"];
        $email_attachment_url = $row["email_attachment_url"];
?>
                    <option value="email.php?id=<?php echo $emailID; ?>"><?php echo $weekID.".".$dayID.".".$hourID.".".$email_subject.",  ".$type; ?></option>
<?php
                    $count++; 
   }
                    $con->next_result();
    ?>                    
                </select>
            </small>
            <br>
            <small><a class="" href="newemail.php">Create a New Email?</a>
            </small>
                </h3>

<?php 
if ($id!="")
{
    $result = mysqli_query($con,"SELECT * FROM email 
    WHERE emailID = '".$id."'  
    ORDER BY weekID, dayID, hourID ASC;")
    or die("Query fail: " . mysqli_error($con));
    while ($row = mysqli_fetch_array($result)){   
        $emailID = $row["emailID"];
        $weekID = $row["weekID"];
        $dayID = $row["weekID"];
        $hourID = $row["weekID"];
        $mail_type = $row["email_type"];
        $mail_to = $row["email_to"];
        $mail_from = $row["email_from"];
        $mail_cc1 = $row["email_cc1"];
        $mail_cc2 = $row["email_cc2"];
        $mail_cc3 = $row["email_cc3"];
        $email_subject = $row["email_subject"];
        $email_body = $row["email_body"];
        $email_attachment = $row["email_attachment"];
        $email_attachment_url = $row["email_attachment_url"];
   }
                    $con->next_result();
}
else 
{
    $emailID ="";
    $weekID ="";
    $dayID ="";
    $hourID ="";
    $mail_type ="";
    $mail_to ="";
    $mail_from="";
    $mail_cc1 ="";
    $mail_cc2 ="";
    $mail_cc3 ="";
    $email_subject ="";
    $email_attachment = "";
    $email_attachment_url = "";
}
        
        ?>
        <hr> 
<?php
if ($id!="")
{
    echo '<form method="post" action="updateemail.php">';
}
else
{
    echo '<form method="post" action="insertemail.php">';
}
?>
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
                    <option value="" <?php if ($type=='') {echo 'selected';} ?>></option>
                    <option value="normal" <?php if ($type=='normal') {echo 'selected';} ?>>Normal</option>
                <option value="phish" <?php if ($type=='phish') {echo 'selected';} ?>>Phish</option>
                <option value="other" <?php if ($type=='other') {echo 'selected';} ?>>Other</option>
                </select><br><br>

              </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
                <div class="card-body">
                    <?php
    //EMAIL UPDATE
                        // ################################################################################################################################
                        // ################################################################################################################################

                    //IF MAIL_TO IS NOT EMPTY
                    if ($mail_to!="") {
                        $sql = "select * from member_info where memberID = '$mail_to';";
                        $select = mysqli_query($con, $sql)
                        or die("Query fail: " . mysqli_error($con));
                        while ($row = mysqli_fetch_array($select))
                        {
                            $member_fname = $row['fname'];
                            $member_lname = $row['lname'];
                            $member_position = $row['member_position'];
                            if ($member_position <> "") {
                                $member_position = " - " . $row['member_position'];
                            } else {
                                $member_position = "";
                            }
                            $email = $row['email'];

                            $mail_to_name = ($member_lname . ', ' . $member_fname . ' - ' . strtolower(substr($member_fname, 0, 1) . $member_lname) . "@arrayetea.com" . $member_position);
                        }
                        $con->next_result();
                        ?>
                        <span class="card-text">To:</span>
                    <input type="text" name="mail_to" placeholder="To" value="<?php echo $mail_to_name; ?> " size="50"><br>

                    <?php


                    }
                    else
                    {
                    //IF MAIL_TO IS EMPTY
                    ?>
                        <!-- TO-->
                        <!-- option data-value="<-php echo ($mailtoid); ?>" -->
                        <script>
                            $(document).ready(function() {
                                $("#email_search").click(function() {
                                    console.log($('#tooptions option').filter(function() {
                                        return $('#mail_to_id').val() == this.value;
                                    }).data("id"));
                                });
                            });</script>
                        <span class="card-text">To:</span>
                    <input list="tooptions" type="text" style="border-radius:0px;" name="mail_to_id" id="mail_to_id" placeholder="To:" size="50"> Var=$mail_to_name
                        <datalist id="tooptions">

                            <?php
                            //Get_Member_info
                            $result = mysqli_query($con, "CALL get_members_to_email()")
                            or
                            die("Query fail: " . mysqli_error());
                            //loop the result set
                            while ($row = mysqli_fetch_array($result)){
                                //    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
                                $mailtoid = $row['memberID'];
                                $member_fname = $row['fname'];
                                $member_lname = $row['lname'];
                                $member_position = $row['member_position'];
                                if ($member_position<>"")
                                {$member_position = " - ".$row['member_position'];}
                                else
                                {$member_position = "";}
                                $email = $row['email'];

                                $no 	= 1;
                                $total 	= 0;

                                if ($email == '') {
                                    $mail_to_name=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
                                    ?>
                                    <option label="<?php echo $mail_to_name; ?>" data-id="<?php echo $mailtoid; ?>">
                                        <?php echo $mailtoid;?>
                                    </option>

                                    <?php
                                }
                                else
                                {
                                    $mail_to_name=($member_lname.', ' . $member_fname . ' - '. $email);
                                    ?>
                                    <option label="<?php echo $mail_to_name; ?>" data-id="<?php echo $mailtoid; ?>">
                                        <?php echo $mailtoid; ?>
                                    </option>
                                    <?php
                                }
                            }
                            $con->next_result();
                            ?>
                        </datalist><br>



                    <?php
                    }

                    // ################################################################################################################################
                    // ################################################################################################################################
                    //IF MAIL_FROM IS NOT EMPTY
                    if ($mail_from!="") {
                    $sql = "select * from member_info where memberID = '$mail_from';";
                    $select = mysqli_query($con, $sql)
                    or die("Query fail: " . mysqli_error($con));
                    while ($row = mysqli_fetch_array($select))
                    {
                        $member_fname = $row['fname'];
                        $member_lname = $row['lname'];
                        $member_position = $row['member_position'];
                        if ($member_position <> "") {
                        $member_position = " - " . $row['member_position'];
                    } else {
                        $member_position = "";
                    }
                        $email = $row['email'];

                        $mail_from_name = ($member_lname . ', ' . $member_fname . ' - ' . strtolower(substr($member_fname, 0, 1) . $member_lname) . "@arrayetea.com" . $member_position);

                    }
                    $con->next_result();
                    ?>
                    <span class="card-text">From:</span>
                    <input type="text" name="mail_from" placeholder="From" value="<?php echo $mail_from_name; ?> " size="50"><br>
                    <?php
                    }
                    else
                    {
                    //IF MAIL_FROM IS  EMPTY
                    ?>
                    <!-- FROM-->
                    <script>
                        $(document).ready(function() {
                            $("#email_search").click(function() {
                                console.log($('#fromoptions option').filter(function() {
                                    return $('#mail_from_id').val() == this.value;
                                }).data("id"));
                            });
                        });</script>
                    <span class="card-text">From:</span>
                    <input list="fromoptions" type="text" style="border-radius:0px;" name="mail_from_id" id="mail_from_id" placeholder="From:" size="50"> Var=$mail_from_name
                    <datalist id="fromoptions">

                        <?php
                        //Get_Member_info
                        $result = mysqli_query($con, "CALL get_members_to_email()")
                        or
                        die("Query fail: " . mysqli_error());
                        //loop the result set
                        while ($row = mysqli_fetch_array($result)){
                            //    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
                            $mailfromid = $row['memberID'];
                            $member_fname = $row['fname'];
                            $member_lname = $row['lname'];
                            $member_position = $row['member_position'];
                            if ($member_position<>"")
                            {$member_position = " - ".$row['member_position'];}
                            else
                            {$member_position = "";}
                            $email = $row['email'];

                            $no 	= 1;
                            $total 	= 0;

                            if ($email == '') {
                                $mail_from_name=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
                                ?>
                                <option label="<?php echo $mail_from_name; ?>" data-id="<?php echo $mailfromid; ?>">
                                    <?php echo $mailfromid;?>
                                </option>

                                <?php
                            }
                            else
                            {
                                $mail_from_name=($member_lname.', ' . $member_fname . ' - '. $email);
                                ?>
                                <option label="<?php echo $mail_from_name; ?>" data-id="<?php echo $mailfromid; ?>">
                                    <?php echo $mailfromid; ?>
                                </option>
                                <?php
                            }
                        }
                        $con->next_result();
                        ?>
                    </datalist><br>
                    <?php
                    }
                    // ################################################################################################################################
                    // ################################################################################################################################

                    //IF MAIL_CC1 IS NOT EMPTY
                    if ($mail_cc1!="") {
                    $sql = "select * from member_info where memberID = '$mail_cc1';";
                    $select = mysqli_query($con, $sql)
                    or die("Query fail: " . mysqli_error($con));
                    while ($row = mysqli_fetch_array($select))
                    {
                        $member_fname = $row['fname'];
                        $member_lname = $row['lname'];
                        $member_position = $row['member_position'];
                        if ($member_position <> "") {
                            $member_position = " - " . $row['member_position'];
                        } else {
                            $member_position = "";
                        }
                        $email = $row['email'];

                        $mail_cc1_name = ($member_lname . ', ' . $member_fname . ' - ' . strtolower(substr($member_fname, 0, 1) . $member_lname) . "@arrayetea.com" . $member_position);

                    }
                    $con->next_result();
                    ?>
                        <span class="card-text">CC1:</span>
                    <input type="text" name="mail_cc1" placeholder="CC1" value="<?php echo $mail_cc1_name; ?> " size="50"><br>
                    <?php
                    }
                    else
                    {
                    //IF MAIL_CC1 IS  EMPTY
                    ?>
                        <!-- CC1-->
                        <script>
                            $(document).ready(function() {
                                $("#email_search").click(function() {
                                    console.log($('#cc1options option').filter(function() {
                                        return $('#mail_cc1_id').val() == this.value;
                                    }).data("id"));
                                });
                            });</script>
                        <span class="card-text">CC1:</span>
                    <input list="cc1options" type="text" style="border-radius:0px;" name="mail_cc1_id" id="mail_cc1_id" placeholder="CC1:" size="50"> Var=$mail_cc1_name
                        <datalist id="cc1options">

                            <?php
                            //Get_Member_info
                            $result = mysqli_query($con, "CALL get_members_to_email()")
                            or
                            die("Query fail: " . mysqli_error());
                            //loop the result set
                            while ($row = mysqli_fetch_array($result)){
                                //    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
                                $mailcc1id = $row['memberID'];
                                $member_fname = $row['fname'];
                                $member_lname = $row['lname'];
                                $member_position = $row['member_position'];
                                if ($member_position<>"")
                                {$member_position = " - ".$row['member_position'];}
                                else
                                {$member_position = "";}
                                $email = $row['email'];

                                $no 	= 1;
                                $total 	= 0;

                                if ($email == '') {
                                    $mail_cc1_name=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
                                    ?>
                                    <option label="<?php echo $mail_cc1_name; ?>" data-id="<?php echo $mailcc1id; ?>">
                                        <?php echo $mailcc1id;?>
                                    </option>

                                    <?php
                                }
                                else
                                {
                                    $mail_cc1_name=($member_lname.', ' . $member_fname . ' - '. $email);
                                    ?>
                                    <option label="<?php echo $mail_cc1_name; ?>" data-id="<?php echo $mailcc1id; ?>">
                                        <?php echo $mailcc1id; ?>
                                    </option>
                                    <?php
                                }
                            }
                            $con->next_result();
                            ?>
                        </datalist><br>
                    <?php
                    }
                    // ################################################################################################################################
                    // ################################################################################################################################


                    //IF MAIL_CC2 IS NOT EMPTY
                    if ($mail_cc2!="") {
                    $sql = "select * from member_info where memberID = '$mail_cc2';";
                    $select = mysqli_query($con, $sql)
                    or die("Query fail: " . mysqli_error($con));
                    while ($row = mysqli_fetch_array($select))
                    {
                        $member_fname = $row['fname'];
                        $member_lname = $row['lname'];
                        $member_position = $row['member_position'];
                        if ($member_position <> "") {
                            $member_position = " - " . $row['member_position'];
                        } else {
                            $member_position = "";
                        }
                        $email = $row['email'];

                        $mail_cc2_name = ($member_lname . ', ' . $member_fname . ' - ' . strtolower(substr($member_fname, 0, 1) . $member_lname) . "@arrayetea.com" . $member_position);
                    }
                    $con->next_result();
                    ?>
                        <span class="card-text">CC2:</span>
                    <input type="text" name="mail_cc2" placeholder="CC2" value="<?php echo $mail_cc2_name; ?> " size="50"><br>
                    <?php
                    }
                    else
                    {
                    //IF MAIL_CC2 IS  EMPTY
                    ?>
                        <!-- CC2-->
                        <script>
                            $(document).ready(function() {
                                $("#email_search").click(function() {
                                    console.log($('#cc2options option').filter(function() {
                                        return $('#mail_cc2_id').val() == this.value;
                                    }).data("id"));
                                });
                            });</script>
                        <span class="card-text">CC2:</span>
                    <input list="cc2options" type="text" style="border-radius:0px;" name="mail_cc2_id" id="mail_cc2_id" placeholder="CC2:" size="50"> Var=$mail_cc2_name
                        <datalist id="cc2options">

                            <?php
                            //Get_Member_info
                            $result = mysqli_query($con, "CALL get_members_to_email()")
                            or
                            die("Query fail: " . mysqli_error());
                            //loop the result set
                            while ($row = mysqli_fetch_array($result)){
                                //    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
                                $mailcc2id = $row['memberID'];
                                $member_fname = $row['fname'];
                                $member_lname = $row['lname'];
                                $member_position = $row['member_position'];
                                if ($member_position<>"")
                                {$member_position = " - ".$row['member_position'];}
                                else
                                {$member_position = "";}
                                $email = $row['email'];

                                $no 	= 1;
                                $total 	= 0;

                                if ($email == '') {
                                    $mail_cc2_name=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
                                    ?>
                                    <option label="<?php echo $mail_cc2_name; ?>" data-id="<?php echo $mailcc2id; ?>">
                                        <?php echo $mailcc2id;?>
                                    </option>

                                    <?php
                                }
                                else
                                {
                                    $mail_cc2_name=($member_lname.', ' . $member_fname . ' - '. $email);
                                    ?>
                                    <option label="<?php echo $mail_cc2_name; ?>" data-id="<?php echo $mailcc2id; ?>">
                                        <?php echo $mailcc2id; ?>
                                    </option>
                                    <?php
                                }
                            }
                            $con->next_result();
                            ?>
                        </datalist><br>
                    <?php
                    }

                    // ################################################################################################################################
                    // ################################################################################################################################
                    //IF MAIL_CC3 IS NOT EMPTY
                    if ($mail_cc3!="") {
                    $sql = "select * from member_info where memberID = '$mail_cc3';";
                    $select = mysqli_query($con, $sql)
                    or die("Query fail: " . mysqli_error($con));
                    while ($row = mysqli_fetch_array($select))
                    {
                        $member_fname = $row['fname'];
                        $member_lname = $row['lname'];
                        $member_position = $row['member_position'];
                        if ($member_position <> "") {
                            $member_position = " - " . $row['member_position'];
                        } else {
                            $member_position = "";
                        }
                        $email = $row['email'];

                        $mail_cc3_name = ($member_lname . ', ' . $member_fname . ' - ' . strtolower(substr($member_fname, 0, 1) . $member_lname) . "@arrayetea.com" . $member_position);

                    }
                    $con->next_result();
                    ?>
                        <span class="card-text">CC3:</span>
                    <input type="text" name="mail_cc3" placeholder="CC3" value="<?php echo $mail_cc3_name; ?> " size="50"><br>
                    <?php
                    }
                    else
                    {
                    //IF MAIL_CC1 IS  EMPTY
                    ?>
                        <!-- CC3-->
                        <script>
                            $(document).ready(function() {
                                $("#email_search").click(function() {
                                    console.log($('#cc3options option').filter(function() {
                                        return $('#mail_cc3_id').val() == this.value;
                                    }).data("id"));
                                });
                            });</script>
                        <span class="card-text">CC3:</span>
                    <input list="cc3options" type="text" style="border-radius:0px;" name="mail_cc3_id" id="mail_cc3_id" placeholder="CC3:" size="50"> Var=$mail_cc3_name
                        <datalist id="cc3options">

                            <?php
                            //Get_Member_info
                            $result = mysqli_query($con, "CALL get_members_to_email()")
                            or
                            die("Query fail: " . mysqli_error());
                            //loop the result set
                            while ($row = mysqli_fetch_array($result)){
                                //    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
                                $mailcc3id = $row['memberID'];
                                $member_fname = $row['fname'];
                                $member_lname = $row['lname'];
                                $member_position = $row['member_position'];
                                if ($member_position<>"")
                                {$member_position = " - ".$row['member_position'];}
                                else
                                {$member_position = "";}
                                $email = $row['email'];

                                $no 	= 1;
                                $total 	= 0;

                                if ($email == '') {
                                    $mail_cc3_name=($member_lname.', ' . $member_fname . ' - '. strtolower(substr($member_fname,0,1).$member_lname)."@arrayetea.com".$member_position);
                                    ?>
                                    <option label="<?php echo $mail_cc3_name; ?>" data-id="<?php echo $mailcc3id; ?>">
                                        <?php echo $mailcc3id;?>
                                    </option>

                                    <?php
                                }
                                else
                                {
                                    $mail_cc3_name=($member_lname.', ' . $member_fname . ' - '. $email);
                                    ?>
                                    <option label="<?php echo $mail_cc3_name; ?>" data-id="<?php echo $mailcc3id; ?>">
                                        <?php echo $mailcc3id; ?>
                                    </option>
                                    <?php
                                }
                            }
                            $con->next_result();
                            ?>
                        </datalist><br>
                    <?php
                    }


                    ?>


















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
<?php
if ($id!="") 
{
echo '<button type="submit" class="btn btn-danger">UPDATE EMAIL RECORD</button>';
}
else
{
echo '<button type="submit" class="btn btn-danger">INSERT NEW EMAIL</button>';
}
?>
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
