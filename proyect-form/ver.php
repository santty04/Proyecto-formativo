<?php $title = 'Ver estudiante' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/security.inc' ?>
    <?php include 'includes/protect-admin.inc' ?>
    <?php include 'includes/scripts.inc' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/fontawesome.min.css">
    <link rel="stylesheet" href="public/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* header */
         h1 {
           
        }   

        header img {
            position: absolute;
            width: 241px;
            height: 262px;
            left: 1700px;
            top: 140px;
        }
        /* nav */
        div.nav {
            position: absolute;
            width: 94px;
            height: 425px;
            left: 0px;
            top: 308px;
            background: #039041;
            border-radius: 0px 50px 50px 0px;
        }
        div.nav svg.exit {
            box-sizing: border-box;
            position: absolute;
            width: 70px;
            height: 70px;
            left: 6px;
            margin-top: 25px;
            color: #fff;
        }
        div.nav svg.user-plus {
            box-sizing: border-box;
            position: absolute;
            left: 5px;
            margin-top: 110px;
            width: 80px;
            height: 80px;
            color: #fff;
        }
        div.nav svg.user {
            box-sizing: border-box;
            position: absolute;
            left: 2px;
            margin-top: 210px;
            width: 80px;
            height: 80px;
            color: #fff;
        }
        div.nav svg.cards {
            box-sizing: border-box;
            position: absolute;
            left: 3px;
            margin-top: 310px;
            width: 80px;
            height: 80px;
            color: #fff;
        }

        /* body */
        .continer {
            margin-top: 200px;
        }

        .h1-vista {
            width: 1300px;
            text-align: center;
            margin-top: 40px;
            padding: 10px;
            margin-left: 300px;
            border-bottom: 4px solid #039041;
            color: #373232;
        }

    </style>
</head>
<header>

    <img src="public/images/logo-liceo.png" alt="">
</header>
<body>
    <div class="nav">
        <a href="search-student.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 exit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
        </a>
        <a href="matricula.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 user-plus">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
              </svg>
        </a>
        <a href="" class="btn disabled" role="button" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 user">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
              
        </a>
        <a href="pagos.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cards">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
              </svg>
              
        </a>
    </div>
    <h1 class="h1-vista text-center">
        Vista Estudiante
    </h1>
    <main class="container continer">
        <section class="row">
            <div class="col-md-8 offset-md-1  ">

            <?php
            if($_GET){
                $id = $_GET['id'];
                $estudiante = viewStudent($conx, $id);
            }
            ?>
                <h2 class="title-results my-1">INFORMACION DEL ESTUDIANTE:</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <table class="table table-bordered align-middl">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>N° documento</th>
                                        <th>Fecha Nacimiento</th>
                                        <th>Genero</th>
                                        <th>Jornada</th>
                                        <th>Grado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo  ($estudiante [0] ['nombre_estudiante']); ?></td>
                                        <td><?php echo  ($estudiante [0] ['apellidos_estudiante']); ?></td>
                                        <td><?php echo  ($estudiante [0] ['num_documento_estudiante']); ?></td>
                                        <td><?php echo  ($estudiante [0] ['fecha_nacimiento']);?></td>
                                        <td><?php echo  ($estudiante [0] ['genero']);?></td>
                                        <td><?php echo  ($estudiante [0] ['jornada']);?></td>
                                        <td><?php echo  ($estudiante [0] ['grado']);?></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                    <h2 class="title-results mt-5">INFORMACION DEL ACUDIENTE:</h2>
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <table class="table table-bordered align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellidos</th>
                                        <th>N° documento</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo  ($estudiante [0] ['nombre_acudiente']);?></td>
                                        <td><?php echo  ($estudiante [0] ['apellidos_acudiente']);?></td>
                                        <td><?php echo  ($estudiante [0] ['num_documento_acudiente']);?></td>
                                        <td><?php echo  ($estudiante [0] ['direccion']);?></td>
                                        <td><?php echo  ($estudiante [0] ['telefono']);?></td>
                                        
                                    </tr>
                                    
                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                
            </div>
        </section>
    </main>

</body>
</html>

