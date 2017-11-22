<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$a = $_POST['id_agen'];
$b = $_POST['jenis_kelamin'];
$c = $_POST['nama'];
$d = $_POST['umur'];
$e = $_POST['alamat'];
$f = $_POST['No_HP'];
$g = $_POST['password'];

 
//simpan data ke database
$query = mysql_query("insert into tb_agen values('$a', '$b', '$c', '$d', '$e' , '$f' , '$g' )") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=success');
}
?>