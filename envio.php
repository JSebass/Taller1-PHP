<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Taller php</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="css/mdb.min.css">
    <!-- Your custom styles (optional) -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript"></script>
</head>

<body>
    <?php
        $nombre_r = $_POST["nombres_r"]; 
        $apellidos_r = $_POST["apellidos_r"]; 
        $direccion_r = $_POST["direccion_r"]; 
        $ciudad_r = $_POST["ciudad_r"]; 
        $tel_r = $_POST["tel_r"]; 
        $correo_r = $_POST["correo_r"]; 
        
        $nombre_d = $_POST["nombres_d"]; 
        $apellidos_d = $_POST["apellidos_d"]; 
        $direccion_d = $_POST["direccion_d"]; 
        $ciudad_d = $_POST["ciudad_d"]; 
        $tel_d = $_POST["tel_d"]; 
        $correo_d = $_POST["correo_d"]; 

        $num_envio = $_POST["numenvio"];
        $Fecha = $_POST["Fecha"];
        $tipo_e = $_POST["tipo_e"];
        $peso = $_POST["peso"];

    ?>
    <div class="container" align="center">
        <h2 style="font-family: fantasy;"> INFORMACIÓN DE SU ENVÍO </h2> <br>
        <fieldset>
            <legend>Información Remitente:</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $nombre_r ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $apellidos_r ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $direccion_r ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $ciudad_r ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $tel_r ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $correo_r ?>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información Destino:</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $nombre_d ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $apellidos_d ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $direccion_d ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $ciudad_d ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $tel_d ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $correo_d ?>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset>
            <legend>Información del Envío:</legend>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $num_envio ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $Fecha ?>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $tipo_e ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-primary" role="alert">
                        <?php echo $peso ?>
                    </div>
                </div>
            </div>
        </fieldset>



    </div>
    <!-- Footer -->
    <footer class="page-footer font-small cyan darken-3">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">

                <!-- Grid column -->
                <div class="col-md-12 py-5">
                    <div class="mb-5 flex-center">

                        <!-- Facebook -->
                        <a class="fb-ic">
                            <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Twitter -->
                        <a class="tw-ic">
                            <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!-- Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Linkedin -->
                        <a class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                        </a>
                        <!--Pinterest-->
                        <a class="pin-ic">
                            <i class="fab fa-pinterest fa-lg white-text fa-2x"> </i>
                        </a>
                    </div>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row-->

        </div>
        <!-- Footer Elements -->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="https://mdbootstrap.com/"> MDBootstrap.com</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->







</body>