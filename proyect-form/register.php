<?php $title = 'Add Trainer' ?>
    <?php require 'config/app.php' ?>
    <?php include 'config/database.php'  ?>
    <?php include 'includes/header.inc' ?>
    <!--  -->
    <main class="container">
        <section class="row">
            <div class="col-md-6 offset-md-3 my-5">
                <a href="index.php" class="btn btn-outline-dark">
                    <i class="fa fa-arrow-left"></i>
                    Back to Login
                </a>
                <hr>
                <h1 class="text-center">
                    <i class="fa fa-plus"></i>
                    Add Trainer
                </h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 text-center">
                        <figure class="figure">
                            <img src="../public/images/trainer.png" width="240" id="preview" class="figure-img img-fluid img-thumbnail rounded">
                        </figure>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-danger btn-lg form-control btn-upload" type="button"> 
                            <i class="fa fa-upload"></i>
                            Select Photo 
                        </button>
                        <input type="file" class="form-control d-none" id="image" name="image" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name of Trainer" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Secret" required>
                    </div>
                    <div class="mb-3">
                        <label for="role" class="form-label">Role:</label>
                        <input type="text" class="form-control" id="role" name="role" placeholder="Ej: Admin" required>
                    </div>
                    <div class="mb-3">
                        <a href="dashboard-rector.php">
                            <button type="submit" class="btn btn-success btn-lg form-control">
                                <i class="fa fa-save"></i>
                                Add
                            </button>
                        </a>
                        <button type="reset" class="btn btn-dark btn-lg form-control mt-2">
                            <i class="fa fa-eraser"></i>
                            Reset
                        </button>
                    </div>
				</form>
                <?php
                    if($_POST) {
                        //var_dump($_POST);
                        //echo "<hr>";
                        //var_dump($_FILES);
                        $name     = $_POST['name'];
                        $email    = $_POST['email'];
                        $password = md5($_POST['password']);
                        $role     = $_POST['role'];

                        // Upload Image
                        $path  = "public/images/";
                        $image = $path.time().".".pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                        
                        if(addUser($conx, $name, $email, $image, $password, $role)) {
                            move_uploaded_file($_FILES['image']['tmp_name'], $image);
                            if (login($conx, $email, $password)) {
                                $_SESSION['message'] = "Usuario : $name was added!";
                                    echo "<script>
                                            window.location.replace('dashboard-admin.php')
                                          </script>";
                                
                        } 

                    }
                }
                ?>
            </div>
        </section>
        <?php $conx = null; ?>
    </main>
    <!--  -->
    <?php include 'includes/scripts.inc' ?>
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