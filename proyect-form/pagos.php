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
            bottom: 80px;
            color: #fff;
            font-size: 16px;
            width: 120px;
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
        }

        .document-student {
            position: relative;
            left: 480px;
            bottom: 90px;

        }

        .p-p {
            position: relative;
            bottom: 80px;
        }

        .mes {
            position: relative;
            bottom: 80px;
        }

       

        select {
            border-radius: 5px;
            width: 260px;
            height: 27px;
            border: solid 2px #373232;

        }

        .pension {
            position: relative;
            bottom: 150px;
            left: 300px;
            
        }

        .pension input.inpt{
            width: 250px;
        }

        .fecha {
            position: relative;
            bottom: 240px;
            left: 600px;
        }
        .fecha input.inpt {
            width: 250px;
            height: 27px;
        }

        .recibo {
            position: relative;
            bottom: 240px; 
        }

        .recibo input.inpt {
            width: 250px;
        }

        .adicionales {
            position: relative;
            bottom: 250px;
        }

        .desayuno {
            position: relative;
            bottom: 250px;
        }

        .desayuno input.inpt {
            width: 250px;
        }

        .med-mañana {
            position: relative;
            bottom: 342px;
            left: 300px;
        }

        .med-mañana input.inpt {
            width: 250px;
        }

        .med-tarde {
            position: relative;
            bottom: 433px;
            left: 600px;
        }

        .med-tarde input.inpt {
            width: 250px;
        }

        .almuerzo {
            position: relative;
            bottom: 430px;
        }

        .almuerzo input.inpt {
            width: 250px;
        }

        .transporte {
            position: relative;
            bottom: 520px;
            left: 300px;
        }

        .transporte input.inpt {
            width: 250px;
        }
        
        .derecho-grado {
            position: relative;
            bottom: 610px;
            left: 600px;
        }

        .derecho-grado input.inpt {
            width: 250px;
        }

        .matricula {
            position: relative;
            bottom: 600px;
        }

        .matricula input.inpt {
            width: 250px;
        }

        .enviar-btn-search {
            background-color: #039041;
            border: none;
            position: relative;
            bottom: 80px;
            color: #fff;
            font-size: 16px;
            width: 120px;
            height: 40px;
            cursor: pointer;
            border-radius: 10px;
            position: relative;
            bottom: 650px;
            left: 680px;
        }
        .btn {
            border: none;
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
        <?php
            if (!isset($_POST['buscar'])){$_POST['buscar'] = '';}
        ?>
    </div>
    <form action="" method="POST">
    <div class="inputs">
        <h1>Buscar estudiante: </h1>
        <div class="name-student">
            <label for="">Ingrese el nombre del estudiante:</label>
            <br>
            <input type="text" class="inpt" id="buscar" name="buscar">
        </div>
        <div class="document-student">
            <label for="">Ingrese el N° de documento del estudiante:</label>
            <br>
            <input type="number" class="inpt">
        </div>
        <button class="btn-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            Buscar
        </button>
        <h1 class="p-p">Pago de pensiones: </h1>
        <div class="mes">
            <label for="">Mes: </label>
            <br>
            <select name="" id="">
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
            <input  type="number" class="inpt">
        </div>
        <div class="fecha">
            <label for="">Fecha: </label>
            <br>
            <input type="date" class="inpt">
        </div>
        <div class="recibo">
            <label for="">N° Recibo Manual: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <h1 class="adicionales">Pago servicios adicionales:</h1>
        <div class="desayuno">
            <label for="">Desayuno: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <div class="med-mañana">
            <label for="">Media mañana: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <div class="med-tarde">
            <label for="">Media tarde: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <div class="almuerzo">
            <label for="">Almuerzo: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <div class="transporte">
            <label for="">Transporte: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <div class="derecho-grado">
            <label for="">Derecho de grado: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <div class="matricula">
            <label for="">Matricula: </label>
            <br>
            <input type="number" class="inpt">
        </div>
        <button class="enviar-btn-search">
            Enviar
        </button>
    </div>
    </form>

<div class="card col-12 mt-5">
    <div class="card-body">
        <!-- recuerda que si no te funciona con mysql_query tienes que cambiarlo por mysqli_query -->
        <?php $busqueda=mysql_query($conx,"SELECT * FROM estudiantes WHERE nombre LIKE LOWER('%".$_POST["buscar"]."%') OR num_documento LIKE LOWER('%".$_POST["buscar"]."%') "); 
        $numero = mysqli_num_rows($busqueda); ?>
        <h5 class="card-tittle">Resultado (<?php echo $numero; ?>)</h5>
        <?php while ($resultado = mysqli_fetch_assoc($busqueda)){ ?>
        <p class="card-tittle"><?php echo $resultado["nombre"]; ?> - <?php echo $resultado["num_documento"]; ?></p>
        <?php } ?>
    </div>
</div>
    
</body>
</html>