                    <div id="offenses" class="tab-pane fade">
                            <div class="box-header">
                            <div class="panel panel-default">
                                    <div class="col-lg-3 col-md-3 tab" style="text-align:left;padding:0em 0;"> 
                                        <div class="list-group text-left">
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'All')" id="defaultOpen">                                         <i class="fa fa-exclamation fa-fw"></i> All Offenses
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'Category')">
                                                <i class="fa fa-exclamation fa-fw"></i> By Category
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'SourceIP')">
                                                <i class="fa fa-exclamation fa-fw"></i> By Source IP
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'DestIP')">
                                                <i class="fa fa-exclamation fa-fw"></i> By Destination IP
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'Network')">
                                                <i class="fa fa-exclamation fa-fw"></i> By Network
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'Rules')">
                                                <i class="fa fa-exclamation fa-fw"></i> Rules
                                            </a>
                                        </div>
                                    </div>
                            <style>
                            .td-title {
                            font-size:10px;
                            text-align: left;
                            font-weight: bold;
                            text-decoration: underline;
                            color:black;
                            }
                            .td-left {
                            font-size:10px;
                            text-align: left;
                            color:black;
                            }
                            .td-center {
                            font-size:12px;
                            text-align: center;
                            color:blue;
                            }
                            .tabcontent {
                            display: none;
                            display:

                            }    
                            </style>                                        
                                    <div class="col-lg-9 col-md-9" style="text-align:center;padding:0em 0;"> 

                                        <div id="All" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 All Offenses
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

                                        <div id="Category" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 All Categories
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
                                        <div id="SourceIP" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 All Source IPs
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
                                        <div id="DestIP" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 All Destination IPs
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
                                        <div id="Network" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 All Networks
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
                                        <div id="Rules" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                 All Rules
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
                                    </div>
                                </div>
                            <script type="text/javascript">
                            function openEvent(evt, eventName) {
                            // Declare all variables
                            var i, tabcontent, tablinks;

                            // Get all elements with class="tabcontent" and hide them
                            tabcontent = document.getElementsByClassName("tabcontent");
                            for (i = 0; i < tabcontent.length; i++) {
                            tabcontent[i].style.display = "none";
                            }

                            // Get all elements with class="tablinks" and remove the class "active"
                            tablinks = document.getElementsByClassName("tablinks");
                            for (i = 0; i < tablinks.length; i++) {
                            tablinks[i].className = tablinks[i].className.replace(" active", "");
                            }

                            // Show the current tab, and add an "active" class to the link that opened the tab
                            document.getElementById(eventName).style.display = "block";
                            evt.currentTarget.className += " active";
                            }                                                
                            </script>                                                                                                


                            </div>
                    </div>
