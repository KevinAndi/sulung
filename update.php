<?php
include('config.php');
 
//tangkap data dari form
$a = $_POST['id_agen'];
$b = $_POST['jenis_kelamin'];
$c = $_POST['nama'];
$d = $_POST['umur'];
$e = $_POST['alamat'];
$f = $_POST['No_HP'];
$g = $_POST['password'];

 
//update data di database sesuai user_id
$query = mysql_query("update tb_agen set jenis_kelamin='$b', nama='$c', umur='$d', alamat='$e' , No_HP='$f' , password='$g' where id_agen='$a'") or die(mysql_error());
 
if ($query) {
 header('location:view.php?message=success');
}
?>