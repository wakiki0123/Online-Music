<?php session_start();ob_start();
  include("C:/xampp/htdocs/Assignment1/connect.php");
  if(isset($_SESSION['id'])) {
    $idUser = $_SESSION['id'];    
  } else{
    $idUser = 0;
    header("location:../indexNotLogin.php");
  }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashboard - Admin Template</title>
<link rel="stylesheet" type="text/css" href="css/theme1.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div id="container">
    
    <!--menu-->
    <div id="header">
        	<h2>HỘI QUÁN ÂM NHẠC BANDLAB</h2>
    <div id="topmenu">
            	<ul>
                <?php
				if(isset($_GET['key'])) $key=$_GET['key'];
				else $key="tc";
				?>
                	<li <?php if($key=="tc") echo 'class="current"';?>><a href="index.php">TRANG CHỦ</a></li>
                    <li <?php if($key=="tl"||$key=="tlt"||$key=="tls") echo 'class="current"';?>><a href="index.php?key=tl">ÂM NHẠC</a></li>                  
                    <li <?php if($key=="users") echo 'class="current"';?>><a href="index.php?key=users">USERS</a></li>

              </ul>
    </div>
</div>
    <!--//menu-->
	
        <div id="wrapper">
            <div id="content">
           <?php
		   switch($key)
		   {
			   case "tc":include("tc.php");break;
			   case "tl": include("theloai.php");break;
			   case "tlt": include("theloai_them.php");break;
			   case "tls": include("theloai_sua.php");break;
			   // case "lt": include("loaitin.php");break;
			   // case "ltt": include("loaitin_them.php");break;
			   // case "lts": include("loaitin_sua.php");break;
			   // case "t": include("tin.php");break;
			   // case "tt": include("tin_them.php");break;
			   // case "ts": include("tin_sua.php");break;
         case "users": include("user.php");
			  
		   }
?>

          </div>
        </div>
     
	 <!--footer-->
     <div id="footer">
        <div id="credits">
   		Thiết kế bởi QuangKhoiBui</a>
        </div>
        <div id="styleswitcher">
            <ul>
                <li><a href="javascript: document.cookie='theme='; window.location.reload();" title="Default" id="defswitch">d</a></li>
                <li><a href="javascript: document.cookie='theme=1'; window.location.reload();" title="Blue" id="blueswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=2'; window.location.reload();" title="Green" id="greenswitch">g</a></li>
                <li><a href="javascript: document.cookie='theme=3'; window.location.reload();" title="Brown" id="brownswitch">b</a></li>
                <li><a href="javascript: document.cookie='theme=4'; window.location.reload();" title="Mix" id="mixswitch">m</a></li>
            </ul>
        </div><br />

 </div>
     <!--//footer-->
</div>
</body>
</html>
