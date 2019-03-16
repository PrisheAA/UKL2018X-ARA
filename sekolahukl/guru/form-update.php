<?php
if (!(isset($_GET['kode_guru'])))
{
  header("location: read.php");
}
include '../connect.php';

$kode_guru =$_GET['kode_guru'];

$query = "SELECT * FROM guru WHERE kode_guru =$kode_guru ";

$result = mysqli_query($connect,$query);

$row = mysqli_fetch_assoc($result);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <style>
     table{
       width: 400px;
       height: 350px;
       text-align: center;
       margin: 0 auto;
       background-color: rgb(0,0,0,0.5);
       margin: 0 auto;
       margin-top: 150px;
       font-size: 20px;
       border-radius: 30px;
       transform: scale3d();
       color: white;
      }
    body{
      background-image: url("../bg/h.jpg");
      background-size: cover;
    }
    input{
  padding: 0;
  width: 100%;
  padding: 1% 0;
  border: none;
  border-bottom: 2px solid #333;
  transition: 0.4s;
  border-color: #bbbb;
}
input[type="submit"]
{
 width: 100%;
 margin-top: 10px;
 height: 35px;
 border: 2px solid #333;
 background-color: #333;
 color: #fff;
 font-family: sans-serif;
 font-weight: bold;
 transition: 0.4s;
}

input[type="submit"]:hover {
 background-color: white;
 color: #333;
}

     </style>
   </head>
   <body>
     <form action="update.php" method="post">
       <table>
         <tr>
           <td><label for="nama"> Nama guru </label></td>
           <td>:</td>
           <td> <input type="text" name="nama_guru" id="nama" value="<?php echo $row['nama_guru'];?>"> </td>
         </tr>
         <tr>
           <td><label for="jumlah_jam"> Jumlah jam </label></td>
           <td>:</td>
           <td> <input type="text" name="jumlah_jam" id="jumlah_jam" value="<?php echo $row['jumlah_jam'];?>"> </td>
         </tr>
         <tr>
           <td><label for="alamat"> Alamat </label></td>
           <td>:</td>
           <td> <input type="text" name="alamat" id="alamat" value="<?php echo $row['alamat'];?>"> </td>
         </tr>
         <tr>
           <td><label for="no_telp"> No. Telepon </label></td>
           <td>:</td>
           <td> <input type="text" name="telp" id="no_telp" value="<?php echo $row['telp'];?>"> </td>
         </tr>
         <tr>
           <td><label for="email"> Email </label></td>
           <td>:</td>
           <td> <input type="text" name="email" id="email" value="<?php echo $row['email'];?>"> </td>
         </tr>
         <tr>
           <td> <input type="hidden" name="kode_guru" value="<?php echo $row['kode_guru']; ?>"> </td>
           <td> <input type="submit" name="btnSimpan" value="simpan"> </td>
           <td></td>
         </tr>

       </table>
     </form>
   </body>
 </html>
