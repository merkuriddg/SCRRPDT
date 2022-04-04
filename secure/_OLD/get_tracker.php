              <table id="tracker" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th width="50%">Date/Time</th>
                        <th width="50%">Page</th>
                    </tr>
                </thead>
                <tbody>
<style>
td, p img {vertical-align: baseline;}
td, p img {vertical-align: text-bottom;}
</style>
<?php

    //Get_Member_info
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_tracker('.$_SESSION[memberID].')")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
    $dtg = $row['currentdatetime']; 
    $pageID = $row['pageID']; 

      
switch ($pageID) {
    case "00":
        $pagecode = "Dashboard";
    case "01":
        $pagecode = "Calendar";
    case "02":
        $pagecode = "Contacts";
    case "03":
        $pagecode = "Mail";
    case "04":
        $pagecode = "FullView";
    case "05":
        $pagecode = "Logger";
    case "06":
        $pagecode = "Library";
    case "07":
        $pagecode = "Folders";
    case "08":
        $pagecode = "Cuppa";
    case "09":
        $pagecode = "Profile";
    case "10":
        $pagecode = "R&R";
    case "xx":
        $pagecode = "Tracker";
}
echo $pagecode;


                    echo '<tr>
                            <td valign="middle"><table border="0" align="left" width="100%" valign="middle">
                            <tr valign="middle">
                            <td align="left" width="50%" valign="left">
                            ' . $dtg .'
                            </td>
                            <td align="left" width="50%" valign="middle">
                            ' . $pagecode.'
                            </td></tr>';
                }

                    $con->next_result();
                    
                    ?>
                </tbody>
              </table>