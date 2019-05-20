<?php session_start(); ob_start();
if(isset($_SESSION['ht'])) header("location:index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  
  <link rel="stylesheet" type="text/css" href="login.css">
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
    include("C:/xampp/htdocs/Assignment1/connect.php")
  ?>
    <div class="wrapper" id="container">
    <form class="form-signin" id="formLogin" style="display: block; margin-top: auto; margin-bottom: auto" method="POST" action="loginProcess.php">       
      <h2 class="form-signin-heading" style="text-align: center">Login</h2>
      <input style="margin-bottom: 10px" type="text" class="form-control" id="username" name="username" placeholder="Tên Đăng Nhập" required="" autofocus="" />
      <input type="password" class="form-control" id="password" name="password" placeholder="Mật Khẩu" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Ghi Nhớ
      </label>      
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" id="login" value="Đăng Nhập" />      
      <a href="front-end/signup/signup.php" class="btn btn-lg btn-primary btn-block btn-default">Đăng ký</a>
    </form>
  </div>
</body>
</html>
