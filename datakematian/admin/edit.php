<?php
include 'koneksi.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
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

    // Update the record in the database
    $query = "UPDATE datadk SET 
        nama_p='$nama_p', 
        alamat_pel='$alamat_pel', 
        hub='$hub', 
        nama_m='$nama_m', 
        no_nik_m='$no_nik_m', 
        jeniskel='$jeniskel', 
        agama='$agama', 
        tgl_kem='$tgl_kem', 
        alamat_ter='$alamat_ter', 
        rt='$rt', 
        rw='$rw', 
        wkt_kem='$wkt_kem', 
        tmp_kem='$tmp_kem', 
        pnyb_kem='$pnyb_kem', 
        lks_pem='$lks_pem' 
        WHERE no_nik='$no_nik'";

    $sqli = mysqli_query($kon, $query);

    // Check if update was successful
    if ($sqli) {
        // Redirect back to the main page with a success message
        header("Location: tampilan.php?pesan=success");
        exit();
    } else {
        // Display an error message
        echo "Error updating record: " . mysqli_error($kon);
    }
} else {
    // Get the ID parameter from the URL
    $no_nik = $_GET['no_nik'];

    // Retrieve the record from the database
    $query = "SELECT * FROM datadk WHERE no_nik='$no_nik'";
    $sqli = mysqli_query($kon, $query);
    $row = mysqli_fetch_array($sqli);

    // Check if the record exists
    if (mysqli_num_rows($sqli) > 0) {
        $no_nik = $row['no_nik'];
        $nama_p = $row['nama_p'];
        $alamat_pel = $row['alamat_pel'];
        $hub = $row['hub'];
        $nama_m = $row['nama_m'];
        $no_nik_m = $row['no_nik_m'];
        $jeniskel = $row['jeniskel'];
        $agama = $row['agama'];
        $tgl_kem = $row['tgl_kem'];
        $alamat_ter = $row['alamat_ter'];
        $rt = $row['rt'];
        $rw = $row['rw'];
        $wkt_kem = $row['wkt_kem'];
        $tmp_kem = $row['tmp_kem'];
        $pnyb_kem = $row['pnyb_kem'];
        $lks_pem = $row['lks_pem'];
    } else {
        // Display an error message if the record doesn't exist
        echo "Record not found.";
        exit();
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
</head>
<body>
    <style>
        /* CSS Styles */

body {
  font-family: Arial, sans-serif;
  background-color: #f0f0f0;
  margin: 0;
  padding: 20px;
}

h2 {
  color: #333;
}

form {
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="number"],
input[type="date"] {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-bottom: 10px;
}

input[type="submit"] {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #555;
}

input[type="radio"] {
  margin-right: 5px;
}

br {
  display: block;
  margin-bottom: 10px;
  line-height: 24px;
}

/* Add more styles as needed */

    </style>
    <h2>Formulir Input Data</h2>
    <form method="POST" action="edit.php">
        <input type="hidden" name="no_nik" value="<?php echo $no_nik; ?>">
        <fieldset class="fieldset.container">
            <legend><strong>DATA PELAPOR :</strong></legend>
            <br>
                <label for="no_nik">NOMOR INDUK KEPENDUDUKAN (NIK)</label>
                <input type="text" name="no_nik" placeholder="Masukkan Nomor Induk Kependudukan (NIK)" required="required">
            <br>
            <br>
            <label for="nama_p">NAMA</label>
            <input type="text" name="nama_p" placeholder="Masukkan Nama Anda" required="required">
            <br>
            <br>
                <label for="alamat_pel">ALAMAT PELAPOR</label>
                <input type="text" name="alamat_pel" placeholder="Masukkan Alamat Anda" required="required">
            <br>
            <br>
                <label for="hub">HUBUNGAN DENGAN TERLAPOR</label>
                <input type="text" name="hub" placeholder="Hubungan dengan Terlapor" required="required">  
                </select><br><br>
        </fieldset>
        <br>
        
        <fieldset class="fieldset.container">
           <legend><strong>DATA ORANG YANG MENINGGAL :</strong></legend>
            <br>
                <label for="nama_m">NAMA</label>
                <input type="text" name="nama_m" placeholder="Masukan Nama Orang yang Meninggal" required="required">
            <br>
            <br>
            <label for="no_nik_m">NOMOR INDUK KEPENDUDUKAN (NIK)</label>
            <input type="text" name="no_nik_m" placeholder="Masukkan Nomor Induk Kependudukan (NIK)" required="required">
            <br>
            
            <br>
            <label for="jeniskel">JENIS KELAMIN</label>
            <input type="radio" name="jeniskel" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jeniskel" value="Perempuan">Perempuan
            </select><br>
            
            <br>
       <label for="agama">AGAMA</label>
            <input type="radio" name="agama" value="Islam">Islam
            <input type="radio" name="agama" value="Kristen">Kristen
            <input type="radio" name="agama" value="Hindu">Hindu
            <input type="radio" name="agama" value="Budha">Budha
            <input type="radio" name="agama" value="Khonghucu">Khonghucu
            </select><br>
            <br>
            <br>
            <label for="tgl_kem">Masukkan Tanggal Kematian</label>
            <input type="date" name="tgl_kem" placeholder="yyyy-mm-dd" required="required">
            <br>
            <br>
                <label for="alamat_ter">ALAMAT</label>
                <input type="text" name="alamat_ter" placeholder="Masukkan Alamat Terlapor" required="required">
            <br>

            <br>
                <label for="rt">RT</label>
                <input type="text" name="rt" placeholder="Masukkan RT" required="required">
            <br>
            <br>
                <label for="rw">RW</label>
                <input type="text" name="rw" placeholder="Masukkan RW" required="required">
            <br>
            
            <br>
            <label for="wkt_kem">Waktu Kematian</label>
            <input type="time" name="wkt_kem" placeholder="Masukkan Waktu Kematian" required="required">
            <p class="error-message">Waktu siang (am) : jam 00-12, contoh : 10.30 berarti jam setengah 11 siang.</p>
            <p class="error-message">Waktu malam (pm) : jam 12-00, contoh : 14.30 berarti jam setengah 3 sore / malam.</p>
            
            <br>
            <label for="tmp_kem">Tempat Kematian</label>
            <input type="text" name="tmp_kem" placeholder="Masukkan Tempat Kematian" required="required">
            <br>
            <br>
            <label for="pnyb_kem">Penyebab Kematian</label>
            <input type="text" name="pnyb_kem" placeholder="Masukkan Penyebab Kematian" required="required">
            <br>
            <br>
            <label for="lks_pem">Lokasi Pemakaman</label>
            <input type="text" name="lks_pem" placeholder="Masukkan Lokasi Pemakaman" required="required">
            <br>
        </fieldset>
        <input type="submit" value="Update">
    </form>
</body>
</html>
