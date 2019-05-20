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
  
  $kq=mysql_query("select * from user order by Id");
  
  
  ?>
<table width="800" border="1">
  <tr>
    <td width="33">Id</td>
    <td width="100">Tên Tài Khoản</td>
    <td width="129">Họ</td>
    <td width="122">Tên</td>
    <td width="196">Email</td>
    <td width="100">Địa Chỉ</td>
    <td width="86">Edit</td>
  </tr>
<?php
while($d=mysql_fetch_array($kq))
{ 
?>
  <tr>
    <td><?php echo $d['Id'];?></td>
    <td><?php echo $d['User_Name'];?></td>
    <td><?php echo $d['first_name'];?></td>
    <td><?php echo $d['last_name']?></td>
    <td><?php echo $d['email']?></td>
    <td><?php echo $d['address']?></td>
    <td><a <?php echo 'href="process.php?xoaUser='.$d['Id'].'"' ?> onclick="return confirm('Ban co chac chan khong?');">Xoa</a></td>
  </tr>
  <?php }?>
</table>
