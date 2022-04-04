<?php
require_once('../../includes/config.php');
if (strtolower($_SERVER["PHP_AUTH_USER"])<>strtolower($_POST['uname'])) {
    header("location:https://cyber.rit.edu/SCRRPDT/welcome.php?eid=1/");
    exit();
    die;

}
$un=strtolower($_POST['uname']);

$fn=mysqli_real_escape_string($con,$_POST['fname']);
$ln=mysqli_real_escape_string($con,$_POST['lname']);
$em=mysqli_real_escape_string($con,$_POST['email']);

$_SESSION['fn']=$fn;
$_SESSION['ln']=$ln;
$_SESSION['em']=$em;


$sql="SELECT uid , email FROM member_info WHERE email = '".$em."';";
$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
if ($row = mysqli_fetch_array($result)) {
    $em_check = $row['email'];
    if ($em==$em_check) {
        $_SESSION['un'] = $un;
        header ("location:https://cyber.rit.edu/SCRRPDT/welcome.php?eid=3");
        die;
    }
}

## INSERT INTO DB - UN, FN, LN, and EM
$sql="INSERT INTO member_info (uid,fname,lname,email) VALUES ('".$un."','".$fn."','".$ln."','".$em."')";
$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
$con->next_result();

# SET AS SESSION VARIABLES OR CALL IN THE SESSION INCLUDE PAGE.
# OR DO WE KICK THEM OUT FOR SOME TYPE OF LOGIN CHECK???
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to SCRRPDT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/bower_components/font-awesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/css/util.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="bg-contact100" style="background: url('https://cyber.rit.edu/SCRRPDT/reg_wiz/images/bg-01.jpg');no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt text-center" data-tilt>
					<span class="contact100-form-title">
						Welcome, <?php echo $fn."!"; ?>
					</span>
					<img src="https://cyber.rit.edu/SCRRPDT/reg_wiz/images/SCRR.png" alt="IMG">
                    <br>
                    <h4>Saunders Cyber:<br>
                        Risk & Resilience<br>
                        Profile Development Tool</h4>
				</div>
				<form class="contact100-form validate-form" method="post" action="steptwo.php" onsubmit="return checkForm(this);">

                    <div class="wrap-input100 text-center">
                        <h4>SCRRPDT Agreement:</h4>
                        <textarea cols="30" rows="15">SCRRPDT is a tool. You are a person. People like you use tools. This tool is only as good as the person using it. So, you have to ask yourself, are you good enough? If so, then click the link below...before our lawyers see this and want to add some more legalese. Oh yeah, click I agree to continue...
                        </textarea>


					<div class="container-contact100-form-btn">
                        <input type="checkbox" value="1" name="iagree" required
                               onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" type="checkbox" required name="terms">&nbsp;I Agree!
                        <button class="contact100-form-btn">
							Setup my Session of SCRRPDT!
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/bootstrap/js/popper.js"></script>
	<script src="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="https://cyber.rit.edu/SCRRPDT/reg_wiz/js/main.js"></script>


</body>
</html>
