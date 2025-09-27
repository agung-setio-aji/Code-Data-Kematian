<?php
session_start();
if (isset($_SESSION['email'])) {
	echo '<scrip>window.location.replace("./index.html");</script>';
} else {
	$email = "purutrejo@gmail.com";
	$password = "12345678";
	if (isset($_POST['email']) && isset($_POST['password'])) {
		if ($_POST['email'] == $email && $_POST['password'] == $password) {
			//session_start();
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['password'] = $_POST['password'];
		} else {
			echo "<center><h1>Gagal!, jangan biarkan email & password kosong</h1></center>";
		}
	}
}
