<?php
$id=$_SESSION['memberID'];

    
$sql="SELECT count(mail_code) FROM mail WHERE mail_to = '".$id."' and mail_code='u'";
    mysqli_query($con,$sql);        
$result = mysqli_query($con, $sql)
      or 
      die("Query1 fail: " . mysqli_error($con));

  while ($row = mysqli_fetch_array($result)){   
      $_SESSION['mail_unread']=$row['count(mail_code)'];
  }

$sql="SELECT count(mail_code) FROM mail WHERE mail_to = '".$id."' and mail_code='r'";
mysqli_query($con,$sql);        
$result = mysqli_query($con, $sql)
      or 
      die("Query2 fail: " . mysqli_error($con));

  while ($row = mysqli_fetch_array($result)){   
    $_SESSION['mail_read']=$row['count(mail_code)'];
    $_SESSION['mail_inbox']=$_SESSION['mail_read']+$_SESSION['mail_unread'];
  }

$sql="SELECT count(mail_code) FROM mail WHERE mail_from = '".$id."'";
mysqli_query($con,$sql);        
$result = mysqli_query($con, $sql)
      or 
      die("Query3 fail: " . mysqli_error($con));

  while ($row = mysqli_fetch_array($result)){   
      $_SESSION['mail_sent']=$row['count(mail_code)'];
  }

$sql="SELECT count(mail_code) FROM mail WHERE (mail_to = '".$id."' OR mail_from = '".$id."') and mail_code='t'";
mysqli_query($con,$sql);        
$result = mysqli_query($con, $sql)
      or 
      die("Query4 fail: " . mysqli_error($con));

  while ($row = mysqli_fetch_array($result)){   
      $_SESSION['mail_trash']=$row['count(mail_code)'];
  }
?>
