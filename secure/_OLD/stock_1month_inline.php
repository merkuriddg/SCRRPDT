<div id="month" class="tab-pane fade">
    <div class="box-header">
        <div class="panel panel-default">
            <div class="panel-body">



                Stock for the Past 30 Days


                <div class="callout callout-info">
                    <h4>The following was created using data tags</h4>

                    <p>The following three inline (sparkline) chart have been initialized to read and interpret data tags</p>
                </div>
                <!-- /.callout -->

                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-solid">
                            <div class="box-header">
                                <h3 class="box-title text-warning">AAT</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">
                                    <?php

                                    //stock ticker goes from 9a to 4p ...
                                    //I took the annual data and converted 16 days of data into 16 half hours....
                                    //so one year of data actually gives us 15 days of data

                                    //get_stock_name, get_stock_date, get_stock_namedate,
                                    $result = mysqli_query($con,
                                        "CALL get_stocklifetime_name('AAT')")
                                    or
                                    die("Query fail: " . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)){
                                        $stock = $row['stock'];
                                        $date = $row['date'];
                                        $closing_price = $row['closing_price'];
                                        $gameday = $row['gameday'];
                                        $gamehour = $row['gamehour'];
                                        $today = date("Y-m-d");
                                        $thirty = date('Y-m-d', strtotime($today. ' -30 days'));

                                        $con->next_result();
                                        if ($date >= $thirty) {
                                            echo $closing_price.',';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-solid">
                            <div class="box-header">
                                <h3 class="box-title text-warning">AMZN</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">
                                    <?php

                                    //stock ticker goes from 9a to 4p ...
                                    //I took the annual data and converted 16 days of data into 16 half hours....
                                    //so one year of data actually gives us 15 days of data

                                    //get_stock_name, get_stock_date, get_stock_namedate,
                                    $result = mysqli_query($con,
                                        "CALL get_stocklifetime_name('AMZN')")
                                    or
                                    die("Query fail: " . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)){
                                        $stock = $row['stock'];
                                        $date = $row['date'];
                                        $closing_price = $row['closing_price'];
                                        $gameday = $row['gameday'];
                                        $gamehour = $row['gamehour'];
                                        $today = date("Y-m-d");
                                        $thirty = date('Y-m-d', strtotime($today. ' -30 days'));

                                        $con->next_result();
                                        if ($date >= $thirty) {
                                            echo $closing_price.',';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->



                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-solid">
                            <div class="box-header">
                                <h3 class="box-title text-warning">FB</h3>

                                <div class="box-tools pull-right">
                                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-refresh"></i></button>
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body text-center">
                                <div class="sparkline" data-type="bar" data-width="97%" data-height="100px" data-bar-Width="14" data-bar-Spacing="7" data-bar-Color="#f39c12">
                                    <?php

                                    //stock ticker goes from 9a to 4p ...
                                    //I took the annual data and converted 16 days of data into 16 half hours....
                                    //so one year of data actually gives us 15 days of data

                                    //get_stock_name, get_stock_date, get_stock_namedate,
                                    $result = mysqli_query($con,
                                        "CALL get_stocklifetime_name('FB')")
                                    or
                                    die("Query fail: " . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)){
                                        $stock = $row['stock'];
                                        $date = $row['date'];
                                        $closing_price = $row['closing_price'];
                                        $gameday = $row['gameday'];
                                        $gamehour = $row['gamehour'];
                                        $today = date("Y-m-d");
                                        $thirty = date('Y-m-d', strtotime($today. ' -30 days'));

                                        $con->next_result();
                                        if ($date >= $thirty) {
                                            echo $closing_price.',';
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->


                    </div>

            </div>

        </div>
    </div>
</div>


