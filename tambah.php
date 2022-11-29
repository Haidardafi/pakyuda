<?php

// koneksi
require 'function.php';

if ( isset ($_POST ["submit"]) ) {

$nama = $_POST ['nama'];
$nisn = $_POST ['nisn'];
$jurusan = $_POST ['jurusan'];
$email = $_POST ['email'];
$gambar = $_POST ['gambar'];

$query = "INSERT INTO tbl_sekolah VALUES (
    '',
    '$nama',
    '$nisn',
    '$jurusan',
    '$email',
    '$gambar'
        )";

    mysqli_query ($koneksi, $query);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
</head>
<body>
    
    <h1>Form Tambah Data Siswa</h1>

    <form action="" method="post">
        <ul>
            <li>    
                <label for="nama">NAMA
                    <input type="text" name="nama" id="nama" >
                </label><br><br>
            </li>
            <li>
                <label for="nisn">NISN
                    <input type="text" name="nisn" id="nisn" >
                </label><br><br>
            </li>
            <li>
                <label for="jurusan">JURUSAN
                    <input type="text" name="jurusan" id="jurusan" >
                </label><br><br>
            </li>
            <li>
            <label for="email">EMAIL
                <input type="text" name="email" id="email" >
            </label><br><br>
            <li>
                <label for="gambar">GAMBAR
                    <input type="file" name="gambar" id="gambar" >
                </label><br><br>
            </li>
            <li>
                <button type="submit" name="submit">Kirim</button>
            </li>
        </ul>
    </form>
</body>
</html>