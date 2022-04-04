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
        <h3><a class="" href="../admin/">Admin</a> | New <a href="news.php">News:</a>
            <small>
            </small>
                </h3>

       <hr> 
<form method="post" action="insertnews.php">        
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-text">Title</span><br>
                <textarea name="news_title" placeholder="Title"></textarea><br>
                <span class="card-text">Week, Day, Hr is actually<br>
                Weeks (12) = Game Months 1-12 (1 year)<br>
                Days (31)  = Game Days 1-31 (in a month)<br>
                Hours (3) = Game Hrs 1-3 (Morn/Noon/Night)
                  </span><br>

                <select name="weekID" size="1">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                </select>
                <select name="dayID" size="1">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                    <option value="04">04</option>
                    <option value="05">05</option>
                    <option value="06">06</option>
                    <option value="07">07</option>
                    <option value="08">08</option>
                    <option value="09">09</option>
                    <option value="10">10</option>
                    <option value="01">11</option>
                    <option value="02">12</option>
                    <option value="03">13</option>
                    <option value="03">14</option>
                    <option value="01">15</option>
                    <option value="02">16</option>
                    <option value="03">17</option>
                    <option value="01">18</option>
                    <option value="02">19</option>
                    <option value="03">20</option>
                    <option value="01">21</option>
                    <option value="02">22</option>
                    <option value="03">23</option>
                    <option value="03">24</option>
                    <option value="01">25</option>
                    <option value="02">26</option>
                    <option value="03">27</option>
                    <option value="03">28</option>
                    <option value="01">29</option>
                    <option value="03">30</option>
                    <option value="03">31</option>
                </select>
                <select name="hourID" size="1">
                    <option value="01">01</option>
                    <option value="02">02</option>
                    <option value="03">03</option>
                </select>


              <span class="card-text">Type</span>
                <select name="news_type" size="6">
                    <option value="blog">Blog</option>
                    <option value="news">News</option>
                    <option value="noise">Noise</option>
                    <option value="pdf">PDF</option>
                    <option value="url">URL</option>
                    <option value="other">Other...</option>
                </select><br><br>
     
              
              </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-text">Paragraph</span><br>
                <textarea name="news_paragraph" placeholder="Paragraph"></textarea><br>

                <span class="card-text">Source</span><br>
                <textarea name="news_source" placeholder="News Source"></textarea><br>

                <span class="card-text">Source URL</span><br>
                <textarea name="news_source_url" placeholder="News Source URL"></textarea><br>

            </div>
          </div>
        </div>
    </div>
      <div class="row">
            <div class="col-lg-12 col-sm-12">
          <div class="card">
            <div class="card-body text-center">
                <!--
                    <hr>
                   --==  FUTURE SECTION FOR ADDING ATTACHMENTS!!! ==--
                    <hr>
              <span class="card-text">Image</span><br>
                <form id="upload" action="news_img_upload.php" enctype="multipart/form-data" method="post">
                    <center>
                        Current:<br>
                            <img src="../secure/news/<?php echo $news_img_url; ?>" class="img-circle" alt="News Image" height="75"><br>

                        New:<br>
                            <img id="blah" src="#" alt="News Image"  height="75"/>
                        <br>
							<input type="file" name="news_imgs_url" id="news_img_url" size="15">
                            <button type="submit" class="btn btn-primary"> Upload Photo </button>
                    </center>
				</form>              
            -->  
              
              </div>
            </div>
          </div>
        </div>
    <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="text-center">
                  <button type="submit" class="btn btn-danger">INSERT NEW NEWS </button>
                </div>
            </div>
        </div>
    </form>           
    </div>
</div>
    
</body>
</html> 
