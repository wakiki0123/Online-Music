<?php
  include("C:/xampp/htdocs/Assignment1/connect.php");      
      if (isset($_GET['idUser'])) $idUser = $_GET['idUser'];                  
  ?>
<p>Chao ban <?php echo $_SESSION['ht']?></p>
                <p>
                 <form action="../logout.php" method="post" name="formThoat" id="formThoat">
                <input name="thoat" type="submit" value="Thoát" />
                </form>
                </p>