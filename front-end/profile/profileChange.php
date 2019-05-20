<?php session_start();ob_start();
  include("C:/xampp/htdocs/Assignment1/connect.php");
  if(isset($_GET['idUser'])){   
      $idUser = $_GET['idUser'];           
  } else $idUser = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trang Cá Nhân</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="profile.css">
</head>
<body>
  <?php 
    $selectInforUser = "SELECT * FROM user WHERE Id = ".$idUser;
    $queryInfoUser = mysql_query($selectInforUser);
    $infoUser = mysql_fetch_array($queryInfoUser);                      
  ?>
  
  <hr>
<div class="container bootstrap snippet">
    <div class="row">
      <div class="col-sm-10"><h1>Bùi Quang Khôi</h1></div>  
    </div>
    <div class="row">
      <div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img <?php echo 'src="../../'.$infoUser['img_profile'].'"' ?> style="width: 201px; height: 201px;" class="avatar img-circle img-thumbnail" alt="avatar">
        <h6>Upload a different photo...</h6>
        <input type="file" class="text-center center-block file-upload">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="">bandlab.com</a></div>
          </div>
          
          
          <ul class="list-group">
            <li class="list-group-item text-muted">Hoạt động gần đây <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul>                
          
        </div><!--/col-3-->
      <div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">Trang Chính</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" class="home">
                <hr>
                  <form class="form" <?php echo 'action="profileChangeProcess.php?idUser='.$idUser.'"' ?> method="post" class="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Họ</h4></label>
                              <input type="text" class="form-control" id="first_name" name="first_name" class="first_name" <?php echo 'placeholder="'.$infoUser['first_name'].'"' ?> title="enter your first name if any." >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Tên</h4></label>
                              <input type="text" class="form-control" id="last_name" name="last_name" class="last_name"  <?php echo 'placeholder="'.$infoUser['last_name'].'"' ?> title="enter your last name if any." >
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Số điện thoại</h4></label>
                              <input type="text" class="form-control" id="phone_home" name="phone_home" class="phone" <?php echo 'placeholder="'.$infoUser['phone_home'].'"' ?> title="enter your phone number if any." >
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Số di động</h4></label>
                              <input type="text" class="form-control" id="mobile" name="mobile" class="mobile" <?php echo 'placeholder="'.$infoUser['mobile'].'"' ?> title="enter your mobile number if any." >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" id="email" name="email" class="form-control" name="email" class="email" <?php echo 'placeholder="'.$infoUser['email'].'"' ?> title="enter your email." >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Địa chỉ</h4></label>
                              <input type="address" id="address" name="address" class="form-control" class="location" <?php echo 'placeholder="'.$infoUser['address'].'"' ?> title="enter a location" >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" id="password" name="password" class="password" placeholder="Nhập Password" title="enter your password." required>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Lặp lại Password</h4></label>
                              <input type="password" class="form-control" id="password2" name="password2" class="password2" placeholder="Lặp Lại Password" title="enter your password2." required>
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <button class="btn btn-lg btn-success" type="submit" id="save" name="save"><i class="glyphicon glyphicon-ok-sign"></i> Lưu</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
                </form>
              
              <hr>
              
             </div><!--/tab-pane-->                                         
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->      
    </div><!--/row-->
</body>
</html>
