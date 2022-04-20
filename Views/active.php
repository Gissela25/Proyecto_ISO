<?php 
require_once('Core/config.php');?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"><link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <title>Recuperar Cuenta</title>
    <!-- <link rel="stylesheet" href="Assets/css/active.css"> -->
    <link rel="stylesheet" href="<?=PATH?>Assets/css/activeee.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
          
        <div class="col-md-5 ">
        <img src="<?=PATH?>Assets/img/logo.PNG" class="rounded mx-auto d-block mb-3" alt="..." height="65px" width="200px">
           <form class="formulario" action="?c=user&a=Activar" method="POST" role="form"> 
                    <div class="form-group text-center">
                        <h3 class="text-" style="color:#084594">Verificar Cuenta</h3>
                    </div>        
                    <?php require 'Tools/procesar-datos-active.php'?>
                    <?php
                    if(count($errores_rec)>0&&isset($_POST['confirmar']))
                    {
                        echo "<ul>";
                        foreach($errores_rec as $error)
                        {
                          echo "<li>$error</li>";
                        }
                        echo "</ul>";

                    }
                    ?>
                    <div class="form-group mx-sm-4 pb-3">
                        <input type="text" class="form-control"  placeholder="Ingrese su Email" name="correo" id="correo">
                    </div>
                    <div class="form-group mx-sm-4 pb-2">
                        <input type="submit" value="Confirmar" name="confirmar" id="confirmar" class="btn btn-block ingresar">
                    </div>
                    <div class="form-group text-center">
                        <a href="?c=user&a=Ingresar" class="edit"><i class="bi bi-reply-fill"></i>Regresar</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
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