<?php
session_start();
require('koneksi.php');
$username = $_SESSION['nip'];
$log_s = mysqli_query($conn, "SELECT * FROM tb_admin WHERE nip='$username' OR username='$username'");
$hasil = mysqli_fetch_array($log_s);

$kd_penyewa = $_GET['kd_penyewa'];
$dataUbah = mysqli_query($conn, "SELECT * from tb_penyewa WHERE kd_penyewa='$kd_penyewa' ");
$data = mysqli_fetch_assoc($dataUbah);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>bayar/transaksi</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="css/css.css">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#jumlah_bayar, #kekurangan").keyup(function() {
                var kekurangan = $("#kekurangan").val();
                var jumlah_bayar = $("#jumlah_bayar").val();

                var total_bayar = parseInt(kekurangan) - parseInt(jumlah_bayar);
                $("#total_kekurangan").val(total_bayar);
            });
        });
    </script>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE -->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/logo-upt.png" width="50px" />
                            <h6>UPT WILAYAH I DINAS PERDAGANGAN KOTA YOGYAKARTA</h6>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data-kios.php">
                                <i class="fas fa-home"></i>Data Kios</a>
                        </li>
                        <li>
                            <a href="data-penyewa.php">
                                <i class="fas fa-user"></i>Data Penyewa</a>
                        </li>
                        <li>
                            <a href="data-transaksi.php">
                                <i class="zmdi zmdi-money-box"></i>Data Transaksi</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="laporan.php">
                                <i class="fas fa-copy"></i>Laporan</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="laporan-perbulan.php">Laporan Perbulan</a>
                                </li>
                                <li>
                                    <a href="laporan-pertahun.php">laporan Pertahun</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <img src="images/logo-upt.png" width="50px" />
                <h6>UPT WILAYAH I DINAS PERDAGANGAN KOTA YOGYAKARTA</h6>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a class="js-arrow" href="home.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="data-kios.php">
                                <i class="fa fa-home"></i>Data Kios</a>
                        </li>
                        <li class="active has-sub">
                            <a href="data-penyewa.php">
                                <i class="fas fa-user"></i>Data Penyewa</a>
                        </li>
                        <li>
                            <a href="data-transaksi.php">
                                <i class="zmdi zmdi-money-box"></i>Data Transaksi</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Laporan</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="laporan-perbulan.php">Laporan Perbulan</a>
                                </li>
                                <li>
                                    <a href="laporan-pertahun.php">Laporan Pertahun</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <h5>SISTEM PENYEWAAN KIOS PEDAGANG PASAR BERINGHARJO</h5>
                            </form>
                            <div class="header-button">
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="profile.php"><?php echo $hasil['username']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="profile.php">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="profile.php"><?php echo $hasil['username']; ?></a>
                                                    </h5>
                                                    <span class="email"><?php echo $hasil['email']; ?></span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="profile.php">
                                                        <i class="zmdi zmdi-account"></i>Profile</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <ul>
                                                        <li class="has-sub">
                                                            <a class="js-arrow" href="laporan.php">
                                                                <i class="zmdi zmdi-settings"></i>Pengaturan</a>
                                                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                                                <li>
                                                                    <a href="profile-edit.php">Edit Profile</a>
                                                                </li>
                                                                <li>
                                                                    <a href=password-edit.php">Edit Password</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12   ">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Transaksi /</strong> Pembayaran Kios
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            <input type="hidden" name="waktu_transaksi" value="<?php echo date("d-M-Y"); ?>">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kode Penyewa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="kd_penyewa" name="kd_penyewa" readonly value="<?php echo $data['kd_penyewa']; ?>" placeholder="Masukan Kode Penyewa" class="form-control">
                                                    <!-- <small class="form-text text-muted">This is a help text</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Penyewa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama_penyewa" name="nama_penyewa" readonly value="<?php echo $data['nama_penyewa']; ?>" placeholder="Masukan Nama Penyewa" class="form-control">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="jenis_kelamin" name="jenis_kelamin" readonly value="<?php echo $data['jenis_kelamin']; ?>" placeholder="Masukan Jenis Kelamin" class="form-control">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="alamat" name="alamat" readonly value="<?php echo $data['alamat']; ?>" placeholder="Masukan Alamat" class="form-control">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telepon</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="telp" readonly value="<?php echo $data['telp']; ?>" onkeypress="return hanyaAngka(event)" required="" placeholder="Masukan Nomor Telepon" class="form-control">

                                                    <script>
                                                        function hanyaAngka(evt) {
                                                            var charCode = (evt.which) ? evt.which : event.keyCode
                                                            if (charCode > 31 && (charCode < 48 || charCode > 57))

                                                                return false;
                                                            return true;
                                                        }
                                                    </script>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">No. KTP</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="no_ktp" readonly value="<?php echo $data['no_ktp']; ?>" onkeypress="return hanyaAngka(event)" required="" placeholder="Masukan No.KTP" class="form-control">

                                                    <script>
                                                        function hanyaAngka(evt) {
                                                            var charCode = (evt.which) ? evt.which : event.keyCode
                                                            if (charCode > 31 && (charCode < 48 || charCode > 57))

                                                                return false;
                                                            return true;
                                                        }
                                                    </script>
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Luas Lahan</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="luas" value="<?php echo $data['luas']; ?>" name="luas" readonly required placeholder="Lama Sewa" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                                <div class="col col-md-">
                                                    <label for="text-input" class=" form-control-label">Meter</label>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="harga" value="<?php echo $data['harga']; ?>" name="harga" readonly required placeholder="harga" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Lama Sewa</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="lama_sewa" value="<?php echo $data['lama_sewa']; ?>" readonly name="lama_sewa" required placeholder="Lama Sewa" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                                <div class="col col-md-">
                                                    <label for="text-input" class=" form-control-label">Tahun</label>
                                                </div>
                                            </div>
                                            <!-- transaksi: -->
                                            <div class="card-header">
                                                <strong>Transaksi:</strong>
                                            </div>
                                            <?php
                                            $query = mysqli_query($conn, "SELECT max(kd_transaksi) as KDPENYEWA FROM tb_transaksi");
                                            $nilai = mysqli_fetch_array($query);
                                            $kd_penyewa = $nilai['KDPENYEWA'];
                                            $urutan = (int) substr($kd_penyewa, 4, 6);
                                            $urutan++;
                                            $kode = "KTR";
                                            $kd_penyewa = $kode . sprintf("%07s", $urutan);
                                            ?>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kode Transaksi</label>
                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="kd_transaksi" name="kd_transaksi" value="<?php echo ("$kd_penyewa") ?>" readonly placeholder="" class="form-control">
                                                    <!-- <span class="help-block">Please enter your email</span> -->
                                                </div>
                                            </div>
                                            <?php
                                            $luas_kios = $data['luas'];
                                            $lama_sewa = $data['lama_sewa'];
                                            $harga_kios = $data['harga'];
                                            $total_tagihan = $harga_kios * $lama_sewa;
                                            ?>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Total Tagihan Sewa</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="total_sewa" value="<?php echo ("$total_tagihan") ?>" name="total_sewa" required placeholder="Total sewa" class="form-control" readonly>
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kekurangan</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="kekurangan" name="kekurangan" value="<?php echo ("$total_tagihan") ?>" required placeholder="Kekurangan" class="form-control" readonly>
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label" id="input">Jumlah Yang diBayarkan</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="jumlah_bayar" name="jumlah_bayar" required placeholder="Jumlah Bayar" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Total Kekurangan</label>
                                                </div>
                                                <div class="col-12 col-md-5">
                                                    <input type="text" id="total_kekurangan" name="total_kekurangan" required placeholder="Total Kekurangan" class="form-control">
                                                    <!-- <span class="hel p-block">Please enter your password</span> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="submit" value="Simpan Bayar" name="simpan" class="btn btn-success btn-sm">
                                                    <input type="reset" value="reset" name="reset" class="btn btn-danger btn-sm">
                                                    <a href="data-penyewa.php" class="btn btn-primary btn-sm">Kambali</a>
                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="copyright">
                                        <p>UPT Pengelolaan Retribusi Wilayah I Dinas Perdagangan © 2021 Kawasan Pasar Beringharjo Timur Kota Yogyakarta.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

        <!-- end document-->

        <?php
        require('koneksi.php');
        if (isset($_POST['simpan'])) {
            $kd_transaksi1 = $_POST['kd_transaksi'];
            $kd_penyewa1 = $_POST['kd_penyewa'];
            $nama_penyewa1 = $_POST['nama_penyewa'];
            $luas = $_POST['luas'];
            $harga = $_POST['harga'];
            $lama_sewa1 = $_POST['lama_sewa'];
            $total_tagihan1 = $_POST['total_sewa'];
            $kekurangan1 = $_POST['kekurangan'];
            $jumlah_bayar1 = $_POST['jumlah_bayar'];
            $total_kekurangan1 = $_POST['total_kekurangan'];
            $waktu_transaksi = $_POST['waktu_transaksi'];

            // code untuk  menampilkan status bayar
            if ($total_kekurangan1 == 0) {
                $total_krng = "Lunas";
            } else {
                $total_krng = "Belum Lunas";
            }


            $result = mysqli_query($conn, "INSERT INTO tb_transaksi(kd_transaksi,kd_penyewa,nama_penyewa,luas,harga,lama_sewa,total_tagihan_sewa,kekurangan,jumlah_bayar,tagihan,waktu_transaksi, status)
            VALUES ('$kd_transaksi1', '$kd_penyewa1', '$nama_penyewa1', '$luas', '$harga', '$lama_sewa1',  '$total_tagihan1', '$kekurangan1',' $jumlah_bayar1', '$total_kekurangan1', '$waktu_transaksi','$total_krng')");

            // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=data-penyewa.php">';
            // exit;

            if (!$tambahdata) {
                echo "<script>alert('Transaksi Berhasil.Data Sudah ada dalam Laporan');window.location='data-transaksi.php'</script>";
            } else {
                echo "<script>alert('Data gagal di tambahkan!');history.go(-1);</script>";
            }
        }

        ?>