<?php

require('../koneksi.php');

$kd_lahan = $_GET['kd_lahan'];
$result = mysqli_query($conn, "DELETE FROM tb_kios WHERE kd_lahan='$kd_lahan'");

header('Location: data-kios.php');
