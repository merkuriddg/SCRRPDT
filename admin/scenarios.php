<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');
$t = $_REQUEST['t'];
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
    if ($t == 'l') {echo "Local ";}
    elseif ($t == 'r') {echo "Regional ";}
    elseif ($t == 'w') {echo "World ";}
    ?>
            <a href="scenarios.php">Scenarios:</a>
            <small>
                <select name="scenarios" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                    <option selected>Select:</option>
                    <option value="newscenario.php">INSERT A NEW SCENARIO!</option>
<?php 

    $count = 1;    
    if ($t!="") 
    {
    $sql = "
    SELECT * FROM scenarios 
    WHERE type = '". $t . "' 
    ORDER BY weekID, dayID, hourID ASC;";
    }    
    else 
    {
    $sql = "
    SELECT * FROM scenarios 
    ORDER BY weekID, dayID, hourID ASC;";
    }
    $result = mysqli_query($con,$sql)
    or die("Query fail: " . mysqli_error($con));

    while ($row = mysqli_fetch_array($result)){   
        $scenarioID = $row["scenarioID"];
        $weekID = $row["weekID"];
        $dayID = $row["dayID"];
        $hourID = $row["hourID"];
        $scenario_title = $row["scenario_title"];
        $type = $row["type"];
        $scenario_desc = $row["scenario_desc"];
        $scenario_goal = $row["scenario_goal"];
        $scenario_objective = $row["scenario_objective"];
        $scenario_difficulty = $row["scenario_difficulty"];
?>
                    <option value="scenarios.php?l=<?php echo $type; ?>&id=<?php echo $scenarioID; ?>"><?php echo $count.". ".$scenario_title; ?></option>
<?php
                    $count++; 
   }
                    $con->next_result();
    ?>                    
                </select>
            </small>
                </h3>
        <hr> 
<form method="post" action="updatescenario.php">        
<input type="hidden" name="scenariosID" value="<?php echo $scenarioID; ?>">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
                <span class="card-text">Title</span><br>
                <input type="text" value="<?php echo $scenario_title; ?>" name="scenario_title" placeholder="Name"><br><br>

              <span class="card-text">Week, Day, Hour</span><br>
                <input type="text" value="<?php echo $weekID; ?>" name="weekID" size="2">
                <input type="text" value="<?php echo $dayID; ?>" name="dayID" size="2">
                <input type="text" value="<?php echo $hourID; ?>" name="hourID" size="2"><br><br>
                
              <span class="card-text">Type</span><br>
                <select name="scenario_type">
                <option value="l" <?php if ($type=='l') {echo 'selected';} ?>>Local Scenario</option>
                <option value="r" <?php if ($type=='r') {echo 'selected';} ?>>Regional Scenario</option>
                <option value="w" <?php if ($type=='w') {echo 'selected';} ?>>World Scenario</option>
                </select><br><br>
                
              <span class="card-text">Goal</span><br>
                <textarea name="scenario_goal" placeholder="Goal"><?php echo $scenario_goal; ?></textarea>

                
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
                <span class="card-text">Objective</span><br>
                <textarea name="scenario_objective" placeholder="Objectives"><?php echo $scenario_objective; ?></textarea><br><br>
                
              <span class="card-text">Description</span><br>
                <textarea name="scenario_desc" placeholder="Description"><?php echo $scenario_desc; ?></textarea><br><br>

              <span class="card-text">Difficulty</span><br>
                <textarea name="scenario_difficulty" placeholder="Difficulty"><?php echo $scenario_difficulty; ?></textarea>
                
              </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="text-center">
              <button type="submit" class="btn btn-danger">UPDATE SCENARIO RECORD</button>
            </div>
        </div>
    </div>
    </form>           
    </div>
</div>    
</body>
</html> 
