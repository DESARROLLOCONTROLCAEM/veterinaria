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

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" type="text/css" href="js/alertifyjs/css/alertify.css">

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/alertifyjs/alertify.js"></script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block ">
                        <img class="sidebar-card-illustration mb-2" src="images/gallery-05_original.jpg" alt="..." style="width=Auto; height: 100%;">
                    </div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h3 text-gray-900 mb-4">Crea una Paciente!</h1>
                            </div>
                            <form class="paciente">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="namep" id="namep" class="form-control form-control-user"  placeholder="Nombre Paciente">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="namec" id="namec" class="form-control form-control-user"  placeholder="Nombre Comun">
                                    </div>
                                </div>
                                
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="text-primary form-control form-control-user" aria-label="Default select example" name="genero" id="genero">
                                            <option selected>Genero</option>
                                            <option value="1">Masculino</option>
                                            <option value="2">Femenino</option>
                                            <option value="3">Pionites melanocephalus</option>
                                            <option value="4">Pionus</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    <select class="text-primary form-control form-control-user" aria-label="Default select example" name="especie" id="especie">
                                            <option selected>Especie</option>
                                            <option value="1">Flavus</option>
                                            <option value="2">Amazónica</option>
                                            <option value="3">Melanocephalus</option>
                                            <option value="4">Menstruus</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="form-group row">
                                   
                                    <div class="col-sm-12">
                                        <input type="text" class="form-control form-control-user" name="nombrecientifico" id="nombrecientifico" placeholder="Nombre Cientifico">
                                    </div>
                                </div>
                                
                                <br>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <select class="text-primary form-control form-control-user" aria-label="Default select example" name="etapa" id="etapa">
                                            <option selected>Etapa de Desarrollo</option>
                                            <option value="1">Neonato</option>
                                            <option value="2">Infantil</option>
                                            <option value="3">Juvenil</option>
                                            <option value="4">SubAdulto</option>
                                            <option value="5">Adulto</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-6">
                                    <select class="text-primary form-control form-control-user" aria-label="Default select example" name="sexo" id="sexo">
                                            <option selected>Sexo</option>
                                            <option value="1">Hembra</option>
                                            <option value="2">Macho</option>
                                            <option value="3">Indeterminada</option>
                                        </select>
                                    </div>
                                </div>
                                
                                <br>
                                <span class="btn btn-primary" id="entrarSistema">Guardar</span>
                                <hr>

                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="paciente.php">Cancelar!</a>
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
                    if($('#namep').val()==""){
                        alertify.alert("Debes agregar el nombre del paciente");
                        return false;
                    }else if($('#namec').val()==""){
                        alertify.alert("Debes agregar el nombre comun");
                        return false;
                    }else if($('#genero').val()==""){
                        alertify.alert("Debes agregar el genero");
                        return false;
                    }else if($('#especie').val()==""){
                        alertify.alert("Debes agregar la especie");
                        return false;
                    }else if($('#nombrecientifico').val()==""){
                        alertify.alert("Debes agregar el nmbre cientifico");
                        return false;
                    }else if($('#etapa').val()==""){
                        alertify.alert("Debes agregar la etapa");
                        return false;
                    }else if($('#sexo').val()==""){
                        alertify.alert("Debes agregar el sexo");
                        return false;
                    }

            cadena="namep=" + $('#namep').val() + 
                    "&namec=" + $('#namec').val() + 
                    "&genero=" + $('#genero').val() + 
                    "&especie=" + $('#especie').val() + 
                    "&nombrecientifico=" + $('#nombrecientifico').val() + 
                    "&etapa=" + $('#etapa').val() + 
                    "&sexo=" + $('#sexo').val();





                    $.ajax({
                        type:"POST",
                        url:"php/registrar_paciente.php",
                        data:cadena,
                        success:function(r){
                            if(r==1){
                                window.location="paciente.php";
                            }else{
                                alertify.alert(r);
                            }
                        }
                    });


                }); 
            });
    </script>