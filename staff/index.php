<?php
require '../include/conn.php';
if (!isset($_SESSION['idStaff'])) header('location:../');
$idstaff = $_SESSION['idStaff'];
$sql = "SELECT * FROM staff WHERE idStaff = $idstaff";
$row = $conn->query($sql)->fetch_object();
$namastaff = $row->namaStaff;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
	<title>My Webpage</title>
	<style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}
		header {
			background-color: #333;
			color: white;
			padding: 20px;
			text-align: center;
		}
		nav {
			background-color: #666;
			color: white;
			padding: 10px;
		}
		nav a {
			color: white;
			margin-right: 20px;
			text-decoration: none;
		}
		nav a:hover {
			text-decoration: underline;
		}
		section {
			padding: 20px;
			text-align: center;
		}
		footer {
			background-color: #ccc;
			color: #333;
			padding: 10px;
			text-align: center;
		}
	</style>
</head>
<body>
	<header>
		<h1>e-Libs</h1>
	</header>
	<nav>
		<a href="#">Laman Utama</a>
		<a href="#">Buku</a>
		<a href="#">Carian</a>
        <a href="#">Peminjam</a>
	</nav>
	<h3>Nama :
        <?php
        echo $namastaff;
        ?>
	<section>
		<h2>SELAMAT DATANG KE PERPUSTAKAAN ELEKTRONIK KAMPUNG DESA PULAU PISANG</h2>
		<img src="https://via.placeholder.com/300x200.png?text=Sample+Image" alt="Sample Image">
		<p>AHAD - KHAMIS 10.00pg - 6.00ptg</p><br>
		<p>JUMAAT & SABTU TUTUP</p>
	</section>
	<footer>
		<p>&copy; 2023 My Webpage. All rights reserved.</p>
	</footer>

	
</body>
</html>
