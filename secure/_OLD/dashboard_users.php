                    <div id="users" class="tab-pane  fade">
                        <div class="box-header">
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa  fa-users fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">32</div>
                                                <div>Monitored Users</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa fa-frown-o fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">7</div>
                                                <div>Current High Risk Users</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa  fa-crosshairs fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">1.6K</div>
                                                <div>Sensed Events</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3">exclamation-triangle
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-xs-3">
                                                <i class="fa exclamation-triangle fa-4x"></i>
                                            </div>
                                            <div class="col-xs-9 text-right">
                                                <div class="huge">7</div>
                                                <div>Offenses Generated</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- #################################################### -->
                            <!-- Scores -->
                            <div class="col-lg-4 col-md-4" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> System Score
                                    </div>
                                    <div class="panel-body latest-news-all">
                                        <div class="list-group text-left">
              <div id="donut-chart1" style="height: 150px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Scores -->
                            <div class="col-lg-4 col-md-4" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Risk Category Breakdown
                                    </div>
                                    <div class="panel-body latest-news-all">
                                        <div class="list-group text-left">
              <div id="donut-chart2" style="height: 150px;"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- Scores -->
                            <div class="col-lg-4 col-md-4" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Recent Sense Offenses
                                    </div>
                                    <div class="panel-body latest-news-all">
                                        <div class="list-group text-left">
              <div id="donut-chart3" style="height: 150px;"></div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- #################################################### -->
                            <!-- Scores -->
                            <div class="col-lg-4 col-md-4" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Most Risky Users
                                    </div>
                                    <div class="panel-body latest-news-all">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!--  https://www.highcharts.com/demo/sparkline --> 
<!--div id="result"></div-->
<table id="table-sparkline">
    <thead>
        <tr>
            <th>User </th>
            <th>Data per Quarter</th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">
        <tr>
            <th>Doe, John</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, 41, 30 ; column"/><a class="pull-right" href="useranalytics.php?id=">30 <i class="fa fa-eye fa-fw"></i></a> 
        </tr>
        <tr>
            <th>Jones, Jim</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, 41, 40 ; column"/><a class="pull-right" href="useranalytics.php?id=">40 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Smith, Joe</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, 41, 50 ; column"/><a class="pull-right" href="useranalytics.php?id=">50 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Jared, Jen</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, 41, 70 ; column"/><a class="pull-right" href="useranalytics.php?id=">70 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Sprat, Jack</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, 41, 80 ; column"/><a class="pull-right" href="useranalytics.php?id=">80 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
    </tbody>
