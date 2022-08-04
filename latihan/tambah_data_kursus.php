<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$keterangan = $_POST['keterangan'];
$jadwal_mulai = $_POST['jadwal_mulai'];
$jadwal_selesai = $_POST['jadwal_selesai'];

$query = "INSERT INTO data_kursus(nama, keterangan, jadwal_mulai, jadwal_selesai)VALUES('$nama','$keterangan','$jadwal_mulai','$jadwal_mulai')";
$result = mysqli_query($koneksi, $query);

if ($result) { ?>
  <script>
    alert('Data berhasil ditambahkan!')
    location.href = 'data_kursus.php'
  </script>
<?php
} else { ?>
  <script>
    alert('Data Gagal ditambahkan!')
    location.href = 'data_kursus.php'
  </script>
<?php } ?>