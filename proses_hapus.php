<?php
include("koneksi.php");
isset($_GET['id']);
$kode=$_GET['id'];
$sql="DELETE FROM tb_pasien where id=$kode";
$query=mysqli_query($koneksi,$sql);

if($query){
          header("Location:pasien.php?status-sukses");
}else{
          die("akses dilarang");
}
?>