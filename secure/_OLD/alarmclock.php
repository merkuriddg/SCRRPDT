<?php
$currenttime = date("H:i");
echo $currenttime; 

$alarm  = "09:46";

///SET IN Logged 
$_SESSION['alarm1'] = row(alarm1);
$_SESSION['$alarm2'] = row(alarm2);
$_SESSION['$alarm3'] = row(alarm3);

if ($currenttime == $_SESSION['alarm1']) 
{
    header('Location: modal.php'); 
}

if ($currenttime == $_SESSION['alarm1']) 
{
    header('Location: modal.php'); 
}

?>



<script type="application/javascript">
    var blurred = false;
    window.onblur = function() { blurred = true; };
    window.onfocus = function() { blurred && (location.reload()); };
</script>