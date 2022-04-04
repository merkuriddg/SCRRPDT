<?php
require('includes/config.php');

//collect values from the url
$fname = trim($_GET['f']);
$lname = trim($_GET['l']);
$memberID = trim($_GET['x']);
$active = trim($_GET['y']);
$email = trim($_GET['z']);

//if id is number and the active token is not empty carry on
if(is_numeric($memberID) && !empty($active)){

	//update users record set the active column to Yes where the memberID and active value match the ones provided in the array
	$stmt = $db->prepare("UPDATE members SET active = 'Yes' WHERE memberID = :memberID AND active = :active");
	$stmt->execute(array(
		':memberID' => $memberID,
		':active' => $active
	));

    $stmt2 = $db->prepare("INSERT INTO member_info (memberID,fname,lname,email) VALUES (:memberID,:fname,:lname,:email)");
	$stmt2->execute(array(
		':memberID' => $memberID,
		':fname' => $fname,
		':lname' => $lname,
		':email' => $email
	));

    
	//if the row was updated redirect the user
	if($stmt->rowCount() == 1){

		//redirect to login page
		header('Location: index.php?action=active');
		exit;

	} else {
		echo "Your account could not be activated."; 
	}
	
}
?>