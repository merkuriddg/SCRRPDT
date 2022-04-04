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
        <h3 class="my-4">Methods
            <small>
                <select name="chars" onChange="window.document.location.href=this.options[this.selectedIndex].value;">
                    <option selected>Select:</option>
<?php 

        $count = 1;    
    $result = mysqli_query($con,"SELECT * FROM contacts ORDER BY lastname, firstname;")
    or die("Query fail: " . mysqli_error($con));
    while ($row = mysqli_fetch_array($result)){   
        $contactID = $row["contactID"];
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
?>
                    <option value="chars.php?id=<?php echo $contactID; ?>"><?php echo $count.". ".$firstname." ".$lastname; ?></option>
<?php
                    $count++; 
   }
                    $con->next_result();
    ?>                    
                <option value="">1. Method A</option>
                <option value="">2. Method B</option>
                <option value="">3. Method C</option>
                </select>
            </small>
                </h3>
        <hr> 
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Method Name</span><br>
                <input type="text" value="" name="method_name" placeholder="Name">
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Method Objectives</span><br>
                <textarea name="method_objectives" placeholder="Objectives"></textarea>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Method Type</span><br>
                <select name="method_type">
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
              <span class="card-title">Method Description</span><br>
                <textarea name="method_desc" placeholder="Description"></textarea>
            </div>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Method Goal</span><br>
                <textarea name="method_goal" placeholder="Goal"></textarea>
            </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-title">Method Difficulty</span><br>
                <textarea name="method_difficulty" placeholder="Difficulty"></textarea>
            </div>
          </div>
        </div>
    </div>        
  <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="text-center">
              <button type="submit" class="btn btn-danger">UPDATE METHOD RECORD</button>
            </div>
        </div>
    </div>
</form>           
</div>
    </div>
    
</body>
</html> 
