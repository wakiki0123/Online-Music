<?php
  include("C:/xampp/htdocs/Assignment1/connect.php");
  if(isset($_GET['idMusic'])){   
      $idMusic = $_GET['idMusic'];       
      if (isset($_GET['idUser'])) $idUser = $_GET['idUser'];
      else $idUser = 0;              
  } 
  else {$idMusic = 0;
    $idUser = 0;
  }
?>
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="lang">Ngon ngu:</label>
    <select name="lang" id="lang">
      <option value="vi">Viet</option>      
    </select>
  </p>
  <p>
    <label for="TenTL">Tên Bài Hát:</label>
    <input type="text" name="TenTL" id="TenTL" required />
  </p>
  <p>
    <label for="signer">Ca Sĩ:</label>
    <input type="text" name="signer" id="TenTL_KhongDau" required/>
  </p>
    <p>
    <label for="link_file">Link File:</label>
    <input type="text" name="link_file" id="TenTL_KhongDau" required/>
  </p>
  </p>
    <p>
    <label for="link_image">Link Hình :</label>
    <input type="text" name="link_image" id="TenTL_KhongDau" required/>
  </p>
  <p>
  	<input type="hidden" name="idMusic" <?php echo 'value="'.$idMusic.'"' ?>/>
    <input type="hidden" name="idUser" <?php echo 'value="'.$idUser.'"' ?>/>
    <input type="submit" name="suaTL" id="suaTL" value="Cập Nhật" />
  </p>
</form>
