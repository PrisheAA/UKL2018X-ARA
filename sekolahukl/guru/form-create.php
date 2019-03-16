
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
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
      body{
        margin: 100px 250px;
        background-image: url("../bg/d.png");
        background-size: cover;

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
        font-size: 30px;
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
<h2> Tambah Data Guru</h2>
<p>
 <td><label for="nama_guru"> Nama Guru</label></td> <td> : </td>
 <td><input type="text" name="nama_guru" id="nama_guru" value=""></td>
</p>
<p>
 <td><label for="jumlah_jam"> Jumlah Jam </label></td> <td> : </td>
 <td><input type="text" name="jumlah_jam" id="jumlah_jam" value=""></td>
</p>
<p>
 <td><label for="alamat"> Alamat  </label></td> <td> : </td>
 <td><input type="text" name="alamat" id="alamat" value=""></td>
</p>
<p>
 <td><label for="no_telp"> No. Telepon  </label></td> <td> : </td>
 <td><input type="text" name="no_telp" id="no_telp" value=""></td>
</p>
<p>
 <td><label for="email"> Email  </label></td> <td> : </td>
 <td><input type="text" name="email" id="email" value=""></td>
</p>
</p>
<div class="button">
  <button type="submit" name="btnSimpan"> Simpan </button>
</div>
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
