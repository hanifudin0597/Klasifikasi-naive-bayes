<?php
include 'koneksi.php';
$username=$_GET['username'];
$sql="UPDATE login SET password='e10adc3949ba59abbe56e057f20f883e' WHERE username='$username'";
$koneksi->query($sql);
$url='Location: manage_user.php?token='.md5('reset');        
header($url);
?>