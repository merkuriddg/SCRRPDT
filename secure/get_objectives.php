<?php
 //GET OBJECTIVES
$sqlObjs = "SELECT * FROM NIST_objectives WHERE coID = " .$coID . " ORDER BY objective_no";
$result = mysqli_query($con, $sqlObjs) or die("Query fail: " . mysqli_error($con));

$goals = array();
while($objective= $result->fetch_assoc()){
$objectives[] = $objective;
$objectivesize++;
$_SESSION['objectivecount']=$objectivesize;

}
$con->next_result();

?>