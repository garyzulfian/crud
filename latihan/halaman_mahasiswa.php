<?php include 'header_mahasiswa.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Mahasiswa</title>
</head>
<body>
	<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>
	<div class="card im-box">
  <h5 class="card-header">Selamat Datang</h5>
  <div class="card-body">
    <h5 class="card-title">Ini adalah halaman mahasiswa</h5>
    <p>Hai <b><?php echo $_SESSION['username']; ?></b> kamu telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="daftar_kursus.php" class="btn btn-primary">Daftar Kursus</a>
    </div>
  <?php include 'footer.php'; ?>
</div>
</body>
</html>