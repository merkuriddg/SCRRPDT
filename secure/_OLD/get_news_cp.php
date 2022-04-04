<?php

//Get_News
//original $sql=  "CALL get_news('".$_SESSION['weekid']."', '".$_SESSION['dayid']."', '" .$_SESSION['hourid']."')"
//temp $sql
$sql=  "CALL get_news('".$_SESSION['weekid']."', '".$_SESSION['dayid']."', *')"
$result = mysqli_query($con,$sql)
      or 
      die("Query fail: " . mysqli_error($con));
while ($row = mysqli_fetch_array($result)){   
    $news_id = $row['newsID']; 
    $news_title = $row['news_title']; 
    $news_source = $row['news_source']; 
    $news_source_url = $row['news_source_url']; 
    $news_paragraph = $row['news_paragraph1']; 
    $news_img_url = $row['news_img_url']; 

    
    
//REDO BELOW TO MATCH NEW FORMAT ABOVE:
    
    
echo '<form action="updatenews.php" method="post">';
echo '<input type="hidden"  name="inputid" id="inputid"  value="'.$news_id.'">';
echo "<table width='100%' border='1'><tr>";
echo "<th colspan='3'><a href='newseditor.php?id=".$news_id."'>NewsID:". $news_id."</a></th>";
echo "</tr><tr>";
echo "<td>Img1: ";
echo '<input type="text" name="inputimg1" id="inputimg1" placeholder="Img1" value="'.$newsimg1.'"></td>';
echo "<td>Title1: ";
echo '<input type="text" name="inputtitle1" id="inputtitle1" placeholder="Title1" value="'.$newstitle1.'"></td>';
echo "<td>Story1: ";
echo '<input type="text"  name="inputstory1" id="inputstory1" placeholder="Story1" value="'.$news_paragraph1.'"></td>';
echo "</tr><tr>";
echo "<td>Img2: ";
echo '<input type="text"  name="inputimg2" id="inputimg2" placeholder="Img2" value="'.$newsimg2.'"></td>';
echo "<td>Title2: ";
echo '<input type="text"  name="inputtitle2" id="inputttitle2" placeholder="Title2" value="'.$newstitle2.'"></td>';
echo "<td>Story2: ";
echo '<input type="text"  name="inputstory2" id="inputstory2" placeholder="Story2" value="'.$news_paragraph2.'"></td>';
echo "</tr><tr>";
echo "<td>Img3: ";
echo '<input type="text"  name="inputimg3" id="inputimg3" placeholder="Img3" value="'.$newsimg3.'"></td>';
echo "<td>Title3: ";
echo '<input type="text"  name="inputtitle3" id="inputttitle3" placeholder="Title3" value="'.$newstitle3.'"></td>';
echo "<td>Story3: ";
echo '<input type="text"  name="inputstory3" id="inputstory3" placeholder="Story3" value="'.$news_paragraph3.'"></td>';
echo "</tr><tr>";
echo "</tr></table>";
echo '<input class="pull-right" type="submit" value="UPDATE"></form>';



  }

$con->next_result();
    
?> 