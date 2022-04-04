<?php
//Check connection
if (!$con) {
	die ('Failed to connect to MySQL: ' . mysqli_connect_error($con));	
}

echo "check";

$stmt = $con->prepare("select memberid from member_info where memberid='.$_SESSION[memberid]'");
$stmt->execute();
echo "executed";
	if(mysqli_num_rows($stmt) == 0 )
    {
        echo 'yes';
$con->next_result();
		header('Location: register_member.php');
    }
    else{
        echo 'no';
$con->next_result();
		header('Location: index.php');        
    }


?>



