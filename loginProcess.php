<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if(isset($_POST['login'])){
		$user=$_POST['username'];
		$pass=md5($_POST['password']);
		$sl="select * from user where User_Name='$user' and Password='$pass'";
		$kq=mysql_query($sl);
		if($d=mysql_fetch_array($kq))
		{			
			$_SESSION['ht']=$d['User_Name'];
			$_SESSION['id']=$d['Id'];
			if ($d['role'] == 2){
			//Luu thong tin user vao session:				
			echo $d['role'];				
			header("location:index.php?idUser=".$_SESSION['id']);
			} else if($d['role'] == 1) {
				header("location:admin/index.php?idUser=".$_SESSION['id']);
			};
		}		
		else{ 
			echo "ERROR";
			// header("location:login.php");
		}
	}
	mysql_close();
?>