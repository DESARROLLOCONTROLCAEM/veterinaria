<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
<link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/alertifyjs/alertify.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <form class="login">
                                        <div class="form-group">
                                            <input type="number" name="email" class="form-control form-control-user"
                                                id="email" aria-describedby="email"
                                                placeholder="Introduzca la identificación">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="P" id="P" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Contraseña">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recordar Contraseña</label>
                                            </div>

                                        </div>
                                        <hr>
                                        
                                    </form>
                                    <span class="btn btn-primary" id="entrarSistema">Entrar</span>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="forgot-password.php">Olvido Contraseña?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="registerindex.php">Crear Cuenta!</a>
                                    </div>
                                </div>
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

   <script type="text/javascript">
            $(document).ready(function(){
                $('#entrarSistema').click(function(){
                    if($('#email').val()==""){
                        alertify.alert("Debes agregar el usuario");
                        return false;
                    }else if($('#P').val()==""){
                        alertify.alert("Debes agregar el password");
                        return false;
                    }

            cadena="email=" + $('#email').val() + 
                    "&P=" + $('#P').val();





                    $.ajax({
                        type:"POST",
                        url:"php/login.php",
                        data:cadena,
                        success:function(r){
                            if(r==1){
                                window.location="paciente.php";
                            }else{
                                alertify.alert("Fallo al ingresar.");
                            }
                        }
                    });


                }); 
            });
    </script>