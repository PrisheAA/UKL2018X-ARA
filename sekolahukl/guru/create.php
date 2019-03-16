<?php

if(!(isset($_POST['btnSimpan'])))
{
  header("location: form-create.php");
}
include '../connect.php';
$nama_guru = $_POST['nama_guru'];
$jumlah_jam = $_POST['jumlah_jam'];
$alamat = $_POST['alamat'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "INSERT INTO guru (nama_guru, jumlah_jam, alamat, telp, email)
          VALUES ('$nama_guru','$jumlah_jam,', '$alamat', '$telp', '$email')";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);
      if ($num > 0)
       {
        header("location: read.php");
      }
      else {
        echo "Gagal tambah data";
      }
      echo "<a href='read.php'> Lihat Data </a>";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>
body{

}
    </style>
  </head>
  <body>

  </body>
</html>