</table>			<!--[if lt IE 9]>
		   	<script src="https://code.highcharts.com/modules/oldie.js"></script>
		   <![endif]-->
						<script>
				jQuery.noConflict();
				var example = 'sparkline', 
					theme = 'default';
				(function($){ // encapsulate jQuery
					

/**
 * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
 * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
 */
Highcharts.SparkLine = function (a, b, c) {
    var hasRenderToArg = typeof a === 'string' || a.nodeName,
        options = arguments[hasRenderToArg ? 1 : 0],
        defaultOptions = {
            chart: {
                renderTo: (options.chart && options.chart.renderTo) || this,
                backgroundColor: null,
                borderWidth: 0,
                type: 'area',
                margin: [2, 0, 2, 0],
                width: 120,
                height: 20,
                style: {
                    overflow: 'visible'
                },

                // small optimalization, saves 1-2 ms each sparkline
                skipClone: true
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            xAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                startOnTick: false,
                endOnTick: false,
                tickPositions: []
            },
            yAxis: {
                endOnTick: false,
                startOnTick: false,
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                tickPositions: [0]
            },
            legend: {
                enabled: false
            },
            tooltip: {
                backgroundColor: null,
                borderWidth: 0,
                shadow: false,
                useHTML: true,
                hideDelay: 0,
                shared: true,
                padding: 0,
                positioner: function (w, h, point) {
                    return { x: point.plotX - w / 2, y: point.plotY - h };
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    lineWidth: 1,
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    marker: {
                        radius: 1,
                        states: {
                            hover: {
                                radius: 2
                            }
                        }
                    },
                    fillOpacity: 0.25
                },
                column: {
                    negativeColor: '#910000',
                    borderColor: 'silver'
                }
            }
        };

    options = Highcharts.merge(defaultOptions, options);

    return hasRenderToArg ?
        new Highcharts.Chart(a, options, c) :
        new Highcharts.Chart(options, b);
};

var start = +new Date(),
    $tds = $('td[data-sparkline]'),
    fullLen = $tds.length,
    n = 0;

// Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
// can take some seconds, so we split the input into chunks and apply them in timeouts
// in order avoid locking up the browser process and allow interaction.
function doChunk() {
    var time = +new Date(),
        i,
        len = $tds.length,
        $td,
        stringdata,
        arr,
        data,
        chart;

    for (i = 0; i < len; i += 1) {
        $td = $($tds[i]);
        stringdata = $td.data('sparkline');
        arr = stringdata.split('; ');
        data = $.map(arr[0].split(', '), parseFloat);
        chart = {};

        if (arr[1]) {
            chart.type = arr[1];
        }
        $td.highcharts('SparkLine', {
            series: [{
                data: data,
                pointStart: 1
            }],
            tooltip: {
                headerFormat: '<span style="font-size: 10px">' + $td.parent().find('th').html() + ', Q{point.x}:</span><br/>',
                pointFormat: '<b>{point.y}</b> Incidents'
            },
            chart: chart
        });

        n += 1;

        // If the process takes too much time, run a timeout to allow interaction with the browser
        if (new Date() - time > 500) {
            $tds.splice(0, i + 1);
            setTimeout(doChunk, 0);
            break;
        }

        // Print a feedback on the performance
        if (n === fullLen) {
            $('#result').html('Generated ' + fullLen + ' sparklines in ' + (new Date() - start) + ' ms');
        }
    }
}
doChunk();
				})(jQuery);
			</script>                                            
                                            
                                                                       </div>
                            </div>
                            </div>
                            
                            <!-- Scores -->
                            <div class="col-lg-4 col-md-4" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Most Suspicious Users
                                    </div>
                                    <div class="panel-body latest-news-all">
                                        <div class="list-group text-left">


<!--  https://www.highcharts.com/demo/sparkline --> 
<!--div id="result"></div-->
<table id="table-sparkline">
    <thead>
        <tr>
            <th>User </th>
            <th>Data per Quarter</th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">
        <tr>
            <th>Doe, John</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a class="pull-right" href="useranalytics.php?id=">+360 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Jones, Jim</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a class="pull-right" href="useranalytics.php?id=">+360 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Smith, Joe</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a class="pull-right" href="useranalytics.php?id=">+360 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Jared, Jen</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a class="pull-right" href="useranalytics.php?id=">+360 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
        <tr>
            <th>Sprat, Jack</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a class="pull-right" href="useranalytics.php?id=">+360 <i class="fa fa-eye fa-fw"></i></a>
        </tr>
    </tbody>
