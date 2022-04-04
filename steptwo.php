<?php
require_once('../../includes/config.php');
$iagree=$_POST['iagree'];
$_SESSION['ia']=$ia;
if ($iagree<>"1") {
    header("location:https://cyber.rit.edu/SCRRPDT/welcome.php?eid=2/");
    exit();
}

# INSERT INTO DB - I Agree and anything else here...
$sql="UPDATE member_info SET iagree='".$iagree."' WHERE uid ='".$_SESSION['un']."';";
echo $sql;

$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
$con->next_result();
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
						Good job, <?php echo $_SESSION['fn']."!"; ?>
					</span>
					<img src="https://cyber.rit.edu/SCRRPDT/reg_wiz/images/SCRR.png" alt="IMG">
                    <br>
                    <h4>Saunders Cyber:<br>
                        Risk & Resilience<br>
                        Profile Development Tool</h4>
				</div>

				<form class="contact100-form validate-form" method="post" action="hello.php">

                    <div class="wrap-input100 text-left">
                        We just need a few more things<br>to get started with SCRRPDT:<br>
                        - Your Company Name<br>
                        - What you call your Organizational Units<br>(Departments, Groups, Units, etc.) <br>
                        - Number of Members that<br>you'd like to assign Tasks.
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Your Company Name is required">
                        <input class="input100" type="text" name="cname" placeholder="Company Name">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-dice-one" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-input100 validate-input" data-validate = "Organizational Groups is required">
                        <input class="input100" type="text" name="oname" placeholder="Organizational Groups">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-dice-two" aria-hidden="true"></i>
						</span>
                    </div>
                    <div class="wrap-select validate-input" data-validate = "Number of Members is Required">

                        <select class="select" name="membercount">
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Members&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-10</option>
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11-100</option>
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;101-1000</option>
                            <option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1001+</option>
                        </select>
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
							<i class="fa fa-dice-three" aria-hidden="true"></i>
						</span>
                    </div>



					<div class="container-contact100-form-btn">
						<button class="contact100-form-btn">
							Setup my Session of SCRRPDT!
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>



    <script type="text/javascript">
    </script>


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
