<?php
include 'koneksi.php';
$username=$_GET['username'];
$sql="DELETE FROM login WHERE username='$username'";
$koneksi->query($sql);
$url='Location: manage_user.php?token='.md5('hapus');        
header($url);
?>