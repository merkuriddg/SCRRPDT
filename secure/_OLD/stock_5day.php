<div id="5day" class="tab-pane fade">
    <div class="box-header">
        <div class="panel panel-default">
            <div class="panel-body">
                Stock for the Past 5 Days
                <?php

                $count = '0';

                echo "<table width='100%' border='1'><tr>";
                echo "<th style='font-size:10px;'>Date</th><th style='font-size:10px;'>Stock Name:</th><th style='font-size:10px;'>Stock Price</th></tr>";
                //get_stock_name, get_stock_date, get_stock_namedate,
                $result = mysqli_query($con,
                    "CALL get_stock_name('AAT')")
                or
                die("Query fail: " . mysqli_error($con));
                while ($row = mysqli_fetch_array($result)){
                    $stock = $row['stock'];
                    $date = $row['date'];
                    $closing_price = $row['closing_price'];
                    $gameday = $row['gameday'];
                    $gamehour = $row['gamehour'];
                    $today = date("Y-m-d");
                    $full_date = date("Y-m-d",strtotime($today. $count-- .' day'));



                    $con->next_result();
                    if ($count >= '-5') {
                        echo "<tr><td style='font-size:10px;'>". $full_date ."</td><td style='font-size:10px;'>" . $stock . "</td><td style='font-size:10px;'>" . $closing_price . "</td></tr>";
                    }
                }
                echo "</table>";

                ?>
            </div>
        </div>
    </div>
</div>
