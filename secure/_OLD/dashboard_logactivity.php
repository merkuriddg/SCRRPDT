                    <div id="logs" class="tab-pane fade">
                            <div class="box-header">
                            <div class="panel panel-default">
                                    <div class="col-lg-3 col-md-3 tab" style="text-align:left;padding:0em 0;"> 
                                        <div class="list-group text-left"> 
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'Search')" id="defaultOpen">                         <i class="fa fa-exclamation fa-fw"></i> Create A Log Search
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'Count10')">
                                                <i class="fa fa-exclamation fa-fw"></i> Top 10 Events (Count)
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'Time10')">
                                                <i class="fa fa-exclamation fa-fw"></i> Top 10 Events (Time)
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'RealTime')">
                                                <i class="fa fa-exclamation fa-fw"></i> Real Time Events
                                            </a>
                                        </div>
                                    </div>
<!-- logs/############################################################################################################################ -->
<!-- logs/############################################################################################################################ -->
                                      
                                    <div class="col-lg-9 col-md-9" style="text-align:center;padding:0em 0;"> 
<!-- logs/Search############################################################################################################################ -->
                                        <div id="Search" class="list-group text-left tabcontent ">
                                            <div class="list-group-item">
                                                <input type="text" placeholder="Name Search...">
                                                Date From: 
                                                <input type="text" size="2" maxlength="2">
                                                /
                                                <input type="text" size="2" maxlength="2">
                                                /
                                                <input type="text" size="4" maxlength="4">
                                                
                                                Date To:
                                                <input type="text" size="2" maxlength="2">
                                                /
                                                <input type="text" size="2" maxlength="2">
                                                /
                                                <input type="text" size="4" maxlength="4">
                                                <input type="reset" value="reset">
                                                <input type="submit" value="submit">
                                                
                                            </div>
                                            <div class="list-group-item">
                                                 Saved Searches <select size="4"><option>Select a Group</option><option>Search ABC</option><option>Searcgh DEF</option><option>Search GHI</option><option>Search JKL</option><option>Seach MNO</option></select>
                                            </div>
                                            <div class="list-group-item">
                                                 <i class="fa fa-sort-amount-asc fa-fw"></i> Manage Groups
                                            </div>
                                        </div>
<!-- logs/Count10############################################################################################################################ -->
                                        <div id="Count10" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 Top 10 Events (Count)
                                            </div>
                                            <div class="list-group-item">
                                                <table>
                                                <tr>
                                                    <td class="td-title">Flag</td>
                                                    <td class="td-title">ID</td>
                                                    <td class="td-title">Domain</td>
                                                    <td class="td-title">Description</td>
                                                    <td class="td-title">Type</td>
                                                    <td class="td-title">Magnitude</td>
                                                    <td class="td-title">Source</td>
                                                    <td class="td-title">Dest IP</td>
                                                    <td class="td-title">Networks</td>
                                                    <td class="td-title">Start</td>
                                                    <td class="td-title">Duration</td>
                                                    <td class="td-title">Assigned</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                </table>
                                            </div>
                                        </div>
<!-- logs/Time10############################################################################################################################ -->
                                        <div id="Time10" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 Top 10 Events (Time)
                                            </div>
                                            <div class="list-group-item">
                                                <table>
                                                <tr>
                                                    <td class="td-title">Flag</td>
                                                    <td class="td-title">ID</td>
                                                    <td class="td-title">Domain</td>
                                                    <td class="td-title">Description</td>
                                                    <td class="td-title">Type</td>
                                                    <td class="td-title">Magnitude</td>
                                                    <td class="td-title">Source</td>
                                                    <td class="td-title">Dest IP</td>
                                                    <td class="td-title">Networks</td>
                                                    <td class="td-title">Start</td>
                                                    <td class="td-title">Duration</td>
                                                    <td class="td-title">Assigned</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                <tr>
                                                    <td class="td-left">n</td>
                                                    <td class="td-left">001</td>
                                                    <td class="td-left">Default</td>
                                                    <td class="td-left">Cisco Router</td>
                                                    <td class="td-left">SourceIP</td>
                                                    <td class="td-left">Yellow-Red</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">2d 16h 47min 34s</td>
                                                    <td class="td-left">admin</td>
                                                </tr>
                                                </table>
                                            </div>
                                        </div>
<!-- logs/RealTime############################################################################################################################ -->
                                        <div id="RealTime" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                Real Time
                                            </div>
                                            <div class="list-group-item">
                                                <table>
                                                <tr>
                                                    <td class="td-title">Event Name</td>
                                                    <td class="td-title">Log Source</td>
                                                    <td class="td-title">Time</td>
                                                    <td class="td-title">Low Level Category</td>
                                                    <td class="td-title">Source IP</td>
                                                    <td class="td-title">Dest IP</td>
                                                    <td class="td-title">Dest Port</td>
                                                    <td class="td-title">Username</td>
                                                    <td class="td-title">Magnitude</td>
                                                    <td class="td-title">Event Count</td>
                                                </tr>
                                                    <tr>
                                                    <td class="td-left">HTTP_POST_SCRIPT</td>
                                                    <td class="td-left">SP31</td>
                                                    <td class="td-left">April 1, 2018 12:30 pm</td>
                                                    <td class="td-left">Web Exploit</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">123.123.123.123</td>
                                                    <td class="td-left">Multiple (5, 25, 80)</td>
                                                    <td class="td-left">N/A</td>
                                                    <td class="td-left">10</td>
                                                    <td class="td-left">1,455</td>
                                                </tr>
                                                </table>
                                            </div>
                                        </div>
<!-- ############################################################################################################################ -->
                                    </div>
                                </div>
<!-- FROM QRadar: Some type of Search, By Time, By User, By Email, By Event, System, By Login, etc.-->
<!-- For Data Sources Checkout: https://developer.ibm.com/answers/questions/443088/populating-default-dashboards-in-qradar/ -->

                            </div>
                    </div>
