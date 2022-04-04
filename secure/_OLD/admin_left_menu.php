<div class="sidenav">
<?php 

$result3 = mysqli_query($con,"SELECT * FROM contacts ORDER BY lastname, firstname;")
or 
die("Query fail: " . mysqli_error($con));
   while ($row = mysqli_fetch_array($result3)){   
            
        $contactID = $row["contactID"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
?>
<a class="nav-link" href="admin_char.php?id=<?php echo $contactID; ?>"><?php echo $contactID.": ".$firstname." ".$lastname; ?></a>
<?php
   }
                    $con->next_result();

    ?>
</div>