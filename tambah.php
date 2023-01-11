<html>
          <head>
</head>
<body>
          <h1>form daftar</h1>
          <form action="proses_tambah.php" method="POST">
                    <form>
                              <fieldset>
                                        <p>
                                                  <label for="nama">nama:</label>
                                                  <input type="text" name="nama"/>
                                        </p>
                                        <p>
                                                  <label for="kelas">kelas:</label>
                                                  <input type="text" name="kelas"/>
                                        </p>
                                        <p>
                                                  <label for="jurusan">jurusan:</label>
                                                  <select name="jurusan">
                                                  <option value="RPL">rpl</option>
                                                  <option value="MM">mm</option>
                                                  <option value="TKRO">tkro</option>
                                                  <option value="AP">ap</option>
                                                  </select>

                                        </p>
                                        <p>
                                                  <label for="tahun">tahun:</label>
                                                  <input type="text" name="tahun"/>
                                        </p>
                                        <p>
                                                  <label for="nominal">nominal:</label>
                                                  <input type="text" name="nominal"/>
                                        </p>
                                        <p>
                                                  <input type="submit" value="daftar" name="tambah"/>
</p>
</fieldset>
</form>
</body>
</html>   