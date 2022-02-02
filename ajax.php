<?php
include '../config/koneksi.php';

$tipe_kamar = $_GET['id_kamar'];

$query = mysql_query($koneksi, "select * from tbl_tipe_kamar where id_kamar='$tipe_kamar' ")
$kamar = mysqli_fetch_array($query);
$data = array(
		'id_kamar' => $kamar['id_kamar'],
		'tipe_kamar' => $kamar['tipe_kamar'],
		'harga'     => $kamar['harga'];)

echo json_decode($data);
?>