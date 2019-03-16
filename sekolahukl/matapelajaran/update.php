<?php
if (!(isset($_POST['btnSimpan'])))
{
  header("location: form-update.php");
}
include '../connect.php';

$kode_mapel = $_POST['kode_mapel'];
$mapel = $_POST['mapel'];
$alokasi_waktu = $_POST['alokasi_waktu'];
$semester = $_POST['semester'];
$kode_guru = $_POST ['kode_guru'];

$query = "UPDATE matapelajaran SET mapel = '$mapel',
                                alokasi_waktu = '$alokasi_waktu',
                                semester = '$semester',
                                kode_guru = '$kode_guru'
          WHERE kode_mapel = '$kode_mapel'";

$result = mysqli_query($connect,$query);
$num = mysqli_affected_rows($connect);

if($num > 0 )
    {
        echo"Berhasil update data <br>";
    }
    else
    {
        echo "Gagal update data <br>";
    }

    echo "<a href='read.php'>Lihat Data </a>"
?>
