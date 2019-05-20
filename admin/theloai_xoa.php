<?php
ob_start();
include('../connect.php');

if(isset($_GET['idTL']))
{
	$idTL=$_GET['idTL'];
	$delTL="DELETE FROM `tintuc`.`theloai` WHERE `theloai`.`idTL` = $idTL";
	if(mysql_query($delTL)) header('location:theloai.php');
	else echo "xoa loi";
}
?>