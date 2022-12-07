<?php $title = 'Busqueda de estudiante' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/security.inc' ?>
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
    <title>Busqueda de estudiantes</title>
    <style>
        * {
            overflow-x: hidden;
            font-family: Arial, Helvetica, sans-serif;
        }
        /* header */
        header h1 {
            width: 1300px;
            text-align: center;
            margin-top: 40px;
            padding: 10px;
            margin-left: 300px;
            border-bottom: 4px solid #039041;
            color: #373232;
        }   
        header img {
            position: absolute;
            width: 241px;
            height: 262px;
            left: 1700px;
            top: 160px;
        }

        .inputs  {
            position: relative;
            top: -30px;
            left: 50px;

        }
        /* nav */
        div.nav {
            position: absolute;
            width: 94px;
            height: 225px;
            left: 0px;
            top: 450px;
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
        div.nav svg.user {
            box-sizing: border-box;
            position: absolute;
            left: 2px;
            margin-top: 120px;
            width: 80px;
            height: 80px;
            color: #fff;
        }
        /* inputs */

        div.inputs{
            margin: 70px;
            margin-left: 300px;
            color: #373232;
        }
        .inputs .inpt {
            width: 400px;
            height: 40px;
            position: relative;
            left: 30px;
            margin: 10px 20px 20px 0px;
            border: 2px solid #373232;
            border-radius: 5px;
        }
        /*button search*/
        .btn-search {
            background-color: #039041;
            border: none;
            position: relative;
            color: #fff;
            font-size: 16px;
            width: 100px;
            height: 40px;
            left: 30px;
            cursor: pointer;
            border-radius: 10px;
        }

        /* results */
        div.results{
            margin: 70px;
            margin-left: 300px;
            color: #373232;
        }
        .btn {
            border: none;
        }

        .title-results{
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            position: relative;
            left: 30px;
            
        }
       
    </style>
</head>
<header>
    <h1><b>Busqueda de estudiantes</b></h1>
    <img src="public/images/logo-liceo.png" alt="">
</header>
<body>
    <div class="nav">
        <a href="dashboard-rector.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 exit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
        </a>
        <a href="" class="btn disabled" role="button" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 user">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
              
        </a>
    </div>
    <form action="" method="POST">
    <div class="inputs">
        <h1>Ingrese los datos del estudiante: </h1>
        <div class="document-student">
            <label for="">Ingrese el N° de documento del estudiante:</label>
            <br>
            <input type="number" class="inpt" name="documento" id="documento">
        </div>
        <button class="btn-search">

            Buscar
        </button>
    </div>
    </form>
    
<?php

if($_POST) {

    $documento = $_POST['documento'];
    $estudiante = showStudent($conx, $documento);
    // echo "<pre>";
    // //print_r($estudiante);
    // print_r ($estudiante [0]);
    // echo ('</pre>');
    if( count($estudiante) > 0) { ?>
    <h2 class="title-results">INFORMACION DEL ESTUDIANTE:</h2>
<div class="container">
    <div class="row">
        <div class="col">
         <table class="table table-bordered align-middle">
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
<h2 class="title-results">INFORMACION DEL ACUDIENTE:</h2>
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
<?php
        // echo  ($estudiante [0] ['nombre_estudiante']);
        // echo  ($estudiante [0] ['apellidos_estudiante']);
        // echo  ($estudiante [0] ['num_documento_estudiante']);
        // echo  ($estudiante [0] ['fecha_nacimiento']);
        // echo  ($estudiante [0] ['genero']);
        // echo  ($estudiante [0] ['jornada']);
        // echo  ($estudiante [0] ['grado']);

        // echo  ($estudiante [0] ['nombre_acudiente']);
        // echo  ($estudiante [0] ['apellidos_acudiente']);
        // echo  ($estudiante [0] ['num_documento_acudiente']);
        // echo  ($estudiante [0] ['direccion']);
        // echo  ($estudiante [0] ['telefono']);


    }else {
        echo ("<script>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: 'El estudiante no esta registrado',
                showConfirmButton: false,
                timer: 1500
            })
            </script>");
    }
};



?>



</body>
</html>

