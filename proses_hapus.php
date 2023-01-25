<?php
include("koneksi.php");

$id = $_GET ['id_siswa'];

mysqli_query($con,"DELETE FROM tb_jurusan where id_jurusan='$id'");
mysqli_query($con,"DELETE FROM tb_spp where id_spp='$id'");
mysqli_query($con,"DELETE FROM tb_siswa where id_siswa='$id'");



          header("Location:join-table.php?status-sukses");

?>