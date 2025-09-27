<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        nav {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        nav ul li {
            display: inline-block;
            margin-right: 30px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        nav ul li a.active, nav ul li a:hover {
            color: #C90000;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            font-size: 28px;
        }

        p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
        }

        .profile-details {
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        h2 {
            margin-top: 0;
            font-size: 24px;
        }

        .profile-info p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="profil.php" class="active">Profil</a></li>
            <li><a href="tampilan.php">Data Kematian</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Halaman Profil</h1>
        <p>Selamat datang di halaman profil. Ini adalah tempat untuk menampilkan informasi tentang Anda.</p>
        <div class="profile-info">
            <?php
                // Menggantikan dengan koneksi database Anda
                include "koneksi.php";

                // Mengambil data profil dari database (misalnya tabel 'users')
                $sql = "SELECT * FROM admin WHERE id_admin = 1"; // Ubah 1 dengan ID pengguna yang sesuai
                $result = $kon->query($sql);

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo '<div class="profile-details">';
                    echo '<h2>Informasi Profil</h2>';
                    echo '<p>Username: ' . $row['username'] . '</p>';
                    echo '<p>Password: ' . $row['password'] . '</p>';
                    echo '<p>Nama Lengkap: ' . $row['nama_lengkap'] . '</p>';
                    echo '</div>';
                } else {
                    echo "Data tidak ditemukan";
                }

                $kon->close();
            ?>
        </div>
    </div>
</body>
</html>
