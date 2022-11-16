    <?php $title = 'Dashboard' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/security.inc' ?>
    <?php include 'includes/protect-admin.inc' ?>
    <!--  -->



    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Admin</title>
    <link rel="stylesheet" href="public/css/panel-admin.css">
</head>
    <header>
        <ul>
            <li>
                <a href="<?php echo $base_url . '/' ?>close.php">
                    <i class="fa fa-times"></i>
                    Close Session
                </a>
            </li>
        </ul>
        <h2>Base de datos | Liceo Aprender</h2>
        <div class="banner">
            <img class="users" src="images/users.svg" alt="">
            <h1>Bienvenido al panel administrativo</h1>
            <img class="logo" src="images/marco-logo.png" alt="">
        </div>
    </header>
<body>
    <div>
        <div class="grid-container">
            <div class="matricula box">
                <img src="images/user-plus.svg" alt="" class="user-plus">
                <h3>Matricula</h3>
                <hr class="hr-matricula">
                <button class="btn-matricula">Entrar
                    <a href=""></a>
                </button>
            </div>
            <div class="estudiantes box">
                <img src="images/user.svg" alt="" class="user">
                <h3>Estudiantes</h3>
                <hr class="hr-estudiantes">
                <button class="btn-estudiantes">Entrar
                    <a href=""></a>
                </button>
            </div>
            <div class="pagos box">
                <img src="images/pagos.svg" alt="" class="pago">
                <h3>Pagos</h3>
                <hr class="hr-pagos">
                <button class="btn-pagos">Entrar
                    <a href=""></a>
                </button>
            </div>
        </div>
    </div>
</body>
</html>