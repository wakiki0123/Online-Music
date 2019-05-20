<?php session_start();ob_start();
  include("C:/xampp/htdocs/Assignment1/connect.php");
  if(isset($_GET['idUser'])){   
      $idUser = $_GET['idUser'];           
  } else $idUser = 0;
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Play List</title>
  <link rel="stylesheet" type="text/css" href="../../css/index.css">
  <link rel="stylesheet" type="text/css" href="../../css/style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $('.dropdown').hover(function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
  </script>
</head>
<body>
  <?php 
    include("C:/xampp/htdocs/Assignment1/connect.php");
    $selectPlayList = "SELECT m.Id, m.name_music, m.link_image, m.link_file, m.signer FROM playlist pl LEFT JOIN musics m ON pl.music_id = m.Id WHERE pl.user_id = $idUser LIMIT 8";
    $queryMusic = mysql_query($selectPlayList);
  ?>
  <div>
    <div>
    <nav class="navbar navbar-default">
      <div class="container-fluid" id="submenu">
        <div class="navbar-header" id="header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">

                </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            <image src="../../images/logo.jpg" style="height: 50px; width: 90px"></image>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="height: 100%">
          <ul class="nav navbar-nav" style="margin-left: 50px">
            <li>

                <a <?php echo 'href="../../index.php?idUser='.$idUser.'"' ?>>
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Trang Chủ 
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>
            <li class="active"><a <?php echo 'href="front-end/playList/playList.php?idUser='.$idUser.'"' ?>>Playlist</a></li>
            <li><a href="#">Top 100</a></li>
            <li><a href="#">Bảng Xếp Hạng</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tuyển Tập <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li role="separator" class="divider"></li>
                <li><a href="#">Nhạc Trữ Tình</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="#">Nhạc Trẻ</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="#">Rap Việt</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="#">Nhạc Không Lời</a></li>

                <li role="separator" class="divider"></li>
                <li><a href="#">SoundTrack</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" method="GET" action="../../process.php">
            <div class="form-group">
              <input type="text" name="keySearch" name="keySearch" class="form-control" placeholder="Search">
              <input name="idUser" id="idUser" type="hidden" <?php echo 'value="'.$idUser.'"'?> >
            </div>
            <button type="submit" name="search" id="search" class="btn btn-default">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    Đăng Ký 
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>
            <li>                
                <a href="#">
                    <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                    Đăng Nhập 
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>                    
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    </div>
  </div>
  <div class="container">
    <div  class="col-md-12" style="font-family:'Times New Roman'">
      <div id="list-album">
        <h2>
          <a title="list song">Play List</a>
        </h2>
      </div>
      <div class="col-md-11" style="margin-left: auto; margin-right: auto">
        <?php
          while($rowMusic = mysql_fetch_array($queryMusic)){
            // SELECT m.Id, m.name_music, m.link_image, m.link_file, m.signer FROM playlist pl LEFT JOIN musics m ON pl.music_id = m.Id WHERE pl.user_id = 3 LIMIT 8
        ?>
        <div class="category col-md-3" style="height: 270px"  >
          <div style="width: 100%">
            <a href="../loadMusic.php?idMusic=<?php echo $rowMusic[0]; ?>&idUser=<?php echo $idUser?>">
              <img style="display: block; margin: auto; width: 150px; height: 150px" <?php echo 'src="'.$rowMusic[2].'"' ?> >
            </a>           
          </div>
          <div id="infor-album" >
            <a href="../../process.php?idMusic=<?php echo $rowMusic['0']; ?>&idUser=<?php echo $idUser?>"><h3><?php echo $rowMusic[1] ?></h3></a>
            <h4><?php echo $rowMusic[4] ?></h4>

          </div>
        </div>   
      <?php
      }
      ?> 
              
      </div>
  </div>
</div>
<footer id="footer" class="container-fluid text-center" style="position: fixed; width: 100%; bottom: 0;">
    <ul class="list-share clearfix">
      <li>
        <a href="#">
          <img src="../../images/fb.png">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../../images/youtube.png">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../../images/instagram.png">
        </a>
      </li>
    </ul>
      <p>Tòa nhà HAGL Safomec, 7/1 Thành Thái, P14, Q10, TP.HCM</p>
      <p>Hotline: 0902 286 286 - Tel: 024 3942 9168 - Fax: 024 3942 9169</p>      
  </footer> 
</body>
</html>
