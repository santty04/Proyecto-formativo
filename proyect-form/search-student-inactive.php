<?php $title = 'Dashboard' ?>
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
    <title>Busqueda de estudiantes</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
        /* header */
        header h1 {
            width: 1000px;
            text-align: center;
            margin: 40px auto;
            margin-left: 300px;
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
            margin: 70px;
            margin-left: 300px;
            color: #373232;
        }
        .inputs .inpt {
            width: 400px;
            height: 30px;
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

        .title-results{
            text-align: center;
            margin-bottom: 20px;
        }
       
        /* select grado */

        .grado {
            position: relative;
            width: 400px;
            height: 30px;
            margin: 10px 20px 20px 0px;
            border: 2px solid #373232;
            border-radius: 5px;
        }
        .grados {
            position: absolute;
            left: 800px;
            top: 215px;
        }

        .pagos{
            cursor: pointer;
        }

        .fila_pagos{
            display: none;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $(".pagos").on("click", function(){
                var id = $(this).attr("data-id");
                $(".pago_"+id).toggle(500);
            });
        });
    </script>
</head>
<header>
    <h1>Busqueda de estudiantes inactivos</h1>
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
    <form action="" method="POST">
    <div class="inputs">
        <h1>Ingrese los datos del estudiante </h1>
        <div class="document-student">
            <label for="">Ingrese el N?? de documento del estudiante:</label>
            <br>
            <input type="number" class="inpt" name="documento" id="documento">
        </div>
        <button class="btn-search">
            <i class="fa-solid fa-magnifying-glass"></i>
            Buscar
        </button>
    </div>
    </form>
    
<?php if($_POST) :?>
    <?php
    
    $documento = (isset($_POST['documento']) ? $_POST['documento'] : false);
    if($documento)
    {
        $estudiantes = showStudent($conx, $documento);
    }
    
    // echo "<pre>";
    // //print_r($estudiante);
    // print_r ($estudiante [0]);
    // echo ('</pre>');
    ?>
    <?php if(isset($estudiantes) && $estudiantes && count($estudiantes) > 0) :?>
        <?php foreach($estudiantes as $estudiante):?>   
        <?php  
            $pagos = showPayments($conx, $estudiante['id']);
        ?>
        <?php if ($estudiante['estado'] == 'inactivo') :?> 
    <h2 class="title-results">INFORMACION DEL ESTUDIANTE</h2>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table table-bordered align-middle">
            
                <thead class="table-secondary">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>N?? documento</th>
                        <th>Fecha Nacimiento</th>
                        <th>Genero</th>
                        <th>Jornada</th>
                        <th>Grado</th>
                        <th>Estado</th>
                        <th>Pagos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                
                <tr>
                    <td><?php echo  ($estudiante['nombre_estudiante']); ?></td>
                    <td><?php echo  ($estudiante['apellidos_estudiante']); ?></td>
                    <td><?php echo  ($estudiante['num_documento_estudiante']); ?></td>
                    <td><?php echo  ($estudiante['fecha_nacimiento']);?></td>
                    <td><?php echo  ($estudiante['genero']);?></td>
                    <td><?php echo  ($estudiante['jornada']);?></td>
                    <td><?php echo  ($estudiante['grado']);?></td>
                    <td><?php echo  ($estudiante['estado']);?></td>
                    <?php if(isset($pagos)):?>
                    <td align="center"><?= ($pagos ? '<b id="btnPagos_'.$estudiante['id'].'" class="pagos" title="Ver pagos" data-id="'.$estudiante['id'].'">+</b>': ''); ?></td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="ver.php?id=<?php echo $estudiante['id'] ?>"><i class="fa fa-search"></i> Ver</a></li>
                                    <li><a class="dropdown-item" href="editar.php?id=<?php echo $estudiante['id'] ?>"><i class="fa fa-pen"></i> Editar</a></li>
                                    <li><a class="dropdown-item bg-success btn-active" data-id="<?php echo $estudiante['id'] ?>" href="javascript:;"><i class="fa-solid fa-eye"></i> Activar</a></li>
                                </ul>
                            </div>
                        </td>
                    <?php endif?>
                </tr>
                <?php if(isset($pagos)):?>
                    <?php if($pagos):?>
                        <tr class="pago_<?= $estudiante['id']; ?> fila_pagos">
                            <td colspan="10">
                            <table class="table table-bordered align-middle">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Fecha</th>
                                        <th>Mes</th>
                                        <th>Pension</th>
                                        <th>N?? recibo manual</th>
                                        <th>Observaciones</th>
                                    </tr>
                                </thead>
                        <?php foreach($pagos as $pago):?>
                                    <tbody>
                                        <tr>
                                            <td><?= $pago['fecha']?></td>
                                            <td><?= $pago['mes']?></td>
                                            <td><?= $pago['pension']?></td>
                                            <td><?= $pago['num_recibo_manual']?></td>
                                            <td><?= $pago['observaciones']?></td>
                                        </tr>
                                    </tbody>
                                    <?php endforeach?>
                                </table>
                                
                            </td>
                        </tr>
                        <?php endif?>
                        <?php endif?>
                        <?php endif?>
                <?php endforeach?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <?php if($documento) :?>
    <?php if($estudiante['estado'] == 'inactivo') :?>
    <h2 class="title-results">INFORMACION DEL ACUDIENTE:</h2>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table table-bordered align-middle">
                <thead class="table-secondary">
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>N?? documento</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($estudiantes as $estudiante):?>
                    <tr>
                        <td><?php echo  ($estudiante['nombre_acudiente']);?></td>
                        <td><?php echo  ($estudiante['apellidos_acudiente']);?></td>
                        <td><?php echo  ($estudiante['num_documento_acudiente']);?></td>
                        <td><?php echo  ($estudiante['direccion']);?></td>
                        <td><?php echo  ($estudiante['telefono']);?></td>
                        
                    </tr>
                    <?php endforeach?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
    <?php endif ?>  
    <?php endif ?>  

    <?php else :?>
        <?php
            echo ("<script>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'El estudiante no esta registrado',
                    showConfirmButton: false,
                    timer: 1500
                })
                </script>");
    ?>
<!-- validacion de existencia de estudiantes-->
<?php endif ?> 
<!-- end if de la validacion de POST -->
<?php endif ?> 





<script>
        $(document).ready(function () {
            <?php if(isset($_SESSION['message'])): ?>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: '<?php echo $_SESSION['message'] ?>',
                showConfirmButton: false,
                timer: 2500
            })
            <?php endif ?>
            <?php unset($_SESSION['message']) ?>
            // - - - - - - - - - - -
            $('.btn-active').click(function (e) {
                e.preventDefault()
                $id = $(this).attr('data-id')
                Swal.fire({
                    text: "Desea activar al estudiante??",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#212529',
                    cancelButtonColor: '#dc3545',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Activar'    
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.replace('activar.php?id=' + $id)
                    }
                })
            })
            // - - - - - - - - - -
        })
    </script>

</body>
</html>

