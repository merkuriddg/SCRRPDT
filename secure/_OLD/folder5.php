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
    <link rel="stylesheet" href="../dist/css/folder.css">

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

          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
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
          <img src="../dist/img/men/rick.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Rick Arraye</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
                 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Folder:
        <small>Project TEAVEA</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Folders</li>
        <li class="active">Project TEAVEA</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

                  <div class="main">
                    <div class="left">

                        Content here...

                    </div>
                  </div>
                  <div class="right">
                    <div class="input-select-wrap">
                        <div class="fileUpload">
                            <span>+</span><p>Add your files</p>
                        </div>
                        <input id='fileSelect' multiple name='fileSelect' type='file'>
                    </div>

                      <div id='draggableFile'>
                          <span>Drop your files here<br/><span>You can drop your files here to add them to your documents</span></span>
                      </div>
                      <div id='result'></div>
                  </div>

    <!-- /#page-content-wrapper -->
      </section>

<!-- /.content-wrapper -->
    </div>

<!-- main-footer -->
<?php include('main_footer.php'); ?>

<!-- Control Sidebar -->
<?php include('right_nav.php'); ?>
<!-- /.control-sidebar -->
  
<!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>

<!-- ./wrapper -->
</div>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $(this).find('i').toggleClass('fa-caret-left fa-caret-right');
        $("#wrapper").toggleClass("toggled");
    });

