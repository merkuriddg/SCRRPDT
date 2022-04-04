<?php
//include config
require_once('../includes/config.php');

//check if already logged in move to home page
if( $user->is_logged_in() ){ header('Location: ../secure/index.php'); exit(); }

//process login form if submitted
if(isset($_POST['submit'])){

	if (!isset($_POST['username'])) $error[] = "Please fill out all fields";
	if (!isset($_POST['password'])) $error[] = "Please fill out all fields";

	$username = $_POST['username'];
	if ( $user->isValidUsername($username)){
		if (!isset($_POST['password'])){
			$error[] = 'A password must be entered';
		}
		$password = $_POST['password'];

		if($user->login($username,$password)){
			$_SESSION['username'] = $username;
			header('Location: ../secure/index.php');
			exit;

		} else {
			$error[] = 'Wrong username or password or your account has not been activated.';
		}
	}else{
		$error[] = 'Usernames are required to be Alphanumeric, and between 3-16 characters long';
	}



}//end if submit

//define page title
$title = 'SCRRPT';

//include header template
require('layout/header.php'); 
?>
<div class="bg-black-active">
    <div id="container" class="centered">
                    <br><br>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading text-center">
                        <img src="../../cyber/img/SCRR_Logo.png" height="250px"><br>
                        <h3 class="panel-title">Please Log In:</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="" autocomplete="off">
                            <?php
                                //check for any errors
                                if(isset($error)){
                                    foreach($error as $error){
                                        echo '<p class="bg-danger">'.$error.'</p>';
                                    }
                                }

                                if(isset($_GET['action'])){

                                    //check the action
                                    switch ($_GET['action']) {
                                        case 'active':
                                            echo "<h5 class='bg-success'>Your account is now active you may now log in.</h5>";
                                            break;
                                        case 'reset':
                                            echo "<h5 class='bg-success'>Please check your inbox for a reset link.</h5>";
                                            break;
                                        case 'resetAccount':
                                            echo "<h5 class='bg-success'>Password changed, you may now login.</h5>";
                                            break;
                                        case 'joined':
                                            echo "<h5 class='bg-success'>Check your inbox to activate your account.</h5>";
                                            break;                                            
                                    }
                                }
                            ?>
                            <fieldset>
                            <div class="form-group">
                                <input type="text" name="username" id="username" class="form-control input-lg" placeholder="User Name" value="<?php if(isset($error)){ echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" tabindex="1">
                            </div>

                            <div class="form-group">
                                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3">
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-md-12"><input type="submit" name="submit" value="Login" class="btn btn-lg btn-default btn-block" tabindex="5"></div>
                            </div>
                            </fieldset>
                        </form>
				<hr>
                        <p align="center">
                            <a href='reset.php'>Forgot your Password?</a><br>- or -<br>
                            <a href='register.php'>Register A New Account</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php 
//include header template
require('layout/footer.php'); 
?>
