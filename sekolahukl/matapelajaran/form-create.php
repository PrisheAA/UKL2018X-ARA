<?php

include  '../connect.php';

$query = "SELECT kode_guru,nama_guru FROM guru";
$result = mysqli_query($connect,$query);

 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <style media="screen">
     td {
         padding: 20px;
         text-align: left;
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
       padding: 10px;
       color: white;
      }

      body{
        margin: 100px 250px;
        background-image: url("../bg/d.png");
        background-size: cover;

      }
      h2{
        text-align-last: center;
        padding: 0;
        margin: 0;
        }

        form{
          width: 500px;
          height: 450px;
          text-align: center;
          margin: 0 auto;
          background-color: rgb(0,0,0,0.5);
          border-radius: 04px;
          margin: 0 auto;
          margin-top: 160px;
          font-size: 27px;
          color: white;
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
    <div class="form">
        <form action="create.php" method="post">
        <h2> Tambah Data Matapelajaran</h2>
       <p>
         <td><label for="kode_mapel"> Kode Mapel</label></td> <td> : </td>
         <td><input type="text" name="kode_mapel" id="kode_mapel" value=""></td>
       </p>
       <p>
         <td><label for="mapel"> Matapelajaran </label></td> <td> : </td>
         <td><input type="text" name="mapel" id="mapel" value=""></td>
       </p>
       <p>
         <td><label for="alokasi_waktu"> Alokasi Waktu  </label></td> <td> : </td>
         <td><input type="text" name="alokasi_waktu" id="alokasi_waktu" value=""></td>
       </p>
       <p>
         <td><label for="semester"> Semester </label></td> <td> : </td>
         <td><input type="text" name="semester" id="semester" value=""></td>
       </p>
       <p>
         <td><label for="guru"> Guru </label> </td> <td> : </td>
         <td><select name="kode_guru" id="kode_guru">
          <option value="-"> -- Pilih Salah Satu -- </option>
           <<?php
            while ($data = mysqli_fetch_assoc($result)) {
            ?>
            <option value="<?php echo $data['kode_guru']; ?>"> <?php echo $data['nama_guru']; ?>
            </option>
            <?php
            }
            ?>
         </select> </p>
       </tr>
       <tr>
         <td><button type="submit" name="btnSimpan" onclick="return validasiMapel()"> Simpan </button></td>
       </tr>
         </form>
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
