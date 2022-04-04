<?php
require_once('../includes/config.php');
include('logged_in.php');
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <?php include('head.php'); ?>
</head>

<body class="hold-transition skin-blue sidebar-mini" onload="startTime()">
<?php include('tabcontent.php'); ?>
<?php include('set_date.php'); ?>
<?php include('get_member_info.php'); ?>
<?php include('check_first_login.php'); ?>
<?php include('menu.php'); ?>

<div class="main">
    <div class="row">


        <iframe id="eventchecker"
                src="eventcheck.php"
                width="0"
                height="0"
                sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
        </iframe>

        <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
        <?php include('modal.php'); ?>
        <!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->



        <!-- Main content -->
        <div class="col-md-12">

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

        </div>

    </div>

<!-- main-footer -->
<?php include('main_footer.php'); ?>
</div>



    <!-- Menu Toggle Script -->
    <script>

        
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

</body>
</html>

