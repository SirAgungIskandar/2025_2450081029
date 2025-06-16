<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "bljr.php");


// query ke database
$result = mysqli_query($conn, "SELECT * FROM register");

// Ubah data ke dalam array
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
   $rows[] = $row;
}


// Tampung kedalam mahasiswa
$register = $rows;
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
         <th>Alamat</th>
         <th>Nim</th>
         <th>jurusan</th>
         <th>Aksi</th>
      </tr>

      <?php $i = 1;
      foreach ($register as $r): ?>
         <tr>
            <td><?= $i++; ?></td>
            <td> <img src="img/<?= $r['Gambar']; ?>" width="100"></td>
            <td> <?= $r['Nama']; ?></td>
            <td><?= $r['Alamat']; ?></td>
            <td><?= $r['Nim']; ?></td>
            <td> <?= $r['Jurusan']; ?></td>
            <td>
               <a href="">ubah</a> | <a href=""> hapus </a>
            </td>
         </tr>
      <?php endforeach; ?>
   </table>

</html>