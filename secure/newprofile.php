<?php
$UID = $_REQUEST['uid'];

require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');


if($con === false){die("ERROR: Could not connect. " . mysqli_connect_error());}




            $sql="SELECT * FROM NIST_profiles WHERE TransactionID = '".$UID."'" ;
            $result = mysqli_query($con,$sql) or die("Query fail: " . mysqli_error($con));

            while ($row = mysqli_fetch_array($result)){
                $id= $row['id'];
                $coID = $row['coID'];
                $MemberID = $row['MemberID'];
                $Profile = $row['Profile'];
                $MissionID = $row['MissionID'];
                $DeptID = $row['DeptID'];
                $TemplateID = $row['TemplateID'];
                $SubCategoryID = $row['SubCategoryID'];
                $Function=substr($SubCategoryID,0,2);
                $Category=substr($SubCategoryID,3,2);
                $SubCat = substr($SubCategoryID,6,2);
                $MIL = $row['MIL'];
                $ProfileStartDate = $row['ProfileStartDate'];

                echo "SubC: ".$SubCategoryID." | ";
                echo "Function: ".$Function." | ";
                echo "Category: ".$Category." | ";
                echo "SubCat: ".$SubCat."<br>";

//            echo $coID."','".$memberID."','".$Profile."','".$MissionID."','".$DeptID."','".$Template."','".$SubCategoryID."','".$MIL."','".$ProfileStartDate."','".$UID."')";

            $con->next_result();


        }

?>


