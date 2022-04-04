<?php
//Get_Member_info
//run the store proc
  $result = mysqli_query($con, 
  "CALL get_member_info('" .$_SESSION['memberID']. "')")
      or 
      die("Query fail: " . mysqli_error());
    //loop the result set
  while ($row = mysqli_fetch_array($result)){   
    $member_fname = $row['fname']; 
    $member_lname = $row['lname']; 
    $member_img = $row['img']; 
    $member_position = $row['position']; 
    $member_phone = $row['phone']; 
    $member_mw = $row['mw']; 
  }
$_SESSION['member_name'] = $member_fname . " " . $member_lname;
$_SESSION['member_img'] = $member_img;
$_SESSION['member_position'] = $member_position;
$_SESSION['member_phone'] = $member_phone;
$_SESSION['member_mw'] = $member_mw;

$con->next_result();

?>                                                    

  <header class="main-header">
    <!-- Logo -->
    <?php include('top_logo.php'); ?>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
        
      <div class="navbar-custom-menu">
          <!-- Messages: style can be found in dropdown.less-->
        <ul class="nav navbar-nav">
            <a href="index.php" class="logo">
              <span class="logo-mini"><b>AAT</b></span>
              <span class="logo-lg"><b>Arr Aye Tea</b></span>
            </a>
            <?php include('game_menu.php'); ?>
            <?php include('clocks_menu.php'); ?>            
            <?php include('top_menu.php'); ?>            
              <li>
                <a href="../login/logout.php"><i class="fa fa-sign-out"></i></a>
              </li>
        </ul>
      </div>
    </nav>
  </header>
    
    
<aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/<?php echo $_SESSION['member_mw']; ?>/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['member_name']; ?></p>
            <a href="#"><i fa-circle-o></i> online</a>
        </div>
      </div>
      <ul class="sidebar-menu" data-widget="tree">
        <?php include('left_menu.php'); ?>
        </ul>

      </section>
</aside>