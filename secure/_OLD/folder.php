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

<iframe id="eventchecker" src="eventcheck.php"
        width="0"
        height="0"
        sandbox="allow-modals allow-popups allow-popups-to-escape-sandbox allow-top-navigation allow-scripts">
</iframe>

<!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->
<?php include('modal.php'); ?>
<!-- 'modal.php' WILL BE A VARIABLE PAGE CALLED FROM EVENTS PER EVENT -->


<div class="main">
    <div class="row">
        <div class="col-lg-9 text-left">
                        <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1">
                            <p><a href="folder1.php"><img src="../dist/img/folder.png" width="100px"><br>Administrative</a></p>
                        </div>
                        <a href="folder2.php">
                        <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder2">
                            <p><a href="folder2.php"><img src="../dist/img/folder.png" width="100px"><br>Intl. Tea Conf.</a></p>
                        </div>
                        </a>
                        <a href="folder3.php">
                        <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder3">
                            <p><a href="folder3.php"><img src="../dist/img/folder.png" width="100px"><br>London Launch</a></p>
                        </div>
                        </a>
                        <a href="folder4.php">
                        <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder4">
                            <p><a href="folder4.php"><img src="../dist/img/folder.png" width="100px"><br>App Launch</a></p>
                        </div>
                        </a>
                        <a href="folder5.php">
                        <div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder5">
                            <p><a href="folder5.php"><img src="../dist/img/folder.png" width="100px"><br>Project TEAVEA</a></p>
                        </div>
                        </a>
        </div>
        <script type="application/javascript">
        function showname () {
              var name = document.getElementById('fileSelect');
              alert('Selected file name: ' + name.files.item(0).name + '\nSelected file size: ' + name.files.item(0).size + '\nSelected file type: ' + name.files.item(0).type);
            };
        </script>
    
<!-- http://plugins.krajee.com/file-advanced-usage-demo -->
            <div class="col-lg-3 text-right">
            <form action="file_upload.php" method="post" enctype="multipart/form-data">
                    <div class="input-select-wrap">
                        <div class="fileUpload">
                            <span>+</span><p>Add your files</p>
                        </div>
                        <input id="fileSelect" name="fileSelect" type="file" style="cursor: pointer;" multiple onchange="showname()"/>
                            <button class="btn btn-primary text-right" type="submit" style="line-height: 100%;"><b>Upload File</b></button>
                    </div>
            </form>
                    <div id='draggableFile'>
                          <span>Drop your files here<br/><span>You can drop your files here to add them to your documents</span></span>
                    </div>
                    <div id='result'></div>

                    <div class="top-droppable folder-content easeout2 closed" id="folder1-content">
                        <div class="close-folder-content">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <h2>
                        <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>Admin</span></h2>
                    </div>

                    <div class="top-droppable folder-content easeout2 closed" id="folder2-content">
                        <div class="close-folder-content">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <h2>
                        <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>Intl. Tea Conf</span></h2>
                    </div>

                    <div class="top-droppable folder-content easeout2 closed" id="folder3-content">
                        <div class="close-folder-content">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <h2>
                        <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>London Launch</span></h2>
                    </div>

                    <div class="top-droppable folder-content easeout2 closed" id="folder4-content">
                        <div class="close-folder-content">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <h2>
                        <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>App Launch</span></h2>
                    </div>

                    <div class="top-droppable folder-content easeout2 closed" id="folder5-content">
                        <div class="close-folder-content">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </div>
                        <h2>
                        <i class="fa fa-folder" aria-hidden="true"></i>
                            <span>Project TEAVE</span></h2>
                    </div>

            </div>
    </div>

<!-- main-footer -->
<?php include('main_footer.php'); ?>
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

</body>
</html>

