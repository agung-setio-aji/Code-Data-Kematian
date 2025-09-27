<?php
include "koneksi.php";

/*! ERROR: SQL SALAH */
// $q = "INSERT INTO datadk SET ";
// $q .= "no_nik = '".$_POST['no_nik']."',";
// $q .= "nama_p = '".$_POST['nama_p']."',";
// $q .= "alamat_pel = ".$_POST['alamat_pel'].",";
// $q .= "hub = '".$_POST['hub']."',";
// $q .= "nama_m = '".$_POST['nama_m']."',";
// $q .= "no_nik_m = '".$_POST['no_nik_m']."',";
// $q .= "jeniskel = '".$_POST['jeniskel']."',";
// $q .= "agama = '".$_POST['agama']."',";
// $q .= "tgl_kem = '".$_POST['tgl_kem']."',";
// $q .= "rt = '".$_POST['rt']."',";
// $q .= "rw = '".$_POST['rw']."',";
// $q .= "wkt_kem = '".$_POST['wkt_kem']."',";
// $q .= "tmp_kem = '".$_POST['tmp_kem']."',";
// $q .= "pnyb_kem = '".$_POST['pnyb_kem']."',";
// $q .= "lks_pem = '".$_POST['lks_pem']."',";
// $sql = mysqli_query($kon, $q);
// if( $sql )
// {
//     header('location:http://localhost/datakematian/admin/tampilan.php');
// }

/*! Pembetulan */
$no_nik = $_POST['no_nik'];
$nama_p = $_POST['nama_p'];
$alamat_pel = $_POST['alamat_pel'];
$hub = $_POST['hub'];
$nama_m = $_POST['nama_m'];
$no_nik_m = $_POST['no_nik_m'];
$jeniskel = $_POST['jeniskel'];
$agama = $_POST['agama'];
$tgl_kem = $_POST['tgl_kem'];
$alamat_ter = $_POST['alamat_ter'];
$rt = $_POST['rt'];
$rw = $_POST['rw'];
$wkt_kem = $_POST['wkt_kem'];
$tmp_kem = $_POST['tmp_kem'];
$pnyb_kem = $_POST['pnyb_kem'];
$lks_pem = $_POST['lks_pem'];

$query = "INSERT INTO datadk VALUES(
    '$no_nik', '$nama_p', '$alamat_pel', '$hub',
    '$nama_m', '$no_nik_m', '$jeniskel', '$agama',
    '$tgl_kem', '$alamat_ter', '$rt', '$rw',
    '$wkt_kem', '$tmp_kem', '$pnyb_kem', '$lks_pem'
)";

$sqli = mysqli_query($kon, $query);


if (!$sqli) {
    var_dump(mysqli_error($kon));
    die;
}

header('location: ./tampilan.php');
