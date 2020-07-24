<?php
include 'fungsi/config.php';
$rowArtikel = detailArtikel($_GET['id']);
$rowKomentar = tampilKomentar($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Artikel</title>
    <link rel="stylesheet" type="text/css" href="css/gayakomentar.css">
    <link rel="shortcut icon" href="assets/img/favicon.jpg">
  </head>
  <body>
    <div class="utama">
      <!-- <a href="artikel.php">
        <button class="btnkembali" type="button" name="button">Kembali</button>
      </a> -->
      <!-- ini akan muncul Judul Artikel yang ada di database -->
      <h3><?= $rowArtikel['judul'] ?></h3>
      <!-- ini akan muncul Isi Artikel yang ada di database -->
      <p class="isiArtikel">
        <?= $rowArtikel['isi']  ?>
      </p>
      <!-- ini adalah input nama -->
      <form method="post">
        <div class="namaKomen">
          <label>Nama</label>
          <br>
          <input type="text" name="nama" class="kotaknama">
        </div>
        <!-- ini adalah form komentar -->
        <div class="isiKomen">
          <label>Isi Komentar</label>
          <textarea name="isi" class="kotakkomen" rows="5"></textarea>
        </div>
        <!-- ini adalah tombol -->
        <button type="submit" name="btnkomen">Masukkan Komentar</button>
        <a href="artikel.php">
          <button class="btnkembali" type="button" name="button">Kembali</button>
        </a>
      </form>
      <br>
      <?php
        if (isset($_POST['btnkomen'])) {
          postKomentar($_POST, $_GET['id']);
          echo "<meta http-equiv='refresh' content='0.5;url=detail.php?id=".$rowArtikel['id']."'>"; //benar
          //echo "<meta http-equiv='refresh' content='1.5;url=detail.php?id='".$rowArtikel['id'].">";  //salah
          // echo "<meta http-equiv='refresh' content='1.5;url=detail.php?id='".$rowArtikel['id']."'>"; //salah
        }
      ?>
      <h3>Komentar</h3>
      <?php foreach ($rowKomentar as $row): ?>
        <div class="hasilKomen">
          <b><?= $row['nama'] ?></b>
          <p class="komentarOrang"><?= $row['komentar']  ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </body>
</html>
