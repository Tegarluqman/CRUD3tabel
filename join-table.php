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
            <td>AKSI</td>
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

    <td><a href="edit.php?id_siswa=<?php echo $row['id_siswa'];?>">edit</a>
    <a href="proses_hapus.php?id_siswa=<?php echo $row['id_siswa'];?>">hapus</a></td>
   </tr>

   <a href="tambah.php?id_siswa=<?php echo $row['id_siswa'];?>">TAMBAH</a>


  <?php endforeach; ?>


</body>
</html>