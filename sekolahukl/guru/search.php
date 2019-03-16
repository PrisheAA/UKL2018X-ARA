<?php
include '../connect.php';
$cari = $_GET['cari'];
$kategori = $_GET['kategori'];
$query = "SELECT * FROM guru WHERE nama_guru LIKE '%$cari%'";
$result = mysqli_query($connect,$query);
$num = mysqli_num_rows($result);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     tr{
         background-color: rgb(0,0,0,0.8);
       }
       tr a{
         color: white;
       }
       th {
    background-color: #191970;
    color: white;
    padding: 10px 43px;
    text-align: left;
  }
  tr:hover {background-color: #6495ED;}
   td {
      padding: 10px 43px;
      text-align: left;
      color: white;
  }
  body{
   margin: 10px 250px;
   background-image: url("../bg/n.jpg");
   background-size: cover;
  }
  #sidebar{
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top : 0;
    left: 0;
    background-color: #191970;
    padding-top: 20px;
  }
  #sidebar a{
    text-decoration: none;
    margin: 0px;
    background-color: #87CEFA;
    padding: 10px 35px;
    display:grid;
    color: black;
  }
  #sidebar h1 {
    margin: auto;
    text-align: center;
    color: white;
  }
      .search{
      padding: 10px;
    }
    input, select{
      padding: 5px;
    }
    h1{
      margin-left: 350px;
    }
    img{
  padding: 3px 1px;
  width: 100px;
  height: auto;
  margin-left: 50px;
}
</style>
   </head>
 <body>

   <table border = '0'>
     <h1> DATA GURU</h1>
     <form id="search" action="search.php" method="get">
     <input type="search" name="cari" placeholder="masukan pencarian...">
     <select name="kategori" id="">
     <option>--Pilih--</option>
     <option value="kode_guru"> Kode </option>
     <option value="nama_guru"> Guru </option>
     </select>
     <input type="submit" name="" value="cari">
     </form>
     <br>
     <br>
     <br>
     <br>
     <tr>
       <th>Kode Guru</th>
       <th>Nama Guru</th>
       <th>Jumlah jam</th>
       <th>Alamat</th>
       <th>Telepon</th>
       <th>Email</th>
       <th>Aksi</th>
     </tr>
     <?php
if ($num >0)
{
$no = 1;
while ($data = mysqli_fetch_assoc($result))
{
  echo "<tr>";
  echo "<td>".  $no . "</td>";
  echo "<td>" . $data['nama_guru'] . "</td>";
  echo "<td>" . $data['jumlah_jam']. "</td>";
  echo "<td>" . $data['alamat']. "</td>";
  echo "<td>" . $data['telp']. "</td>";
  echo "<td>" . $data['email']. "</td>";
  echo "<td><a href ='form-update.php?kode_guru=". $data['kode_guru']. "'>Edit</a> | ";
  echo "<a href ='delete.php?kode_guru=". $data['kode_guru']."' onclick='return confirm(\"Apakah Anda Yakin ingin menghapus data?\")'>Hapus</a> </td> ";
  echo "</tr>";
  $no ++;
}
}
else {
echo "<td colspan = '3'> Tidak ada data </td>";
}
      ?>
   </table>
   <div id="sidebar">
    <img src="../bg/school.png">
   <h1>SEKOLAH</h1>
   <br>
   <br>
   <a href="../guru/read.php"> <b> GURU</b> </a>
   <hr border = "1">
   <a href="../matapelajaran/read.php"><b> MATAPELAJARAN</b></a>
   <hr border="1">
   <a href="../login/logout.php"> <b>LOGOUT</b></a>
   <hr border="1">
   </div>
   </body>
</html>
