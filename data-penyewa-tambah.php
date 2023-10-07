<?php
session_start();

require('koneksi.php');
$username = $_SESSION['nip'];
$log_s = mysqli_query($conn, "SELECT * FROM tb_admin WHERE nip='$username' OR username='$username'");
$hasil = mysqli_fetch_array($log_s);
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
    <title>tambah-penyewa</title>

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
                                <!-- <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        bisa di isi
                                    </div>
                                </div> -->
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <!-- <img src="images/logo-admin.jpg" alt="admin" /> -->
                                            <?php echo $hasil['photo']; ?>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="profile.php"><?php echo $hasil['username']; ?></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="profile.php">
                                                        <!-- <img src="images/logo-admin.jpg" alt="admin" /> -->
                                                        <?php echo $hasil['photo']; ?>
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
                                        <strong>Tambah Data</strong> Penyewa Kios
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                                            <!-- kode waktu sewa otomatis: -->
                                            <input type="hidden" name="waktu_sewa" value="<?php echo date("d-M-Y"); ?>">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="tex-input" class=" form-control-label">Kode Penyewa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <?php
                                                    $query = mysqli_query($conn, "SELECT max(kd_penyewa) as KDPENYEWA FROM tb_penyewa");
                                                    $nilai = mysqli_fetch_array($query);
                                                    $kd_penyewa = $nilai['KDPENYEWA'];
                                                    $urutan = (int) substr($kd_penyewa, 4, 6);
                                                    $urutan++;
                                                    $kode = "KDP";
                                                    $kd_penyewa = $kode . sprintf("%07s", $urutan);
                                                    ?>
                                                    <input type="text" readonly value="<?php echo ("$kd_penyewa") ?>" name="kd_penyewa" onkeypress="return hanyaAngka(event)" required="" placeholder="Masukan Kode Penyewa" pattern="{10}" title="maksimal 10 digit angka" class="form-control">

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
                                                    <label for="text-input" class=" form-control-label">Nama Penyewa</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="nama_penyewa" name="nama_penyewa" required placeholder="Masukan Nama Penyewa" class="form-control">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Jenis Kelamin</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="radio">
                                                            <label for="radio" class="form-check-label ">
                                                                <input type="radio" name="jenis_kelamin" required value="laki-laki">Laki-laki <br>
                                                                <input type="radio" name="jenis_kelamin" required value="perempuan">Perempuan
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Alamat</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="alamat" name="alamat" required placeholder="Masukan Alamat" class="form-control">
                                                    <!-- <small class="help-block form-text">Please enter a complex password</small> -->
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Telepon</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" name="telp" onkeypress="return hanyaAngka(event)" placeholder="Masukan Nomor Telepon" class="form-control">
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
                                                    <input type="text" name="no_ktp" required="" onkeypress="return hanyaAngka(event)" placeholder="Masukan No.KTP" class="form-control">

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
                                                    <label for="text-input" class=" form-control-label">Luas Lahan Kios</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <select onchange="cek_db()" class="custom-select custom-select-sm form-control form-control-sm" id="luas" name="luas" required>
                                                        <option class="" value="#">~Pilih luas lahan~</option>
                                                        <?php
                                                        $kios = mysqli_query($conn, 'SELECT * from tb_kios');
                                                        foreach ($kios as $key => $value) {
                                                        ?>
                                                            <option id="luas" name="luas" value="<?php echo $value['luas'] ?>"> <?php echo $value['luas'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="col col-md-">
                                                    <label for="text-input" class=" form-control-label">Meter</label>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Harga</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="harga" name="harga" readonly required placeholder="harga" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Lama Sewa</label>
                                                </div>
                                                <div class="col-12 col-md-3">
                                                    <input type="text" id="lama_sewa" name="lama_sewa" required placeholder="Lama Sewa" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                                <div class="col col-md-">
                                                    <label for="text-input" class=" form-control-label">Tahun</label>
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Jenis Dagangan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="jenis_dagangan" name="jenis_dagangan" required placeholder="Masukan Jenis Dagangan" class="form-control">
                                                    <!-- <span class="help-block">Please enter your password</span> -->
                                                </div>
                                            </div>

                                            <input type="submit" value="Simpan Penyewa Baru" name="simpan" class="btn btn-primary btn-sm">

                                            <input type="reset" value="reset" name="reset" class="btn btn-danger btn-sm">

                                        </form>
                                    </div>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>
        function cek_db() {
            var luas = $("#luas").val();
            $.ajax({
                url: 'proses1.php',
                data: {
                    'luas': luas
                },
            }).success(function(data) {
                var json = data,
                    obj = JSON.parse(json);
                $('#harga').val(obj.harga);
            })
        }
    </script>

</body>

</html>
<!-- end document-->

<?php


if (isset($_POST['simpan'])) {
    $kd_penyewa = $_POST['kd_penyewa'];
    $nama_penyewa = $_POST['nama_penyewa'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    if ($jenis_kelamin == "laki-laki") {
        echo "laki-laki";
    } else {
        echo "perempuan";
    };
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $no_ktp = $_POST['no_ktp'];
    $luas = $_POST['luas'];
    $harga = $_POST['harga'];
    $lama_sewa = $_POST['lama_sewa'];
    $jenis_dagangan = $_POST['jenis_dagangan'];
    $waktu_sewa = $_POST['waktu_sewa'];

    $result = mysqli_query($conn, "INSERT INTO tb_penyewa(kd_penyewa,nama_penyewa,jenis_kelamin,alamat,telp,no_ktp,luas,harga,lama_sewa,jenis_dagangan,waktu_sewa)
            VALUES ('$kd_penyewa', '$nama_penyewa', '$jenis_kelamin', '$alamat','$telp','$no_ktp','$luas','$harga','$lama_sewa','$jenis_dagangan', '$waktu_sewa')");

    // echo '<META HTTP-EQUIV="Refresh" Content="0; URL=data-penyewa.php">';
    // exit;
    if (!$tambahdata) {
        echo "<script>alert('Data Berhasil di Tambahkan.Data Sudah masuk dalam Laporan');window.location='data-penyewa.php'</script>";
    } else {
        echo "<script>alert('Data gagal di tambahkan!');history.go(-1);</script>";
    }
}

?>