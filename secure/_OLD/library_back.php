<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Arr Aye Tea Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

    <link rel="stylesheet" href="../dist/css/library.css">

    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <!-- FavIcon -->
    <link rel="shortcut icon" href="../favicon.ico" />

    <!-- Clock Code -->
    <script src="../js/clock.js"></script>


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    </head>
    
<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<!-- Set Date: -->
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
                                                   
    <div class="wrapper">

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

            <!-- top menu: includes all sub menus - style can be found in dropdown.less -->
            <?php include('top_menu.php'); ?>            

          <!-- Logout Button -->
          <li>
            <a href="../login/logout.php"><i class="fa fa-sign-out"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
    
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/<?php echo $_SESSION['member_img']; ?>" class="img-circle" alt="Image of <?php echo $_SESSION['member_name']; ?>">
        </div>
        <div class="pull-left info">
          <p><?php echo $_SESSION['member_name']; ?></p>
            <a href="#"><i fa-circle-o></i> online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">

          
        <!-- Left Sidebar: style can be found in sidebar.less-->
        <?php include('left_menu.php'); ?>

        </ul>
  </section>
    <!-- /.sidebar -->
  </aside>    

        <iframe id="eventchecker"
        src="eventcheck.php"
        width="0"
        height="0"
        sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
        </iframe>
    
      <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
        <?php include('modal.php'); ?>
      <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
      

        
<?php include('sql/contacts_query.php'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Contacts
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Contacts</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
                        

            <div class="overally"></div>
            <div class="container">
                <div class="row library">
                    <div class="col-xs-4 col-md-2">
                <ul class="bk-list clearfix book-list">
                            <li>
                            <a href="https://www.nist.com" target="_blank">
                                <div class="bk-book book-1 bk-bookdefault bk-bookview">
                                        <div class="bk-front">
                                            <div class="bk-cover-back"></div>
                                            <div class="bk-cover"></div>
                                        </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current"><p></p></div>          
                                    </div>
                                    <div class="bk-back"></div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </a>
                            </li>
                        </ul>	      
                    </div>
                    <div class="col-xs-4 col-md-2">
                        <ul class="bk-list clearfix book-list">
                            <li>
                            <a href="https://www.nist.com" target="_blank">
                                <div class="bk-book book-2 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover"></div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current"><p></p></div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </a>
                            </li>
                        </ul>	      
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                            <a href="https://www.nist.com" target="_blank">
                                <div class="bk-book book-3 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </a>
                            </li>
                        </ul>
                    </div>      
                    <div class="col-xs-12 shelf hidden-md hidden-lg"></div>
                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>  



                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>

                    <div class="col-xs-4 col-md-2">
                      <ul class="bk-list clearfix book-list">
                            <li>
                                <div class="bk-book book-4 bk-bookdefault bk-bookview">
                                    <div class="bk-front">
                                        <div class="bk-cover-back"></div>
                                        <div class="bk-cover">
                                        </div>
                                    </div>
                                    <div class="bk-page">
                                        <div class="bk-content bk-content-current">
                                            <p>Lorem ipsum italia</p>                                                       
                                        </div>                                                 
                                    </div>
                                    <div class="bk-back">
                                    </div>
                                    <div class="bk-right"></div>
                                    <div class="bk-left"></div>
                                    <div class="bk-top"></div>
                                    <div class="bk-bottom"></div>
                                </div>			
                            </li>
                        </ul>
                    </div>        
                </div>
            </div> 


        <!-- /#page-wrapper -->


      </section>
        </div>
<!-- /.content-wrapper -->

<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->




    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(this).find('i').toggleClass('fa-caret-left fa-caret-right');
        $("#wrapper").toggleClass("toggled");
    });
        
        
        
        
var Books = (function () {

    var $books = $('.book-list > li > div.bk-book'),
        booksCount = $books.length,
        $mbook = $('.library');

    $mbook.find('.col-md-2').on('click',function () {
        $('.overally').toggle();
        $(this).toggleClass('centering');
    });

    function init() {

        $books.each(function () {

            var $book = $(this),
                $other = $books.not($book),
                $parent = $book.parent(),
                $page = $book.children('div.bk-page'),
                $bookview = $parent.find('.bk-bookview'),
                $content = $page.children('div.bk-content'), current = 0;

            $parent.find('button.bk-bookback').on('click', function () {

                $bookview.removeClass('bk-active');

                if ($book.data('flip')) {

                    $book.data({opened: false, flip: false}).removeClass('bk-viewback').addClass('bk-bookdefault');

                }
                else {

                    $book.data({
                        opened: false,
                        flip: true
                    }).removeClass('bk-viewinside bk-bookdefault').addClass('bk-viewback');

                }

            });

           


    }

    return {init: init};
    	Books.init();

})();        
    </script>
                                    

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#contacts').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
</body>
</html>

