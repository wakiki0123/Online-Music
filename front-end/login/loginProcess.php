<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if(isset($_POST['login'])){
		$user=$_POST['username'];
		$pass=md5($_POST['password']);
		$sl="select * from user where User_Name='$user' and Password='$pass'";
		echo $pass;
	}
?>