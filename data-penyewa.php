<?php
session_start();
require("koneksi.php");
$username = $_SESSION['nip'];
$log_s = mysqli_query($conn, "SELECT * FROM tb_admin WHERE nip='$username' OR username='$username'");
$hasil = mysqli_fetch_array($log_s);

$result = mysqli_query($conn, 'SELECT * from tb_penyewa');

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
    <title>data-penyewa kios</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
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

    <!-- assets -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/buttons.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/select.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="assets/vendor/datatables/css/fixedHeader.bootstrap4.css">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <link rel="stylesheet" href="css/css.css">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">`
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <img src="images/logo-upt.png" width="50px" />
                        <h6>UPT WILAYAH I DINAS PERDAGANGAN KOTA YOGYAKARTA</h6>
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
                            <a class="js-arrow" href="#">
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
            <!-- END HEADER DESKTOP-->

            <!-- MAIN CONTENT-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="container-fluid  dashboard-content">
                    <!-- ============================================================== -->
                    <!-- pageheader -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">

                                <h2 class="pageheader-title">DATA PEDAGANG PENYEWA KIOS</h2>
                                <p class="pageheader-text"></p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Tabel</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Data Tabel Penyewa Kios</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader -->
                    <!-- ============================================================== -->

                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">Tabel Data Penyewa</h5>
                                    <br>
                                    <a href="data-penyewa-tambah.php" class="btn btn-primary btn-sm"> <i class="fa fa-plus"> Tambah Penyewa Baru</i></a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">

                                        <table id="example" class="table table-striped table-bordered second">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Kode Penyewa</th>
                                                    <th>Nama Penyewa</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Alamat</th>
                                                    <th>Telepon</th>
                                                    <th>No KTP</th>
                                                    <th>Luas Lahan</th>
                                                    <th>Harga</th>
                                                    <th>Lama Sewa</th>
                                                    <th>Jenis Dagangan</th>
                                                    <th>Waktu Sewa</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1;
                                                while ($data = mysqli_fetch_array($result)) {
                                                ?>
                                                    <tr>
                                                        <td class="text-center"><?php echo $no ?></td>
                                                        <td class="text-center"> <?php echo $data['kd_penyewa']; ?> </td>
                                                        <td> <?php echo $data['nama_penyewa']; ?> </td>
                                                        <td> <?php echo $data['jenis_kelamin']; ?> </td>
                                                        <td> <?php echo $data['alamat']; ?> </td>
                                                        <td class="text-center"> <?php echo $data['telp']; ?> </td>
                                                        <td class="text-center"><?php echo $data['no_ktp']; ?></td>
                                                        <td class="text-center"><?php echo $data['luas']; ?></td>
                                                        <td class="text-center"><?php echo $data['harga']; ?></td>
                                                        <td class="text-center"><?php echo $data['lama_sewa']; ?></td>
                                                        <td><?php echo $data['jenis_dagangan']; ?></td>
                                                        <td class="text-center"><?php echo $data['waktu_sewa']; ?></td>
                                                        <td class="text-center">
                                                            <!-- <a href="bayar-kios.php" class="btn btn-success btn-sm">Bayar</a> | -->
                                                            <a href="<?php echo "bayar-kios.php?kd_penyewa=" . $data['kd_penyewa']; ?>" class="btn btn-success btn-sm"><i class="fa fa-user"> Bayar</i> </a> <br><br>
                                                            <a href="<?php echo "data-penyewa-edit.php?kd_penyewa=" . $data['kd_penyewa']; ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"> Edit</i></a> <br><br>
                                                            <a href="<?php echo "data-penyewa-delete.php?kd_penyewa=" . $data['kd_penyewa']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin mau menghapus item ini ?')"><i class="fa fa-trash"> Hapus</i> </a>

                                                        </td>
                                                    </tr>
                                                    <?php $no++; ?>
                                                <?php
                                                }
                                                ?>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>


                </div>
            </div>
            <!-- END MAIN CONTENT-->


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

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/multi-select/js/jquery.multi-select.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="assets/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="assets/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/vendor/datatables/js/data-table.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>

</body>

</html>