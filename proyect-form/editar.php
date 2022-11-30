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
        .estudiante{
            margin-top: 83px;
        }
    </style>
<body>
<main class="container">
        <section class="row">
            <div class="col-md-4 offset-md-5 my-3 mb-1">
                <h1>
                <i class="fa fa-pen"></i>
                    Editar
                </h1>
            </div>
            <div class="row">
            <div class="col-md-4 offset-md-1 my-5">
            <a href="search-student.php" class="btn btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Volver
                </a>
                <hr>
                <h1 class="text-center">
                    Estudiante
                </h1>
                <?php $id = $_GET['id'] ?>
                <?php $estudiante = viewStudent($conx, $id) ?>
                <?php foreach($estudiante as $st): ?>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre_estudiante" name="nombre_estudiante" value="<?php echo $st['nombre_estudiante'] ?>" placeholder="Nombre del estudiante" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos_estudiante" name="apellidos_estudiante" value="<?php echo $st['apellidos_estudiante'] ?>" placeholder="Apellidos" required>
                    </div>
                    <div class="mb-3">
                        <label for="type" class="form-label">Grado:</label>
                        <select name="grado" id="grado" class="form-select" required>
                            <option selected disabled value="">Selecciona..</option>
                            <option value="sala-cuna" <?php if($st['grado'] == 'salacuna'):   ?> selected <?php endif ?>>Salacuna</option>
                            <option value="caminadores" <?php if($st['grado'] == 'caminadores'):   ?> selected <?php endif ?>>Caminadores</option>
                            <option value="parvulos" <?php if($st['grado'] == 'parvulos'):   ?> selected <?php endif ?>>Parvulos</option>
                            <option value="prejardin" <?php if($st['grado'] == 'prejardin'):   ?> selected <?php endif ?>>Prejardin</option>
                            <option value="transicion" <?php if($st['grado'] == 'transicion'):   ?> selected <?php endif ?>>Transicion</option>
                            <option value="primero" <?php if($st['grado'] == 'primero'):   ?> selected <?php endif ?>>Primero</option>
                            <option value="segundo" <?php if($st['grado'] == 'segundo'):   ?> selected <?php endif ?>>Segundo</option>
                            <option value="tercero" <?php if($st['grado'] == 'tercero'):   ?> selected <?php endif ?>>Tercero</option>
                            <option value="cuarto" <?php if($st['grado'] == 'cuarto'):   ?> selected <?php endif ?>>Cuarto</option>
                            <option value="quinto" <?php if($st['grado'] == 'quinto'):   ?> selected <?php endif ?>>Quinto</option>
                            <option value="sexto" <?php if($st['grado'] == 'sexto'):   ?> selected <?php endif ?>>Sexto</option>
                            <option value="septimo" <?php if($st['grado'] == 'septimo'):   ?> selected <?php endif ?>>Septimo</option>
                            <option value="octavo" <?php if($st['grado'] == 'octavo'):   ?> selected <?php endif ?>>Octavo</option>
                            <option value="noveno" <?php if($st['grado'] == 'noveno'):   ?> selected <?php endif ?>>Noveno</option>
                            <option value="decimo" <?php if($st['grado'] == 'decimo'):   ?> selected <?php endif ?>>Decimo</option>
                            <option value="once" <?php if($st['grado'] == 'once'):   ?> selected <?php endif ?>>Once</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="num_documento" class="form-label">Numero de documento:</label>
                        <input type="number" class="form-control" id="num_documento_estudiante" name="num_documento_estudiante" value="<?php echo $st['num_documento_estudiante'] ?>" placeholder="Numero de documento" required>
                    </div>
                    <div class="mb-3">
                        <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $st['fecha_nacimiento'] ?>" placeholder="Fecha de nacimiento" required>
                    </div>
                    <div class="genero">
                        <label for="">Genero:</label>
                        <br>
                        <select name="genero" id="genero" class="form-select" required>
                            <option selected disabled value="">Selecciona..</option>
                            <option value="masculino" <?php if($st['genero'] == 'masculino'):   ?> selected <?php endif ?>>Masculino</option>
                            <option value="femenino" <?php if($st['genero'] == 'femenino'):   ?> selected <?php endif ?>>Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jornada" class="form-label">Jornada:</label>
                        <input type="text" class="form-control" id="jornada" name="jornada" value="<?php echo $st['jornada'] ?>" placeholder="Jornada" required>
                    </div>
				
                <?php endforeach ?>
            </div>
            <div class="col-md-4 offset-md-2 estudiante">
                <hr>
                <h1 class="text-center">
                    Acudiente
                </h1>
                <input type="text" name="id_acudiente" value="<?php echo $st['id_acudiente'] ?>">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre:</label>
                        <input type="text" class="form-control" id="nombre_acudiente" name="nombre_acudiente" value="<?php echo $st['nombre_acudiente'] ?>" placeholder="Nombre del Acudiente" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos_acudiente" name="apellidos_acudiente" value="<?php echo $st['apellidos_acudiente'] ?>" placeholder="Apellidos" required>
                    </div>
                    <div class="mb-3">
                    <label for="direccion" class="form-label">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $st['direccion'] ?>" placeholder="Direccion" required>
                    </div>
                    <div class="mb-3">
                        <label for="num_documento" class="form-label">Numero de documento:</label>
                        <input type="number" class="form-control" id="num_documento_acudiente" name="num_documento_acudiente" value="<?php echo $st['num_documento_acudiente'] ?>" placeholder="Numero de documento" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $st['telefono'] ?>" placeholder="Telefono" required>
                    </div>
                    
                
                    <?php
                    if($_POST) {
                        //var_dump($_POST);
                        //echo "<hr>";
                        //var_dump($_FILES);
                        // Estudiante
                        $id_estudiante                      = $_GET['id'];
                        $nombre_estudiante                  = $_POST['nombre_estudiante'];
                        $apellidos_estudiante               = $_POST['apellidos_estudiante'];
                        $grado                              = $_POST['grado'];
                        $documento_estudiante               = $_POST['num_documento_estudiante'];
                        $fecha_nacimiento                   = $_POST['fecha_nacimiento'];
                        $genero                             = $_POST['genero'];
                        $jornada                            = $_POST['jornada'];
                        // Acudiente
                        $id_acudiente                      = $_POST['id_acudiente'];
                        $nombre_acudiente                  = $_POST['nombre_acudiente'];
                        $apellidos_acudiente               = $_POST['apellidos_acudiente'];
                        $direccion                         = $_POST['direccion'];
                        $documento_acudiente               = $_POST['num_documento_estudiante'];
                        $telefono                           = $_POST['telefono'];

                        if(updateStudent($conx, $id_estudiante, $nombre_estudiante, $apellidos_estudiante, $grado, $documento_estudiante, $fecha_nacimiento, $genero, $jornada)) {
                            // if(updateStudent($conx, $id_estudiante, $nombre_estudiante, $apellidos_estudiante, $grado, $documento_estudiante, $fecha_nacimiento, $genero, $jornada)) {
                            if(updateAcudent($conx, $id_acudiente, $nombre_acudiente, $apellidos_acudiente, $direccion, $documento_acudiente, $telefono)){
                            $_SESSION['message'] = "Estudiante : $nombre_estudiante ha sido actualizado!";
                            echo "<script>
                                    window.location.replace('search-student.php')
                                  </script>";
                        }
                        } 

                    }
                    ?>
            </div>
        </div>
        <div class="mb-3 col-md-6 offset-md-3">
            <button type="submit" class="btn btn-success btn-lg form-control">
                <i class="fa fa-save"></i>
                Guardar
            </button>
            <button type="reset" class="btn btn-dark btn-lg form-control mt-2">
                <i class="fa fa-eraser"></i>
                Limpiar
            </button>
        </div>
    </form>
    </section>
        <?php $conx = null; ?>
    </main>
    <!--  -->
    <!--  -->
    <script>
        $(document).ready(function () {
            // - - - - - - - - - - - - - 
            $('.btn-upload').click(function() {
                $('#image').click();
            });
            // - - - - - - - - - - - - - 
            $('#image').change(function(event) {
                let reader = new FileReader()
                reader.onload = function(event) {
                    $('#preview').attr('src', event.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            })
            // - - - - - - - - - - - - - 
            <?php if(isset($_SESSION['error'])): ?>
            Swal.fire({
                position: 'top-end',
                icon: 'error',
                title: '<?php echo $_SESSION['error'] ?>',
                showConfirmButton: false,
                timer: 2500
            })
            <?php endif ?>
            <?php unset($_SESSION['error']) ?>
        })
    </script>
</body>
</html>