<?php
   require_once('../../../includes/config.php');
   include('logged_in.php');
   include('session_vars.php');
   ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en" class="main_style">
   <head>
      <style>
      .dashboard_content {
      width: 80% !important;
      height: 100% !important;
      background-color: white !important;
      margin-left:15%;
      margin-top:5%;
      background-color: white 
      }
      .main_style{
      background-color: white !important; 
        height: 100% !important;
      }
      </style
      <?php include('head.php'); ?>
      </head>
   <body  class="main_style">
      <?php include('tabcontent.php'); ?>
      <?php include('get_member_info.php'); ?>
      <?php include('header.php'); ?>
      <?php include('menu.php'); ?>
      <div class="main_style">
         <div class="row  " style="background-color: white; border: none; border-width : 0; border : 0" >
            <div class="col-lg-12 dashboard_content  " style="background-color: white; border: none; border-width : 0; border : 0">
               <!-- /############################################################################################################################ -->
               <div class="box-header">
               </div>
               <div class="row  ">
                  <div class="col-lg-12 col-md-12 col-sm-12 xs-12 ">
                     <div class="panel-heading ">
                        <div class="row ">
                           <div class="col-lg-3 col-md-3 col-sm-3 xs-3 ">
                              <div class="dashboard-huge-sub ">
                                 <?php echo $_SESSION['missioncount']; ?> <a href="missions.php">Missions</a>
                              </div>
                           </div>
                           <div class="col-xs-9 text-left">
                              <table width="100%">
                                 <tr width="100%">
                                    <td  align="right" style="background-color:white;">&nbsp;</td>
                                    <td  width="20%" align="center" style="background-color:red;">&nbsp;20%&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:yellow;">&nbsp;30%&nbsp;</td>
                                    <td  width="50%" align="center" style="background-color:green;">&nbsp;50%&nbsp;</td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                     <div class="panel-heading">
                        <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                              <div class="dashboard-huge-sub">
                                 <?php echo $_SESSION['currentprofilecount']; ?> <a href="currentprofiles.php">Current Profiles</a>
                              </div>
                           </div>
                           <div class="col-xs-9 text-left">
                              <table width="100%">
                                 <tr width="100%">
                                    <td  align="right" style="background-color:white;">&nbsp;</td>
                                    <td  width="40%" align="center" style="background-color:red;">&nbsp;40%&nbsp;</td>
                                    <td  width="50%" align="center" style="background-color:yellow;">&nbsp;50%&nbsp;</td>
                                    <td  width="10%" align="center" style="background-color:green;">&nbsp;10%&nbsp;</td>
                                 </tr>
                              </table>
                              `                                                       
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                     <div class="panel-heading">
                        <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                              <div class="dashboard-huge-sub">
                                 <?php echo $_SESSION['targetprofilecount']; ?> <a href="targetprofiles.php">Target Profiles</a>
                              </div>
                           </div>
                           <div class="col-xs-9 text-left">
                              <table width="100%">
                                 <tr width="100%">
                                    <td  align="right" style="background-color:white;">&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:red;">&nbsp;30%&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:yellow;">&nbsp;30%&nbsp;</td>
                                    <td  width="40%" align="center" style="background-color:green;">&nbsp;40%&nbsp;</td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                     <div class="panel-heading">
                        <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                              <div class="dashboard-huge-sub">
                                 5 <a href="impacts.php">Impacts</a>
                              </div>
                           </div>
                           <div class="col-xs-9 text-left">
                              <table width="100%">
                                 <tr width="100%">
                                    <td  align="right" style="background-color:white;">&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:red;">&nbsp;30%&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:yellow;">&nbsp;30%&nbsp;</td>
                                    <td  width="40%" align="center" style="background-color:green;">&nbsp;40%&nbsp;</td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 xs-12">
                     <div class="panel-heading">
                        <div class="row">
                           <div class="col-lg-3 col-md-3 col-sm-3 xs-3">
                              <div class="dashboard-huge-sub">
                                 8 <a href="roadmaps.php.php">Roadmaps</a>
                              </div>
                           </div>
                           <div class="col-xs-9 text-left">
                              <table width="100%">
                                 <tr width="100%">
                                    <td  align="right" style="background-color:white;">&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:red;">&nbsp;30%&nbsp;</td>
                                    <td  width="30%" align="center" style="background-color:yellow;">&nbsp;30%&nbsp;</td>
                                    <td  width="40%" align="center" style="background-color:green;">&nbsp;40%&nbsp;</td>
                                 </tr>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div>
   
                     <div class="col-lg-12"style="width:50%;border:0px;">
                        <p class="nist-title">
                           Our Missions:
                           <select size="<?php echo (count($missions[1])-1); ?> " style="width:100%;border:0px;" disabled>
                              <?php
                                 foreach ($missions as $v) {
                                     ?>
                              <option value="<?php echo $v['mission_no']; ?>">
                                 <?php echo $v['mission_no'].": ".$v['mission']; ?>
                              </option>
                              <?php
                                 }
                                 ?>
                           </select>
                        </p>
                     </div>
                  
                  <div class="col-lg-6"  style="width:50%;border:0px;">
                     <p class="nist-title">
                        Our Team:</br>
                        <select size="8" style="width:100%;border:0px;" disabled>
                           <option value="<?php echo $memberID; ?>">Member 1 </option>
                           <option value="<?php echo $memberID; ?>">Member 2 </option>
                           <option value="<?php echo $memberID; ?>">Member 3 </option>
                           <option value="<?php echo $memberID; ?>">Member 4 </option>
                           <option value="<?php echo $memberID; ?>">Member 5 </option>
                           <option value="<?php echo $memberID; ?>">Member 6 </option>
                        </select>
                     </p>
               </div>
            </div>
         </div>
      </div>
      <!--
         https://wiki.shibboleth.net/confluence/display/SHIB2/SLOWebappAdaptation
         
         Where am I asking your:
                             - Business Requirements,
                             - Risk Tolerance,
                             - Organization Resources
         
                             Is there a Profile Template for me?
                             - Business Requirements - High,  Med, Low
                             - Risk Tolerance - High,  Med, Low
                             - Organization Resources - High,  Med, Low
         
         Can I define these...for organizations
         What is the Primary, Secondary and Tertiary lists of the SubCategories for these Templates
         
         
         Also should we consider
         - Process Level,
         - Policy Level,
         - Documentation Level, and
         - Automation Level as tools to define a Maturity
         
         or any of these....
         
         - Exposure,
         - Resources (Time Money Enrollment)
         - People, Processes Technologies, Ecosystem
         
         
         -->
      </div>
      </div>
      <!-- main-footer -->
      <!-- ./wrapper -->
      <script type="text/javascript">
         $(document).ready(function () {
            $('head').append('<link href="/chrome.css" rel="stylesheet" />');
         });
      </script>    
      <!-- jQuery 3 -->
      <script src="../bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Bootstrap 3.3.7 -->
      <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <!-- DataTables -->
      <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
      <!-- AdminLTE App -->
      <script src="../dist/js/adminlte.min.js"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="../dist/js/pages/dashboard.js"></script>
   </body>
</html>
