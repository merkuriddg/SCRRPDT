<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');

function get_request_var(string $varName) {
    return array_key_exists($varName, $_REQUEST) ? $_REQUEST[$varName] : '';
}

$u=get_request_var('u');
$p=get_request_var('p');
$n=get_request_var('n');
$c=get_request_var('c');
$o=get_request_var('o');
$d=get_request_var('d');
$m=get_request_var('m');
$s=get_request_var('s');
$f=get_request_var('f');
$i=get_request_var('i');

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>

<body>
<?php include('tabcontent.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('menu.php'); ?>



<div class="main">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
            <div class="box-header">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-lg-12">
                                <div>
                                    <i class="fa fa-building"></i> <b>Settings:</b> <em>Tell us more about yourself...</em>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 xs-4">
                <form method="POST" action="updateusername.php" autocomplete="off">
                    <span class="nist-title">Your Username<?php if ($u==1) {echo "- Updated!";}?></span><br>
                    <input id="userid" type="hidden" name="userid" value="<?php echo $_SESSION['uid']; ?>">
                    <input name="disable-pwd-mgr-1" type="text" id="disable-pwd-mgr-1" style="display: none;" value="disable-pwd-mgr-1" />
                    <input name="disable-pwd-mgr-2" type="text" id="disable-pwd-mgr-2" style="display: none;" value="disable-pwd-mgr-2" />
                    <input name="disable-pwd-mgr-3" type="text" id="disable-pwd-mgr-3" style="display: none;" value="disable-pwd-mgr-3" />
                    <input autocomplete="aus" id="protected-input1" type="text" name="protected-input1" value="<?php $_SESSION['uid']; ?>" size="25" style="display:block;">
                    <button id="usernamebtn" type="submit" class="btn-info btn-sm">Update <?php echo $_SESSION['uid']; ?>?</button>
                </form>

                <script type="text/javascript">
                    document.getElementById("protected-input1").onfocus = function() {
                        document.getElementById("usernamebtn").innerHTML = "Change your Username";
                        document.getElementById("protected-input1").style.background = "#fffca5";
                    };
                    document.getElementById("protected-input1").onfocusout = function() {
                        document.getElementById("usernamebtn").innerHTML = "Change your Username";
                        document.getElementById("protected-input1").style.background = "transparent";
                    }
                </script>


                <form method="POST" action="updatepassword.php">
                    <span class="nist-title">Your Password<?php if ($p==1) {echo "- Updated!";}?></span><br>
                    <input id="userid" type="hidden" name="userid" value="<?php echo $_SESSION['userID']; ?>">
                    <input name="disable-pwd-mgr-1" type="password" id="disable-pwd-mgr-1" style="display: none;" value="disable-pwd-mgr-1" />
                    <input name="disable-pwd-mgr-2" type="password" id="disable-pwd-mgr-2" style="display: none;" value="disable-pwd-mgr-2" />
                    <input name="disable-pwd-mgr-3" type="password" id="disable-pwd-mgr-3" style="display: none;" value="disable-pwd-mgr-3" />

                    <input autocomplete="aus" id="protected-input2" type="password"  name="protected-input2" value="" placeholder="Enter your current password" size="25" style="display:block;">
                    <button id="passwordbtn" type="submit" class="btn-info btn-sm">Update your Password?</button>
                </form>

                <script type="text/javascript">
                    document.getElementById("protected-input2").onfocus = function() {
                        document.getElementById("passwordbtn").innerHTML = "Change Your Password";
                        document.getElementById("protected-input2").style.background = "#fffca5";
                    };
                    document.getElementById("protected-input2").onfocusout = function() {
                        document.getElementById("passwordbtn").innerHTML = "Change Your Password";
                        document.getElementById("protected-input2").style.background = "transparent";
                    }
                </script>

                <form method="POST" action="updatefullname.php">
                    <span class="nist-title">Your Name<?php if ($n==1) {echo "- Updated!";}?></span><br>
                    <input id="userid" type="hidden" name="userid" value="<?php echo $_SESSION['uid']; ?>">
                    <input id="fname" type="text" name="fname" value="<?php echo $member_fname; ?>" size="25" style="display:block;">
                    <input id="lname" type="text" name="lname" value="<?php echo $member_lname; ?>" size="25" style="display:block;">
                    <button id="fullnamebtn" type="submit" class="btn-info btn-sm">Update <?php echo $fullname; ?></button>
                </form>

                <script type="text/javascript">
                    document.getElementById("fname").onfocus = function() {
                        document.getElementById("fullnamebtn").innerHTML = "Change your Name";
                        document.getElementById("fname").style.background = "#fffca5";
                    };
                    document.getElementById("fname").onfocusout = function() {
                        document.getElementById("fnamebtn").innerHTML = "Change your Name";
                        document.getElementById("fname").style.background = "transparent";
                    };
                    document.getElementById("lname").onfocus = function() {
                        document.getElementById("fullnamebtn").innerHTML = "Change your Name";
                        document.getElementById("lname").style.background = "#fffca5";
                    };
                    document.getElementById("lname").onfocusout = function() {
                        document.getElementById("lnamebtn").innerHTML = "Change your Name";
                        document.getElementById("lname").style.background = "transparent";
                    }
                </script>


                <form method="POST" action="updatecompany.php">
                    <span class="nist-title">Company Name <?php if ($c==1) {echo "Updated!";}?></span><br>
                    <input id="coid" type="hidden" name="coid" value="<?php echo $coID; ?>">
                    <input id="coname" type="text" name="companyname" value="<?php echo $companyname; ?>" placeholder="Enter company name here..." size="25" style="display:block;">
                    <button id="conamebtn" type="submit" class="btn-info btn-sm">Update <?php echo $companyname; ?>?</button>
                </form>

                <script type="text/javascript">
                    document.getElementById("coname").onfocus = function() {
                        document.getElementById("conamebtn").innerHTML = "Change "+this.value;
                        document.getElementById("coname").style.background = "#fffca5";
                    };
                    document.getElementById("coname").onfocusout = function() {
                        document.getElementById("conamebtn").innerHTML = "Change "+this.value;
                        document.getElementById("coname").style.background = "transparent";
                    }
                </script>



            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 xs-4">

                <form method="POST" action="updateorg.php">
                    <span class="nist-title">Organizational Units Types <?php if ($o==1) {echo "Updated!";}?></span><br>
                    <input id="orgid" type="hidden" name="orgid" value="<?php echo $orgID; ?>">
                    <input id="orginput" type="text" name="orgname" value="<?php echo $orgname; ?>" placeholder="Enter Departments, Entities, Locations, Bldgs, etc. ..." size="25" style="display:block;">
                    <button id="orgbtn" type="submit" class="btn-info btn-sm" >Update <?php echo $orgname; ?>?</button>
                </form>

                <script type="text/javascript">
                    document.getElementById("orginput").onfocus = function() {
                        document.getElementById("orgbtn").innerHTML = "Change "+this.value;
                        document.getElementById("orginput").style.background = "#fffca5";
                    };
                    document.getElementById("orginput").onfocusout = function() {
                        document.getElementById("orgbtn").innerHTML = "Change "+this.value;
                        document.getElementById("orginput").style.background = "transparent";
                    }
                </script>


                <form method="POST" action="updatedept.php">
                    <span class="nist-title">Our <?php echo $orgname; ?> <?php if ($d==1) {echo "Updated!";}?></span>
                    <select id="dept" size="<?php echo $deptsize; ?> " style="width:75%;" onfocusout="myFunction()">
                        <?php
                        foreach ($depts as $v) {
                            ?>
                            <option value="<?php echo $v['deptname']; ?>" data-id="<?php echo $v['dept_no']; ?>">
                                <?php echo $v['deptID'].": ".$v['deptname']; ?></option>
                            <?php
                        }
                        ?>
                    </select>
                    <input type="text" id="deptinput" name="orgname" value="" placeholder="Add New <?php echo $orgname; ?> here..." size="20" style="display:inline;" onfocus="myInputFunction()" onfocusout="myInputOut()">
                    <button id="deptbtn" type="submit" class="btn-info btn-sm" style="display:inline;">Add New</button><button id="deptedit" type="submit" class="btn-danger btn-sm" style="display:none;">Edit</button>

                    <script type="text/javascript">
                        document.getElementById("dept").onchange = function() {
                            document.getElementById("deptedit").style.display='inline';
                            document.getElementById("deptedit").innerHTML = "Edit "+this.value;
                        };
                        function myFunction() {
                            document.getElementById("deptbtn").innerHTML = "Add New";
                            document.getElementById("deptinput").style.display='inline';
                            document.getElementById("deptedit").style.display='none';
                        }
                        function myInputFunction() {
                            document.getElementById("deptinput").style.background = "#fffca5";
                        }
                        function myInputOut() {
                            document.getElementById("deptinput").style.background = "transparent";
                        }
                    </script>

                </form>



                <form method="POST" action="updatepriority.php">
                    <span class="nist-title">Our Priorities  <?php if ($s==1) {echo "Updated!";}?></span>
                    <select  id="priority" name="segmentselect" size="3" style="width:75%;" onchange="changePriorityEdit();">
                        <option value="Now" data-id="1">Now</option>
                        <option value="Next" data-id="2">Next</option>
                        <option value="Later" data-id="3">Later</option>
                    </select>
                    <input id="priorityinput" type="text" name="priorityinput" value="" placeholder="Add a New Priority" size="20" style="display:inline;" onfocus="myPInputFunction()" onfocusout="myPInputOut()">
                    <button id="prioritybtn" type="submit" class="btn-info btn-sm">Add New Priority</button><button id="priorityedit" type="submit" class="btn-danger btn-sm" style="display:none;">Edit</button>
                </form>

                <script type="text/javascript">
                    document.getElementById("priority").onchange = function() {
                        document.getElementById("priorityedit").style.display='inline';
                        document.getElementById("priorityedit").innerHTML = "Edit "+this.value;
                    };
                    function myFunction() {
                        document.getElementById("prioritybtn").innerHTML = "Add New";
                        document.getElementById("priorityinput").style.display='inline';
                        document.getElementById("priorityedit").style.display='none';
                    }
                    function myPInputFunction() {
                        document.getElementById("priorityinput").style.background = "#fffca5";
                    }
                    function myPInputOut() {
                        document.getElementById("priorityinput").style.background = "transparent";
                    }
                </script>


            </div>


            <div class="col-lg-4 col-md-4 col-sm-4 xs-4">



                <form method="POST" action="updatesegment.php">
                    <span class="nist-title">Our Segments  <?php if ($s==1) {echo "Updated!";}?></span>
                    <select  id="segment" name="segmentselect" size="5" style="width:75%;" onchange="changeSegmentEdit();">
                            <option value="Monthly" data-id="1">Monthly </option>
                            <option value="Quarterly" data-id="2">Quarterly </option>
                            <option value="Trimester" data-id="3">Trimester </option>
                            <option value="Semi-Annual" data-id="4">Semi-Annual </option>
                            <option value="Annual" data-id="5">Annual </option>
                        </select>
                    <input id="segmentinput" type="text" name="segmentinput" value="" placeholder="Add a New Segment" size="20" style="display:inline;" onfocus="mySInputFunction()" onfocusout="mySInputOut()">
                    <button id="segmentbtn" type="submit" class="btn-info btn-sm">Add New Segment</button><button id="segmentedit" type="submit" class="btn-danger btn-sm" style="display:none;">Edit</button>
                </form>

                <script type="text/javascript">
                        document.getElementById("segment").onchange = function() {
                            document.getElementById("segmentedit").style.display='inline';
                            document.getElementById("segmentedit").innerHTML = "Edit "+this.value;
                        };
                        function myFunction() {
                            document.getElementById("segmentbtn").innerHTML = "Add New";
                            document.getElementById("segmentinput").style.display='inline';
                            document.getElementById("segmentedit").style.display='none';
                        }
                        function mySInputFunction() {
                            document.getElementById("segmentinput").style.background = "#fffca5";
                        }
                        function mySInputOut() {
                            document.getElementById("segmentinput").style.background = "transparent";
                        }
                </script>
<!--                 <form method="POST" action="updatefont.php">
                    <span class="nist-title">Font Size <?php if ($f==1) {echo "Updated!";}?></span><br>
                    <select id="font" size="3" style="width:75%;">
                            <option value="Small">Small</option>
                            <option value="Medium">Medium</option>
                            <option value="Large">Large</option>
                        </select><br>
                    <button id="fontbtn" type="submit" class="btn-info btn-sm">Update Font Size</button>

                    <script type="text/javascript">
                        document.getElementById("font").onchange = function() { document.getElementById("fontbtn").innerHTML = "Change to Font to "+this.value;
                        };
                    </script>
                </form>
-->

                <form method="POST" action="updateskin.php">
                    <span class="nist-title">Current Interface Skin:  <?php  echo $_SESSION['css']; ?> <?php if ($i==1) {echo "- Updated!";}?></span><br>
                        <select id="skin" name="skin" size="4" style="width:75%;" >
                            <option value="RIT">RIT Orange</option>
                            <option value="Light" >Light</option>
                            <option value="Bright" >Bright...not yet</option>
                            <option value="Dark" >Dark</option>
                        </select><br>
                    <button id="skinbtn" type="submit" class="btn-info btn-sm">Update Interface Skin</button>

                    <script type="text/javascript">
                        document.getElementById("skin").onchange = function() { document.getElementById("skinbtn").innerHTML = "Change to Skin to "+this.value;
                    };
                    </script>
                </form>


            </div>
        </div>
            <div class="row"><br><hr>
                <div class="box box-default collapsed-box box-solid margin " style="width:98%;">
                    <div class="box-header">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-sticky-note"></i> Notes</button>
                    </div>
                    <div class="box-body">
                <p class="text-left margin">
                    These are some of the basic settings for your specific Business.</br>
                    Use this page to personalize your profiles and reports.</br>
                    Additionally, you can set the interface colors and sizes here.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
Where am I asking your:
                    - Business Requirements,
                    - Risk Tolerance,
                    - Organization Resources

                    Is there a Profile Template for me?
                    - Business Requirements - High,  Med, Low
                    - Risk Tolerance - High,  Med, Low
                    - Organization Resources - High,  Med, Low

Can I define these...for organizations
What is the Primary, Secondary and Tertiary lists of the SubCategories for these Templates
-->
    </div>
</div>
    <!-- main-footer -->
    <?php include('main_footer.php'); ?>
    <!-- ./wrapper -->
    <script type="text/javascript">
        $(document).ready(function () {
            $('head').append('<link href="/chrome.css" rel="stylesheet" />');
        });
    </script>
    <!-- jQuery 3 -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>

</body>
</html>
