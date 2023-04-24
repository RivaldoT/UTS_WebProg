<?php
//ngecek gk bsa lngsung kesini
if (!isset($_COOKIE['IPK'])){
  header("Location: setting.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
</head>
<body>
<form action='index.php' method='get'>
  Masukan NRP:
  <input type="text" name="NRP" required>
  <br>
  Nama Mahasiswa:
  <input type="text" name="Nama" required>
  <br>
  Alamat Mahasiswa:
  <br>
  <textarea name="Alamat" cols="30" rows="5" <?php 

  if ($_COOKIE['Alamat'] == 'ya') {
    echo "required";
  }


   ?>></textarea>
  <br>
  IPK Mahasiswa:
  <input type="text" name="IPK" value="<?php echo $_COOKIE['IPK']?>" required>
  <br><br>
  <input type="submit" name="submit" value="Kirim"> 
</form>  
<br>
<a href="index.php">Kembali Ke Web Utama</a>

</body>
</html>