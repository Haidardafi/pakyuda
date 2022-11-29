<?php 
// koneksi ke  database
require 'function.php';

// $koneksi = mysqli_connect('localhost', 'root', '', 'sekolah');

$hasil = bebas ("SELECT * FROM siswa");
// var_dump ($hasil);
// exit;
// $sql = "SELECT * FROM siswa";

// $hasil = mysqli_query ($koneksi, $sql);

// $cetak = mysqli_fetch_assoc($hasil);

// while ( $cetak = mysqli_fetch_assoc($hasil) ) {
//     var_dump ($cetak);
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Murid</title>
</head>
<body>
    <h1>Daftar Murid</h1>

    <a href="tambah.php">Tambah Data</a>

    <table border="2" cellspacing="0" cellpadding="4">
      
    <tr>
            <td>Id</td>
            <td>Nama</td>
            <td>Nis</td>
            <td>Jurusan</td>
            <td>Email</td>
            <td>Gambar</td>
            <td>Aksi</td>            
        </tr>
        <?php $i = 1; ?>  
        <?php foreach ($hasil as $a) {  ?>        
        <tr>
            <td><?= $i; ?></td>
            <td><?php echo $a ["nama"] ?></td>
            <td><?= $a ["nisn"] ?></td>
            <td><?= $a ["jurusan"] ?></td>
            <td><?= $a ["email"] ?></td>
            <td><img src="img/1.jpg" alt="" width="100"></td>
            <td>
                <a href="ubah.php?id=<?= $cetak ['Siswa']?>">Ubah</a>   
                <a href="hapus.php?id=<?= $cetak ['Siswa']?>"onclick="return confirm ('yakin?')">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php } ?>
    </table>
</body>
</html>-