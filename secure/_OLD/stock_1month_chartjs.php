<div id="month" class="tab-pane fade">
    <div class="box-header">
        <div class="panel panel-default">
            <div class="panel-body">

                Stock for the Past 30 Days



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
                            <div class="box-body text-center">              <div class="chart">
                <canvas id="lineChart" style="height:250px"></canvas>
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

<?php
echo "<script>";
echo"    $(function () {
        /* ChartJS
         * -------
         * Here we will create a few charts using ChartJS
         */
        var ChartData = {
            labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label               : 'Electronics',
                    fillColor           : 'rgba(210, 214, 222, 1)',
                    strokeColor         : 'rgba(210, 214, 222, 1)',
                    pointColor          : 'rgba(210, 214, 222, 1)',
                    pointStrokeColor    : '#c1c7d1',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data                : [ ";

            $result = mysqli_query($con,"CALL get_stocklifetime_name('AAT')") or die("Query fail: " . mysqli_error($con));
            while ($row = mysqli_fetch_array($result)){
                $stock = $row['stock'];
                $date = $row['date'];
                $closing_price = $row['closing_price'];
                $today = date('Y-m-d');
                $thirty = date('Y-m-d', strtotime($today. ' -30 days'));

                $con->next_result();
                if ($date >= $thirty) {
                    echo $closing_price.',';
                }
            }

        echo"]
                },
                {
                    label               : 'Digital Goods',
                    fillColor           : 'rgba(60,141,188,0.9)',
                    strokeColor         : 'rgba(60,141,188,0.8)',
                    pointColor          : '#3b8bba',
                    pointStrokeColor    : 'rgba(60,141,188,1)',
                    pointHighlightFill  : '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data                : [\";

                                    $result = mysqli_query($con,\"CALL get_stocklifetime_name('AAT')\") or die(\"Query fail: \" . mysqli_error($con));
                                    while ($row = mysqli_fetch_array($result)){
                                        $stock = $row['stock'];
                                        $date = $row['date'];
                                        $closing_price = $row['closing_price'];
                                        $today = date(\"Y-m-d\");
                                        $thirty = date('Y-m-d', strtotime($today. ' -30 days'));

                                        $con->next_result();
                                        if ($date >= $thirty) {
                                            echo $closing_price.',';
                                        }
                                    }





                    65, 59, 80, 81, 56, 55, 40
echo\"]                }
            ]
        }

        //-------------
        //- BAR CHART -
        //-------------
        var barChartCanvas                   = $('#barChart').get(0).getContext('2d')
        var barChart                         = new Chart(barChartCanvas)
        var barChartData                     = ChartData
        barChartData.datasets[1].fillColor   = '#00a65a'
        barChartData.datasets[1].strokeColor = '#00a65a'
        barChartData.datasets[1].pointColor  = '#00a65a'
        var barChartOptions                  = {
            //Boolean - Whether the scale should start at zero, or an order of magnitude down from the lowest value
            scaleBeginAtZero        : true,
            //Boolean - Whether grid lines are shown across the chart
            scaleShowGridLines      : true,
            //String - Colour of the grid lines
            scaleGridLineColor      : 'rgba(0,0,0,.05)',
            //Number - Width of the grid lines
            scaleGridLineWidth      : 1,
            //Boolean - Whether to show horizontal lines (except X axis)
            scaleShowHorizontalLines: true,
            //Boolean - Whether to show vertical lines (except Y axis)
            scaleShowVerticalLines  : true,
            //Boolean - If there is a stroke on each bar
            barShowStroke           : true,
            //Number - Pixel width of the bar stroke
            barStrokeWidth          : 2,
            //Number - Spacing between each of the X value sets
            barValueSpacing         : 5,
            //Number - Spacing between data sets within X values
            barDatasetSpacing       : 1,
            //String - A legend template
            legendTemplate          : '<ul class=<%=name.toLowerCase()%>-legend><% for (var i=0; i<datasets.length; i++){%><li><span style=background-color:<%=datasets[i].fillColor%>></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>',
            //Boolean - whether to make the chart responsive
            responsive              : true,
            maintainAspectRatio     : true
        }

        barChartOptions.datasetFill = false
        barChart.Bar(barChartData, barChartOptions)
    })
</script>
";
            ?>
