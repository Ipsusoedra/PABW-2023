<?php
function koneksi() { 
    return mysqli_connect('localhost', 'root', '', 'pw_043040023');
}

function query($query)
{
    $conn = koneksi();
    //  Queri isi tabel mahasiswa
    $result = mysqli_query($conn, $query);

    // Jika hasilnya 1
    if(mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }

    //  Ubah data ke dalam array
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $nrp = htmlspecialchars($data['nrp']);
    $email = htmlspecialchars($data['email']);
    $jurusan = htmlspecialchars($data['jurusan']) ;
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO mahasiswa VALUES (null, '$nama', '$nrp', '$email', '$jurusan', '$gambar'); ";

    $result = mysqli_query($conn, $query);

    echo mysqli_error($conn);
    return mysqli_affected_rows($conn);
 
}
    

?>