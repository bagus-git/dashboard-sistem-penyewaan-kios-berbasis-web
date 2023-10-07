<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>akun</title>

    <!-- <link rel="stylesheet" href="css/bootstrap.min.css" /> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">

                <div class="card">
                    <div class="card-body text-center">

                        <img class="img img-responsive rounded-circle mb-3" width="160" src="images/<?php echo $_SESSION['tb_admin']['photo'] ?>" />

                        <h3><?php echo  $_SESSION["tb_admin"]["username"] ?></h3>
                        <p><?php echo $_SESSION["tb_admin"]["email"] ?></p>

                        <p><a href="logout.php">Logout</a></p>
                    </div>
                </div>
            </div>

            <div class="col-md-8">
                <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="Apa yang kamu pikirkan?"></textarea>
                </div>
                </form>

                <?php for ($i = 0; $i < 6; $i++) { ?>
                    <div class="card mb-3">
                        <div class="card-body">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis veritatis nemo ad recusandae labore nihil iure qui eum consequatur, officiis facere quis sunt tempora impedit ullam reprehenderit facilis ex amet!
                        </div>
                    </div>
                <?php } ?>

            </div>

        </div>
    </div>

</body>

</html>