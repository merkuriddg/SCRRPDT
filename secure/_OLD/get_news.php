<?php

//Get_News
//original $sql=  "CALL get_news('".$_SESSION['weekid']."', '".$_SESSION['dayid']."', '" .$_SESSION['hourid']."')"
//temp $sql
$sql=  "CALL get_news('".$_SESSION['weekid']."', '".$_SESSION['dayid']."', *')"
$result = mysqli_query($con,$sql)
      or 
      die("Query fail: " . mysqli_error($con));
echo $sql;
while ($row = mysqli_fetch_array($result))
{   
    $news_id = $row['newsID']; 
    $news_type = $row['type']; 
    $news_title = $row['news_title']; 
    $news_source = $row['news_source']; 
    $news_source_url = $row['news_source_url']; 
    $news_paragraph = $row['news_paragraph1']; 
    $news_img_url = $row['news_img_url']; 

    

    //REDO BELOW TO MATCH NEW FORMAT ABOVE:

    $con->next_result();
    echo "<table width='100%' border='1'><tr>";
    echo "</tr><tr>";
        if ($news_type="pdf") 
        {
        echo "<td>Img: ".$news_img.url."</td>";
        echo "<td>Title: ".$news_title."</td>";
        echo "<td>Story: ".$news_paragraph."</td>";
        echo "</tr><tr>";
        }
    echo "</tr></table>";
  }

    
?> 