<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');
$t = $_REQUEST['t'];
$id = $_REQUEST['id'];
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
    if ($t == 'mild') {echo "<a href='injects.php?t=mild'>Mild</a> ";}
    elseif ($t == 'medium') {echo "<a href='injects.php?t=medium'>Medium</a> ";}
    elseif ($t == 'hot') {echo "<a href='injects.php?t=hot'>Hot</a> ";}
    ?>
            <a class="" href="injects.php">Injects:</a>

            <small>
                <select name="injects" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                    <option selected>Select:</option>
                    <option value="newinject.php">INSERT A NEW INJECT!</option>
<?php 
    $count = 1;    
    if ($id!="")
    {
    $sql = "
    SELECT * FROM injects 
    WHERE injectID = '". $id . "' 
    ORDER BY weekID, dayID, hourID ASC;";
    }
    elseif ($t!="") 
    {
    $sql = "
    SELECT * FROM injects 
    WHERE type = '". $t . "' 
    ORDER BY weekID, dayID, hourID ASC;";
    }
    else
    {
    $sql = "
    SELECT * FROM injects 
    ORDER BY weekID, dayID, hourID ASC;";
    }

    $result = mysqli_query($con,$sql)
    or die("Query fail: " . mysqli_error($con));
                    
    while ($row = mysqli_fetch_array($result)){   
        $injectID = $row["injectID"];
        $weekID = $row["weekID"];
        $dayID = $row["dayID"];
        $hourID = $row["hourID"];
        $inject_title = $row["inject_title"];
        $type = $row["type"];
        $inject_desc = $row["inject_desc"];
        $inject_goal = $row["inject_goal"];
        $inject_objective = $row["inject_objective"];
        $inject_difficulty = $row["inject_difficulty"];
?>
                    <option value="injects.php?t=<?php echo $type; ?>&id=<?php echo $injectID; ?>"><?php echo $count.". ".$inject_title; ?></option>
<?php
                    $count++; 
   }
                    $con->next_result();
    ?>                    
                </select>
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
