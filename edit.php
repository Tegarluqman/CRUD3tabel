<?php
include("koneksi.php");

if(!isset($_GET['id_siswa'])){
    header("Location:join-table.php?");
}

$id = $_GET ['id_siswa'];
$sql =("SELECT * FROM tb_siswa INNER JOIN tb_jurusan ON 
tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp 
ON tb_siswa.id_spp = tb_spp.id_spp where tb_siswa.id_siswa='$id'");

$query=mysqli_query($con,$sql);
$row =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
    die ("data tidak ditemukan");
}

?>
<html>
          <head>
</head>
<body>
          <h1>EDIT</h1>
          <form action="proses_edit.php" method="POST">
                    <form>
                              <fieldset>
                                        <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>"/>
                                        <p>
                                                  <label for="nama">nama :</label>
                                                  <input type="text" name="nama" value="<?php echo $row['nama']?>"/>
                                        </p>
                                        <p>
                                                  <label for="kelas">kelas:</label>
                                                  <input type="text" name="kelas"value="<?php echo $row['kelas']?>"/>
                                        </p>
                                        <p>
                                                  <label for="jurusan">jurusan:</label>
                                                  <input type="text" name="jurusan"value="<?php echo $row['nama_jurusan']?>"/>
                                        </p>
                                        <p>
                                                  <label for="tahun">tahun :</label>
                                                  <input type="number" name="tahun"value="<?php echo $row['tahun']?>"/>
                                        </p>
                                        <p>
                                                  <label for="nominal">nominal :</label>
                                                  <input type="number" name="nominal"value="<?php echo $row['nominal']?>"/>
                                        </p>
                                        <p>
                                                  <input type="submit" value="simpan" name="simpan"/>
</p>
</fieldset>
</form>
</body>
</html>