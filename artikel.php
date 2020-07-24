<?php include 'fungsi/config.php'; //ini adalah link untuk include file database
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Artikel</title>
    <link rel="stylesheet" type="text/css" href="css/gayaartikel.css">
    <link rel="shortcut icon" href="assets/img/favicon.jpg">
  </head>
  <body>
    <div class="utama">
      <div class="navbar">
        <ul>
          <li><a href="index.php" class="active">Beranda</a></li>
          <li><a href="profil.php">Profil</a></li>
          <li><a href="galeri.php">Galeri</a></li>
          <li><a href="artikel.php">Artikel</a></li>
  			</ul>
      </div>
      <div class="mainArtikel">
        <h1>Daftar Artikel</h1>
        <!-- <a href="inputArtikel.php">
          <button class="" type="button" name="inputbtn">
            Tambah Artikel
          </button>
        </a> -->
        <?php $data = tampilArtikel(); foreach ($data as $row):?>
          <div class="kotak_artikel">
            <a href="detail.php?id=<?= $row['id'] ?>">
              <?= $row['judul'] ?>
              <div class="jumlahkomentar"><?= jumlahKomentar($row['id']) ?> Komentar</div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </body>
</html>
