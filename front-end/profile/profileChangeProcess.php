<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if (isset($_GET['idUser'])) $idUser = $_GET['idUser'];
	if(isset($_POST['save'])){
		$i = 0;
		$firstName = $_POST['first_name'];
		$lastName = $_POST['last_name'];
		$phoneHome = $_POST['phone_home'];
		$mobile = $_POST['mobile'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$pass = md5($_POST['password']);
		$pass2 = md5($_POST['password2']);
		if ($pass == $pass2){
			$updateInfo = "UPDATE user set Password = '$pass', first_name = '$firstName', last_name = '$lastName', phone_home = $phoneHome, mobile = $mobile, email = '$email', address = '$address'";
			echo $updateInfo;
			do {
			    header("location:profile.php?idUser=".$idUser);
			    $i ++;
			} while (mysql_query($updateInfo) && $i = 0);	
		}		
	}	else echo "error";
	mysql_list_dbs();
?>