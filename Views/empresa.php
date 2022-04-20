<?php
require_once('Core/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ferreteria Sumersa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="Assets/css/empresa.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
<?php 
 require_once "Views/Constant/clientesw/nav.php";
?>
    <div class="fondo">
        <div class="logo">
        <img src="Assets/img/logosumersa.png" height="160px" width="580px">
        </div> 
    </div>
    <div style="text-align:center">
                <div id="columna1">
                <h1>QUIENES SOMOS</h1>
                <br>
        <p>Sumersa es una empresa importadora y comercializadora de materiales para la construcción,
            destacándose en la distribución de productos de hierro tales como láminas, ángulos, polines, vigas y canales entre otros.</p>

        <p>Además ofertamos una gran variedad de productos de ferretería y diversos materiales para la construcción de techos y
             cielos falsos entre los que contamos con lámina Standard de Asbesto Cemento y Amanco Súper Eureka.</p>

        <p>Nuestra empresa cuenta con más de 30 años de experiencia durante los cuales hemos mantenido como política de servicio
             el valorar a nuestros clientes a partir de un servicio eficaz y personalizado con productos de alta calidad y economía</p>
             <br><br><br>                   
                </div>
                <div id="columna2">
                <img src="Assets/img/empresa.png" width = "310px" height = "440px">
                </div>
    </div>
</body>
<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top bg-light">
    <div class="containter text-center text-md-left">
        <div class="row text-center text-md-left">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                    Ferretería SUMERSA
                </h5>
                <p>Sumersa es una empresa importadora y comercializadora de materiales para la construcción</p>

            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h5 class="text-uppercase mb-4 font-weight-bold text-warning">
                   Contacto
               </h5>
               <i class="fas fa-home mr-3">2da Calle Pte entre 12 y 14 Av Sur No 7 Santa Tecla, La Libertad, El Salvador, C.A.</i>
               <i class="fas fa-envelope mr-3">Email:info@sumersa.com.sv</i>
           </div>
           <hr class="mb-4">
           <div class="row align-items-center text-center">
            <div class="col-md-7 col-lg-8 offset-lg-2">
                <center>
                    <p>Copyright @2022 All rights reserved</p>
                </center>
                
            </div>
        </div> 
    </div>
</div>
</footer>
</html>