<?php
include 'koneksi.php';
$id_training=$_GET['id_training'];
$sql2="DELETE FROM training WHERE id_training='$id_training'";
$koneksi->query($sql2);
$url='Location: training_view.php?token='.md5('hapus');
header($url);
?>