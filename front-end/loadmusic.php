<?php session_start();ob_start();
  include("C:/xampp/htdocs/Assignment1/connect.php");
  if(isset($_GET['idMusic'])){   
      $idMusic = $_GET['idMusic'];       
      if (isset($_GET['idUser'])) $idUser = $_GET['idUser'];
      else $idUser = 0;              
  } 
  else {$idMusic = 0;
    $idUser = 0;
  }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/detail/detail.css">
  <script type="text/javascript" src="../javascript/loadMusic/loadMusic.js"></script>
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
    $idDetailMusic = $idMusic;
    $selectDetailMusic = "SELECT Id, name_music, link_image, link_file, signer, type_id FROM musics WHERE Id =$idDetailMusic";    
    $queryDetailMusic = mysql_query($selectDetailMusic);
    $detailMusic = mysql_fetch_array($queryDetailMusic); 
    $typeMusic = $detailMusic['type_id'];

    $selectCheckPlayList = "SELECT music_id, user_id FROM playList WHERE music_id = $idMusic && user_id = $idUser";
    $queryCheckPlayList = mysql_query($selectCheckPlayList);
    $rowCheckPlayList = mysql_num_rows($queryCheckPlayList);
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
            <image src="../images/logo.jpg" style="height: 50px; width: 90px"></image>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" style="height: 100%">
          <ul class="nav navbar-nav" style="margin-left: 50px">
            <li class="active">

                <a <?php echo 'href="../index.php?idUser='.$idUser.'"' ?>>
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Trang Chủ 
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>
            <li><a <?php echo 'href="playList/playList.php?idUser='.$idUser.'"' ?> >Playlist</a></li>
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
          <form class="navbar-form navbar-left" method="GET" action="../process.php">
            <div class="form-group">
              <input type="text" name="keySearch" name="keySearch" class="form-control" placeholder="Search">
              <input name="idUser" id="idUser" type="hidden" <?php echo 'value="'.$idUser.'"'?> >
            </div>
            <button type="submit" name="search" id="search" class="btn btn-default">Search</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="front-end/signup/signup.php">
                    <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>
                    Đăng Ký 
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>
            <li>                
                <a href="../login.php">
                    <input name="idUser" id="idUser" type="hidden" <?php echo 'value="'.$idUser.'"'?> >
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

    <div id="phayer-music-renative" class="col-md-8" style="">
      <div id="player-music">        
          <h4 style="line-height: 1.3; font-size: 20px;"><?php echo $detailMusic['name_music'] ?> - <?php echo $detailMusic['signer'] ?></h4>
      </div>
      <div>
        <audio controls autoplay style="width: 100%">
        <source <?php echo'src="../'.$detailMusic['link_file'].'"' ?> type="audio/mpeg">      
        </audio> 
      </div> 
      <br>
      <form method="POST" action="playList/addIntoPlayList.php" id="addPlayListForm">
        <div style="width: 100%">
          <input name="idUser" id="idUser" type="hidden" <?php echo 'value="'.$idUser.'"'?> >
          <input name="idMusic" id="idMusic" type="hidden" <?php echo 'value="'.$idMusic.'"'?>> 
          <input name="checkPlayList" id="checkPlayList" type="hidden" <?php echo 'value="'.$rowCheckPlayList.'"'?> >  
          <br>             
          <button type="button" class="btn btn-default col-md-2" name="" >
            <a style="text-decoration: none; color: black; width: 100%" <?php echo 'href="processLoadMusic.php/?linkFile=../'.$detailMusic['link_file'].'"' ?> class="glyphicon glyphicon-plus" aria-hidden="true"> Download</a>        
          </button>
           <button type="button" class="btn btn-default col-md-2" style="float: left; margin-right: 10px" id="addPlayList" name="addPlayList" onclick="funcaddPlayList()">
            <span style="text-decoration: none; color: black" class="glyphicon glyphicon-plus" aria-hidden="true"> Add</span>        
          </button> 
        </div>
      </form>
      <p></p>
      <div>
        <form id="commentForm" method="GET" action="processLoadMusic.php">
          <br>
          <br>                  
            <div class="form-group">              
              <input name="idUser" id="idUser" type="hidden" <?php echo 'value="'.$idUser.'"'?> >
              <input name="idMusic" id="idMusic" type="hidden" <?php echo 'value="'.$idMusic.'"'?>>
              <label for="comment" style="font-size: 150%">Bình luận:</label>
              <textarea class="form-control" rows="5" id="content" name="content" placeholder="Nhập bình luận" required=""></textarea>
              <br>                        
              <!-- <input class="btn btn-lg btn-primary btn-block" type="submit" name="comment" id="comment" value="Bình Luận" style="visibility: visible;"/>   -->
              <input type="button" name="submitCommentClick"  id="submitCommentClick" class="btn btn-lg btn-primary btn-block" value="Bình Luận" onclick="cmtClickFunction()">
            </div>
        </form>
      </div>
      <div id="displayComment" class="col-md-8" style="margin-top: 50px"">
        <?php 
            $selectInfoComment = "SELECT cmt.id,  cmt.comment, u.id, u.user_name FROM comment cmt                                       
                                      LEFT JOIN user u ON cmt.user_id = u.id
                                      WHERE music_id = $idMusic ORDER BY cmt.date DESC LIMIT 5 ";
            $queryInfoComment = mysql_query($selectInfoComment);
            while ($rowInfoComment = mysql_fetch_array($queryInfoComment)){
          ?>
            <div id="fetchCommnet" style="width: 100%; margin-left: 20px; margin-top: 20px">
              <a href="profile/profile.php?idUser=<?php echo $rowInfoComment[2] ?>" style="font-weight: bold;line-height: 1.3; font-size: 20px;"><?php echo $rowInfoComment[3] ?></a>          
              <p style="line-height: 1.3; font-size: 20px; padding-left: 20px"><?php echo $rowInfoComment[1] ?></p>
            </div>
          <?php 
            }
          ?>      
      </div>
    </div>
    <div  class="col-md-12" style="font-family:'Times New Roman'">
      <div id="list-album">
        <h2>
          <a title="list song">Liên quan</a>
        </h2>
      </div>
      <div class="col-md-11" style="margin-left: auto; margin-right: auto">
        <?php 
          $selectMusic = "SELECT Id, name_music, link_image, link_file, signer FROM musics WHERE type_id = $typeMusic ORDER BY date_update LIMIT 8";
          $queryMusic = mysql_query($selectMusic);
          while($rowMusic = mysql_fetch_array($queryMusic)){
        ?>        
          <div class="category col-md-3" style="height: 270px"  >
          <div style="width: 100%">
            <a href="front-end/loadMusic.php?idMusic=<?php echo $rowMusic['Id']; ?>&idUser=<?php echo $idUser?>">
              <img style="display: block; margin: auto; width: 150px; height: 150px" <?php echo 'src="'.$rowMusic['link_image'].'"' ?> >
            </a>           
          </div>
          <div id="infor-album" >
            <a href="process.php?idMusic=<?php echo $rowMusic['Id']; ?>&idUser=<?php echo $idUser?>"><h3><?php echo $rowMusic['name_music'] ?></h3></a>
            <h4><?php echo $rowMusic['signer'] ?></h4>

          </div>
        </div>    
        <?php 
          }
        ?>
      </div>
    </div>
  </div>

  <footer id="footer" class="container-fluid text-center">
    <ul class="list-share clearfix">
      <li>
        <a href="https://www.facebook.com">
          <img src="../images/fb.png">
        </a>
      </li>
      <li>
        <a href="https://www.youtube.com/channel/UCfC6hFls055fjhdwwegEjxw?view_as=subscriber">
          <img src="../images/youtube.png">
        </a>
      </li>
      <li>
        <a href="#">
          <img src="../images/instagram.png">
        </a>
      </li>
    </ul>
      <p>Tòa nhà HAGL Safomec, 7/1 Thành Thái, P14, Q10, TP.HCM</p>
      <p>Hotline: 0902 286 286 - Tel: 024 3942 9168 - Fax: 024 3942 9169</p>      
  </footer> 
  <?php 
    mysql_close();
  ?>
</body>