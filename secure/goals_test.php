<?php
require_once('../../../includes/config.php');
include('logged_in.php');
include('session_vars.php');
$g=$_REQUEST['g']
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>jQuery UI Sortable - Default functionality</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <style>
        #goal_list { list-style-type: none; margin: 0; padding: 0; width: 60%; }
        #goal_list li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
        #goal_list li span { position: absolute; margin-left: -1.3em; }
    </style>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#goal_list" ).sortable();
            $( "#goal_list" ).disableSelection();
        } );
    </script>
</head>

<body>

    <form method="POST" action="updategoals.php">

                    <?php

//handle POST
if ($_POST) {  // use $i to increment the weight
    $i=1;  // loop through post array in the order it was submitted
    foreach ($_POST['goal'] as $goal_id) {
    //
    //    update the row
        $sql="UPDATE NIST_goals SET goal=". $i . " WHERE id='". mysqli_real_escape_string($goal_id)."'";
        $result = mysqli_query($con,$sql);
    //    increment weight to make the next fruit heavier
        $i++;
        }
    }?>

                <script type="text/javascript">
                    // when the entire document has loaded, run the code inside this function
                    $(document).ready(function(){
                        // Wow! .. One line of code to make the unordered list drag/sortable!
                    $('#goal_list').sortable();});
                </script>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">

                    <ul id="goal_list">
                        <?php
                          $result = mysqli_query($con,"SELECT id, goal_no, goal FROM NIST_goals ORDER BY goal_no");
                          while ($row = mysqli_fetch_assoc($result)) {
                               echo '<li  class="ui-state-default"><input type="hidden" name="goals[]" value="'. $row['id'] .'" /><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>'. $row['goal_no'] .':'. $row['goal'] .'</li>';
                          }
                       ?>

                    </ul>
                    <input type="submit" name="reorder" value="Re-Order Goals" />
                </form>


    </form>

</body>
</html>