</table>			<!--[if lt IE 9]>
		   	<script src="https://code.highcharts.com/modules/oldie.js"></script>
		   <![endif]-->
						<script>
				jQuery.noConflict();
				var example = 'sparkline', 
					theme = 'default';
				(function($){ // encapsulate jQuery
					

/**
 * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
 * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
 */
Highcharts.SparkLine = function (a, b, c) {
    var hasRenderToArg = typeof a === 'string' || a.nodeName,
        options = arguments[hasRenderToArg ? 1 : 0],
        defaultOptions = {
            chart: {
                renderTo: (options.chart && options.chart.renderTo) || this,
                backgroundColor: null,
                borderWidth: 0,
                type: 'area',
                margin: [2, 0, 2, 0],
                width: 120,
                height: 20,
                style: {
                    overflow: 'visible'
                },

                // small optimalization, saves 1-2 ms each sparkline
                skipClone: true
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            xAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                startOnTick: false,
                endOnTick: false,
                tickPositions: []
            },
            yAxis: {
                endOnTick: false,
                startOnTick: false,
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                tickPositions: [0]
            },
            legend: {
                enabled: false
            },
            tooltip: {
                backgroundColor: null,
                borderWidth: 0,
                shadow: false,
                useHTML: true,
                hideDelay: 0,
                shared: true,
                padding: 0,
                positioner: function (w, h, point) {
                    return { x: point.plotX - w / 2, y: point.plotY - h };
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    lineWidth: 1,
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    marker: {
                        radius: 1,
                        states: {
                            hover: {
                                radius: 2
                            }
                        }
                    },
                    fillOpacity: 0.25
                },
                column: {
                    negativeColor: '#910000',
                    borderColor: 'silver'
                }
            }
        };

    options = Highcharts.merge(defaultOptions, options);

    return hasRenderToArg ?
        new Highcharts.Chart(a, options, c) :
        new Highcharts.Chart(options, b);
};

var start = +new Date(),
    $tds = $('td[data-sparkline]'),
    fullLen = $tds.length,
    n = 0;

// Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
// can take some seconds, so we split the input into chunks and apply them in timeouts
// in order avoid locking up the browser process and allow interaction.
function doChunk() {
    var time = +new Date(),
        i,
        len = $tds.length,
        $td,
        stringdata,
        arr,
        data,
        chart;

    for (i = 0; i < len; i += 1) {
        $td = $($tds[i]);
        stringdata = $td.data('sparkline');
        arr = stringdata.split('; ');
        data = $.map(arr[0].split(', '), parseFloat);
        chart = {};

        if (arr[1]) {
            chart.type = arr[1];
        }
        $td.highcharts('SparkLine', {
            series: [{
                data: data,
                pointStart: 1
            }],
            tooltip: {
                headerFormat: '<span style="font-size: 10px">' + $td.parent().find('th').html() + ', Q{point.x}:</span><br/>',
                pointFormat: '<b>{point.y}</b> Incidents'
            },
            chart: chart
        });

        n += 1;

        // If the process takes too much time, run a timeout to allow interaction with the browser
        if (new Date() - time > 500) {
            $tds.splice(0, i + 1);
            setTimeout(doChunk, 0);
            break;
        }

        // Print a feedback on the performance
        if (n === fullLen) {
            $('#result').html('Generated ' + fullLen + ' sparklines in ' + (new Date() - start) + ' ms');
        }
    }
}
doChunk();
				})(jQuery);
			</script>                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            
                                            <a href="news.php" class="btn btn-default btn-block">View All News</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- Scores -->
                            <div class="col-lg-4 col-md-4" style="text-align:center;padding:0em 0;">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-bell fa-fw"></i> Watchlist
                                    </div>
                                    <div class="panel-body latest-news-all">
                                        <div class="list-group text-left">

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<!--  https://www.highcharts.com/demo/sparkline --> 
<!--div id="result"></div-->
<table id="table-sparkline">
    <thead>
        <tr>
            <th>User </th>
            <th>Data per Quarter</th>
        </tr>
    </thead>
    <tbody id="tbody-sparkline">
        <tr>
            <th>Doe, John</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a href="useranalytics.php?id=">4.3k <i class="fa fa-arrow-circle-up fa-fw"></i></a>
        </tr>
        <tr>
            <th>Jones, Jim</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a href="useranalytics.php?id=">4.3k <i class="fa fa-arrow-circle-up fa-fw"></i></a>
        </tr>
        <tr>
            <th>Smith, Joe</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a href="useranalytics.php?id=">4.3k <i class="fa fa-arrow-circle-down fa-fw"></i></a>
        </tr>
        <tr>
            <th>Jared, Jen</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a href="useranalytics.php?id=">4.3k <i class="fa fa-arrow-circle-down fa-fw"></i></a>
        </tr>
        <tr>
            <th>Sprat, Jack</th>
            <td data-sparkline="71, 78, 39, 66, 68, 52, 80, 96, 3, 26, -41, -30 ; column"/><a href="useranalytics.php?id=">4.3k <i class="fa fa-arrow-circle-up fa-fw"></i></a>
        </tr>
    </tbody>
