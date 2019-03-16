<?php
if (!(isset($_GET['kode_mapel'])))
{
  header("location: read.php");
}
    include '../connect.php';
    $kode_mapel = $_GET['kode_mapel'];
    $query = "SELECT kode_mapel, mapel, alokasi_waktu, semester, matapelajaran.kode_guru, nama_guru
              FROM matapelajaran LEFT JOIN guru USING(kode_guru)
              WHERE kode_mapel = '$kode_mapel'";

    $result = mysqli_query($connect, $query);
    $data_guru = mysqli_fetch_assoc($result);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
select{
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

   }
    </style>
</head>
<body>

<h1>Ubah Data Matapelajaran</h1>
    <form action="update.php" method="POST">
    <table>
        <tr>
            <td><label for="kode_mapel">Kode Matapelajaran</label> </td>
            <td> : </td>
            <td><input type="text" name="kode_mapel" id="kode_mapel" value="<?php echo $data_guru['kode_mapel']; ?>"></td>
        </tr>

        <tr>
        <td><label for="mapel">Matapelajaran</label> </td>
            <td> : </td>
            <td><input type="text" name="mapel" id="mapel" value="<?php echo $data_guru['mapel']; ?>"</td>
        </tr>

        <tr>
        <td><label for="alokasi_waktu">Alokasi Waktu</label> </td>
            <td> : </td>
            <td><input type="number" name="alokasi_waktu" id="alokasi_waktu" value="<?php echo $data_guru['alokasi_waktu']; ?>"></td>
        </tr>

        <tr>
        <td><label for="semester">Semester</label> </td>
            <td> : </td>
            <td><input type="number" name="semester" id="semester" value="<?php echo $data_guru['semester'];?>"></td>
        </tr>
        <tr>
        <td> <label for="nama_guru">Guru</label></td>
        <td> : </td>
        <td><select name="kode_guru" id="nama_guru">
          <option value="-">--Pilih salah satu--</option>
          <?php
              $query2 = "SELECT kode_guru, nama_guru FROM guru";
              $result2 = mysqli_query($connect,$query2);
              while($data = mysqli_fetch_assoc($result2)){ ?>
              <option value="<?php echo $data['kode_guru']; ?>" <?php if($data_guru['kode_guru'] == $data['kode_guru']) {echo "selected";} ?>>
                <?php echo $data['kode_guru'];?>
                 <?php echo $data['nama_guru'];?>
              </option>
              <?php
            }
          ?>
        </select>
      </td>
        <tr>
            <td></td> <td></td>
            <center>  <td>  <input type="submit" value="Simpan" name="btnSimpan" class="simpan" ></td> </center>
        </tr>
    </table>
    </form>
</body>
</html>
