<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');
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
        <h3><a class="" href="../admin/">Admin</a> | New Scenario:
            <small>
            </small>
                </h3>
        <hr> 
<form method="post" action="insertscenario.php">        
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
                <span class="card-text">Title</span><br>
                <input type="text" value="" name="scenario_title" placeholder="Name"><br><br>

              <span class="card-text">Week, Day, Hour</span><br>
                <input type="text" value="" name="weekID" size="2">
                <input type="text" value="" name="dayID" size="2">
                <input type="text" value="" name="hourID" size="2"><br><br>
                
              <span class="card-text">Type</span><br>
                <select name="scenario_type">
                <option value="l">Local Scenario</option>
                <option value="r">Regional Scenario</option>
                <option value="w">World Scenario</option>
                </select><br><br>
                
              <span class="card-text">Goal</span><br>
                <textarea name="scenario_goal" placeholder="Goal"></textarea>

                
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
                <span class="card-text">Objective</span><br>
                <textarea name="scenario_objective" placeholder="Objectives"></textarea><br><br>
                
              <span class="card-text">Description</span><br>
                <textarea name="scenario_desc" placeholder="Description"></textarea><br><br>

              <span class="card-text">Difficulty</span><br>
                <textarea name="scenario_difficulty" placeholder="Difficulty"></textarea>
                
              </div>
          </div>
        </div>
    </div>
      <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="text-center">
                  <button type="submit" class="btn btn-danger">INSERT NEW SCENARIO</button>
                </div>
            </div>
        </div>
    </form>           
    </div>
</div>
</body>
</html> 
