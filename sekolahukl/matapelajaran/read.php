<?php
session_start();
if (!(isset($_SESSION['user'])))
{
  header("location: ../login/form-login.php");
}
include '../connect.php';
$query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, nama_guru
          FROM matapelajaran LEFT JOIN guru
          USING (kode_guru)
          ORDER BY kode_mapel";

$result = mysqli_query($connect,$query);

$num = mysqli_num_rows($result);

 ?>
 <!DOCTYPE html>
 <html>
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
       padding: 15px 50px;
       text-align: left;
      }
      tr:hover {background-color: #6495ED;}
       td {
         padding: 10px 50px;
         text-align: left;
         color: white;
      }
      body{
      margin: 10px 250px;
      background-image: url("../bg/n.jpg");
      background-size: cover;

      }
      .search{
        margin: 10px 250px;

      }
      #sidebar{
       height: 100%;
       width: 200px;
       position: fixed;
       z-index: 1;
       top : 0;
       left: 0;
       background-color:#191970 ;
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
      .link{
        margin-left: 800px;
        background-color: #87CEFA;
      }
      .link a{
        text-decoration: none;
        color: black;
        background-color: #87CEFA;
      }
      table{
        margin-right: 10px;
        margin-top: 12px;
      }
      input, select{
        padding: 5px;
      }
      button{
        margin-left: 750px;
        width: 200px;
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

     <table border="0">
        <h1> DATA MATAPELAJARAN</h1>
       <form id="search" action="search.php" method="get">
         <input type="search" name="cari" placeholder="masukan pencarian...">
         <select name="kategori" id="">
           <option value="kode_mapel"> Kode Matapelajaran </option>
           <option value="mapel">Matapelajaran</option>
           <option value="alokasi_waktu"> Alokasi Waktu </option>
           </select>
         <input type="submit" name="" value="cari">
         <button class="link" type="button" name="button" ><a href= "../matapelajaran/form-create.php"> Tambah Data</a></button>
       </form>
       <br>
       <br>
       <tr>
         <th>No.</th>
         <th>Kode Mapel</th>
         <th>Matapelajaran</th>
         <th>Alokasi Waktu</th>
         <th>Semester </th>
         <th>Guru</th>
         <th>Aksi</th>
       </tr>



<?php
if ($num > 0)
{
  $no = 1;
  while ($data = mysqli_fetch_assoc($result))
  {    ?>
<tr>
  <td> <?php echo $no; ?> </td>
  <td> <?php echo $data['kode_mapel'] ?> </td>
  <td> <?php echo $data['mapel'] ?> </td>
  <td> <?php echo $data['alokasi_waktu'] ?> </td>
  <td> <?php echo $data['semester'] ?> </td>

  <td> <?php
  $no++;
      if ($data['nama_guru'] != NULL)
       {
        echo $data['nama_guru'];
      }
      else
      {
      echo "-";
      }
      ?>
 </td>
  <td> <a href="form-update.php?kode_mapel=<?php echo $data['kode_mapel']; ?>"> Edit</a>
      <a href="delete.php?kode_mapel=<?php echo $data['kode_mapel']?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data')"> Hapus </a>
  </td>

</tr>
    <?php

  }

}
else
{
  echo "<tr><td colspan='7'> Tidak Ada Data </td></tr>";
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
