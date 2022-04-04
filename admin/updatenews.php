<?php
require_once('../includes/config.php');
include('../secure/logged_in.php');

//news
$newsID = $_POST["newsID"];
$weekID = $_POST["weekID"];
$dayID = $_POST["dayID"];
$hourID = $_POST["hourID"];
$news_type = $_POST["news_type"];
$news_title = $_POST["news_title"];
$news_paragraph = $_POST["news_paragraph"];
$news_source = $_POST["news_source"];
$news_source_url = $_POST["news_source_url"];
$news_img_url = $_POST["news_img_url"];

$news_title = addslashes($news_title );
$news_paragraph  = addslashes($news_paragraph );


$sql = "
    UPDATE news
    SET
    weekID = '$weekID', 
    dayID = '$dayID', 
    hourID ='$hourID', 
    news_type = '$news_type', 
    news_title = '$news_title', 
    news_source = '$news_source', 
    news_paragraph = '$news_paragraph', 
    news_source_url = '$news_source_url', 
    news_img_url = '$news_img_url'
    WHERE
    newsID = '$newsID';";

$update = mysqli_query($con,$sql)
    or die("Query fail: " . mysqli_error($con));



$news_title = stripslashes($news_title );
$news_paragraph  = stripslashes($news_paragraph );

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
        <h3><a class="" href="../admin/">Admin</a> | <a href="news.php">News:</a>
            <small>
            </small>
                </h3>
        <hr> 
