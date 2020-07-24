<?php
include 'fungsi/config.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Tambah Artikel</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <div class="">
      <h3>Tambah Artikel</h3>
      <form method="post">
        <div class="from_grup">
          <label>Judul</label>
          <input type="text" name="judul" class="from_control">
        </div>
        <div class="from_grup">
          <label>Isi Artikel</label>
          <textarea name="isi" class="from_control" rows="10"></textarea>
        </div>
        <button class="btn">
          Simpan
        </button>
      </form>
    </div>
  </body>
</html>
