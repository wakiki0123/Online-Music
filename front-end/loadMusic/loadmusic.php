<?php session_start();ob_start();
  include("C:/xampp/htdocs/Assignment1/connect.php");
  if(isset($_GET['idMusic'])){
    $idDetailMusic = $_GET['idMusic'];
    $selectDetailMusic = "SELECT Id, name_music, link_image, link_file, signer, type_id FROM musics WHERE Id =$idDetailMusic";
    $queryDetailMusic = mysql_close($selectDetailMusic);
    
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/detail/detail.css">
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

                <a href="#">
                    <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    Trang Chủ 
                    <span class="sr-only">(current)
                    </span>
                </a>
            </li>
            <li><a href="#">Playlist</a></li>
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
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
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

    <div id="phayer-music-renative" class="col-md-8" style="">
      <div id="player-music">        
          <h4 style="line-height: 1.3; font-size: 20px;">Như Lời Đồn - Bảo Anh</h4>
      </div>
      <div>
        <audio controls autoplay style="width: 100%">
        <source src="music/test.mp3" type="audio/mpeg">      
        </audio> 
      </div> 
      <br>
      <div>
        <button type="button" class="btn btn-default col-md-2" style="float: left; margin-right: 10px">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"> Add</span>        
        </button>
        <button type="button" class="btn btn-default col-md-2">
          <span class="glyphicon glyphicon-plus" aria-hidden="true"> Download</span>        
        </button>
      </div>    
    </div>
    <div  class="col-md-12" style="font-family:'Times New Roman'">
      <div id="list-album">
        <h2>
          <a title="list song">Liên quan</a>
        </h2>
      </div>
      <div class="col-md-11" style="margin-left: auto; margin-right: auto">
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="">
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="front-end/detail.html"><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div>    
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a  href="front-end/detail.html"><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div> 
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="" ><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div> 
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="" ><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div> 
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="" ><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div> 
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="" ><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div> 
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="" ><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div> 
        <div class="category col-md-3"  >
          <div style="width: 100%">
            <a href="" >
              <img style="display: block; margin: auto" src="https://avatar-nct.nixcdn.com/playlist/2018/10/11/d/9/e/9/1539253323774.jpg" alt="">
            </a>             
          </div>
          <div id="infor-album" >
            <a href="" ><h3>Như lời đồn (Single)</h3></a>
            <h4>Bảo Anh</h4>

          </div>
        </div>        
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
</body>