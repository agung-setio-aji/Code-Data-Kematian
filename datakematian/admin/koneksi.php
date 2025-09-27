<?php
session_start();
$kon = mysqli_connect("localhost", "root", "", "data_kematian");

// Mengecek koneksi
if (!$kon) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>