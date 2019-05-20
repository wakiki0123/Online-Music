<?php
  include("C:/xampp/htdocs/Assignment1/connect.php");      
      if (isset($_GET['idUser'])) $idUser = $_GET['idUser'];            
  ?>
<form id="form1" name="form1" method="get" action="">
  <p>
    <label for="lang">Ngôn Ngữ(Mặc định):</label>
    <select name="lang" id="lang" onchange="form1.submit()">
      <option value="vi">Tiếng Việt</option>      
    </select>
  </p>
  <input type="hidden" name="key" value="tl"/>
</form>
  <?php
  
  $kq=mysql_query("select * from musics order by Id");
  
  
  ?>
<table width="800" border="1">
  <tr>
    <td width="33">STT</td>
    <td width="186">Tên Bài Hát</td>
    <td width="229">Ca Sĩ</td>
    <td width="122">Số Lượt nghe</td>
    <td width="196"><a href="index.php?key=tlt">Thêm</a></td>
  </tr>
<?php
while($d=mysql_fetch_array($kq))
{ 
?>
  <tr>
    <td><?php echo $d['Id'];?></td>
    <td><?php echo $d['name_music'];?></td>
    <td><?php echo $d['signer'];?></td>
    <td><?php echo $d['turn_number']?></td>
    <td><a <?php echo 'href="process.php?xoaTL='.$d['Id'].'"' ?> onclick="return confirm('Ban co chac chan khong?');">Xoa</a> / <a <?php echo 'href="index.php?key=tls&idUser='.$idUser.'&idMusic='.$d['Id'].'"' ?>  >Sua</a></td>
  </tr>
  <?php }?>
</table>
