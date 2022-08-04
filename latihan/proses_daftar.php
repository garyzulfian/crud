<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "INSERT INTO daftar_kursus(nama, keterangan, jadwal_mulai, jadwal_selesai)VALUES('$nama','$keterangan','$jadwal_mulai','$jadwal_selesai')";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Berhasil Daftar!')
    location.href = 'list_kursus.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Gagal untuk daftar!')
    location.href = 'daftar_kursus.php'
  </script>
<?php } ?>