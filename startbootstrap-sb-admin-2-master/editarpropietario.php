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
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img class="sidebar-card-illustration mb-2" src="images/gato.jpg" alt="...">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-gray-900 mb-4">Editar una Propietario!</h1>
                            </div>
                            <form class="propietario">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-user" id="nombrescompletos" placeholder="Nombres completos">
                                    </div>

                                </div>

                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <select class="text-primary" aria-label="Default select example" name="tipoid" id="tipoid">
                                            <option selected>Tipo de Identificación</option>
                                            <option value="1">Cédula de Ciudadanía</option>
                                            <option value="2">Cédula de extranjería </option>
                                            <option value="3">Pasaporte</option>
                                            <option value="4">Permiso de Permanencia</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control form-control-user" id="nidentificacion" placeholder="Número de Identificación">

                                    </div>
                                </div>

                                <br>
                                <div class="form-group row">

                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-user" id="direccion" placeholder="Dirección ">
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">

                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="ncontacto" placeholder="Número de contacto ">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" id="correo" placeholder="Correo electrónico ">
                                    </div>
                                </div>

                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-9 mb-3 mb-sm-0">
                                        <select class="text-primary" aria-label="Default select example" name="etapa" id="etapa">
                                            <option selected>Paciente</option>
                                            <option value="1">Nombre de mascota 1</option>
                                            <option value="2">Nombre de mascota 2</option>
                                            <option value="3">Nombre de mascota 3</option>
                                            <option value="4">Nombre de mascota 4</option>
                                            <option value="5">Nombre de mascota 5</option>
                                        </select>
                                    </div>
                                   
                                </div>

                                <br>
                                <a href="propietario.php" class="btn btn-primary btn-user btn-block">
                                    Editar propietario
                                </a>
                                <hr>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="propietario.php">Cancelar!</a>
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