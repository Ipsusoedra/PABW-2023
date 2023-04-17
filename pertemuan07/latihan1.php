<?php 
//  Koneksi ke DB dan pilih DB
$conn = mysqli_connect('localhost', 'root', '', 'pw_043040023');
//  Queri isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//  Ubah data ke dalam array
$rows = [];
while($row = mysqli_fetch_assoc($result)){
  $rows[] = $row;
}
//  Tampung ke variabel mahasiswa
$mahasiwa = $rows;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Latihan 1</title>
  </head>
  <body>
    <h3>Daftar Mahasiswa</h3>
    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>E-Mail</th>
        <th>Jurusan</th>
        <th>Aksi</th>
      </tr>

      <?php foreach ($mahasiwa as $mhs) :  ?>
      <tr>
        <td><?= $mhs['id']; ?></td>
        <td>
          <img src="assets/img/<?= $mhs['gambar']; ?>" alt="" width="100px" height="100px"/>
        </td>
        <td><?= $mhs['nrp']; ?></td>
        <td><?= $mhs['nama']; ?></td>
        <td><?= $mhs['email']; ?></td>
        <td><?= $mhs['jurusan']; ?></td>
        <td>
          <a href="">Tambah</a> |
          <a href="">Ubah</a> | 
          <a href="">Hapus</a>
        </td>
      </tr>
      <?php endforeach; ?>

    </table>
  </body>
</html>
