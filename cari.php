<html>
<head>
</head>
<body>

<?php

include("config.php");
$seng_di_cari=$_POST['cari'];

$query = mysql_query("select * from tb_agen where id_agen='$seng_di_cari'");
?>
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

<?php
while ($data = mysql_fetch_array($query)) {
?>


	<tbody>
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
</tbody>
</table>
<?php




}

?>
</body>
</html>
