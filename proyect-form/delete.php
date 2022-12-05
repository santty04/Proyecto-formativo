<?php require 'config/app.php' ?>
<?php include('config/database.php') ?>

<?php
    if ($_GET) {
        $id = $_GET['id'];
        if(deleteStudent($conx, $id)) {
            $_SESSION['message'] = "El estudiante ha sido eliminado!";
            echo "<script>
                    window.location.replace('search-student.php')
                  </script>";
        }
    }

?>

<?php $conx = null; ?>