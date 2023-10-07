<?php

require('koneksi.php');

$kd_penyewa = $_GET['kd_penyewa'];

$result = mysqli_query($conn, "DELETE FROM tb_penyewa WHERE kd_penyewa='$kd_penyewa'");


header('Location: data-penyewa.php');
