<?php
include "koneksi.php";

$sql = "SELECT * FROM datadk ORDER BY no_nik ASC";
$sql_q = mysqli_query($kon,$sql);
if( ! $sql_q)
{
    echo"Query gagal";
}

?>
<link href="style.css" type= "text/css" rel="stylesheet" />
<header class="un">
    <div><center><img src="logo.png"></center>
        <h1>
            <p>
            <center>KELURAHAN PURUTREJO</center>
            </p>
            <h1>
            <center>PELAPORAN DAN PENCATATAN</center>
            <center>DATA KEMATIAN</center>
            </h1>
            <h3>
            <center>PELAYANAN PENCATATAN DATA KEMATIAN KELURAHAN PURUTREJO</center>
            </h3>
        </h1>
    </div>
</header>
<table border="1px" width="100%">
    <tr align="center">
        <th>NO</th>
        <th>NIK PELAPOR</th>
        <th>Nama Pelapor</th>
        <th>Alamat Pelapor</th>
        <th>Hubungan</th>
        <th>Nama Terlapor</th>
        <th>NIK</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Tanggal Kematian</th>
        <th>Alamat Terlapor</th>
        <th>RT</th>
        <th>RW</th>
        <th>Waktu Kematian</th>
        <th>Tempat Kematian</th>
        <th>Penyebab Kematian</th>
        <th>Lokasi Pemakaman</th>   
        <th>Aksi</th>       
       
    </tr>
        <?php
			$no = 1;//untuk pengurutan nomor 				
			//melakukan perulangan
			while($row = mysqli_fetch_array($sql_q)) {
		?>				
		<tr>
		    <td><?= $no; ?></td>
			<td><?= $row['no_nik']; ?></td>
            <td><?= $row['nama_p']; ?></td>
            <td><?= $row['alamat_pel']; ?></td>
            <td><?= $row['hub']; ?></td>
            <td><?= $row['nama_m']; ?></td>
            <td><?= $row['no_nik_m']; ?></td>
            <td><?= $row['jeniskel']; ?></td>
            <td><?= $row['agama']; ?></td>
            <td><?= $row['tgl_kem']; ?></td>
            <td><?= $row['alamat_ter']; ?></td>
            <td><?= $row['rt']; ?></td>
            <td><?= $row['rw']; ?></td>
            <td><?= $row['wkt_kem']; ?></td>
            <td><?= $row['tmp_kem']; ?></td>
            <td><?= $row['pnyb_kem']; ?></td>
            <td><?= $row['lks_pem']; ?></td>
			<td>
		        <a href="page/edit.php?id=<?= $row['no_nik']; ?>" class="btn btn-sm btn-warning">Edit</a>
                <br>
                <br>
				<a href="page/hapus.php?id=<?= $row['no_nik']; ?>"class="btn btn-sm btn-danger"
				onclick="return confirm('anda yakin ingin hapus?');">Hapus</a>
			</td>
		</tr>
        <?php $no++; } ?>
</table>
<form method="post">
    <a href="index.html" class="btn-back">Kembali</a>
    <a href="form.html" class="inp" type="submit" name="submit">Input Data</a>
</form>
