
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Setting Data Mahasiswa</title>
</head>
<body>
<form action="index.php" method='post'>

  <p><b>Bagian Input Data:</b></p>
  Alamat Mahasiswa Apakah Wajib Diisi: <!-- Set value sama seperti di cookie -->
  <input type="radio" name="Alamat" value="ya" <?php 

  if (!isset($_COOKIE['Alamat'])){
    echo "";
  }else{
    if($_COOKIE['Alamat']=="ya"){
    echo 'checked = "checked"';
    }
  }

   ?>required>Ya
  <input type="radio" name="Alamat" value="tidak" <?php 

  if (!isset($_COOKIE['Alamat'])){
    echo "";
  }else{
    if($_COOKIE['Alamat']=="tidak"){
    echo 'checked = "checked"';
    }
  }

   ?> required>Tidak
  <br>
  IPK Mahasiswa:
  <input type="text" name="IPK" value="<?php 

  if (!isset($_COOKIE['IPK'])){
    echo "";
  }else{
    echo $_COOKIE['IPK'];
  }

  ?>" required>
  <br><br><br>
  <p><b>Bagian Display Data:</b></p>
  Ukuran Font:
  <input type="text" name="Ukuran" value="<?php 

  if (!isset($_COOKIE['IPK'])){
    echo "";
  }else{
    echo $_COOKIE['Ukuran'];
  }


  ?>" required>
  <br>
  Tampilan Tulisan: <!--gk tau caranya untuk simpan di cookie checkbox -->
  <br> 
  <select size="1" name="styling" id="mode"><?php  
    if(isset($_COOKIE['Style'])){
      if($_COOKIE['Style']=="bold"){
        echo "<option value='bold' selected>bold</option>";
        echo "<option value='italic'>Italic</option>";
        echo "<option value='underline'>Underline</option>";
      }
      elseif ($_COOKIE['Style']=="italic") {
        echo "<option value='bold'>Bold</option>";
        echo "<option value='italic' selected>Italic</option>";
        echo "<option value='underline'>Underline</option>";
      }
      elseif($_COOKIE['Style']=="underline"){
        echo "<option value='bold'>Bold</option>";
        echo "<option value='italic'>Italic</option>";
        echo "<option value='underline' selected>Underline</option>";
      }
    }
    else{
      echo "<option value='bold'>Bold</option>";
      echo "<option value='italic'>Italic</option>";
      echo "<option value='underline'>Underline</option>";
    }
    ?>
  </select>
  <br>
  Alamat Apakah Perlu Ditampilkan?
  <input type="radio" name="APerrmision" value="ya" <?php  

    if (!isset($_COOKIE['APerrmision'])){
    echo "";
  }else{
    if($_COOKIE['APerrmision']=="ya"){
    echo 'checked = "checked"';
    }
  }

  ?>required>Ya
  <input type="radio" name="APerrmision" value="tidak" <?php 

  if (!isset($_COOKIE['APerrmision'])){
    echo "";
  }else{
    if($_COOKIE['APerrmision']=="tidak"){
    echo 'checked = "checked"';
    }
  }
   ?>required>Tidak
  <br>
  IPK Apakah Perlu Ditampilkan?
  <input type="radio" name="IPermission" value="ya"<?php 

  if (!isset($_COOKIE['IPermission'])){
    echo "";
  }else{
    if($_COOKIE['IPermission']=="ya"){
    echo 'checked = "checked"';
    }
  }
   ?> required>Ya
  <input type="radio" name="IPermission" value="tidak" <?php  
  if (!isset($_COOKIE['IPermission'])){
    echo "";
  }else{
    if($_COOKIE['IPermission']=="tidak"){
    echo 'checked = "checked"';
    }
  }
  ?> required>Tidak
  <br><br>
  <input type="submit" name="submit" value="Kirim">

</form>
<br>  
<a href="index.php">Kembali Ke Web Utama</a>

</body>
</html>