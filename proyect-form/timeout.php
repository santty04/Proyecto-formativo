<?php
if (isset($_SESSION['timeout'])) {
    define("TIEMPO_INACTIVIDAD", 1); 
    $tiempoSesion = time() - $_SESSION["timeout"];
    if ($tiempoSesion > (TIEMPO_INACTIVIDAD * 60)) {
        session_destroy();
        header("Location:index.php?controller=Login&action=logout");
    } else {
        $_SESSION["timeout"] = time();
    }
}