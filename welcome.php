<?php
require_once('../../includes/config.php');
$eid=intval($_REQUEST['eid']);
session_start();
$un = strtolower($_SERVER["PHP_AUTH_USER"]);

#CHECK TO SEE IF USERNAME EXISTS...
$sql="SELECT * FROM member_info WHERE uid = '".$un."';";
$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)) {
    $usertemp=$row['uid'];
    $midtemp=$row['ID'];
    $iatemp=$row['iagree'];
    $regtemp=$row['registered'];

    if (($usertemp==$un)&&($iatemp==1)&&($regtemp==1)) {
        $_SESSION['un'] = $un;
        $_SESSION['mid'] = $midtemp;
        header('Location: https://cyber.rit.edu/SCRRPDT/secure', true, 301);
        exit();
    }
}
$_SESSION['regid']=0;

switch ($eid) {
    case '1':
        $emsg1 = "Not really where we wanted to start...";
        $emsg2 = "But we're good now. ";
        break;
    case '2':
        $emsg1 = "That didn't agree with me either...";
        $emsg2 = "Let's try again...";
        break;
    case '3':
        $emsg1 = "That email has already been used...";
        $emsg2 = "Do you want to try another?";
        break;
    case '4':
        $emsg1 = "You really should enter a company name...";
        $emsg2 = "Let's try again...";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to SCRRPDT</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/css/util.css">
	<link rel="stylesheet" type="text/css" href="https://cyber.rit.edu/SCRRPDT/reg_wiz/css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php
if ($emsg1<>"") { ?>
    <script>alert("<?php echo $emsg1.'\n'.$emsg2; ?>")</script>
<?php } ?>
	<div class="bg-contact100" style="background: url('https://cyber.rit.edu/SCRRPDT/reg_wiz/images/bg-01.jpg');no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">
		<div class="container-contact100">
			<div class="wrap-contact100">
				<div class="contact100-pic js-tilt text-center" data-tilt>
                    <span class="contact100-form-title">
                        Welcome to SCRRPDT:
					</span>
					<img src="https://cyber.rit.edu/SCRRPDT/reg_wiz/images/SCRR.png" alt="IMG">
                    <br>
                    <h4>Saunders Cyber:<br>
                        Risk & Resilience<br>
                        Profile Development Tool</h4>
				</div>

				<form class="contact100-form validate-form" method="post" action="stepone.php">

                    <div class="wrap-input100 validate-input" data-validate = "Username">
                        <input class="input100" type="text" name="uname" value="<?php echo strtoupper($_SERVER["PHP_AUTH_USER"]); ?>" placeholder="<?php echo strtoupper($_SERVER["PHP_AUTH_USER"]); ?>">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "First Name is required">
                        <input class="input100" type="text" name="fname" placeholder="First Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Last Name is required">
                        <input class="input100" type="text" name="lname" placeholder="Last Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

<!--                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="text" name="password" placeholder="Password...">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Confirm is required">
                        <input class="input100" type="text" name="confirm" placeholder="Password Confirmation...">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                    </div>
-->

                    <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							Sign Up for SCRRPDT!
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
