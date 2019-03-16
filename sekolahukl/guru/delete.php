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
<?php

include '../connect.php';

$kode_guru = $_GET['kode_guru'];

$query = "DELETE FROM guru WHERE kode_guru = $kode_guru";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if ($num > 0)
{
header("location: read.php");}
else {
  echo "Gagal hapus data <br>";
}
echo "<a href= 'read.php'> Lihat Data </a>";
 ?>
