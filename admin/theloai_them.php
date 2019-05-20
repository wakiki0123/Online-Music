<?php
  include("C:/xampp/htdocs/Assignment1/connect.php");      
      if (isset($_GET['idUser'])) $idUser = $_GET['idUser'];            
  ?>
<form id="form1" name="form1" method="post" action="process.php">
  <p>
    <label for="lang">Ngôn Ngữ(Mặc Định):</label>
    <select name="lang" id="lang">
      <option value="vi">Việt</option>
      <option value="en">Anh</option>
    </select>
  </p>
  <p>
    <label for="name_music">Tên Bài Hát:</label>
    <input type="text" name="name_music" id="name_music" required/>
  </p>
  <p>
    <label for="link_image">Link Hình Ảnh:</label>
    <input type="text" name="link_image" id="link_image" required/>
  </p>
  <p>
    <label for="link_file">Link File:</label>
    <input type="text" name="link_file" id="link_file" required/>
  </p>
   <p>
    <label for="signer">Ca Sĩ:</label>
    <input type="text" name="signer" id="signer" required/>
  </p>
  <p>
    <label for="Album">Album:</label>
    <input type="text" name="album" id="album" required/>
  </p>
  <p>
    <label for="size">Size:</label>
    <input type="text" name="size" id="size" required/>
  </p>
  <p>
    <input type="hidden" name="idUser" <?php echo 'value="'.$idUser.'"' ?>/>
    <input type="submit" name="addMusic" id="themTL" value="Thêm" />
  </p>
</form>
