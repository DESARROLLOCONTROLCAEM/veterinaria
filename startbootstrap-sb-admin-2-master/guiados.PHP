<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="guiados.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">CALCULO DE MUESTRA <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="guia.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Universo Finito</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            
          

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="guiados.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Universo Infinito</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="container">

                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row">
                                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                                    <div class="col-lg-7">
                                        <div class="p-5">
                                            <div class="text-center">
                                                <h1 class="h4 text-gray-900 mb-4">CALCULO DE MUESTRA INFINITO!</h1>
                                                <h2 class="h4 text-gray-900 mb-4">Aplicacion que me permite calcular la
                                                    muestra finita</h2>
                                            </div>
                                            <form action="guiados.php" method="post">
                                               
                                                <div class="form-group row">
                                                    <h5 class="h5 text-gray-900 mb-4">Parámetro estadístico que depende
                                                        el nivel de confianza (NC)
                                                    </h5>

                                                    <select class="text-primary" aria-label="Default select example" name="Z" id="Z">
                                                        <option value="0">Seleccione:</option>
                                                        <?php
                                                        $mysqli = new mysqli("localhost", "root", "", "muestra");
                                                        $query = $mysqli->query("SELECT * FROM `nivel_confianza`");
                                                        while ($valores = mysqli_fetch_array($query)) {
                                                            echo '<option value="' . $valores[2] . '">' . $valores[1] . '</option>';
                                                        }
                                                        ?>
                                                    </select>



                                                </div>
                                                <div class="form-group row">
                                                    <h5 class="h5 text-gray-900 mb-4">Error de estimación maximo
                                                        aceptado
                                                    </h5>
                                                    <input name="e" type="number" class="form-control form-control-user" id="exampleFirstName" placeholder="E">
                                                </div>
                                                <div class="form-group row">
                                                    <h5 class="h5 text-gray-900 mb-4">Probabilidad de que ocurra el
                                                        evento estudiado (éxito)
                                                    </h5>
                                                    <input type="number" name="p" class="form-control form-control-user" id="exampleFirstName" placeholder="P">
                                                </div>
                                                <div class="form-group row">
                                                    <h5 class="h5 text-gray-900 mb-4">(1-p)Probabilidad de que ocurra no
                                                        el evento estudiado (éxito)
                                                    </h5>
                                                    <input type="number" name="q" class="form-control form-control-user" id="exampleFirstName" placeholder="Q">
                                                </div>


                                                <input type="submit" class="form-control form-control-user btn-primary">
                                                <hr>

                                            </form>
                                            <hr>

                                            <div class="text-center">
                                                <a class="small" href="guiados.php">
                                                    <?php
                                                    error_reporting(0);
                                                    $Z = $_POST['Z'];
                                                    $e = $_POST['e'] / 100;
                                                    $p = $_POST['p'] / 100;
                                                    $q = $_POST['q'] / 100;

                                                    $numerador = (($Z * $Z) * $p * $q);
                                                    $divisor = ($e * $e);
                                                    $n = $numerador / $divisor;
                                                    echo '<div class="jumbotron"><h1>El resultado es ' . $n . '</h1></div>';

                                                    ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
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
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>