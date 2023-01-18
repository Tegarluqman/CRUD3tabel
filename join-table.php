<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table  border=1>
        <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Kelas</td>
            <td>Jurusan</td>
            <td>Tahun</td>
            <td>Nominal</td>
</tr>
<?php
include("koneksi.php");
$query = mysqli_query($con, "SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON 
tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp 
ON tb_siswa.id_spp = tb_spp.id_spp");
$no=1;
foreach($query as $row) :
?>
<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['kelas']; ?></td> 
    <td><?= $row['nama_jurusan']; ?></td>
    <td><?= $row['tahun']; ?></td>
    <td><?= $row['nominal']; ?></td>
   </tr>

  <?php endforeach; ?>


</body>
</html>