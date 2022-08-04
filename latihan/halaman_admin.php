<?php include 'header_admin.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
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
    <h5 class="card-title">Ini adalah halaman admin</h5>
    <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
    <a href="data_mahasiswa.php" class="btn btn-primary">Data Mahasiswa</a>
    <a href="data_kursus.php" class="btn btn-primary">Data Kursus</a>
  </div>
  <?php include 'footer.php'; ?>
</div>
</body>
</html>