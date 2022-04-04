<?php
//Get_KPI
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_kpi_data('" .$_SESSION['memberID']. "','".$_SESSION['week']."','".$_SESSION['day']."')")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
    $box1 = $row['box1']; 
    $box2 = $row['box2']; 
    $box3 = $row['box3']; 
    $box4 = $row['box4']; 
  }
$con->next_result();

?>

<!--
Servers: Web/File Servers/
Performance Monitors
Network Traffic
HelpDesk: Requests/Tasks/issues/Updates
-->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- New Orders Box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php echo ($box1); ?><sup style="font-size: 20px">%              <p>Performance</p>
            </div>
            <div class="icon">
              <i class="fa fa-line-chart"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>+<?php echo ($box2); ?><sup style="font-size: 20px">%
              <p>Servers</p>
            </div>
            <div class="icon">
              <i class="fa fa-server"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>+<?php echo ($box3); ?><sup style="font-size: 20px">%</sup></h3>

              <p>Network</p>
            </div>
            <div class="icon">
              <i class="fa fa-heart-o"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>-<?php echo ($box4); ?><sup style="font-size: 20px">%</sup></h3>

              <p>Help Desk</p>
            </div>
            <div class="icon">
              <i class="fa fa-list-ol"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
