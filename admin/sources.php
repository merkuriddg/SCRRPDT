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
        <h3 class="my-4">Sources
            <small>
                <select name="chars" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                    <option selected>Select:</option>
<?php 

        $count = 1;    
    $result = mysqli_query($con,"SELECT * FROM news 
    ORDER BY weekID, dayID, hourID ASC;")
    or die("Query fail: " . mysqli_error($con));
    while ($row = mysqli_fetch_array($result)){   
        $newsID = $row["newsID"];
        $weekID = $row["weekID"];
        $dayID = $row["weekID"];
        $hourID = $row["weekID"];
        $type = $row["type"];
        $news_title = $row["news_title"];
        $news_source = $row["news_source"];
        $news_source_url = $row["news_source_url"];
        $news_paragraph = $row["news_paragraph"];
        $news_img_url = $row["news_img_url"];
?>
                    <option value="sources.php?id=<?php echo $newsID; ?>"><?php echo $weekID.".".$dayID.".".$hourID.".".$news_title.",  ".$type; ?></option>
<?php
                    $count++; 
   }
                    $con->next_result();
    ?>                    
                <option selected>Select:</option>
                <option value="">1. Source A</option>
                <option value="">2. Source B</option>
                <option value="">3. Source C</option>
                </select>
            </small>
                </h3>
        <hr> 
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Source Name</span><br>
                <input type="text" value="" name="source_name" placeholder="Name">
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Source Objectives</span><br>
                <textarea name="source_objectives" placeholder="Objectives"></textarea>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Source Type</span><br>
                <select name="source_type">
                <option selected>Choose one...</option>
                <option value="">Type A</option>
                <option value="">Type B</option>
                <option value="">Type C</option>
                </select>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Source Description</span><br>
                <textarea name="source_desc" placeholder="Description"></textarea>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Source Goal</span><br>
                <textarea name="source_goal" placeholder="Goal"></textarea>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Source Difficulty</span><br>
                <textarea name="source_difficulty" placeholder="Difficulty"></textarea>
            </div>
          </div>
        </div>
    </div>        
  <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="text-center">
              <button type="submit" class="btn btn-danger">UPDATE SOURCE RECORD</button>
            </div>
        </div>
    </div>
</form>           

    </div>
</div>
    
</body>
</html> 
