<div id="1day" class="tab-pane fade">
    <div class="box-header">
        <div class="panel panel-default">
            <div class="panel-body">
                Stock for Today<br>
<?php

$x = 1;

while ($x <= 8) {
    switch ($x) {
    case "1":
        $stock_name= "AAPL";
        break;
    case "2":
        $stock_name= "AAT";
        break;
    case "3":
        $stock_name= "AMZN";
        break;
    case "4":
        $stock_name= "BAC";
        break;
    case "5":
        $stock_name= "FB";
        break;
    case "6":
        $stock_name= "GOOGL";
        break;
    case "7":
        $stock_name= "JPM";
        break;
    case "8":
        $stock_name= "MSFT";
        break;
}
// THIS NEEDS TO CONSIDER YESTERDAY AND TODAY DATA AND BUILD A TWEENER TICKER...

echo "<table width='100%' border='1'><tr>";
echo "<th style='font-size:10px;'>Hour</th><th style='font-size:10px;'>Stock Name:</th><th style='font-size:10px;'>Stock Price</th></tr>";
                //get_stock_name, get_stock_date, get_stock_namedate,
                $result = mysqli_query($con,
                "CALL get_stock_name('".$stock_name."')")
                or
                die("Query fail: " . mysqli_error($con));
                while ($row = mysqli_fetch_array($result)){
                $stock = $row['stock'];
                $closing_price = $row['closing_price'];
                $gameday = $row['gameday'];
                $gamehour = $row['gamehour'];

switch ($gamehour) {
    case "1":
        $hour = "0900";
        break;
    case "2":
        $hour = "0930";
        break;
    case "3":
        $hour = "1000";
        break;
    case "4":
        $hour = "1030";
        break;
    case "5":
        $hour = "1100";
        break;
    case "6":
        $hour = "1130";
        break;
    case "7":
        $hour = "1200";
        break;
    case "8":
        $hour = "1230";
        break;
    case "9":
        $hour = "1300";
        break;
    case "10":
        $hour = "1330";
        break;
    case "11":
        $hour = "1400";
        break;
    case "12":
        $hour = "1430";
        break;
    case "13":
        $hour = "1500";
        break;
    case "14":
        $hour = "1530";
        break;
    case "15":
        $hour = "1600";
        break;
    case "16":
        $hour = "1630";
        break;
}


//https://adminlte.io/themes/AdminLTE/pages/charts/morris.html
// https://www.dyn-web.com/tutorials/php-js/array.php

            $con->next_result();

if ($_SESSION['week'] ==  $gameday) {
    if ($gamehour <= date('H')) {

            echo "<tr><td style='font-size:10px;'>" . $hour . "</td><td style='font-size:10px;'>" . $stock . "</td><td style='font-size:10px;'>" . $closing_price . "</td></tr>";
                                    }
                                }
                }
echo "</table>";
$x++;
}

                ?>             </div>
        </div>
    </div>
</div>
