<?php

if (isset($_POST['submit'])){

  echo "<b>Data Berhasil Tersimpan</b>";
  echo "<br><br>";

  setcookie("Alamat", $_POST['Alamat']);
  setcookie("IPK", $_POST['IPK']);
  setcookie("Ukuran", $_POST['Ukuran']); //ini belum
  setcookie("Style", $_POST['styling']);
  setcookie("APerrmision", $_POST['APerrmision']);
  setcookie("IPermission", $_POST['IPermission']);

  if(!is_numeric($_POST['Ukuran'])){ //ngecek apakah ukuran itu ada hurufnya
    die("Maaf, ukuran harus berupa angka");
  }
  else{
    setcookie("Ukuran", $_POST['Ukuran']);
  }

}
elseif(isset($_GET['submit'])){
  session_start();
  if(isset($_COOKIE['IPK'])){
    if(!isset($_SESSION['NRP'])){
      $_SESSION['NRP'] = array();
      $_SESSION['Nama'] = array();
      $_SESSION['Alamat'] = array();
      $_SESSION['IPK'] = array();
      $_SESSION['Ukuran'] = array();
      $_SESSION['Style'] = array();
      $_SESSION['APerrmision'] = array();
      $_SESSION['IPermission'] = array(); 
      $_SESSION['NRP'][] = $_GET['NRP'];  
      $_SESSION['Nama'][] = $_GET['Nama'];
      $_SESSION['Alamat'][] = $_GET['Alamat'];
      $_SESSION['IPK'][] = $_GET['IPK'];
      if(isset($_COOKIE['Ukuran'])){
        $_SESSION['Ukuran'][] = $_COOKIE['Ukuran'];
        $_SESSION['Style'][] = $_COOKIE['Style'];
        $_SESSION['APerrmision'][] = $_COOKIE['APerrmision'];
        $_SESSION['IPermission'][] = $_COOKIE['IPermission'];
      } 
      
    }
    else{
      $_SESSION['NRP'][] = $_GET['NRP'];  
      $_SESSION['Nama'][] = $_GET['Nama'];
      $_SESSION['Alamat'][] = $_GET['Alamat'];
      $_SESSION['IPK'][] = $_GET['IPK'];
      if(isset($_COOKIE['Ukuran'])){
        $_SESSION['Ukuran'][] = $_COOKIE['Ukuran'];
        $_SESSION['Style'][] = $_COOKIE['Style'];
        $_SESSION['APerrmision'][] = $_COOKIE['APerrmision'];
        $_SESSION['IPermission'][] = $_COOKIE['IPermission'];
      } 
    }
  }
  setcookie("Alamat", "", time() - 3600);
  setcookie("IPK", "", time() - 3600);
  setcookie("Ukuran", "", time() - 3600);
  setcookie("Style", "", time() - 3600);
  setcookie("APerrmision", "", time() - 3600);
  setcookie("IPermission", "", time() - 3600);
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UTS Web Programming KP F</title>
</head>
<body>
  <a href="setting.php">Setting Data</a>
  <br>
  <a href="input.php">Input Data Mahasiswa</a>
  <br>
  <a href="display.php">Display Data</a>
</body>
</html>