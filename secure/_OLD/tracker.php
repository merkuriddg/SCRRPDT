<!-- page codes

00 _dashboard
01 _calendar
02 _contacts
03 _mail 
04 _fullview
05 _logger
06 _library
07 _folders
08 _cuppa
09 _profile
10 _R&R

-->
    
    <?php
//Set Date
$defaultdate= date("Y-m-d  H:i:s");

$currentpage = substr($_SERVER['REQUEST_URI'], -8);
//echo $currentpage;

switch ($currentpage) {
    case "oard.php":
        $pagecode = "00";
    case "ndar.php":
        $pagecode = "01";
    case "acts.php":
        $pagecode = "02";
    case "mail.php":
        $pagecode = "03";
    case "view.php":
        $pagecode = "04";
    case "gger.php":
        $pagecode = "05";
    case "rary.php":
        $pagecode = "06";
    case "lder.php":
        $pagecode = "07";
    case "uppa.php":
        $pagecode = "08";
    case "file.php":
        $pagecode = "09";
    case "andr.php":
        $pagecode = "10";
}
//echo $pagecode;


//Insert_Tracker
//run the store proc
  $result = mysqli_query($con, 
  "CALL insert_tracker('" .$_SESSION['memberID']. "', '". $defaultdate . "', '". $pagecode . "')")
      or 
      die("INSERT failed: " . mysqli_error($con));
    //loop the result set

$con->next_result();

?>                           