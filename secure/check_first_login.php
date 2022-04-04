<?php 

if ($_SESSION['first_login'] == '1') 
{}
else
{
$result = mysqli_query($con, 
"CALL set_first_login('" .$_SESSION['memberID'] . "')")
  or 
  die("First_login failed: " . mysqli_error($con));
      ?>
                <div class="box">
                    <div style="background-color:black;font-family:monospace">
                    <div class="terminal" style="background-color:black;color:#45D40C;font-family:monospace;line-height:1.2em;"></div>
                    <script src="_OLD/src/typewriting.js" type="application/javascript"></script>
                    <script type="application/javascript">
                    var typeWriting = new TypeWriting({
                        targetElement   : document.getElementsByClassName('terminal')[0],
                        inputString     : '       Hello, and welcome to Arr Aye Tea, Incorporated. Today is the first day of the rest of your life. <br><br>Hopefully, you have come prepared and are willing to join the adventure of a lifetime. <br><br>Congratulations on your hiring. Some of the events today may be a bit confusing, but in the end will help you succeed while here at Arr Aye Tea.<br><br>Please explore this site and make sure you learn as much as you can, as it may help you in the end. <br><br> You will not see this information again. So, <a href="_OLD/profile.php">Click here</a> to begin'
                    }, function() {
                        console.log("END");
                    });
                    </script>
                    </div>
                </div>
<?php 
$_SESSION['first_login'] = '1';
    $con->next_result();
}
      ?>