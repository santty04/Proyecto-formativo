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
    // Pokemons

    // Insert Pokemon
    function addStudent($conx, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id) {
        try {
            $sql = "INSERT INTO pokemons (name, type, strength, stamina, speed, accuracy,
                    image, trainer_id) VALUES (:name, :type, :strength, :stamina, :speed, 
                    :accuracy, :image, :trainer_id)";
            $stm = $conx->prepare($sql);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":type", $type);
            $stm->bindparam(":strength", $strength);
            $stm->bindparam(":stamina", $stamina);
            $stm->bindparam(":speed", $speed);
            $stm->bindparam(":accuracy", $accuracy);
            $stm->bindparam(":image", $image);
            $stm->bindparam(":trainer_id", $trainer_id);
            if($stm->execute()) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }

    }

    // Update Pokemon
    function updatePokemon($conx, $id, $name, $type, $strength, $stamina, $speed, $accuracy, $image, $trainer_id) {
        try {
            if($image != null) {
                $sql = "UPDATE pokemons SET name = :name, type = :type, strength = :strength, 
                        stamina = :stamina, speed = :speed, accuracy = :accuracy, image = :image, 
                        trainer_id = :trainer_id WHERE id = :id ";
            } else {
                $sql = "UPDATE pokemons SET name = :name, type = :type, strength = :strength, 
                        stamina = :stamina, speed = :speed, accuracy = :accuracy, 
                        trainer_id = :trainer_id WHERE id = :id ";
            }
                
            $stm = $conx->prepare($sql);
            $stm->bindparam(":id", $id);
            $stm->bindparam(":name", $name);
            $stm->bindparam(":type", $type);
            $stm->bindparam(":strength", $strength);
            $stm->bindparam(":stamina", $stamina);
            $stm->bindparam(":speed", $speed);
            $stm->bindparam(":accuracy", $accuracy);
            if($image != null) {
                $stm->bindparam(":image", $image);
            }
            $stm->bindparam(":trainer_id", $trainer_id);
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