<div class="sidenav">
<?php include('../secure/get_member_info.php'); ?>
    <section class="sidebar">
      <div class="logo">
        <img src="aat_mark_blue.png" height="30px" >
    </div>
      <div class="user-panel">
        <div class="image">
          <img src="../dist/img/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>">
        </div>
        <div class="info">
          <p><?php echo $_SESSION['member_name']; ?></p>
        </div>
      </div>    
        <a href="../admin/">Admin</a>
        <a href="../secure/dashboard.php">Dashboard</a>
        <a href="../secure/calendar.php">Calendar</a>
        <a href="../secure/contacts.php">Contacts</a>
        <a href="../secure/cuppa.php">Cuppa</a>
        <a href="../secure/folder.php">Folders</a>
        <a href="../secure/cybrary.php">Library</a>
        <a href="../secure/mail.php">Mail</a>
        <a href="../secure/nist.php">NIST CSF</a>
        <a href="../secure/profile.php">Profile</a>
        <a href="../secure/randr.php">R&R</a>
        <a href="../secure/resolve.php">Resolve</a>
        <a href="../secure/stock.php">Stocks</a><br>
        <a href="../secure/settings.php">Settings</a>
<!--
    </div>
-->
<br><br>
        <a href="#">Sign Out</a>
    </section>
</div>