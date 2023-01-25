<?php
include ("koneksi.php");
if(isset($_POST['simpan'])){
    $id=$_POST['id_siswa'];
          $nama=$_POST['nama'];
          $kls=$_POST['kelas'];
          $jrsn=$_POST['jurusan'];
          $tahun=$_POST['tahun'];
          $nom=$_POST['nominal'];
          
          

          $sql = "UPDATE tb_siswa SET nama='$nama', kelas='$kls' WHERE id_siswa=$id";
          $query = mysqli_query($con, $sql);
          $sql = "UPDATE tb_jurusan SET nama_jurusan='$jrsn' WHERE id_jurusan=$id";
          $query = mysqli_query($con, $sql);
          $sql = "UPDATE tb_spp SET tahun='$tahun', nominal='$nom' WHERE id_spp=$id";
          $query = mysqli_query($con, $sql);

          if($query){
                    header("Location:join-table.php?status=sukses");
          }else{
                    die ("gagal mengedit");
          }}else{
                    die("akses dilarang");
          }

          ?>