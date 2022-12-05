
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

    <title>Matricula de estudiantes</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* header */
        header h1 {
            width: 1000px;
            text-align: center;
            margin-left: 300px;
            padding-top: 40px;
            padding-bottom: 30px;
            border-bottom: 3px solid #039041;
            color: #373232;
        }   

        header img {
            position: absolute;
            width: 241px;
            height: 262px;
            left: 1500px;
            top: 160px;
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
        /* inputs */

        div.inputs{
            margin: 0px;
            margin-left: 360px;
            color: #373232;
        }
        .inputs .inpt {
            width: 370px;
            height: 30px;
            margin: 10px 20px 20px 0px;
            border: 2px solid #373232;
            border-radius: 5px;
        }
        

        .document-student {
            position: relative;
            left: 480px;
            bottom: 90px;

        }

        .fecha-nacimiento {
            position: relative;
            bottom: 275px;
            left: 480px;
        }

        .genero {
            position: relative;
            bottom: 180px;
        }

        .jornada {
            position: relative;
            bottom: 238px;
            left: 300px;
        }

        .grado {
            position: relative;
            bottom: 295px;
            left: 598px;
        }

        h1.informacion-acudiente {
            position: relative;
            bottom: 230px;
        }

        select {
            border-radius: 5px;
            width: 260px;
            height: 27px;
            border: solid 2px #373232;
            
        }
        
        .name-acudiente {
            position: relative;
            bottom: 240px;
        }
       
        .apellido-acudiente {
            position: relative;
            bottom: 240px;
        }

        .n-acudiente {
            position: relative;
            bottom: 423px;
            left: 480px;
        }

        .direccion {
            position: relative;
            bottom: 425px;
            left: 480px;
        }

        .telefono {
            position: relative;
            bottom: 420px;
        }

        .enviar-btn-search {
            background-color: #039041;
            border: none;
            position: relative;
            color: #fff;
            font-size: 16px;
            width: 120px;
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
            position: relative;
            bottom: 400px;
            transition: all 0.5s;
        }
        .enviar-btn-search {
            transform: scale(1.1);
        }
        .btn{
            border: none;
        }
    </style>
</head>
<header>
    <h1>Matrícula</h1>
    <img src="public/images/logo-liceo.png" alt="">
</header>
<body>
    <div class="nav">
        <a href="dashboard-admin.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 exit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
        </a>
        <a href="" class="btn disabled" role="button" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 user-plus">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
              </svg>
        </a>
        <a href="search-student.php">
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
    <form action="" method="POST">
    <div class="inputs">
        <h1>Informacion del estudiante: </h1>
        <div class="name-student">
            <label for="">Nombre del estudiante:</label>
            <br>
            <input type="text" class="inpt" id="nombre" name="nombre">
        </div>
        <div class="apellido-student">
            <label for="">Apellido del estudiante:</label>
            <br>
            <input type="text" class="inpt" id="apellidos" name="apellidos">
        </div>
        <div class="document-student">
            <label for="">N° de documento del estudiante:</label>
            <br>
            <input type="number" class="inpt" id="num_documento" name="num_documento">
        </div>
        <div class="fecha-nacimiento">
            <label for="">Fecha de nacimiento:</label>
            <br>
            <input type="date" class="inpt" id="fecha_nacimiento" name="fecha_nacimiento">
        </div>
        <div class="genero">
            <label for="">Genero:</label>
            <br>
            <select name="genero" id="genero">
                <option selected disabled value="">Selecciona..</option>
                <option value="masculino">Masculino</option>
                <option value="femenino">Femenino</option>
            </select>
        </div>
        <div class="jornada">
            <label for="">Jornada:</label>
            <br>
            <select name="jornada" id="jornada">
                <option selected disabled value="">Selecciona..</option>
                <option value="mañana">Mañana</option>
                <option value="completa">Completa</option>
            </select>
        </div>
        <div class="grado">
            <label for="">Grado:</label>
            <br>
            <select name="grado" id="grado">
                <option selected disabled value="">Selecciona..</option>
                <option value="sala-cuna">Salacuna</option>
                <option value="caminadores">Caminadores</option>
                <option value="parvulos">Parvulos</option>
                <option value="prejardin">Prejardin</option>
                <option value="transicion">Transicion</option>
                <option value="primero">Primero</option>
                <option value="segundo">Segundo</option>
                <option value="tercero">Tercero</option>
                <option value="cuarto">Cuarto</option>
                <option value="quinto">Quinto</option>
                <option value="sexto">Sexto</option>
                <option value="septimo">Septimo</option>
                <option value="octavo">Octavo</option>
                <option value="noveno">Noveno</option>
                <option value="decimo">Decimo</option>
                <option value="once">Once</option>
            </select>
        </div>
        <h1 class="informacion-acudiente">Informacion del acudiente: </h1>
        <div class="name-acudiente">
            <label for="">Nombre del acudiente: </label>
            <br>
            <input  type="text" class="inpt" id="nombreAcudiente" name="nombreAcudiente">
        </div>
        <div class="apellido-acudiente">
            <label for="">Apellido del acudiente: </label>
            <br>
            <input  type="text" class="inpt" id="apellidosAcudiente" name="apellidosAcudiente">
        </div>
        <div class="n-acudiente">
            <label for="">N° documento del acudiente: </label>
            <br>
            <input type="number" class="inpt" id="num_documentoAcudiente" name="num_documentoAcudiente">
        </div>
        <div class="direccion">
            <label for="">Direccion: </label>
            <br>
            <input type="text" class="inpt" id="direccionAcudiente" name="direccionAcudiente">
        </div>
        <div class="telefono">
            <label for="">Telefono: </label>
            <br>
            <input type="number" class="inpt" id="telefonoAcudiente" name="telefonoAcudiente">
        </div>
        <button class="enviar-btn-search">
            Enviar
        </button>
    </div>
    </form>
    <?php include 'includes/scripts.inc' ?>
    <?php
    if($_POST) {
        echo ('<h1>Buenas</h1>');
            //var_dump($_POST);
            //echo "<hr>";
            //var_dump($_FILES);
            // Estudiante
            $nombre              = $_POST['nombre'];
            $apellidos           = $_POST['apellidos'];
            $num_documento       = $_POST['num_documento'];
            $fecha_nacimiento    = $_POST['fecha_nacimiento'];
            $genero              = $_POST['genero'];
            $jornada             = $_POST['jornada'];
            $grado               = $_POST['grado'];
            // Acudiente
            $nombreAcudiente              = $_POST['nombreAcudiente'];
            $apellidosAcudiente           = $_POST['apellidosAcudiente'];
            $num_documentoAcudiente       = $_POST['num_documentoAcudiente'];
            $direccionAcudiente           = $_POST['direccionAcudiente'];
            $telefonoAcudiente            = $_POST['telefonoAcudiente'];
            // Upload Image
            // $path  = "../public/images/";
            // $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            
            $id = addStudent($conx, $nombre, $apellidos, $num_documento, $fecha_nacimiento, $genero, $jornada, $grado);
            if ($id != -1) {
                addAcudent($conx, $nombreAcudiente, $apellidosAcudiente, $num_documentoAcudiente, $direccionAcudiente, $telefonoAcudiente, $id);
                $_SESSION['message'] = "Estudiante : $nombre ha sido agregado!";

                echo ("<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'El estudiante se a registrado correctamente',
                            showConfirmButton: true,
                            timer: 1500
                        })
                    </script>");
                // echo "<script>
                //         window.location.replace('dashboard-admin.php')
                //       </script>";
            }
             else {
                $_SESSION['error'] = "Estudiante : $nombre ya existe!";
            }
            
        }
    ?>
</body>
</html>