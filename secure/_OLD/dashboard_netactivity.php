
                    <div id="network" class="tab-pane fade">
                            <div class="box-header">
                            <div class="panel panel-default">
                                    <div class="col-lg-12 col-md-12 tab" style="text-align:left;padding:0em 0;"> 
                                            <style>
                                            td, p img {vertical-align: baseline;}
                                            td, p img {vertical-align: text-bottom;}
                                            </style>  

                                          <table id="vulns_table" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="td-title" width="10%">Flow Type</th>
                                                    <th class="td-title" width="10%">First Packet Time</th>
                                                    <th class="td-title" width="10%">Source IP</th>
                                                    <th class="td-title" width="10%">Source Port</th>
                                                    <th class="td-title" width="10%">Dest IP</th>
                                                    <th class="td-title" width="10%">Dest Port</th>
                                                    <th class="td-title" width="10%">Protocol</th>
                                                    <th class="td-title" width="10%">Application</th>
                                                    <th class="td-title" width="10%">Source Bytes</th>
                                                    <th class="td-title" width="10%">Dest Bytes</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                                                  $result = mysqli_query($con, 
                                                  "CALL get_all_logs()")
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
                                                            <td class="td-left">' . $flowtype . '</td>
                                                            <td class="td-left">'. $firstpacket. '</td>
                                                            <td class="td-left">' . $sourceIP . '</td>
                                                            <td class="td-left">'. $sourcePort. '</td>
                                                            <td class="td-left">' . $destIP . '</td>
                                                            <td class="td-left">'. $destPort. '</td>
                                                            <td class="td-left">' . $protocol . '</td>
                                                            <td class="td-left">'. application. '</td>
                                                            <td class="td-left">' . $sourceBytes . '</td>
                                                            <td class="td-left">'. $DestBytes. '</td>
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
                            </div>
                        </div>
