<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');

//inject
$injectID = $_POST["injectID"];
$weekID = $_POST["weekID"];
$dayID = $_POST["dayID"];
$hourID = $_POST["hourID"];
$type = $_POST["inject_type"];
$inject_title = $_POST["inject_title"];
$inject_desc = $_POST["inject_desc"];
$inject_goal = $_POST["inject_goal"];
$inject_objective = $_POST["inject_objective"];
$inject_difficulty = $_POST["inject_difficulty"];

$sql = "
    UPDATE injects
    SET
    weekID = '$weekID', 
    dayID = '$dayID', 
    hourID ='$hourID', 
    type = '$type', 
    inject_title = '$inject_title', 
    inject_desc = '$inject_desc', 
    inject_goal = '$inject_goal', 
    inject_objective = '$inject_objective', 
    inject_difficulty = '$inject_difficulty'
    WHERE
    injectID = '$injectID';";


$update = mysqli_query($con,$sql)
    or die("Query fail: " . mysqli_error($con));

?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include('head.php'); ?>
</head>
<body>
<?php include('menu.php'); ?>


<div class="main">
    <div class="container">
        <h3><a class="" href="../admin/">Admin</a> | 
<?php 
    $t = $type;
            
    if ($t == 'mild') {echo "<a href='injects.php?t=mild'>Mild</a> ";}
    elseif ($t == 'medium') {echo "<a href='injects.php?t=medium'>Medium</a> ";}
    elseif ($t == 'hot') {echo "<a href='injects.php?t=hot'>Hot</a> ";}
    ?>
            <a class="" href="injects.php">Injects:</a>
            <small>
            </small>
                </h3>
        <hr> 
<form method="post" action="updateinject.php">        
<input type="hidden" name="injectID" value="<?php echo $injectID; ?>">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
                <span class="card-text">Title</span><br>
                <input type="text" value="<?php echo $inject_title; ?>" name="inject_title" placeholder="Name"><br><br>

              <span class="card-text">Week, Day, Hour</span><br>
                <input type="text" value="<?php echo $weekID; ?>" name="weekID" size="2">
                <input type="text" value="<?php echo $dayID; ?>" name="dayID" size="2">
                <input type="text" value="<?php echo $hourID; ?>" name="hourID" size="2"><br><br>
                
              <span class="card-text">Type</span><br>
                <select name="inject_type">
                <option value="mild" <?php if ($type=='l') {echo 'selected';} ?>>Mild Inject</option>
                <option value="medium" <?php if ($type=='r') {echo 'selected';} ?>>Medium Inject</option>
                <option value="hot" <?php if ($type=='w') {echo 'selected';} ?>>Hot Inject</option>
                </select><br><br>

              <span class="card-text">Goal</span><br>
                <textarea name="inject_goal" placeholder="Goal"><?php echo $inject_goal; ?></textarea>
                
              </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-text">Objective</span><br>
                <textarea name="inject_objective" placeholder="Objectives"><?php echo $inject_objective; ?></textarea><br><br>
                
                <span class="card-text">Description</span><br>
                <textarea name="inject_desc" placeholder="Description"><?php echo $inject_desc; ?></textarea><br><br>

              <span class="card-text">Difficulty</span><br>
                <textarea name="inject_difficulty" placeholder="Difficulty"><?php echo $inject_difficulty; ?></textarea><br><br>
                
              </div>
          </div>
        </div>
    </div>
      <div class="row">
            <div class="col-lg-12 col-sm-12">
          <div class="card">
            <div class="card-body text-center">
                    <hr>
                   --==  FUTURE SECTION FOR ADDING ATTACHMENTS!!! ==--
                    <hr>
                </div>
            </div>
          </div>
        </div>
      
      <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="text-center">
                  <button type="submit" class="btn btn-danger">UPDATE INJECT RECORD</button>
                </div>
            </div>
        </div>
    </form>           
    </div>
</div>    
</body>
</html> 
