<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Crea una cuenta!</h1>
                            </div>
                            <form action="paciente.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="N" class="form-control form-control-user" id="examplePrimertName" placeholder="Primer Nombre">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="A" class="form-control form-control-user" id="exampleSegundoName" placeholder="Segundo Nombre">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="ID" class="form-control form-control-user" id="exampleEmail" placeholder="Número de identificación">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="M" class="form-control form-control-user" id="exampleEmail" placeholder="Dirección de correo electrónico">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="P" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Confirmar Contraseña">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select class="text-primary form-control form-control-user" name="R" placeholder="Rol" aria-label="Default select example" name="Rol" id="Rol">
                                            <option selected> Rol</option>
                                            <option value="1">Admin</option>
                                            <option value="2">Veterinario</option>
                                        </select>
                                    </div>
                                </div>

                                <input type="submit" class="form-control form-control-user btn-primary">
                                                
                                <hr>

                            </form>
                            <hr>
                                    <?php
                                        error_reporting(0);
                                        $N = '"'.$_POST['N'].'"';
                                        $ID = $_POST['ID'];
                                        $A = '"'.$_POST['A'].'"';
                                        $M = '"'.$_POST['M'].'"';
                                        $P = $_POST['P'];
                                        $R = $_POST['R'];
                                        //$N = '"'.$N.'"';

                                        $conexion = new mysqli("localhost","root","root","eutanasia");
                                        if ($conexion->connect_errno){
                                            echo "fallo conexion";
                                        }else{
                                            echo "";                  
                                        }

                                        if (empty($_POST['ID']))  {

                                        } else {
                                            $resultados = mysqli_query($conexion,"select count(*) as c from usuarios where identificacion = $ID");
                                            while($consulta = mysqli_fetch_array($resultados)){
                                                $Z=$consulta['c'];
                                            }
                                        } 
                                        if ($Z > 0)  {
                                            echo '<div class="jumbotron"><h1>El usuario ya se encuentra registrado.</h1></div>';
                                        } else{

                                            $resultados = mysqli_query($conexion,"INSERT INTO usuarios (identificacion, nombre, apellido, email, contrasena) VALUES ($ID,{$N},{$A},{$M},{$P})");

                                            echo '<div class="jumbotron"><h1>Usuario registrado.</h1></div>';
                                        }
                                    ?>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Has olvidado tu contraseña?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">¿Ya tienes una cuenta? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>