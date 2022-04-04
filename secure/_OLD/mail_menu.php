
<?php 

$_SESSION['page_code'] = $_SERVER['PHP_SELF'];
$page_code=$_SESSION['page_code'];

$page_code = preg_replace('^/secure/^', '', $page_code);
$page_code = preg_replace('/.php/', '', $page_code);

if ($page_code=="mail_read") {$page_code="mail";}
if ($page_code=="mail_compose") {$page_code="mail";}
if ($page_code=="mail_forward") {$page_code="mail";}
if ($page_code=="mail_reply") {$page_code="mail";}
if ($page_code=="mail_send") {$page_code="mail";}
?>

<li <?php if ($page_code=="mail") {echo 'class="active"';} ?>><a href="mail.php"><i class="fa fa-inbox"></i> Inbox
<span class="label label-primary pull-right" data-toggle="tooltip" title="Mail Total"><?php echo $_SESSION['mail_inbox']; ?></span></a></li>
<li <?php if ($page_code=="mail_inbox_unread") {echo 'class="active"';} ?>><a href="mail_inbox_unread.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope"></i> Unread
<span class="label label-primary pull-right" data-toggle="tooltip" title="Unread"><?php echo $_SESSION['mail_unread']; ?></span></a>
</li>
<li <?php if ($page_code=="mail_inbox_read") {echo 'class="active"';} ?>><a href="mail_inbox_read.php">&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-envelope-open-o"></i> Read
<span class="label label-primary pull-right" data-toggle="tooltip" title="Read"><?php echo $_SESSION['mail_read']; ?></span></a>
</li>
<li <?php if ($page_code=="mail_sent") {echo 'class="active"';} ?>><a href="mail_sent.php"><i class="fa fa-arrow-circle-right"></i> Sent
<span class="label label-primary pull-right" data-toggle="tooltip" title="Sent"><?php echo $_SESSION['mail_sent']; ?></span></a>
</li>
<li <?php if ($page_code=="mail_trash") {echo 'class="active"';} ?>><a href="mail_trash.php"><i class="fa fa-trash-o"></i> Trash
<span class="label label-primary pull-right" data-toggle="tooltip" title="Trashed"><?php echo $_SESSION['mail_trash']; ?></span></a>
</li>

