<?php
if(isset($_GET['lang'])) $lang=$_GET['lang'];
  else $lang="vi";
?>
<form id="form1" name="form1" method="get" action="">
  <p>
    <label for="lang">Ngon ngu:</label>
    <select name="lang" id="lang" onchange="form1.submit()">
      <option value="vi">Viet</option>
      <option value="en" <?php if($lang=='en') echo "selected='selected'";?>>Anh</option>
    </select>
  </p>
    <input type="hidden" name="key" value="lt"/>
  <p>
    <label for="idTL">The loai:</label>
    <select name="idTL" id="idTL" onchange="form1.submit()">
      <?php
  
  include('../connect.php');
  $kq=mysql_query("select * from theloai where lang='$lang' order by ThuTu");
  $i=1;
  while($d=mysql_fetch_array($kq))
	{ if($i==1) $idTL=$d['idTL'];$i=0;
  ?>
      <option value="<?php echo $d['idTL'];?>" <?php if(isset($_GET['idTL'])&&$_GET['idTL']==$d['idTL']){echo "selected='selected'"; $idTL=$_GET['idTL'];}?>><?php echo $d['TenTL'];?></option>
 <?php }?>
    </select>
  </p>
</form>
  
<table width="800" border="1">
  <tr>
    <td width="33">STT</td>
    <td width="186">Ten Loai Tin</td>
    <td width="229">Ten Khong Dau</td>
    <td width="122">Trang Thai</td>
    <td width="196"><a href="index.php?key=ltt&lang=<?php echo $lang;?>">Them</a></td>
  </tr>
<?php

	$kq=mysql_query("select * from loaitin where idTL=$idTL  order by ThuTu");
	while($d=mysql_fetch_array($kq)){
?>
  <tr>
    <td><?php echo $d['ThuTu'];?></td>
    <td><?php echo $d['Ten'];?></td>
    <td><?php echo $d['Ten_KhongDau'];?></td>
    <td><?php if($d['AnHien']) echo "Hien"; else echo "An";?></td>
    <td><a href="process.php?xoaLT=<?php echo $d['idLT'];?>&lang=<?php echo $d['lang'];?>&idTL=<?php echo $d['idTL'];?>" onclick="return confirm('Ban co chac chan khong?');">Xoa</a> / <a href="index.php?key=lts&idLT=<?php echo $d['idLT'];?>">Sua</a></td>
  </tr>
<?php }?>
</table>
