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
        <h3><a class="" href="../admin/">Admin</a> | Main:
        </h3>
<hr>    
    <div class="row">
        <div class="col-lg-3 col-sm-3 portfolio-item">
          <div class="card h-100">
            <a href="#"><img class="card-img-top" src="" alt=""></a>
            <div class="card-body">

                <button class="collapsible">Characters</button>
                <div class="content">
                    <a href="charedit.php">Editor</a><br>
                    <a href="charview.php">Viewer</a><br>
                </div>                
                <button class="collapsible">Scenarios</button>
                <div class="content">
                    <a href="scenarios.php?t=l">Local</a><br>
                    <a href="scenarios.php?t=r">Regional</a><br>
                    <a href="scenarios.php?t=w">World</a><br>
                </div>                
                <button class="collapsible">Injects</button>
                <div class="content">
                    <a href="injects.php?t=mild">Mild</a><br>
                    <a href="injects.php?t=medium">Medium</a><br>
                    <a href="injects.php?t=hot">Hot</a><br>
                <br>
                    <a href="email.php">Email Messages</a><br>
                    <a href="phonescripts.php">Phone Call Scripts</a><br>
                    <a href="textscripts.php">Text Message Scripts</a><br>
                    <a href="videocalls.php">Video Call Scripts</a><br>
                    <a href="videofeeds.php">Video Feeds</a><br>
                </div>
                <button class="collapsible">Informational</button>
                <div class="content">
                    <a href="newnews.php">Add New News Stories</a><br>
                    <a href="deletenews.php">DELETE News Stories</a><br>
                    <a href="news.php">Update News Stories</a><br>
                    <a href="infovideos.php">Informational Videos</a><br>
                    <a href="websites.php">Websites</a><br>
                <br>
                    <a href="calendarevents.php">Calendar Events</a><br>
                    <a href="missiondetails.php">Mission Details</a><br>
                    <a href="randrqanda.php">R&R Q&A</a><br>
                </div>                
<?php   
//  $sql = "";
//        SELECT topic, option, url, type, level, order FROM Menu
//        WHERE level = "admin"
// $result = ();
// WHILE
// {                
//                echo the stuff here;
    
//}    
?>
                <!-- INSERT a system to add new features...so that this menu is active...

-->
            </div>
        </div>
    </div>
    <script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}        
    </script>    

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
