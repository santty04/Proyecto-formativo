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
            font-family: Arial, Helvetica, sans-serif;
        }
        /* header */
        header h1 {
            width: 395px;
            text-align: center;
            margin: 40px auto;
            margin-left: 650px;
            border-bottom: 2px solid #373232;
            color: #373232;
        }   
        header img {
            position: absolute;
            width: 241px;
            height: 262px;
            left: 1300px;
            top: 160px;
        }
        /* nav */
        div.nav {
            position: absolute;
            width: 94px;
            height: 213px;
            left: 0px;
            margin-top: 50px;
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
        div.nav svg.user {
            box-sizing: border-box;
            position: absolute;
            left: 2px;
            margin-top: 110px;
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
            height: 20px;
            margin: 10px 20px 20px 0px;
            border: 2px solid #373232;
            border-radius: 5px;
        }
        /*button search*/
        .btn-search {
            background-color: #039041;
            border: none;
            color: #fff;
            font-size: 16px;
            width: 100px;
            height: 30px;
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
    </style>
</head>
<header>
    <h1>Busqueda de estudiantes</h1>
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
    <form action="">
    <div class="inputs">
        <h1>Ingrese los datos del estudiante: </h1>
        <div class="name-student">
            <label for="">Ingrese el nombre del estudiante:</label>
            <br>
            <input type="text" class="inpt">
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
    </div>
    </form>
    <div class="results">
        <h1>Resultado:</h1>
    </div>
</body>
</html>