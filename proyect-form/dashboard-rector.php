    <?php $title = 'Dashboard' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/security.inc' ?>
    <!--  -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-Rector</title>
    <link rel="stylesheet" href="public/css/panel-rector.css">
</head>
    <header>
        <h2>Base de datos | Liceo Aprender</h2>
        <ul>
            <li>
                <a href="<?php echo $base_url . '/' ?>close.php">
                    <i class="fa fa-times"></i>
                    Close Session
                </a>
            </li>
        </ul>
        <div class="banner">
            <img class="users" src="images/users.svg" alt="">
            <h1>Bienvenido al panel del rector</h1>
            <img class="logo" src="images/marco-logo.png" alt="">
        </div>
    </header>
<body>
    <div>
        <div class="grid-container">
            <div class="estudiantes box">
                <img src="images/user.svg" alt="" class="user">
                <h3>Estudiantes</h3>
                <hr class="hr-estudiantes">
                <a href="search-student-rector.php">
                    <button class="btn-estudiantes">Entrar</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>