<form method="post" action="updatenews.php">        
<input type="hidden" name="newsID" value="<?php echo $newsID; ?>">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-text">Title</span><br>
                <textarea name="news_title" placeholder="Title"><?php echo $news_title; ?></textarea><br>

                <span class="card-text">Week, Day, Hr is actually<br>
                Weeks (12) = Game Months 1-12 (1 year)<br>
                Days (31)  = Game Days 1-31 (in a month)<br>
                Hours (3) = Game Hrs 1-3 (Morn/Noon/Night)
                  </span><br>

                <select name="weekID" size="1">
                    <option value="" <?php if ($weekID=='') {echo 'selected';} ?>></option>
                    <option value="01" <?php if ($weekID=='01') {echo 'selected';} ?>>01</option>
                    <option value="02" <?php if ($weekID=='02') {echo 'selected';} ?>>02</option>
                    <option value="03" <?php if ($weekID=='03') {echo 'selected';} ?>>03</option>
                    <option value="04" <?php if ($weekID=='04') {echo 'selected';} ?>>04</option>
                    <option value="05" <?php if ($weekID=='05') {echo 'selected';} ?>>05</option>
                    <option value="06" <?php if ($weekID=='06') {echo 'selected';} ?>>06</option>
                    <option value="07" <?php if ($weekID=='07') {echo 'selected';} ?>>07</option>
                    <option value="08" <?php if ($weekID=='08') {echo 'selected';} ?>>08</option>
                    <option value="09" <?php if ($weekID=='09') {echo 'selected';} ?>>09</option>
                    <option value="10" <?php if ($weekID=='10') {echo 'selected';} ?>>10</option>
                    <option value="11" <?php if ($weekID=='11') {echo 'selected';} ?>>11</option>
                    <option value="12" <?php if ($weekID=='12') {echo 'selected';} ?>>12</option>
                </select>
                <select name="dayID" size="1">
                    <option value="" <?php if ($dayID=='') {echo 'selected';} ?>></option>
                    <option value="01" <?php if ($dayID=='01') {echo 'selected';} ?>>01</option>
                    <option value="02" <?php if ($dayID=='02') {echo 'selected';} ?>>02</option>
                    <option value="03" <?php if ($dayID=='03') {echo 'selected';} ?>>03</option>
                    <option value="04" <?php if ($dayID=='04') {echo 'selected';} ?>>04</option>
                    <option value="05" <?php if ($dayID=='05') {echo 'selected';} ?>>05</option>
                    <option value="06" <?php if ($dayID=='06') {echo 'selected';} ?>>06</option>
                    <option value="07" <?php if ($dayID=='07') {echo 'selected';} ?>>07</option>
                    <option value="08" <?php if ($dayID=='08') {echo 'selected';} ?>>08</option>
                    <option value="09" <?php if ($dayID=='09') {echo 'selected';} ?>>09</option>
                    <option value="10" <?php if ($dayID=='10') {echo 'selected';} ?>>10</option>
                    <option value="11" <?php if ($dayID=='11') {echo 'selected';} ?>>11</option>
                    <option value="12" <?php if ($dayID=='12') {echo 'selected';} ?>>12</option>
                    <option value="13" <?php if ($dayID=='13') {echo 'selected';} ?>>13</option>
                    <option value="14" <?php if ($dayID=='14') {echo 'selected';} ?>>14</option>
                    <option value="15" <?php if ($dayID=='15') {echo 'selected';} ?>>15</option>
                    <option value="16" <?php if ($dayID=='16') {echo 'selected';} ?>>16</option>
                    <option value="17" <?php if ($dayID=='17') {echo 'selected';} ?>>17</option>
                    <option value="18" <?php if ($dayID=='18') {echo 'selected';} ?>>18</option>
                    <option value="19" <?php if ($dayID=='19') {echo 'selected';} ?>>19</option>
                    <option value="20" <?php if ($dayID=='20') {echo 'selected';} ?>>20</option>
                    <option value="21" <?php if ($dayID=='21') {echo 'selected';} ?>>21</option>
                    <option value="22" <?php if ($dayID=='22') {echo 'selected';} ?>>22</option>
                    <option value="23" <?php if ($dayID=='23') {echo 'selected';} ?>>23</option>
                    <option value="24" <?php if ($dayID=='24') {echo 'selected';} ?>>24</option>
                    <option value="25" <?php if ($dayID=='25') {echo 'selected';} ?>>25</option>
                    <option value="26" <?php if ($dayID=='26') {echo 'selected';} ?>>26</option>
                    <option value="27" <?php if ($dayID=='27') {echo 'selected';} ?>>27</option>
                    <option value="28" <?php if ($dayID=='28') {echo 'selected';} ?>>28</option>
                    <option value="29" <?php if ($dayID=='29') {echo 'selected';} ?>>29</option>
                    <option value="30" <?php if ($dayID=='30') {echo 'selected';} ?>>30</option>
                    <option value="31" <?php if ($dayID=='31') {echo 'selected';} ?>>31</option>
                </select>
                <select name="hourID" size="1">
                    <option value="" <?php if ($hourID=='') {echo 'selected';} ?>></option>
                    <option value="01" <?php if ($hourID=='01') {echo 'selected';} ?>>01</option>
                    <option value="02" <?php if ($hourID=='02') {echo 'selected';} ?>>02</option>
                    <option value="03" <?php if ($hourID=='03') {echo 'selected';} ?>>03</option>
                </select>                <span class="card-text">Type</span>

                <select name="news_type" size="6">
                    <option value="blog"<?php if ($news_type=='blog') {echo 'selected';} ?>>Blog</option>
                    <option value="news"<?php if ($news_type=='news') {echo 'selected';} ?>>News</option>
                    <option value="noise"<?php if ($news_type=='noise') {echo 'selected';} ?>>Noise</option>
                    <option value="pdf"<?php if ($news_type=='pdf') {echo 'selected';} ?>>PDF</option>
                    <option value="url"<?php if ($news_type=='url') {echo 'selected';} ?>>URL</option>
                    <option value="other"<?php if ($news_type=='other') {echo 'selected';} ?>>Other...</option>
                </select><br><br>
                            
              </div>
          </div>
        </div>
        <div class="col-lg-9 col-sm-6">
          <div class="card">
            <div class="card-body">
              <span class="card-text">Paragraph</span><br>
                <textarea name="news_paragraph" placeholder="Paragraph" rows="10"><?php echo $news_paragraph; ?></textarea><br>

                <span class="card-text">Source</span><br>
                <textarea name="news_source" placeholder="News Source"><?php echo $news_source; ?></textarea><br>

                <span class="card-text">Source URL</span><br>
                <textarea name="news_source_url" placeholder="News Source URL"><?php echo $news_source_url; ?></textarea><br>Test the link: <a href="<?php echo $news_source_url; ?>" target="_blank"><?php echo $news_source_url; ?></a>

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
<!--
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
                  <button type="submit" class="btn btn-danger">UPDATE NEWS RECORD</button>
                </div>
            </div>
        </div>
    </form>           

    </div>
</div>
    
</body>
</html>
