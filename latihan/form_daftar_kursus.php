<?php include 'header_mahasiswa.php'; ?>
<!-- content -->
<div class="container mt-5">
  <div class="card im-box">
    <h5 class="card-header">Daftar Kursus</h5>
    <div class="card-body">

      <?php
      $id = $_GET['id'];
      $data = mysqli_query($koneksi, "SELECT * FROM data_kursus WHERE id = $id");
      foreach ($data as $row) : ?>

        <form action="proses_daftar.php" method="POST">
          <input type="hidden" name="id" class="form-control" value="<?= $row['id'] ?>">
          <div class="form-group">
            <label for="">Nama Kursus</label>
            <input type="text" name="nama" class="form-control" readonly value="<?= $row['nama'] ?>">
          </div>
          <div class="form-group">
            <label for="">Keterangan</label>
            <input type="text" name="keterangan" class="form-control" readonly value="<?= $row['keterangan'] ?>">
          </div>
          <div class="form-group">
            <label for="">Jadwal Mulai</label>
            <input type="date" name="jadwal_mulai" class="form-control" readonly value="<?= $row['jadwal_mulai'] ?>">
          </div>
          <div class="form-group">
            <label for="">Jadwal Selesai</label>
            <input type="date" name="jadwal_selesai" class="form-control" readonly value="<?= $row['jadwal_selesai'] ?>">
          </div>
          <div class="form-group">
            <label for="">KRS</label>
            <input type="file" name="krs" class="form-control" readonly value="<?= $row['krs'] ?>">
          </div>
          <div class="form-group">
            <button type="reset" class="btn btn-danger ">Close</button>
            <button type="submit" name="submit" class="btn btn-primary ">Submit</button>
          </div>
        </form>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<!-- ./content -->
