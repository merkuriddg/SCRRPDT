<?php
session_start();
if( isset($_POST['member_position']) ) {
    // save values from other page to session
    $_SESSION['member_position'] = $_POST['member_position'];

}
?>