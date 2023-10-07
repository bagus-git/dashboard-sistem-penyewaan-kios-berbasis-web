<?php

require('koneksi.php');

$kd_transaksi = $_GET['kd_transaksi'];
$result = mysqli_query($conn, "DELETE FROM tb_transaksi WHERE kd_transaksi='$kd_transaksi'");

header('Location: data-transaksi.php');
