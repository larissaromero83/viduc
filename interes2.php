<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
   
    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>VIEDUC</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
    <script src="js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

        
 
    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="interes.html">
                <img src="images/logo.png" alt="Homepage">
            </a>
        </div>

    

    </header> <!-- end s-header -->


    <!-- home
    ================================================== -->


    <!-- contact
    ================================================== -->
    <section id="contact" class="s-contact">
        <div class="overlay"></div>
        

        <div class="row section-header" data-aos="fade-up">
            
                <h1 class="display-2 display-2--light">Contanos sobre ti 
                
                <?php
        //include("guardar.php");
        $usuario = "root"; //en ste caso root por ser localhost
            $password = "";  //contraseña por si tiene algun servicio de hosting 
            $servidor = "localhost"; //localhost por lo del xampp
            $basededatos ="formulario1"; //nombre de la base de datos
        
        $conexion =mysqli_connect ($servidor,$usuario,"") or die ("problemas al conectar server");
        
        mysqli_select_db($conexion,$basededatos) or die ("Error conexion al conectarse a la Base de datos");
        
        $registro= mysqli_query($conexion,"SELECT * FROM datos ORDER by id DESC limit 1 ") or die ("problemas en consultas:".mysqli_error());
        while($reg= mysqli_fetch_array($registro)){
        
            echo $reg['nombre'];

        }
        
        ?>
        </h1>

                <h3 class="subhead">Contanos que Buscas</h3>
                
                <h1 class="display-2 display-2--light">Videos sobre tus intereses</h1>
            </div>
        </div>

        <div class="row contact-contentes" data-aos="fade-up">

            <div class="contact-primary">

                <!-- <h3 class="h6">Comp</h3>
            <h3 class="h2">Selecciona</h3>-->
                
                <!-- contact ver la opccion para suscribirte con correo como gramo
    ================================================== -->
    <div class="col-block service-item" data-aos="fade-up">
                <div class="service-icon">
                    <i> <class="icon-group"></i>
                </div>
                <div class="service-text">
                    <iframe width="450" height="250" align="left" src="https://www.youtube.com/embed/uY1cm-7PBes" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3 class="subhead">May May aprende a cocinar y hoy es Chef</h3><br>Pero lo que es excepcional en el caso de May es que para lograr convertirse en una chef de éxito
                        no tuvo que asistir a mil y una clases de cocina, No, lo único que necesitó la chef
                        Mahasrabphaisal fue YouTube.
                </div>
            </div>


                <div class="home-content__buttons">
                    <a href="#contact" class="smoothscroll btn btn--stroke">
                        COCINA
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        BAILE
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        IDIOMAS
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        DIBUJO
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        DECORACION
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        MANUALIDADES
                    </a>
                </div>
                
               
            </div> <!-- end contact-primary -->
            <input type="button" value=" Volver" onclick="location='index.html'" />
        </div> <!-- end contact-content -->
        
    </section> <!-- end s-contact -->
    

    <!-- footer
    ================================================== -->
   

    <!-- photoswipe background
    ================================================== -->
  


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader">
            <div class="line-scale-pulse-out">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>


    <!-- Java Script
    ================================================== -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

</body>

</html>


