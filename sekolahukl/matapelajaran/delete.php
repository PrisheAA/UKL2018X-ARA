<?php

include '../connect.php';
$kode_mapel = $_GET['kode_mapel'];
$query = " DELETE FROM matapelajaran WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect,$query);

$num = mysqli_affected_rows($connect);

if ($num > 0)
{
echo " Berhasil Hapus Data <br> ";
}
else {
  echo "Gagal Hapus Data <br>";
}
echo "<a href='read.php'> Lihat Data </a>";
 ?>
