<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<?php include('tabcontent.php'); ?>
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('check_first_login.php'); ?>
<?php include('menu.php'); ?>

<iframe id="eventchecker" src="eventcheck.php"
        width="0"
        height="0"
        sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
</iframe>

<!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
<?php include('modal.php'); ?>
<!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->


<div class="main">
    <form method="post" action="add_cuppa.php">
        <div class="row text-center">
            <div class="col-lg-12 text-left">
                <textarea  placeholder="A writing prompt will go here as a placeholder.
                    And the student will answer here and submit this daily...
                    Any questions???
                    I still have to add a submit bar at the bottom...to come soon.
                          
                    I could also ask you simple questions about the news stories as this is part of the educational use.
                    I could see answer this question: Blah with these answer choices
                    a. This
                    b. That
                    c. None
                    Go ahead a try typing in here!!!
                    "
                          id="instructions" class="paper" rows="15" width="100%"></textarea>

                <!-- <div class="editable" contenteditable>
                    Could I use this for a question page of some sort...maybe it willl linebreak automagically???<br>
                    I could see answer this question: Blah with these answer choices<br>
                    a. This<br>
                    b. That<br>
                    c. None<br>
                </div>
                    -->
                </div>
            </div>
        <center><input type="submit" value="Add my latest entry, please." class="btn btn-primary"></center>
    </form>
<br><br><br>
    <!-- main-footer -->
<?php include('main_footer.php'); ?>
</div>
</div>


 

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
		<script src="../js/classie.js"></script>
		<script src="../js/progressButton.js"></script>
		<script>
			[].slice.call( document.querySelectorAll( 'button.progress-button' ) ).forEach( function( bttn ) {
				new ProgressButton( bttn, {
					callback : function( instance ) {
						var progress = 0,
							interval = setInterval( function() {
								progress = Math.min( progress + Math.random() * 0.1, 1 );
								instance._setProgress( progress );

								if( progress === 1 ) {
									instance._stop(1);
									clearInterval( interval );
								}
							}, 200 );
					}
				} );
			} );
		</script>
</body>
</html>

