<!-- <a href="front-end/loadMusic.php?idMusic=<?php echo $rowMusic['Id']; ?>&idUser=<?php echo $rowMusic['Id'];?>"> -->
<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if(isset($_GET['idMusic'])){
		$idMusic = 	$_GET['idMusic'];
		if ($_GET['idUser'] != 0){			
			$idUser = $_GET['idUser'];
			header("location:front-end/loadMusic.php?idMusic=".$idMusic."&idUser=".$idUser);
		} else header("location:front-end/loadMusic.php?idMusic=".$idMusic);
	}

	if(isset($_GET['search'])){
		$keySearch = $_GET['keySearch'];
		$idUser = $_GET['idUser'];
		// echo $idUser;
		if($idUser != 0){		
			header("location:search.php?keySearch=".$keySearch);
		} else {
			// echo "success";
			header("location:searchNotLogin.php?keySearch=".$keySearch);
		}
	}
?>