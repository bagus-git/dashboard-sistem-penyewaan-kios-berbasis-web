<?php
include "koneksi.php";
$query = mysqli_query($conn, "SELECT * FROM tb_kios WHERE luas='$_GET[luas]'");
$kios = mysqli_fetch_array($query);
$data = array('harga' => $kios['harga']);
echo json_encode($data);
