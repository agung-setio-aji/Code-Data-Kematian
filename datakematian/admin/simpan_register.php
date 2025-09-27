<?php
include "koneksi.php";


$id_admin = $_POST['id_admin'];
$username = $_POST['username'];
$password = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];

$query = "INSERT INTO admin VALUES(
    '$id_admin', '$username', '$password', '$nama_lengkap'
)";
$sql = mysqli_query($kon, $query);
if( $sql )
{
    header('location:http://localhost/datakematian/admin/login.php');
}
?>