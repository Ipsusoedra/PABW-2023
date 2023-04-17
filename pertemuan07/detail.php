<?php
require 'function.php';

// Pilih berdasarkan id
$id = $_GET['id'];

//  Tampung ke variabel mahasiswa
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Detail</title>

    <style>
      li {
        list-style : none;
      }
    </style>
  </head>
  <body>
    <h3>Detail Mahasiswa</h3>
    <ul>
      <li><img src="assets/img/<?= $mhs['gambar']; ?>" alt="" width="500px" height="500px" ></li>
      <li>NRP : <?= $mhs['nrp']; ?></li>
      <li>Nama : <?= $mhs['nama']; ?></li>
      <li>E-mail : <?= $mhs['email']; ?></li>
      <li>Jurusan : <?= $mhs['jurusan']; ?></li>
      <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
      <li><a href="latihan3.php">Back to mahasiswa</a></li>
    </ul>
  </body>
</html>
