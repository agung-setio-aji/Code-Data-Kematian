<?php
// membuat koneksi ke database
$kon = mysqli_connect("localhost", "root","", "data_kematian");

// memeriksa apakah koneksi berhasil atau tidak
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// mengambil nilai ID dari parameter URL
$no_nik = $_GET['no_nik'];

// menghapus data dari tabel
$query = "DELETE FROM datadk WHERE no_nik = $no_nik";
$sqli = mysqli_query($kon, $query);

if (!$sqli) {
    var_dump(mysqli_error($kon));
    die;
}
header('location: ./tampilan.php');
?>