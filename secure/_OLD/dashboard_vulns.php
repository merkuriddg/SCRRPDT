                     <div id="vulns" class="tab-pane fade">
                            <div class="box-header">
                            <div class="panel panel-default">
                                    <div class="col-lg-3 col-md-3 tab" style="text-align:left;padding:0em 0;"> 
                                        <div class="list-group text-left"> 
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'ListVuln')" id="defaultOpen" >
                                                <i class="fa fa-exclamation fa-fw"></i> List Vulnerabilities
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'AssgVuln')">                               <i class="fa fa-exclamation fa-fw"></i> Assigned Vulnerabilities
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'MgmtVuln')">
                                                <i class="fa fa-exclamation fa-fw"></i> Manage Vulnerabilities
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'ScanResults')">
                                                <i class="fa fa-exclamation fa-fw"></i> Scan Results
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'VulnEx')">
                                                <i class="fa fa-exclamation fa-fw"></i> Vulnerability Exception
                                            </a>
                                            <a href="#" class="list-group-item tablinks" onclick="openEvent(event, 'VulnAssg')">
                                                <i class="fa fa-exclamation fa-fw"></i> Vulnerability Assignment
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9" style="text-align:center;padding:0em 0;"> 

<!-- Vulns/ListVuln############################################################################################################################ -->
                                        <div id="ListVuln" class="list-group text-left tabcontent ">
                                            <div class="list-group-item">
                                            <style>
                                            td, p img {vertical-align: baseline;}
                                            td, p img {vertical-align: text-bottom;}
                                            </style>  

                                          <table id="vulns_table" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="td-title" width="20%">Name</th>
                                                    <th class="td-title" width="10%">Status</th>
                                                    <th class="td-title" width="70%">Description</th>
                                                    <!--th class="td-title" width="40%">References</th-->
                                                    <!--th class="td-title" width="20%">Phase</th-->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                //Get_Member_info
                                                //run the store proc
                                                  $result = mysqli_query($con, 
                                                  "CALL get_all_vulns()")
                                                      or 
                                                      die("Query fail: " . mysqli_error($con));
                                                    //loop the result set
                                                  while ($row = mysqli_fetch_array($result)){   
                                                //    $amount  = $row['amount'] == 0 ? '' : number_format($row['amount']);
                                                    $vuln_id = $row['id']; 
                                                    $name = $row['name']; 
                                                    $status = $row['status']; 
                                                    $desc = htmlspecialchars($row['description']); 
                                                    $refs = $row['references']; 
                                                    $phase = $row['phase']; 

                                                      $no 	= 1;
                                                    $total 	= 0;

                                                    echo '<tr>
                                                            <td class="td-left"><a href="https://www.cvedetails.com/cve/' . $name . '/" target="_blank">' . $name .'</a></td>
                                                            <td class="td-left">' . $status . '</td>
                                                            <td class="td-left">'. $desc. '</td>
                                                            <!--td class="td-left">'. $refs. '</td-->
                                                            <!--td class="td-left">'. $phase. '</td-->
                                                            </tr>';
                                                    $total += $row['amount'];
                                                    $no++;
                                                }

                                                    $con->next_result();
                                                    ?>                          

                                                </tbody>
                                              </table>
                                            </div>
                                        </div>
<!-- Vulns//AssgVuln############################################################################################################################ -->
                                        <div id="AssgVuln" class="list-group text-left tabcontent ">
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
<!-- Vulns/MgmtVuln############################################################################################################################ -->
                                        <div id="MgmtVuln" class="list-group text-left tabcontent">
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
<!-- Vulns/ScanResults############################################################################################################################ -->
                                        <div id="ScanResults" class="list-group text-left tabcontent">
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
<!-- Vulns/VulnEx############################################################################################################################ -->
                                        <div id="VulnEx" class="list-group text-left tabcontent">
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
<!-- Vulns/VulnAssg############################################################################################################################ -->
                                        <div id="VulnAssg" class="list-group text-left tabcontent">
                                            <div class="list-group-item">
                                                Vulnerability Assignment
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
<!--By Vuln Table: IP Adddress, Asset Name, Vulnearbility, PCI Severability, Risk, CVE ID, Risk Score, Date Found, Last Date Seen, Assigned To, Status, Due Date-->
