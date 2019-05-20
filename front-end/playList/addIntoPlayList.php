<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if(isset($_POST['addPlayList'])){
		$i = 0;
		$idUser = $_POST['idUser'];
		$idMusic = $_POST['idMusic'];
		$insertPlayList = "INSERT INTO playlist VALUES(null, 'Play List', '$idMusic', '$idUser', null)";
			do {
			    header("location:../loadMusic.php?idMusic=".$idMusic."&idUser=".$idUser);
			    $i ++;
			} while (mysql_query($insertPlayList) && $i = 0);			
	}	else echo "error";
	mysql_list_dbs();
?>