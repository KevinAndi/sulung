<html>
<head>
<title>Penjualan Tiket Pesawat</title>
</head>
 
<body bgcolor="maroon">
<h1> <marquee>MOHON ISI DATA INI DENGAN LENGKAP</marquee></h1>
<h1>Pendaftaran Siswa  TKJ</h1>
<form name="input_data" action="insert.php" method="post">
  <table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>id_agen</td>
            <td>:</td>
            <td><input type="text" name="id_agen" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>jenis_kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" maxlength="20" required="required" /></td>
        </tr>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="100" required="required" /></td>
        </tr>
        <tr>
            <td>umur</td>
            <td>:</td>
            <td><input type="text" name="umur" required="required" /></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" required="required" /></td>
        </tr>
		
		<tr>
            <td>No_HP</td>
            <td>:</td>
            <td><input type="text" name="No_HP" required="required" /></td>
        </tr>
		<tr>
            <td>password</td>
            <td>:</td>
            <td><input type="text" name="password" required="required" /></td>
        </tr>
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table> 
	</form>
<p><a href="view.php">Lihat Data</a>
  </p>
</body>
</html>