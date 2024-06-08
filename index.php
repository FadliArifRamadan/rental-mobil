<?php
include'config/config.php';
$tgl=date('Y-m-d');
session_start();
if(isset($_SESSION['sesi'])){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta class="charset">
        <meta class="viewport" content="widht=device-widht, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="assets/style.css">
        <title>Rental Mobil</title>
    </head>
    <body>
        <header>
            <div class="jumbotron">
                <h1>Rental Mobil Uhuy</h1>
                <p>Jl. RA Kartini No.77, Kejaksan, Kec. Kejaksan, Kota Cirebon, Jawa Barat</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="menu.php">Profile</a></li>
                    <li><a href="menu.php">Tentang Kami</a></li>
                    <li><a href="menu.php">Produk Kami</a></li>
                    <li><a href="menu.php">Kontak Kami</a></li>
                    <li><a href="galeri.php">Galeri</a></li>
                    <li><a href="daftar_klien.php">Klien Kami</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <article class="card">
                <h2>Home</h2>
                <p>Selamat Datang Di Website Rental Mobil</p>
            </article>
        </main>
                <footer>
                <p>Rental Mobil Web &#169; 2019, Rental Mobil Uhuy</p>
                </footer>
            </div>
        </main>
    </body>
</html>
<?php
}
else {
	echo "<script>
		alert('Anda Harus Login Dahulu!');
	</script>";
	header('location:login.php');
}
?>