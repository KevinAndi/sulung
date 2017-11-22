<?php
include('config.php');
 
$id = $_GET['id'];
 
$query = mysql_query("delete from tb_agen where id_agen='$id'") or die(mysql_error());
 
if ($query) {
    header('location:view.php?message=delete');
}
?>