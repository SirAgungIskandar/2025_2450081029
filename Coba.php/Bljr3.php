<?php
require 'function.php';
$register = query("SELECT * FROM register");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>

  <table cellpading="10" cellspacing="0" border="1">
    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>
    </tr>

    <?php $i = 1;
    foreach ($register as $r): ?>
      <tr>
        <td><?= $i++; ?></td>
        <td> <img src="img/<?= $r['Gambar']; ?>" width="100"></td>
        <td> <?= $r['Nama']; ?></td>
        <td>
          <a href="detail.php?id=<?= $r['id']; ?>">lihat detail</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>

</html>