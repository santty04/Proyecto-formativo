    <?php $title = 'Login' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/header.inc' ?>
    <?php include 'includes/redirect.inc' ?>
    <!--  -->



    <div class="container">
        <div class="main-login">
            <div class="left-login">
                <img src="public/images/logo-liceo.png" alt="" class="logo-liceo">
                <div class="slider">
                    <ul>
                        <li><img src="public/images/1.jpg" alt=""></li>
                        <li><img src="public/images/2.jpg" alt=""></li>
                        <li><img src="public/images/3.jpg" alt=""></li>
                        <li><img src="public/images/4.jpg" alt=""></li>
                    </ul>
                </div>
            </div>
            <div class="rigth-login">
                <div class="card-login">
                    <form action="" method="POST">
                        <h1 class="login">LIA</h1>
                        <div class="textfield">
                        <label for="email" >Correo electrónico:</label>
                        <input type="email" id="email" name="email" required>
                        </div>
                        <div class="textfield">
                        <label for="password" >Contraseña:</label>
                        <input type="password"  id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn-login">
                            Ingresar
                        </button>
                    </form>
                </div>
                <?php
                    if ($_POST) {
                        $email = $_POST['email'];
                        $pass  = md5($_POST['password']);

                        if (login($conx, $email, $pass)) {
                            if ($_SESSION['trole'] == 'Admin') {
                                echo "<script>
                                        window.location.replace('dashboard-admin.php')
                                      </script>";
                            } else {
                                echo "<script>
                                        window.location.replace('dashboard-rector.php')
                                      </script>";
                            }
                        } else {
                            $_SESSION['error'] = "Email or Password are incorrect!";
                        }

                    }
                ?>
            </div>
            <?php $conx = null; ?>
        </div>
    </div>
    <?php include 'includes/scripts.inc' ?>
    <script>
        $(document).ready(function () {
            <?php if(isset($_SESSION['error'])): ?>
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '<?php echo $_SESSION['error'] ?>',
                showConfirmButton: false,
                timer: 2500
            })
            <?php endif ?>
            <?php unset($_SESSION['error']) ?>
            // - - - - - - - - - -
        })
    </script>
</body>
</html>

<!-- ------------------------------------ -->

