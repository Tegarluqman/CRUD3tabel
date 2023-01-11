<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
          $nama=$_POST['nama'];
          $kelas=$_POST['kelas'];
          $jurusan=$_POST['jurusan'];
          $tahun=$_POST['tahun'];
          $nominal=$_POST['nominal'];

          $sql = "INSERT INTO tb_siswa(nama, kelas) VALUES ('$nama', '$kelas')";
          $query = mysqli_query($con, $sql);
          $sql = "INSERT INTO tb_jurusan(jurusan) VALUES ('$jurusan')";
          $query = mysqli_query($con, $sql);
          $sql = "INSERT INTO tb_spp(tahun, nominal) VALUES ('$tahun', '$nominal')";
          $query = mysqli_query($con, $sql);
          

          if($query){
                    header('location:join-table.php?status=sukses');
          }else{
                    header('location:join-table.php?status=gagal');
          }
          }
          ?>