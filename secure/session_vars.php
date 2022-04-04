<?php
$deptsize="{DEPTARTMENT_SIZE}";
$goalsize="{GOAL_SIZE}";
$membersize="{MEMBER_SIZE}";

$companyname = '{COMPANY_NAME}';
$orgname = '{ORGANIZATION_NAME}';

$coID = 0;
$orgID = 0;

$_SESSION['uid'] = 1337;
$member_fname = 'John';
$member_lname = 'Carr';
$fullname = $member_fname . ' ' . $member_lname;

//Temp
$missioncount="0";
$_SESSION['missioncount'] = $missioncount;


$sql = "SELECT * FROM member_info WHERE uid = '".$_SESSION['un']."';";
$result = mysqli_query($con, $sql)  or die("Query fail 1: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)){
    $MemberID = $row['ID'];
    $_SESSION['MemberID'] = $MemberID;
    $coID = $row['coid'];
    $_SESSION['coID'] = $coID;
}
$con->next_result();



//COMPANY
$sql0 = "SELECT * FROM NIST_cos WHERE id = '".$coID."';";
$result = mysqli_query($con, $sql0)
or die("Query fail 2: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)){

    $coID = $row['id'];
    $_SESSION['coID'] = $coID;
    $companyname = $row['co_name'];
    $_SESSION['companyname'] = $companyname;
}
$con->next_result();

//ORG
$sql1 = "SELECT * FROM NIST_orgs WHERE id = '".$coID."'";
$result = mysqli_query($con, $sql1)
or die("Query fail 3: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)){

    $orgID = $row['id'];
    $_SESSION['orgID'] = $row['id'];
    $orgname = $row['org_name'];
    $_SESSION['orgname'] = $orgname ;


}
$con->next_result();

//DEPARTMENTS
$sql2 = "SELECT * FROM NIST_depts WHERE coID = " .$coID; // . " ORDER BY deptname";
$result2 = mysqli_query($con, $sql2) or die("Query fail 4: " . mysqli_error($con));

$depts=array();
while($dept = $result2->fetch_assoc()){
    $depts[]=$dept;
    $deptsize++;
}

$con->next_result();

//GOALS
$sqlGoals = "SELECT * FROM NIST_goals WHERE coID = " .$coID; // . " ORDER BY goal_no";
$result = mysqli_query($con, $sqlGoals ) or die("Query fail 5: " . mysqli_error($con));

$goals = array();
while($goal = $result->fetch_assoc()){
    $goals[] = $goal;
    $goalsize++;
    $_SESSION['goalcount']=$goalsize;

}
$con->next_result();


//OBJECTIVES
$sqlObjs = "SELECT * FROM NIST_objectives WHERE coID = " .$coID; // . " ORDER BY objective_no";
$result = mysqli_query($con, $sqlObjs) or die("Query fail 6: " . mysqli_error($con));

$goals = array();
while($objective= $result->fetch_assoc()){
    $objectives[] = $objective;
    $objectivesize++;
    $_SESSION['objectivecount']=$objectivesize;

}
$con->next_result();


//MEMBERS
$sql4 = "SELECT * FROM NIST_members WHERE coID = " .$coID; // . " ORDER BY lname ASC";
$result4 = mysqli_query($con, $sql4) or die("Query fail 7: " . mysqli_error($con));

$members = array();
while($member = $result4->fetch_assoc()){
    $members[] = $member;
    $fname[] = $member['fname'];
    $lname[] = $member['lname'];
    $membersize++;

}
$con->next_result();


/*
foreach ($fname as $fv) {
    $users array($fv['fname'],$fv)
};
*/


$users = array
(
    array("Rick",1),
    array("Kim",2),
    array("Sam",4),
    array("Jane",5),
    array("Mac",6),
    array("Em",7)
);


//CURRENT PROFILES
$sql5 = "SELECT count(*) FROM NIST_profiles WHERE Profile = 'Current' AND coID = " .$coID;
$result5 = mysqli_query($con, $sql5) or die("Query fail 8: " . mysqli_error($con));

while ($row = mysqli_fetch_array($result5)) {
    $currentprofilesize = $row[0];
    $_SESSION['currentprofilecount']=$currentprofilesize;

}
$con->next_result();


//TARGET PROFILES
$sql6 = "SELECT count(*) FROM NIST_profiles WHERE Profile = 'Target' AND coID = " .$coID ;
$result6 = mysqli_query($con, $sql6) or die("Query fail 9: " . mysqli_error($con));

while ($row = mysqli_fetch_array($result6)) {
    $targetprofilesize = $row[0];
    $_SESSION['targetprofilecount'] = $targetprofilesize;
}
$con->next_result();

//IMPACTS
/*
$sql7 = "SELECT count(*) FROM NIST_impacts WHERE Profile = 'Target' AND coID = " .$coID ;
$result7 = mysqli_query($con, $sql7) or die("Query fail 10: " . mysqli_error($con));

while ($row = mysqli_fetch_array($result7)) {
    $impactsize = $row[0];
    $_SESSION['impactcount'] = $impactsize;
}
$con->next_result();



//ROADMAPS
$sql8 = "SELECT count(*) FROM NIST_roadmaps WHERE Profile = 'Target' AND coID = " .$coID ;
$result8 = mysqli_query($con, $sql8) or die("Query fail 11: " . mysqli_error($con));

while ($row = mysqli_fetch_array($result8)) {
    $roadmapsize = $row[0];
    $_SESSION['roadmapcount'] = $roadmapsize;
}
$con->next_result();

*/
//SKINS
$sql9 = "SELECT value FROM NIST_settings WHERE selected = '1'";
$result = mysqli_query($con, $sql9)
or die("Query fail 12: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)){

    $css = $row['value'];
    $_SESSION['css'] = $css;

}
$con->next_result();
?>








