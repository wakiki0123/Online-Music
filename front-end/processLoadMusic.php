<?php session_start();ob_start();
	include("C:/xampp/htdocs/Assignment1/connect.php");
	if(isset($_GET['submitCommentClick'])){
		$idUser = $_GET['idUser'];
		$idMusic = $_GET['idMusic'];
		$content = $_GET['content'];
		$insertComment = "INSERT INTO  comment VALUES (null, $idMusic, $idUser, '$content', null)";		
		if(mysql_query($insertComment)) {
			header("location:loadmusic.php?idMusic=".$idMusic."&idUser=".$idUser);
		}
		else header("location:loadmusic.php?idMusic=".$idMusic."&idUser=".$idUser);
	}

	if (isset($_GET['linkFile'])) { 
	    $file = $_GET['linkFile'] ;
	        if (file_exists($file) && is_readable($file) && preg_match('/\.mp3$/',$file))  { 
	            header('Content-type: application/mp3');  
	            header("Content-Disposition: attachment; filename=\"$file\"");   
	            readfile($file); 
	        }
	    else { 
		    header("HTTP/1.0 404 Not Found"); 
		    echo "<h1>Error 404: File Not Found: <br /></h1>"; 
		}
	} 
	mysql_close();
?>
