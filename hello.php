<?php
require_once('../../includes/config.php');


$cn=mysqli_real_escape_string($con,$_POST['cname']);
$on=mysqli_real_escape_string($con,$_POST['oname']);
$mc=$_POST['membercount'];

if ($cn=="") {
    header("location:https://cyber.rit.edu/SCRRPDT/welcome.php?eid=4/");
    exit();

}

$_SESSION['cn']=$cn;
$_SESSION['on']=$on;
$_SESSION['mc']=$mc;

#CHECK FOR COMPANY EXISTS
$sql="SELECT co_name FROM NIST_cos WHERE co_name = '".$cn."';";

$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
if ($row = mysqli_fetch_array($result)) {
    $cn_exists = 1;
} else {
    $sql="INSERT INTO NIST_cos (co_name )VALUES ('".$cn."');";
    $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));

    $sql="SELECT id FROM NIST_cos WHERE co_name = '".$cn."';";
    $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
    while ($row = mysqli_fetch_array($result)) {
        $coID = $row['id'];
    }
    $sql="UPDATE member_info SET coID='".$coID."' WHERE uid ='".$_SESSION['un']."';";
    $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
}
#SET COMPANY ORG NAME





$permittedcode = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%<>?&*()';
$regcode=substr(str_shuffle($permittedcode), 0, 16);

echo $regcode;

$sql="UPDATE member_info SET regcode='".$regcode."' WHERE uid ='".$_SESSION['un']."';";
$result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));
$con->next_result();
echo $sql;

#SEND EMAIL
$email = $_SESSION['em'];
$subject = 'Your Registration for Saunders Cyber: Risk and Resilience Profile Development Tool';
$messagebody =
    '<!DOCTYPE html><html lang="en">' . "\n" .
    '<title>SCRR Registration Code</title>' . "\n" .
    '<body style=text-align:center;>' . "\n" .
    '<h1>Hi, ' . $_SESSION['fn'] . '! </h1>' . "\n" .
    '<h3>You\'re almost completely registered with SCRRPDT!</h3>' . "\n" .
    '<h3>To validate your email address, we\'ve assigned you this one-time registration code</h3>'. "\n" .
    '<h1>' . $regcode . '</h1>' . "\n" .
    '<h3>You\'ll need to enter this at the link below to login for the first time.</h3>'. "\n" .
    '<hr><a href=https://cyber.rit.edu/SCRRPDT/hello.php>Click Here to Login...</a><br>'. "\n" .
    '<hr><img src=https://cyber.rit.edu/SCRRPDT/reg_wiz/images/SCRR.png width="400px"><br>'. "\n" .
    '<small>&copy;2019, Saunders Cyber: Risk & Resilience</small></body></html>'. "\r\n\r\n";

    $headers =
        'Organization: Saunders Cyber: Risk & Resilience' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html;charset=iso-8859-1' . "\r\n" .
        'From: SCRR <cyber@saunders.rit.edu>' . "\r\n" .
        'Bcc: cyber@saunders.rit.edu' . "\r\n" .
        'X-Priority: 3' . "\r\n" .
        'X-Mailer: PHP ' . phpversion() . "\r\n" .
        'Reply-To: SCRR <cyber@saunders.rit.edu>' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" ;

    $params = '-f ' . "cyber@saunders.rit.edu";
    mail($email, $subject, $messagebody, $headers, $params);

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
						Welcome to SCRRPDT:
					</span>
                <h4>Saunders Cyber:<br>
                    Risk & Resilience<br>
                    Profile Development Tool</h4><br>

                <img src="https://cyber.rit.edu/SCRRPDT/reg_wiz/images/SCRR.png" alt="IMG">
            </div>

            <form class="contact100-form validate-form" method="post" action="registered.php"><br><br>
            Finally, <?php echo $_SESSION['fn']; ?>, please enter the Registration Code that we sent to your submitted email address:<br><br>
                <div class="wrap-input100 validate-input" data-validate = "Username">
                    <input class="input100" type="text" name="username" value="<?php echo strtoupper($_SERVER["PHP_AUTH_USER"]). " <".$email.">"; ?>" disabled>
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user-shield" aria-hidden="true"></i>&nbsp;
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Check your Email for your Registration Code">
                    <input class="input100" type="text" name="regcode" placeholder="Registration Code">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-laptop-code" aria-hidden="true"></i>&nbsp;
						</span>
                </div>


                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Log In to SCRRPDT!
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
