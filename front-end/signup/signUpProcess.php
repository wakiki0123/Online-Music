<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if(isset($_POST['signup'])){
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$address = $_POST['address'];	
		$phoneNum = $_POST['phoneNum'];	
		$email = $_POST['email'];
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
		$rePass = md5($_POST['password-repeat']);
		if ($pass != $rePass){			
			// header("location:signup.php");
			echo("Xác Nhận Mật Khẩu Chưa Chính Xác");
					
		}
		else {
			$insertUser="INSERT INTO USER VALUE (NULL, '$user', '$pass', '$firstName', '$lastName', '$phoneNum', '$email', '$address', NULL )";
			if (mysql_query($insertUser)) {
				header("location:../../login.php");
			}	
		}		
	}
?>