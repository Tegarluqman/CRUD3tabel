<?php
include("koneksi.php");
if(!isset($_GET['id'])){
          header("Location:barang.php?");
}
$kode=$_GET['id'];
$sql="SELECT*FROM barang WHERE id=$kode";
$query=mysqli_query($db,$sql);
$barang =mysqli_fetch_assoc($query);

if(mysqli_num_rows($query)<1){
          die ("data tidak ditemukan");
}

?>
html>
          <head>
</head>
<body>
          <h1>form tambah barang</h1>
          <form action="proses-edit-barang.php" method="POST">
                    <form>
                              <fieldset>
                                        <input type="hidden" name="id" value="<?php echo $barang['id']?>"/>
                                        <p>
                                                  <label for="nama">nama barang:</label>
                                                  <input type="text" value="<?php echo $barang['nama']?>"/>
                                        </p>
                                        <p>
                                                  <label for="stok">stok barang:</label>
                                                  <input type="number" value="<?php echo $barang['stok']?>"/>
                                        </p>
                                        <p>
                                                  <label for="harga">harga barang:</label>
                                                  <input type="text" value="<?php echo $barang['harga']?>"/>
                                        </p>
                                        <p>
                                                  <input type="submit" value="simpan" name="simpan"/>
</p>
</fieldset>
</form>
</body>
</html>