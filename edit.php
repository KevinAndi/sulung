<?php
include('config.php');
?>
 
<html>
<head>
<title>Belajar PHP</title>
</head>
 
<body bgcolor="#FCFB83">
<h1>Form Input Data</h1>
 
<?php
$id = $_GET['id'];
 
$query = mysql_query("select * from tb_agen where id_agen='$id'") or die(mysql_error());
 
$data = mysql_fetch_array($query);
?>
 
<form name="update_data" action="update.php" method="post">
<input type="hidden" name="id_agen" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
        <tr>
            <td>id_agen</td>
            <td>:</td>
            <td><input type="text" name="id_agen" maxlength="20" required="required" value="<?php echo $data['id_agen']; ?>" disabled /></td>
        </tr>
        <tr>
            <td>jenis_kelamin</td>
            <td>:</td>
            <td><input type="text" name="jenis_kelamin" maxlength="20" required="required" value="<?php echo $data['jenis_kelamin']; ?>" /></td>
        </tr>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td><input type="text" name="nama" maxlength="100" required="required" value="<?php echo $data['nama']; ?>" /></td>
        </tr>
        <tr>
            <td>umur</td>
            <td>:</td>
            <td><input type="text" name="umur" required="required" value="<?php echo $data['umur']; ?>" /></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" required="required" value="<?php echo $data['alamat']; ?>" /></td>
        </tr>
		
		<tr>
            <td>No_HP</td>
            <td>:</td>
            <td><input type="text" name="No_HP" required="required" value="<?php echo $data['No_HP']; ?>" /></td>
        </tr>
		
		<tr>
            <td>password</td>
            <td>:</td>
            <td><input type="text" name="password" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
        
        <tr>
            <td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>
 
<a href="view.php">Lihat Data</a>
 
</body>
</html>