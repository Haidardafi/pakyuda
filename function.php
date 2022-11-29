<?php 
// memanggil function milik php mysqli_connect yg membutuhkan 4 buah parameter
// menangkap nilai yg dibutuhkan oleh function
// hostname
// username
// password
// dbName
$koneksi = mysqli_connect('localhost', 'root', '', 'sekolah');

function bebas ($TampungParameter) {
    global $koneksi;
    $hasil = mysqli_query ($koneksi, $TampungParameter);
    $rows = [];
    while ($row = mysqli_fetch_assoc ($hasil) ) {
        $rows [] = $row;
    }
    return $rows;
}

function hapus ($id) {
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id" );

    return mysqli_affected_rows($koneksi);
}

?>