</table>			<!--[if lt IE 9]>
		   	<script src="https://code.highcharts.com/modules/oldie.js"></script>
		   <![endif]-->
						<script>
				jQuery.noConflict();
				var example = 'sparkline', 
					theme = 'default';
				(function($){ // encapsulate jQuery
					

/**
 * Create a constructor for sparklines that takes some sensible defaults and merges in the individual
 * chart options. This function is also available from the jQuery plugin as $(element).highcharts('SparkLine').
 */
Highcharts.SparkLine = function (a, b, c) {
    var hasRenderToArg = typeof a === 'string' || a.nodeName,
        options = arguments[hasRenderToArg ? 1 : 0],
        defaultOptions = {
            chart: {
                renderTo: (options.chart && options.chart.renderTo) || this,
                backgroundColor: null,
                borderWidth: 0,
                type: 'area',
                margin: [2, 0, 2, 0],
                width: 120,
                height: 20,
                style: {
                    overflow: 'visible'
                },

                // small optimalization, saves 1-2 ms each sparkline
                skipClone: true
            },
            title: {
                text: ''
            },
            credits: {
                enabled: false
            },
            xAxis: {
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                startOnTick: false,
                endOnTick: false,
                tickPositions: []
            },
            yAxis: {
                endOnTick: false,
                startOnTick: false,
                labels: {
                    enabled: false
                },
                title: {
                    text: null
                },
                tickPositions: [0]
            },
            legend: {
                enabled: false
            },
            tooltip: {
                backgroundColor: null,
                borderWidth: 0,
                shadow: false,
                useHTML: true,
                hideDelay: 0,
                shared: true,
                padding: 0,
                positioner: function (w, h, point) {
                    return { x: point.plotX - w / 2, y: point.plotY - h };
                }
            },
            plotOptions: {
                series: {
                    animation: false,
                    lineWidth: 1,
                    shadow: false,
                    states: {
                        hover: {
                            lineWidth: 1
                        }
                    },
                    marker: {
                        radius: 1,
                        states: {
                            hover: {
                                radius: 2
                            }
                        }
                    },
                    fillOpacity: 0.25
                },
                column: {
                    negativeColor: '#910000',
                    borderColor: 'silver'
                }
            }
        };

    options = Highcharts.merge(defaultOptions, options);

    return hasRenderToArg ?
        new Highcharts.Chart(a, options, c) :
        new Highcharts.Chart(options, b);
};

var start = +new Date(),
    $tds = $('td[data-sparkline]'),
    fullLen = $tds.length,
    n = 0;

// Creating 153 sparkline charts is quite fast in modern browsers, but IE8 and mobile
// can take some seconds, so we split the input into chunks and apply them in timeouts
// in order avoid locking up the browser process and allow interaction.
function doChunk() {
    var time = +new Date(),
        i,
        len = $tds.length,
        $td,
        stringdata,
        arr,
        data,
        chart;

    for (i = 0; i < len; i += 1) {
        $td = $($tds[i]);
        stringdata = $td.data('sparkline');
        arr = stringdata.split('; ');
        data = $.map(arr[0].split(', '), parseFloat);
        chart = {};

        if (arr[1]) {
            chart.type = arr[1];
        }
        $td.highcharts('SparkLine', {
            series: [{
                data: data,
                pointStart: 1
            }],
            tooltip: {
                headerFormat: '<span style="font-size: 10px">' + $td.parent().find('th').html() + ', Q{point.x}:</span><br/>',
                pointFormat: '<b>{point.y}</b> Incidents'
            },
            chart: chart
        });

        n += 1;

        // If the process takes too much time, run a timeout to allow interaction with the browser
        if (new Date() - time > 500) {
            $tds.splice(0, i + 1);
            setTimeout(doChunk, 0);
            break;
        }

        // Print a feedback on the performance
        if (n === fullLen) {
            $('#result').html('Generated ' + fullLen + ' sparklines in ' + (new Date() - start) + ' ms');
        }
    }
}
doChunk();
				})(jQuery);
			</script>                                            
                                            
                                                                       </div>
                                            
                                            
                                            
                                            
                                            <a href="news.php" class="btn btn-default btn-block">View All News</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- #################################################### -->                           
                    </div>
