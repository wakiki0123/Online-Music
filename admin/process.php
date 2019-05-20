<?php session_start();ob_start();
	include("../connect.php");
	
	//Xu ly dang nhap:
	if(isset($_POST['login']))
	{
		$user=$_POST['username'];
		$pass=md5($_POST['password']);
		$sl="select * from users where Username='$user' and Password='$pass'";
		$kq=mysql_query($sl);
		if(mysql_num_rows($kq)>0)
		{
			$d=mysql_fetch_array($kq);
			//Luu thong tin user vao session:
			$_SESSION['ht']=$d['HoTen'];
			$_SESSION['id']=$d['idUser'];			
			
			header("location:index.php");
		}
		else header("location:login.php");
	}
	
	//Xu ly thoat:
	if(isset($_POST['thoat']))
	{
		unset($_SESSION['ht']);
		unset($_SESSION['id']);
		header("location:login.php");
	}
	
	
	//Xu ly them the loai moi:
	if(isset($_POST['addMusic']))
	{	
		$idUser = $_POST['idUser'];
		$nameMusic = $_POST['name_music'];
		$linkImage = $_POST['link_image'];
		$linkFile = $_POST['link_file'];
		$signer = $_POST['signer'];
		$album = $_POST['album'];
		$size = $_POST['size'];
		$insMusic = "INSERT INTO musics (name_music, link_image, link_file, signer, album, size) VALUES ('$nameMusic', '$linkImage', '$linkFile', '$signer', '$album', $size)";
		// echo $insMusic;
		if(mysql_query($insMusic)) header("location:index.php?key=tl&idUser=".$idUser);
	}
	
	
	//Xy ly xoa the loai:
	if(isset($_GET['xoaTL']))
	{
		$idTL=$_GET['xoaTL'];
		$s1="delete from musics where id=$idTL";
		if(mysql_query($s1))
		{			
			header("location:index.php?key=tl&lang=".$_GET['lang']);			
		}
		else echo $s1;
	}
	
	//Xu ly sua the loai:
	if(isset($_POST['suaTL']))
	{
		$idMusic = $_POST['idMusic'];
		$idUser = $_POST['idUser'];
		$sl="update musics set name_music='{$_POST['TenTL']}', signer='{$_POST['signer']}', link_file='{$_POST['link_file']}', link_image='{$_POST['link_image']}' where Id=$idMusic";		
		if(mysql_query($sl)) {
			header("location:index.php?key=tl&idUser=".$idUser);
			echo "success";
		}
		else echo $sl;
		
	}
	
	
		//Xu ly them loai tin moi:
	if(isset($_POST['themLT']))
	{
		$sl="insert into loaitin values(NULL, '{$_POST['lang']}', '{$_POST['Ten']}','{$_POST['Ten_KhongDau']}', {$_POST['ThuTu']}, {$_POST['AnHien']}, {$_POST['idTL']})";
		if(mysql_query($sl)) header("location:index.php?key=lt&lang=".$_POST['lang']."&idTL=".$_POST['idTL']);
		else echo $sl; //test xong thi xoa
	}
	
	//Xy ly xoa loai tin:
	if(isset($_GET['xoaLT']))
	{
		$idTL=$_GET['idTL'];
		$idLT=$_GET['xoaLT'];
		$s1="delete from tin where idLT=$idLT";
		$s2="delete from loaitin where idLT=$idLT";
	if(mysql_query($s1))
		{
			if(mysql_query($s2)) header("location:index.php?key=lt&lang=".$_GET['lang']."&idTL=".$idTL);
			else echo $s2;
		}
		else echo $s1;
	}

	if(isset($_GET['xoaUser']))
	{
		$idUser=$_GET['xoaUser'];
		$s1="delete from user where id=$idUser";		
		if(mysql_query($s1)){			
			header("location:index.php?key=users&idUser=".$idUser);			
		}
		else echo $s1;
	}


	//Xu ly them tin moi:
	if(isset($_POST['themtin']))
	{
		
		if(isset($_FILES['ufile']))
		{
			$target="../dataupload/images/";
			$filename=basename($_FILES['ufile']['name']);
			$target.=$filename;
			$urlHinh="/tintuc/dataupload/images/".$filename;
			if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
			{
				//upload thanh cong, them tin vao database:
				$ngay=date("Y-m-d h:i:s",time());
				if(isset($_POST['TinNoiBat'])&&$_POST['TinNoiBat']=="on") $tnb=1;
				else $tnb=0;
				$sl="insert into tin values(NULL, '{$_POST['lang']}', '{$_POST['TieuDe']}', '{$_POST['TieuDe_KhongDau']}', '{$_POST['TomTat']}', '$urlHinh', '$ngay', 1, '{$_POST['idSK']}', '{$_POST['Content']}', '{$_POST['idLT']}', 0,$tnb , {$_POST['AnHien']})";
				if(mysql_query($sl)) header("location:tin.php?lang=".$_POST['lang']."&idTL=".$_POST['idTL']."&idLT=".$_POST['idLT']);
				else echo $sl;
			}
		}
	}
	
	
	
	
	//Cap nhat tin:
if(isset($_POST['suatin']))
{
		if(isset($_POST['idSK'])) $idSK=$_POST['idSK'];else $idSK=0;
		if(isset($_POST['TinNoiBat'])&&$_POST['TinNoiBat']=="on") $tnb=1; else $tnb=0;
		if($_POST['AnHien']) $anhien=1; else $anhien=0;
		$ngay=date("Y-m-d h:i:s",time());
		
	if(isset($_FILES['ufile'])&&$_FILES['ufile']['name']!="")
	{
		//Co thay doi hinh mo ta
		$target="../dataupload/images/";
		$filename=basename($_FILES['ufile']['name']);
		$target.=$filename;
		$link="/tintuc/dataupload/images/".$filename;
		
		if(move_uploaded_file($_FILES['ufile']['tmp_name'],$target))
		{
			
			$sl="update tin set lang='{$_POST['lang']}', TieuDe='{$_POST['TieuDe']}', TieuDe_KhongDau='{$_POST['TieuDe_KhongDau']}', TomTat='{$_POST['TomTat']}', urlHinh='$link', Ngay='$ngay', idSK=$idSK, Content='{$_POST['Content']}', idLT={$_POST['idLT']}, TinNoiBat=$tnb, AnHien=$anhien where idTin={$_POST['idTin']}";
			if(mysql_query($sl)) header("location:tin.php?lang=".$_POST['lang']."&idTL=".$_POST['idTL']."&idLT=".$_POST['idLT']); else echo $sl;
		}
		
	}
	else
	{
		//khong thay doi hinh mo ta:
		$sl="update tin set lang='{$_POST['lang']}', TieuDe='{$_POST['TieuDe']}', TieuDe_KhongDau='{$_POST['TieuDe_KhongDau']}', TomTat='{$_POST['TomTat']}', Ngay='$ngay', idSK=$idSK, Content='{$_POST['Content']}', idLT={$_POST['idLT']}, TinNoiBat=$tnb, AnHien=$anhien where idTin={$_POST['idTin']}";
			if(mysql_query($sl))header("location:tin.php?lang=".$_POST['lang']."&idTL=".$_POST['idTL']."&idLT=".$_POST['idLT']); else echo $sl;
	}
}

?>