<!DOCTYPE html>
<html>
<head>
    <title>Kontak</title>
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
            max-width: 960px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            margin-top: 0;
            font-size: 24px;
            text-align: center;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-group {
            margin-bottom: 20px;
            width: 100%;
            max-width: 400px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        textarea {
            height: 150px;
        }

        .submit-btn {
            background-color: #C90000;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .submit-btn:hover {
            background-color: #A20000;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.html">Beranda</a></li>
            <li><a href="profil.php">Profil</a></li>
            <li><a href="tampilan.php">Data Kematian</a></li>
            <li><a href="kontak.php" class="active">Kontak</a></li>
            <li><a href="login.php">Logout</a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>Hubungi Kami</h1>
        <div class="contact-form">
            <div class="input-group">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="input-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button class="submit-btn" type="submit">Kirim Pesan</button>
        </div>
    </div>
</body>
</html>
