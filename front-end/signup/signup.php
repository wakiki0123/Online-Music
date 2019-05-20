<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
    body {font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: #f1f1f1;
    }

    input[type=text]:focus, input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 25px;
    }

    /* Set a style for all buttons */
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
        opacity: 0.9;
    }

    button:hover {
        opacity:1;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn, .signupbtn {
      float: left;
      width: 50%;
    }

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
           width: 100%;
        }
    }
    </style>
</head>
<body>

<form style="border:1px solid #ccc" id="formSignUp" name="formSignUp" method="POST" action="signUpProcess.php">
  <div class="container">
    <h1 >Đăng ký</h1>
    <p>Vui lòng điền đầy đủ thông tin vào Form.</p>
    <hr>

    <label for="first_name"><b>Họ</b></label>
    <input type="text" placeholder="Họ" id="first_name" name="first_name" required>

     <label for="last_name"><b>Tên</b></label>
    <input type="text" placeholder="Tên" id="last_name" name="last_name" required>

     <label for="address"><b>Địa Chỉ</b></label>
    <input type="text" placeholder="Địa Chỉ" id="address" name="address" required>

    <label for="phone"><b>Số Điện Thoại</b></label>
    <input type="text" placeholder="Số Điện Thoại" id="phoneNum" name="phoneNum" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email" id="email" name="email" required>

     <label for="username"><b>Tên Tài Khoản</b></label>
    <input type="text" placeholder="Nhập Tên Tài Khoản" id="username" name="username" required>

    <label for="psw"><b>Mật khẩu</b></label>
    <input type="password" placeholder="Nhập Mật Khẩu" id="password" name="password" required>

    <label for="psw-repeat"><b>Lặp Lại Mật Khẩu</b></label>
    <input type="password" placeholder="Lặp Lại Mật Khẩu" id="password-repeat" name="password-repeat" required>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Ghi Nhớ
    </label>
    <div class="clearfix">
      <button type="cancel" class="cancelbtn">Hủy bỏ</button>
      <button type="submit" id="signup" name="signup" class="signupbtn">Đăng ký</button>
      <a href="localhost/Assignment1/login.php" class="btn btn-lg btn-primary btn-block btn-default">Đăng ký</a>
    </div>
  </div>
</form>

</body>
</html>
