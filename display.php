<?php
//ngecek gk bsa lngsung kesini
session_start();
if (!isset($_SESSION['NRP'])){
  header("Location: input.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
</head>
<body>
  <?php  
  for ($x = 0; $x <= count($_SESSION['NRP'])-1; $x++){
    $count = $x+1;
    if($_SESSION['Style'][$x] == 'bold'){
      echo "<p style = 'font-weight:bold;font-size:".$_SESSION['Ukuran'][$x]."px;'>".$count. ".<br>NRP : ".$_SESSION['NRP'][$x]
      ."<br>Nama : ".$_SESSION['Nama'][$x];
      if($_SESSION['APerrmision'][$x]=='ya'){
        echo "<br>Alamat : ".$_SESSION['Alamat'][$x];
      }
      if($_SESSION['IPermission'][$x]=='ya'){
        echo "<br>IPK : ".$_SESSION['IPK'][$x]."</p>";
      }
    }
    elseif($_SESSION['Style'][$x] == 'italic'){
      echo "<p style = 'font-style: italic;font-size:".$_SESSION['Ukuran'][$x]."px;'>".$count. ".<br>NRP : ".$_SESSION['NRP'][$x]
      ."<br>Nama : ".$_SESSION['Nama'][$x];
      if($_SESSION['APerrmision'][$x]=='ya'){
        echo "<br>Alamat : ".$_SESSION['Alamat'][$x];
      }
      if($_SESSION['IPermission'][$x]=='ya'){
        echo "<br>IPK : ".$_SESSION['IPK'][$x]."</p>";
      }
    }
    elseif($_SESSION['Style'][$x] == 'underline'){
      echo "<p style = 'text-decoration:underline;font-size:".$_SESSION['Ukuran'][$x]."px;'>".$count. ".<br>NRP : ".$_SESSION['NRP'][$x]
      ."<br>Nama : ".$_SESSION['Nama'][$x];
      if($_SESSION['APerrmision'][$x]=='ya'){
        echo "<br>Alamat : ".$_SESSION['Alamat'][$x];
      }
      if($_SESSION['IPermission'][$x]=='ya'){
        echo "<br>IPK : ".$_SESSION['IPK'][$x]."</p>";
      }
    }
  }
  ?>
</body>
</html>