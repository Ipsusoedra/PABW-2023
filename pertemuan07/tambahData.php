<?php
require 'function.php';

if(isset($_POST['tambah'])){
  if(tambah($_POST) > 0){
    echo "
    <script>
     alert('Data Berhasil Ditambahkan');
     document.location.href = 'latihan3.php';
    </script>
    ";
  }else{
    echo "
    <script>
     alert('Data Gagal Ditambahkan')
    </script>
    ";
  }
  

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tambah Data</title>
    <style>
      li {
        list-style : none;
      }
    </style>
  </head>
  <body>
    <h3>Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
      <li>
      <label>
        Nama :
        <input type="text" name="nama" id="" autofocus required>
      </label>
      </li>
      <li>
      <label>
        NRP :
        <input type="text" name="nrp" id="" autofocus required>
      </label>
      </li>
      <li>
      <label>
        E-MAIL :
        <input type="email" name="email" id="" autofocus required>
      </label>
      </li>
      <li>
      <label>
        JURUSAN :
        <input type="text" name="jurusan" id="" autofocus required>
      </label>
      </li>
      <li>
      <label>
        GAMBAR :
        <input type="text" name="gambar" id="" autofocus required>
      </label>
      </li>
      <li>
        <button type="submit" name="tambah" >Tambah Data</button>
      </li>

      
     
      
      
      
    </form>
  </body>
</html>
