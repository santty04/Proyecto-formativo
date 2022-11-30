<?php
    try {
        $conx = new PDO("mysql:host=$host;dbname=$name_db",$user,$passwd);
        $conx->exec("set names utf8");
        //echo "Connection Successfully!";
    }
    catch(PDOException $e) {
        echo "Connection Error: " . $e->getMessage();
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - 
    // Estudiante

    // Insert Estudiante
    function addStudent($conx, $nombre, $apellidos, $num_documento, $fecha_nacimiento, $genero, $jornada, $grado) {
        try {
            $sql = "INSERT INTO estudiantes (nombre, apellidos, num_documento, fecha_nacimiento, genero, jornada,
                    grado) VALUES (:nombre, :apellidos, :num_documento, :fecha_nacimiento, :genero, 
                    :jornada, :grado)";

            $stm = $conx->prepare($sql);
            $stm->bindparam(":nombre", $nombre);
            $stm->bindparam(":apellidos", $apellidos);
            $stm->bindparam(":num_documento", $num_documento);
            $stm->bindparam(":fecha_nacimiento", $fecha_nacimiento);
            $stm->bindparam(":genero", $genero);
            $stm->bindparam(":jornada", $jornada);
            $stm->bindparam(":grado", $grado);
            if($stm->execute()) {
                $id = $conx->lastInsertId();
                return $id;
            } else {
                return -1;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    function addAcudent($conx, $nombreAcudiente, $apellidosAcudiente, $num_documentoAcudiente, $direccionAcudiente, $telefonoAcudiente, $id_estudiante     ) {
        try {
            $sql = "INSERT INTO acudiente (nombre, apellidos, num_documento, direccion, telefono, id_estudiante) 
                    VALUES (:nombre, :apellidos, :num_documento, :direccion, :telefono, :id_estudiante)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":nombre", $nombreAcudiente);
            $stm->bindparam(":apellidos", $apellidosAcudiente);
            $stm->bindparam(":num_documento", $num_documentoAcudiente);
            $stm->bindparam(":direccion", $direccionAcudiente);
            $stm->bindparam(":telefono", $telefonoAcudiente);
            $stm->bindparam(":id_estudiante", $id_estudiante);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    
    
    // List All Pokemons
    function listAllPokemons($conx) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, usuarios AS t
                    WHERE p.trainer_id = t.id
                    ORDER BY p.id ASC";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // List All My Pokemons
    function listAllMyPokemons($conx, $id) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, usuarios AS t
                    WHERE p.trainer_id = t.id
                    AND p.trainer_id = :id
                    ORDER BY p.id ASC";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Show Pokemon
    function showPokemon($conx, $id) {
        try {
            $sql = "SELECT p.*, t.name AS nametrainer 
                    FROM pokemons AS p, usuarios AS t
                    WHERE p.id = :id AND p.trainer_id = t.id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Delete Pokemon
    function deletePokemon($conx, $id) {
        try {
            $sql = "DELETE FROM pokemons WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - 
    // usuarios

    // Login 
    function login($conx, $email, $pass) {
        try {
            $sql = "SELECT * FROM usuarios 
                    WHERE email = :email
                    AND password = :pass
                    LIMIT 1";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":email", $email);
            $stm->bindparam(":pass", $pass);
            $stm->execute();
            if($stm->rowCount() > 0) {
                $user = $stm->fetch(PDO::FETCH_ASSOC);
                $_SESSION['tid']    = $user['id'];
                $_SESSION['temail'] = $user['email'];
                $_SESSION['trole']  = $user['role'];
                $_SESSION['tphoto'] = $user['photo'];
                $_SESSION['timeout'] = time();
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // List All usuarios
    function listAllusuarios($conx) {
        try {
            $sql = "SELECT * FROM usuarios";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Insert User
    function addUser($conx, $name, $email, $image, $password, $role) {
        try {
            $sql = "INSERT INTO usuarios(name, email, photo, password, role) 
                    VALUES (:name, :email, :image, :password, :role)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":email", $email);
            $stm->bindparam(":image", $image);
            $stm->bindparam(":password", $password);
            $stm->bindparam(":role", $role);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Show Trainer
    function showTrainer($conx, $id) {
        try {
            $sql = "SELECT t.*, g.name AS namegym 
                    FROM usuarios AS t, gyms AS g
                    WHERE t.id = :id AND t.gym_id = g.id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Update Trainer
    function updateTrainer($conx, $id, $name, $level, $email, $image, $gym_id) {
        try {
            if($image != null) {
                $sql = "UPDATE usuarios SET name = :name, level = :level, email = :email, 
                        photo = :image, gym_id = :gym_id WHERE id = :id ";
            } else {
                $sql = "UPDATE usuarios SET name = :name, level = :level, email = :email, 
                        gym_id = :gym_id WHERE id = :id ";
            }
                
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":level", $level);
            $stm->bindparam(":email", $email);
            if($image != null) {
                $stm->bindparam(":image", $image);
            }
            $stm->bindparam(":gym_id", $gym_id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Delete Trainer
    function deleteTrainer($conx, $id) {
        try {
            $sql = "DELETE FROM usuarios WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // - - - - - - - - - - - - - - - - - - - - - - - - 
    // Gyms

    // List All Gyms
    function listAllGyms($conx) {
        try {
            $sql = "SELECT * FROM gyms";
            $stm = $conx->prepare($sql);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Insert Gym
    function addGym($conx, $name) {
        try {
            $sql = "INSERT INTO gyms (name) VALUES (:name)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":name", $name);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Show Gym
    function showGym($conx, $id) {
        try {
            $sql = "SELECT * FROM gyms
                    WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Update Gyn
    function updateGym($conx, $id, $name) {
        try {
            $sql = "UPDATE gyms SET name = :name WHERE id = :id ";
                
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->bindparam(":name", $name);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Delete Gym
    function deleteGym($conx, $id) {
        try {
            $sql = "DELETE FROM gyms WHERE id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Show Student
    function showStudent($conx, $documento) {
        try {
            $sql = "select e.id, e.nombre as nombre_estudiante, e.apellidos as apellidos_estudiante, e.num_documento as num_documento_estudiante, fecha_nacimiento , genero , jornada , grado , a.nombre as nombre_acudiente, a.apellidos as apellidos_acudiente, a.num_documento as num_documento_acudiente, direccion, telefono
            from estudiantes as e inner join acudiente as a
            on e.id = a.id_estudiante
            where e.num_documento = :doc";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":doc", $documento);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

       // Show Student Grade
       function showStudentGrade($conx, $grado) {
        try {
            $sql = "select e.id as id , e.nombre as nombre_estudiante, e.apellidos as apellidos_estudiante, e.num_documento as num_documento_estudiante, fecha_nacimiento , genero , jornada , grado 
            from estudiantes e where e.grado = :grad";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":grad", $grado);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Insert Payments
    function addPayment($conx, $fecha, $mes, $pension, $num_recibo_manual,  $num_documento) {
        try {
            $sql = "INSERT INTO pagos(fecha, mes, pension, num_recibo_manual, estudiantes_id) 
                    VALUES (:fecha, :mes, :pension, :num_recibo_manual, :id_estudiante)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":fecha", $fecha);
            $stm->bindparam(":mes", $mes);
            $stm->bindparam(":pension", $pension);
            $stm->bindparam(":num_recibo_manual", $num_recibo_manual);
            $stm->bindparam(":id_estudiante", $num_documento);
            if($stm->execute()) {
                $id = $conx->lastInsertId();
                return $id;
            } else {
                return -1;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    function addDetail($conx, $id, $desayuno, $media_manana, $media_tarde, $almuerzo, $transporte, $derecho_grado, $matricula) {
        try {
            $sql = "INSERT INTO detalles(pago_id, desayuno, media_manana, media_tarde, almuerzo, transporte, derecho_grado, matricula) 
                    VALUES (:pago_id, :desayuno, :media_manana, :media_tarde, :almuerzo, :transporte, :derecho_grado, :matricula)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":pago_id", $id);
            $stm->bindparam(":desayuno", $desayuno);
            $stm->bindparam(":media_manana", $media_manana);
            $stm->bindparam(":media_tarde", $media_tarde);
            $stm->bindparam(":almuerzo", $almuerzo);
            $stm->bindparam(":transporte", $transporte);
            $stm->bindparam(":derecho_grado", $derecho_grado);
            $stm->bindparam(":matricula", $matricula);
            if($stm->execute()) {
                $id = $conx->lastInsertId();
                return $id;
            } else {
                return -1;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function showPayments($conx, $idEstudiante)
    {
        try{
            $sql = "SELECT * FROM pagos WHERE estudiantes_id = :idEstudiante ORDER BY fecha DESC";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":idEstudiante", $idEstudiante);
            if($stm->execute()) {
                return $stm->fetchAll();
            } else {
                return false;
            }
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    function viewStudent($conx, $id) {
        try {
            $sql = "select e.id, e.nombre as nombre_estudiante, e.apellidos as apellidos_estudiante, e.num_documento as num_documento_estudiante, fecha_nacimiento , genero , jornada , grado , a.id as id_acudiente, a.nombre as nombre_acudiente, a.apellidos as apellidos_acudiente, a.num_documento as num_documento_acudiente, direccion, telefono
            from estudiantes as e inner join acudiente as a
            on e.id = a.id_estudiante
            where e.id = :id";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->execute();
            return $stm->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    // Update Student
    function updateStudent($conx, $id_estudiante, $nombre_estudiante, $apellidos_estudiante, $grado, $documento_estudiante, $fecha_nacimiento, $genero, $jornada) {
    // function updateStudent($conx, $id_estudiante, $nombre_estudiante, $apellidos_estudiante, $grado, $documento_estudiante, $fecha_nacimiento, $genero, $jornada) {
        try {
            // , $nombre_acudiente, $apellidos_acudiente, $direccion, $documento_acudiente, $telefono
            // $sql = "UPDATE e, a set e.nombre = :nombre_estudiante, a.nombre = :nombre_acudiente 
            //         from estudiantes as e , acudiente as a
            //         where id = :id_estudiante";
            // // $sql = "UPDATE e, a SET e.nombre = :nombre_estudiante, e.apellidos = :apellidos_estudiante, e.grado = :grado, e.num_documento = :num_documento_estudiante, 
            // //         e.fecha_nacimiento = :fecha_nacimiento, e.genero = :genero, e.jornada = :jornada, 
            // //         a.nombre = :nombre_acudiente, a.apellidos = :apellidos_acudiente, a.direccion = :direccion, a.num_documento = :documento_acudiente, a.telefono = :telefono 
            // //         from estudiantes as e inner join acudiente as a
            // //         on e.id = a.id_estudiante 
            // //          WHERE e.id = :id_estudiante ";
            
                
            // // $stm = $conx->prepare($sql);
            // // $stm->bindparam(":id_estudiante", $id_estudiante);
            // // $stm->bindparam(":nombre_estudiante", $nombre_estudiante);
            // // $stm->bindparam(":apellidos_estudiante", $apellidos_estudiante);
            // // $stm->bindparam(":grado", $grado);
            // // $stm->bindparam(":documento_estudiante", $documento_estudiante);
            // // $stm->bindparam(":fecha_nacimiento", $fecha_nacimiento);
            // // $stm->bindparam(":genero", $genero);
            // // $stm->bindparam(":jornada", $jornada);
            // // $stm->bindparam(":apellidos_acudiente", $apellidos_acudiente);
            // // $stm->bindparam(":direccion", $direccion);
            // // $stm->bindparam(":documento_acudiente", $documento_acudiente);
            // // $stm->bindparam(":telefono", $telefono);
            // $stm = $conx->prepare($sql);
            // $stm->bindparam(":id_estudiante", $id_estudiante);
            // $stm->bindparam(":nombre_estudiante", $nombre_estudiante);
            // $stm->bindparam(":nombre_acudiente", $nombre_acudiente);

            $sql = "UPDATE estudiantes set nombre = :nombre_estudiante, apellidos = :apellidos_estudiante, grado = :grado, num_documento = :documento_estudiante, fecha_nacimiento = :fecha_nacimiento, genero = :genero, jornada = :jornada
            where id = :id_estudiante";

            // $sql = "UPDATE estudiantes set nombre = :nombre_estudiante, apellidos = :apellidos_estudiante, grado = :grado, num_documento = :num_documento_estudiante, fecha_nacimiento = :fecha_nacimiento, genero = :genero, jornada = :jornada
            // where id = :id_estudiante";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id_estudiante", $id_estudiante);
            $stm->bindparam(":nombre_estudiante", $nombre_estudiante);
            $stm->bindparam(":apellidos_estudiante", $apellidos_estudiante);
            $stm->bindparam(":grado", $grado);
            $stm->bindparam(":documento_estudiante", $documento_estudiante);
            $stm->bindparam(":fecha_nacimiento", $fecha_nacimiento);
            $stm->bindparam(":genero", $genero);
            $stm->bindparam(":jornada", $jornada);

            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    function updateAcudent($conx, $id_acudiente, $nombre_acudiente, $apellidos_acudiente, $direccion, $documento_acudiente, $telefono ) {
    
            try{
                echo "<h1>$direccion</h1>";
                $sql = "UPDATE acudiente set nombre = :nombre_acudiente, apellidos = :apellidos_acudiente, direccion = :direccion, num_documento = :documento_acudiente, telefono = :telefono
                where id = :id_acudiente";
                // $sql = "UPDATE acudiente set nombre = :nombre_acudiente, apellidos = :apellidos_acudiente, num_documento = :documento_acudiente, direccion = :direccion, telefono = :telefono
                // where id = :id_acudiente";
    
                $stm = $conx->prepare($sql);
                $stm->bindparam(":id_acudiente", $id_acudiente);
                $stm->bindparam(":nombre_acudiente", $nombre_acudiente);
                $stm->bindparam(":apellidos_acudiente", $apellidos_acudiente);
                $stm->bindparam(":direccion", $direccion);
                $stm->bindparam(":documento_acudiente", $documento_acudiente);
                $stm->bindparam(":telefono", $telefono);
    
                if($stm->execute()) {
                    return true;
                } else {
                    return false;
                }
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
    
        }
