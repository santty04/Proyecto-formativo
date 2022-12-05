
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
    <title>Pagos</title>
    <style>
        * {
            overflow: hidden;
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
        /*button search*/
        .btn-search {
            background-color: #039041;
            border: none;
            position: relative;
            color: #fff;
            font-size: 16px;
            width: 120px;
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
        }

        .p-p {
            position: relative;
            bottom: 5px;
        }

        .mes {
            position: relative;
            bottom: -3px;
        }

       

        select {
            border-radius: 5px;
            width: 260px;
            height: 27px;
            border: solid 2px #373232;

        }
        .A{
            color: #fff;
            cursor: pointer;
        }

        .pension {
            position: relative;
            bottom: 60px;
            left: 300px;
            
        }

        .pension input.inpt{
            width: 250px;
        }

        .recibo {
            position: relative;
            left:600px;
            bottom: 150px; 
        }

        .recibo input.inpt {
            width: 250px;
        }

        .observaciones {
            position: relative;
            left:0px;
            top:-150px;
            margin-bottom:20px;
        }
        .adicionales {
            position: relative;
            bottom: 170px;
        }

        .desayuno {
            position: relative;
            bottom: 180px;
        }

        .desayuno input.inpt {
            width: 250px;
        }

        .med-manana {
            position: relative;
            bottom: 270px;
            left: 300px;
        }

        .med-manana input.inpt {
            width: 250px;
        }

        .med-tarde {
            position: relative;
            bottom: 360px;
            left: 600px;
        }

        .med-tarde input.inpt {
            width: 250px;
        }

        .almuerzo {
            position: relative;
            bottom: 355px;
        }

        .almuerzo input.inpt {
            width: 250px;
        }

        .transporte {
            position: relative;
            bottom: 440px;
            left: 300px;
        }

        .transporte input.inpt {
            width: 250px;
        }
        
        .derecho-grado {
            position: relative;
            bottom: 525px;
            left: 600px;
        }

        .derecho-grado input.inpt {
            width: 250px;
        }

        .matricula {
            position: relative;
            bottom: 520;
        }

        .matricula input.inpt {
            width: 250px;
        }

        .enviar-btn-search {
            background-color: #039041;
            border: none;
            position: relative;
            bottom: 570px;
            color: #fff;
            font-size: 16px;
            width: 120px;
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
            position: relative;
            left: 680px;
        }
        .btn {
            border: none;
        }

        h3 {
            text-align: center;
            border:2px solid #373232;
            border-radius: 10px;
            width: 300px;
        }
    </style>
</head>
<header>
    <h1>Pagos</h1>
    <img src="public/images/logo-liceo.png" alt="">
</header>
<body>
    <div class="nav">
        <a href="dashboard-admin.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 exit">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 9l-3 3m0 0l3 3m-3-3h7.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              
        </a>
        <a href="matricula.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 user-plus">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zM4 19.235v-.11a6.375 6.375 0 0112.75 0v.109A12.318 12.318 0 0110.374 21c-2.331 0-4.512-.645-6.374-1.766z" />
              </svg>
        </a>
        <a href="search-student.php">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 user">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
              </svg>
              
        </a>
        <a href="" class="btn disabled" role="button" aria-disabled="true">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 cards">
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z" />
              </svg>
              
        </a>
    </div>
<form action="pagos.php" method="POST">
    <div class="inputs">
        <h1>Buscar estudiante: </h1>
        <div class="document-student">
            <label for="">Ingrese el N° de documento del estudiante:</label>
            <br>
            <input type="number" class="inpt" name="documento" id="documento" value="<?= isset($_POST["documento"]) ? $_POST["documento"] : ''; ?>">
        </div>
        <button class="btn-search mb-3  ">
            <i class="fa-solid fa-magnifying-glass"></i>
            Buscar
        </button>
    </div>
</form>

    <?php

if(isset($_POST["documento"])) {

    $documento = (isset($_POST['documento']) ? $_POST['documento'] : false);
    $estudiante = ($documento ? showStudent($conx, $documento) : false);
    
    // echo "<pre>";
    // //print_r($estudiante);
    // print_r ($estudiante [0]);
    // echo ('</pre>');
    if($estudiante && count($estudiante) > 0) { ?>
    <?php foreach ($estudiante as $estudiantes): ?>
    <?php if ($estudiantes['estado'] == 'activo'): ?>
    <form action="pagos.php" method="POST">
        <input type="hidden" name="num_documento" id="num_documento" value="<?= $estudiante[0]['id']; ?>" />
        <div class="inputs">
        <h3>
            <?php echo  ($estudiante [0] ['nombre_estudiante']);?>
            <?php echo  ($estudiante [0] ['apellidos_estudiante']); ?>
        </h3>    
            <h1 class="p-p">Pago de pensiones: </h1>

            <div class="mes">
                <label for="">Mes: </label>
                <br>
                <select name="mes" id="mes" required>
                    <option selected disabled value="">Selecciona</option>
                    <option value="enero">Enero</option>
                    <option value="febrero">Febrero</option>
                    <option value="marzo">Marzo</option>
                    <option value="abril">Abril</option>
                    <option value="mayo">Mayo</option>
                    <option value="junio">Junio</option>
                    <option value="julio">Julio</option>
                    <option value="agosto">Agosto</option>
                    <option value="septiembre">Septiembre</option>
                    <option value="octubre">octubre</option>
                    <option value="noviembre">Noviembre</option>
                    <option value="diciembre">Diciembre</option>
                </select>
            </div>
            <div class="pension">
                <label for="">Pension: </label>
                <br>
                <input  type="number" class="inpt" name="pension" id="pension">
            </div>
            <div class="recibo">
                <label for="">N° Recibo Manual: </label>
                <br>
                <input type="number" class="inpt" name="num_recibo_manual" id="num_recibo_manual">
            </div>
            <div class="observaciones">
                <label for="">Observaciones: </label>
                <br>
                <input type="text" class="inpt" name="observaciones" id="observaciones">
            </div>


            <h1 class="adicionales">Pago servicios adicionales:</h1>
            <div class="desayuno">
                <label for="">Desayuno: </label>
                <br>
                <input type="number" class="inpt" name="desayuno" id="desayuno">
            </div>
            <div class="med-manana">
                <label for="">Media manana: </label>
                <br>
                <input type="number" class="inpt" name="media_manana" id="media_manana">
            </div>
            <div class="med-tarde">
                <label for="">Media tarde: </label>
                <br>
                <input type="number" class="inpt" name="media_tarde" id="media_tarde">
            </div>
            <div class="almuerzo">
                <label for="">Almuerzo: </label>
                <br>
                <input type="number" class="inpt" name="almuerzo" id="almuerzo">
            </div>
            <div class="transporte">
                <label for="">Transporte: </label>
                <br>
                <input type="number" class="inpt" name="transporte" id="transporte">
            </div>
            <div class="derecho-grado">
                <label for="">Derecho de grado: </label>
                <br>
                <input type="number" class="inpt" name="derecho_grado" id="derecho_grado">
            </div>
            <div class="matricula">
                <label for="">Matricula: </label>
                <br>
                <input type="number" class="inpt" name="matricula" id="matricula">
            </div>
            <button class="enviar-btn-search">
                Enviar
            <!-- <a class="A" href="PDF/invoice.php" target="_blanck">Enviar</a> -->
            </button>
        </div>
        </div>
    </form>
    <?php endif?>
    <?php endforeach?>
    <?php include 'includes/scripts.inc' ?>
<?php

    }
    else
    {
        if(isset($_POST) && $documento)
        {
                echo ("<script>
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: 'El estudiante no esta registrado',
                        showConfirmButton: false,
                        timer: 2000
                    })
                    </script>");
        }
    }
}

    if(isset($_POST["mes"])) {
            //var_dump($_POST);
            //echo "<hr>";
            //var_dump($_FILES);
            // Pagos
            $fecha                   = date('Y-m-d');
            $num_documento           = $_POST['num_documento'];
            $mes                     = $_POST['mes'];
            $pension                 = $_POST['pension'];
            $num_recibo_manual       = $_POST['num_recibo_manual'];
            $observaciones           = $_POST['observaciones'];

            // Detalles
            $desayuno               = $_POST['desayuno'];
            $media_manana           = $_POST['media_manana'];
            $media_tarde            = $_POST['media_tarde'];
            $almuerzo               = $_POST['almuerzo'];
            $transporte             = $_POST['transporte'];
            $derecho_grado          = $_POST['derecho_grado'];
            $matricula              = $_POST['matricula'];
            // Upload Image
            // $path  = "../public/images/";
            // $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            
            $id = addPayment($conx, $fecha, $num_documento, $mes, $pension, $num_recibo_manual, $observaciones );
            if ($id != -1) {
                addDetail($conx, $id, $desayuno, $media_manana, $media_tarde, $almuerzo, $transporte, $derecho_grado, $matricula);

                echo ("<script>
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'El pago se  registrado exitosamente!',
                            showConfirmButton: false,
                            timer: 2000
                        })
                    </script>");
                // echo "<script>
                //         window.location.replace('dashboard-admin.php')
                //       </script>";    
            }
             else {
                echo ("Hola");
            }
            
        }
    ?>



?>
</body>
</html>