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
                        <img class="sidebar-card-illustration mb-2" src="images/eutanasiaimg.png" alt="...">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h3 class=" text-gray-900 mb-4">Crea una cuenta!</h3>
                            </div>
                            <form action="paciente.php" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" name="calendar" class="form-control form-control-user" id="examplePrimertName" placeholder="Calendario">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control form-control-user" id="examplenombre" placeholder="Nombre Paciente">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <select class="text-primary form-control form-control-user" name="Etapa" placeholder="Etapa" aria-label="Default select example" name="Etapa" id="Etapa">
                                            <option selected> Etapa</option>
                                            <option value="1">Neonato</option>
                                            <option value="2">Infantil</option>
                                            <option value="3">Juvenil</option>
                                            <option value="4">SubAdulto</option>
                                            <option value="5">Adulto</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <h1 class="h5 text-gray-900 mb-4">Seccion Proceso Eutanasico</h1>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="text-primary form-control form-control-user" name="R" placeholder="Rol" aria-label="Default select example" name="Rol" id="Rol">
                                            <option selected> Pre-eutanasico</option>
                                            <option value="1">Tranquilizante</option>
                                            <option value="2">Sedante</option>
                                            <option value="3">Anestésico</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="farmaco" class="form-control form-control-user" id="farmaco" placeholder="Farmaco">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="dosis" class="form-control form-control-user" id="dosis" placeholder="Dosis">
                                    </div>

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="text-primary form-control form-control-user" name="admini" placeholder="Rol" aria-label="Default select example" name="Admin" id="Admin">
                                            <option selected> Vía de administración</option>
                                            <option value="1">Vía oral</option>
                                            <option value="2">Vías inyectables.</option>
                                            <option value="3">Vía sublingual y oral.</option>
                                            <option value="4">Vía ocular.</option>
                                            <option value="5">Vía ótica.</option>
                                            <option value="6">Vía nasal</option>
                                        </select>
                                    </div>

                                </div>
                                <hr>
                                <h1 class="h5 text-gray-900 mb-4">Seccion Proceso Eutanasico</h1>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="farmaco2" class="form-control form-control-user" id="farmaco2" placeholder="Farmaco">

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="dosis2" class="form-control form-control-user" id="dosis2" placeholder="Dosis">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="text-primary form-control form-control-user" name="R" placeholder="Rol" aria-label="Default select example" name="Rol" id="Rol">
                                            <option selected> Vía de administración</option>
                                            <option value="1">Vía oral</option>
                                            <option value="2">Vías inyectables.</option>
                                            <option value="3">Vía sublingual y oral.</option>
                                            <option value="4">Vía ocular.</option>
                                            <option value="5">Vía ótica.</option>
                                            <option value="6">Vía nasal</option>
                                        </select>
                                    </div>
                                    <input type="time" name="horaarribo" min="12:00" max="18:00" step="600">
                                </div>

                                <a class="btn btn-danger" href="paciente.php" title="Registro">Registrar Eutanasia</i></a>



                            </form>
                            <hr>
                            <?php

                            ?>

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