<?php
include('config.php');
?>
 
<html>
<head>
<title>Belajar PHP</title>
</head>
 
<body bgcolor="blue water">
<h1>Data User</h1>
 <?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil meng-update data!</h3>';
}
?>
<a href="index.php">+ Tambah Data</a>
 
<table border="1" cellpadding="5" cellspacing="0">
    <thead>
        <tr>
            <td>id_agen</td>
            <td>jenis_kelamin </td>
            <td>nama</td>
            <td>umur</td>
            <td>alamat</td>
            <td>No_HP</td>
			<td>password</td>
			
            
        </tr>
    </thead>
    <tbody>
    <?php
    $query = mysql_query("select * from tb_agen")or die(mysql_error());
 
    $no = 1;
    while ($data = mysql_fetch_array($query)) {
    ?>
        <tr>
            <td><?php echo $data['id_agen'];?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['umur']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['No_HP']; ?></td>
			<td><?php echo $data['password']; ?></td>
<td>            
    <a href="edit.php?id=<?php echo $data['id_agen']; ?>">Edit</a> ||
    <a href="delete.php?id=<?php echo $data['id_agen']; ?>">Hapus</a>
</td>
        </tr>
    <?php
        $no++;
    }
    ?>
    </tbody>
</table>

<form method="POST" action="cari.php">
<br/>
MASUKAN ID AGEN YANG INGIN ANDA CARI
<input type="text" name="cari" value=""/>
<input type="submit" name="simpan"/>

</form>

</body>
</html>