$(document).ready(function(){

var fileSelect = document.getElementById("fileSelect"),
  draggableFile = document.getElementById("draggableFile"),
  result = document.getElementById("result"),
  wrapper = document.getElementById("wrapper");
xhr = new XMLHttpRequest();
if (window.File && window.FileList && window.FileReader) {
  function setupReader(file, handler) {
    var reader = new FileReader();
    reader.onloadend = handler;
    reader.readAsDataURL(file);
  }

  function overFile(e) {
    e.stopPropagation();
    e.preventDefault();
    wrapper.className = "visible";
  }

  function endFile(e) {
    e.stopPropagation();
    e.preventDefault();
    wrapper.className = "";
  }

  function dropFile(e) {
    e.stopPropagation();
    e.preventDefault();
    var files = e.target.files || e.dataTransfer.files;
    for (var i = 0; i < files.length; i++) {
      var eachFile = files[i],
        type = eachFile.type == "" || eachFile.type == null
          ? eachFile.name.split(".")[1]
          : eachFile.type;
      setupReader(eachFile, function(e) {
        $("#result").append('<div class="item"><i class="fa fa-file-o" aria-hidden="true"></i><p>'+eachFile.name +'</p></div>');
      });
    }
    result.style.display = "block";
    wrapper.className = "";
    $(".input-select-wrap").css({
      bottom: "30px",
      top: "inherit",
      transform: "none"
    });

    setTimeout(function() {
      $(".item").draggable({
        revert: true,
        start: function() {
          $(".folder").css({
            "background-color": "rgba(0,0,0,0.05)"
          });
          $(this).css({
            display: "inline-block"
          });
        },
        stop: function() {
          $(".folder").css({
            "background-color": "rgba(0,0,0,0)"
          });
          $(this).css({
            display: "block"
          });
        },
        drag: function(event, ui) {
          $(this).css("z-index", "999");
        }
      });
    }, 300);
  }

  if (xhr.upload) {
    wrapper.addEventListener("dragover", overFile);
    wrapper.addEventListener("dragenter", overFile);
    draggableFile.addEventListener("dragleave", endFile);
    draggableFile.addEventListener("drop", dropFile);
    fileSelect.addEventListener("change", dropFile);
  }
}

$(document).ready(function() {
  var targetFolder;
  var folderID;
  var zIndex;

  $(".folder").droppable({
    accept: ".item, .file",
    over: function(event, ui) {
      $(this).find("i.fa-file").css({
        transform: "scale(1.1)",
        opacity: "0.5"
      });
      $(this).find("p").css({
        opacity: "0.5"
      });
      $(this).css({
        background: "rgba(0,0,0,0.0)",
        border: "1px solid rgba(0,0,0,0.1)"
      });
      targetFolder = $(".ui-droppable-hover").attr("id") + "-content";
      folderID = $(".ui-droppable-hover").attr("id");
    },
    out: function(event, ui) {
      $(this).find("i.fa-file").css({
        transform: "scale(1)",
        opacity: "1"
      });
      $(this).find("p").css({
        opacity: "1"
      });
      $(this).css({
        background: "rgba(0,0,0,0.05)",
        border: "1px solid rgba(0,0,0,0)"
      });
    },
    drop: function() {
      dropItemToFolder(targetFolder, folderID);
      updateFilesNumbers();
    }
  });

  $(".left").sortable({
    revert: true
  });

  $(".folder-content").droppable({
    drop: function() {
      var eLtarget = $(this).attr("id");
      var eLFolder = $(this).attr("id").slice(0, -8);
      if (!$(".ui-draggable-dragging").hasClass(eLtarget + "-item")) {
        dropItemToFolder(eLtarget, eLFolder);
        updateFilesNumbers();
      }
    }
  });
  var eLfolderindex;
  var draggieWindow = $(".folder-content").draggabilly();
  draggieWindow.on("dragStart", function(event, pointer) {
    (zIndex = $(".folder-content")
      .map(function() {
        return $(this).css("z-index");
      })
      .get()), (currentzIndex = Math.max.apply(null, zIndex));
    $(this).css({
      display: "block",
      "z-index": currentzIndex + 1
    });
  });
  $(".folder-content").resizable({
    minWidth: 250,
    minHeight: 150,
    start: function(event, ui) {
      $(".folder-content").draggabilly("disable");
    },
    stop: function(event, ui) {
      $(".folder-content").draggabilly("enable");
    }
  });
  $(".top-droppable").topDroppable({
	    drop: function (e, ui) {
	       console.log("dropped into " + $(this).attr('id'));
	    }
	});

  $(".close-folder-content").click(function() {
    var eLfolder = $(this).parent();
    eLfolder.addClass("easeout2").addClass("closed");
    setTimeout(function() {
      eLfolder.css("display", "none");
    }, 300);
  });

  $(".folder").dblclick(function() {
    (zIndex = $(".folder-content")
      .map(function() {
        return $(this).css("z-index");
      })
      .get()), (currentzIndex = Math.max.apply(null, zIndex));

    var eLfolder = $(this).attr("id");

    $("#" + eLfolder + "-content").css({
      display: "block",
      "z-index": currentzIndex + 1
    });
    setTimeout(function() {
      $("#" + eLfolder + "-content").addClass("easeout2").removeClass("closed");
    }, 5);
    setTimeout(function() {
      $("#" + eLfolder + "-content").removeClass("easeout2");
    }, 300);
  });

  toolTiper();
});

function toolTiper() {
  $(".tooltiper").each(function() {
    var eLcontent = $(this).attr("data-tooltip"),
      eLtop = $(this).position().top,
      eLleft = $(this).position().left;
    $(this).append('<span class="tooltip">' + eLcontent + "</span>");
  });
}

function dragTheFiles() {
  setTimeout(function() {
    $(".file").draggable({
      revert: true,
      start: function() {
        $(".folder-content").draggabilly("disable");
        $(".folder").css({
          "background-color": "rgba(0,0,0,0.05)"
        });
        $(this).css({
          "background-color": "rgba(0,0,0,0.02)"
        });
      },
      stop: function() {
        $(".folder-content").draggabilly("enable");
        $(".folder").css({
          "background-color": "rgba(0,0,0,0)"
        });
        $(this).css({
          "background-color": "rgba(0,0,0,0.0)"
        });
      },
      drag: function(event, ui) {
        $(this).css({
          "z-index": "999"
        });
      }
    });
  }, 300);
}

function dropItemToFolder(target, folderid) {
  $(".ui-draggable-dragging").draggable({
    revert: false
  });
  $(".ui-draggable-dragging").addClass("is-dropped");
  $("#" + folderid).addClass("item-dropped");
  $(".folder").css({
    background: "rgba(0,0,0,0.05)",
    border: "1px solid rgba(0,0,0,0)"
  });
  $(".folder .fa-folder").css({
    transform: "scale(1)",
    opacity: "1"
  });
  $(".folder p").css({
    opacity: "1"
  });
  setTimeout(function() {
    $(".is-dropped").appendTo("#" + target);
    $(".is-dropped").removeClass().addClass(target + "-item").addClass("file");
    $("." + target + "-item").draggable("destroy");
    $("." + target + "-item").css({
      left: "0",
      top: "0"
    });
  }, 300);
  setTimeout(function() {
    $("#" + folderid).removeClass("item-dropped");
  }, 1000);
  dragTheFiles();
}


function updateFilesNumbers() {
  setTimeout(function(){
    $('.folder-content').each(function(){
      var eLFolder = $(this).attr("id").slice(0, -8);
      var filesCount = $(this).find('.file').length;
      $('#'+eLFolder).find('.tooltip').html(filesCount+' file(s)');
    });
  },300);
}
});    
    
    
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

