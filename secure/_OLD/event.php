
  <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>



<!-- CASE Email -->



<!-- CASE Modal -->
<div class="modal fade" id="AlertModal" aria-labelledby="memberModalLabel" aria-hidden="true" data-toggle="modal"  tabindex="-1" role="dialog" data-backdrop="static" aria-hidden="true" data-keyboard="false">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <?php 
          if (isset($EventClosure)) { 
          echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
                }
          ?>
        <h4 class="modal-title" id="AlertModalLabel"><?php echo $_SESSION['EventTitle']; ?></h4>

      </div>
      <div class="modal-body">
<?p
<!-- ?php
$_SESSION['first_login'] == '';
if ($_SESSION['first_login'] == '1') {}
else {
$result = mysqli_query($con, 
"CALL set_first_login('" .$_SESSION['memberID'] . "')")
  or 
  die("First_login failed: " . mysqli_error($con));

-->
<div class="modal-body box">
                    <div style="background-color:black;font-family:monospace">
                    <div class="terminal" style="background-color:black;color:#45D40C;font-family:monospace;line-height:1.2em;"></div>
                    <script src="src/typewriting.js" type="application/javascript"></script>
                    <script type="application/javascript">
                    var typeWriting = new TypeWriting({
                        targetElement   : document.getElementsByClassName('terminal')[0],
                        inputString     : '       Hello, and welcome to Arr Aye Tea, Incorporated. Today is the first day of the rest of your life. <br><br>Hopefully, you have come prepared and are willing to join the adventure of a lifetime. <br><br>Congratulations on your hiring. Some of the events today may be a bit confusing, but in the end will help you succeed while here at Arr Aye Tea.<br><br>Please explore this site and make sure you learn as much as you can, as it may help you in the end. <br><br> You will not see this information again. So, <a href="profile.php">Click here</a> to begin'
                    }, function() {
                        console.log("END");
                    });
                    </script>
                    </div>
                </div>

<!-- ?php 
$_SESSION['first_login'] = '1';
    $con->next_result();
}
      ?-->
        </div>
      <div class="modal-footer">
        <?php 
          if (isset($EventClosure)) { 
          echo '<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>';
                }
          ?>
        
      </div>
    </div>
  </div>
</div>
<!-- /.modal -->
