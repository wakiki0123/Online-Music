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
  <script type="text/javascript" src="../../javascript/profile/profile.js"></script>
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
        <img <?php echo 'src="../../'.$infoUser['img_profile'].'"' ?> class="avatar img-circle img-thumbnail" alt="avatar" style="width: 201px; height: 201px;">
      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://localhost/assignment1/">bandlab.com</a></div>
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
                  <form class="form" action="##" method="post" class="registrationForm">                    
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>Họ</h4></label>
                              <input type="text" class="form-control" name="first_name" class="first_name" title="enter your first name if any." <?php echo 'value="'.$infoUser['first_name'].'"' ?> readonly="readonly">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Tên</h4></label>
                              <input type="text" class="form-control" name="last_name" class="last_name" title="enter your last name if any." readonly="readonly" <?php echo 'value="'.$infoUser['last_name'].'"' ?>>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Số điện thoại</h4></label>
                              <input type="text" class="form-control" name="phone" class="phone" title="enter your phone number if any." readonly="readonly" <?php echo 'value="'.$infoUser['phone_home'].'"' ?>>
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Số di động</h4></label>
                              <input type="text" class="form-control" name="mobile" class="mobile" title="enter your mobile number if any." readonly="readonly" <?php echo 'value="'.$infoUser['mobile'].'"' ?>>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" class="email" title="enter your email." readonly="readonly" <?php echo 'value="'.$infoUser['email'].'"' ?>>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Địa chỉ</h4></label>
                              <input type="email" class="form-control" class="location" title="enter a location" readonly="readonly" <?php echo 'value="'.$infoUser['address'].'"' ?>>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6" style="display: none;">
                            <label for="password2"><h4>Lặp lại Password</h4></label>
                              <input type="password" class="form-control" name="password2" class="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                                <?php $hrefGetIdInfor = 'profileChange.php?idUser='.$idUser ?>
                                <button class="btn btn-lg btn-success" type="button" id="change_info" <?php echo 'onclick = window.location.href="'.$hrefGetIdInfor.'"'?>><i class="glyphicon glyphicon-ok-sign"></i> Thay Đổi Thông Tin</button>                                
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
