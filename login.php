<?php
require_once("config.php");
require('koneksi.php');
if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM tb_admin WHERE username=:username OR nip=:nip";
    $stmt = $db->prepare($sql);
    if ($stmt > 0) {
        header("location: home.php?");
    } else {
        header("location: login.php?pesan=gagal");
    }
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":nip" => $username
    );
    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // jika user terdaftar
    if ($user) {
        session_start();
        $_SESSION['nip'] = $username;
        // verifikasi password
        if (password_verify($password, $user["password"])) {
            // buat Session
            session_start();
            $_SESSION["tb_admin"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: home.php");
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log in</title>
    <!-- 
    <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .un {
            margin: 200px auto;
            padding: 30px 20px;
            width: 300px;
        }

        .ban {
            margin-top: 5px;
            margin-right: 120px;
            margin-left: 5px;
            margin-bottom: 5px;
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            color: red;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">

                <p>&larr; <a href="index.php">Home</a>

                <h4>Masuk ke Dashboard<br>
                </h4>
                <p>Belum punya akun? <a href="register.php">Daftar di sini</a></p>
                <div class="ban">
                    <?php
                    if (isset($_GET['pesan'])) {
                        if ($_GET['pesan'] == "gagal") {
                            echo "Gagal Login";
                        } else if ($_GET['pesan'] == "login") {
                            echo "Berhasil Login";
                        }
                    }
                    ?>
                </div>

                <form action="" method="POST">

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input class="form-control" type="text" name="username" placeholder="Username atau email" />
                    </div>


                    <div class="form-group">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" placeholder="Password" />
                    </div>

                    <input type="submit" class="btn btn-success btn-block" name="login" value="Masuk" />



                </form>

            </div>

            <div class="col-md-6">
                <!-- isi dengan sesuatu di sini -->
                <img class="img img-responsive col-lg-6 mx-auto d-block" src="images/logo-upt.png" />
            </div>

        </div>
    </div>

</body>

</html>