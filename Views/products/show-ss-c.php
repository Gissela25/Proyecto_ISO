<?php
require_once('Core/config.php'); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<link rel="stylesheet" href="Assets/css/showc.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <?php 
    require_once "Views/Constant/clientesw/nav.php";
    ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-3 my-3">
            <?php
            //Definiendo si el buscador ha sido usado
            $sear='';
            if(isset($_POST['look']))
            {
                $sea=$_POST['look'];
                $sear=strtoupper($sea);
            }
            $word='';
            $all=true;
            //Definir si deben mostrar todos los productos
            if ($sear != '') {
                $all=false;
                echo "<div class='col-12'><h5>Resultados para: " . $sear . "</h5><h6>Para eliminar la selección vuelva a la barra de búsqueda y de enter, sin ingresar texto</h6></div><br>";
            }
            
            foreach ($this->modelo->showssall() as $r)
            {
                        //Verificando que la variable no este vacía
                if(isset($sear))
                {
                    foreach ($r as $rd) {
                                //Reconoce un string que contenga la palabra
                        if (strpos($rd, $sear) !== false && !(strpos($rd, 'PROD') !== false)) {
                            $word = $rd;
                            break;
                        }
                    }
                }

                if(($r->Nombrep == $word) | ($all==true))
                {
                    $path="img/".$r->Imagen;
                    if(file_exists($path))
                    {
                        ?>
                        <div class="col" id="id_<?=$r->ID_Producto?>">
                            <div class="card shadow-sm">
                                <?php echo "<img src='img/$r->Imagen' width='300px' height='250px' class='card-img-top'>"?>
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?=$r->Nombrep?>
                                    </h5>
                                    <p class="card-text">Precio <?=$r->Precio_SS?> $</p>
                                    <?php
                                    if(($r->Cantidad_SS)>0)
                                    {
                                        ?>
                                        <p class="card-text ">Disponibilidad: <span style="color: green;"> en existencia</span></p>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <p class="card-text ">Disponibilidad: <span class="text-danger"> Fuera de stock</span></p>
                                        <?php
                                    }
                                    ?>
                                    <a href="?c=products&a=Detailsss&id=<?=$r->ID_Producto?>" class="btn btn-primary btn-block boton">Ver
                                    más</a>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                }
                
            }
            ?>
        </div>
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