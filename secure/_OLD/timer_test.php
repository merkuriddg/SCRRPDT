<?php
//include config
require_once('../includes/config.php');

$_SESSION['currenttime'] = "12:00:00";   
$_SESSION['alarmtime'] =    "12:00:10";

echo $_SESSION['currenttime'];   
echo $_SESSION['alarmtime'];

?>


<html>
<head>
<title>(Type a title for your page here)</title>

<script type="text/javascript">
    var timeadjust = <?php echo json_encode($_SESSION['alarmtime']) ?>;</script>

<script type="text/javascript"> 
function display_c(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct()',refresh)
}

function display_ct() {
var strcount
var x 
var x1
//var currentTime = new Date()
var currenttime <?php echo json_encode($_SESSION['currenttime']); ?>
var month = currentTime.getMonth() + 1
var day = currentTime.getDate()
var year = currentTime.getFullYear()
var hours = currentTime.getHours()
var minutes = currentTime.getMinutes()
var seconds= currentTime.getSeconds()
 x=month + "/" + day + "/" + year
if (minutes < 10){
minutes = "0" + minutes
}
x=x+"  "+hours + ":" + minutes +":"+seconds+ " "
x1=hours + ":" + minutes + ":"+seconds+" "
if(hours > 11){
x=x+"PM"
x1=x1+"PM"
if(x1=="12:14:25 PM"){
    alert(x1);}
} else {
x=x+"AM"
x1=x1+"AM"
if(x1=="8:16:0 AM"){
    alert(x1);}
}


document.getElementById('ct').innerHTML = x;
tt=display_c();
 }
</script>
</head>

<body onload=display_ct();>
<span id='ct' ></span>

</body>
</html>

