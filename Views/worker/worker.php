<?php
require_once('Core/config.php');
 require_once "Views/Constant/admin/const.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="<?=PATH?>Assets/css/branch.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Empleados</title>
</head>

<body>
<?php 
 require_once "Views/Constant/admin/nav.php";
?>

    <div class="row mx-5 mt-5">
        <div class="col ml-5">
            <h5 style="text-align:center">Usuarios Activos</h5>
            <a class="edit" href="<?=PATH?>?c=worker&a=Insert"><i class="bi bi-plus-square-fill"></i> Insertar</a>
            <div class="row mt-3">
                <table class="table table-bordered">
                    <thead class="Te" style="background-color: #084594">
                        <tr>
                            <th>ID Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Sucursal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->modelo->showactive() as $r):?>
                        <td><?=$r->ID_Usuario?></td>
                        <td><?=$r->Nombre?></td>
                        <td><?=$r->Apellido?></td>
                        <td><?=$r->Correo?></td>
                        <td><?=$r->Nombre_Sucursal?></td>
                        <td>
                            <a class="edit mx-3" href="<?=PATH?>?c=worker&a=workeredit&idu=<?=$r->ID_Usuario?>"><i class="bi bi-pencil-square"></i> Editar
                                <i class="fa fa-lg fa-refresh"></i></a>
                            <!-- <a class="edit mx-3" href=""><i class="bi bi-trash-fill"></i> Eliminar
                                <i class="fa fa-lg fa-refresh"></i></a> -->
                        </td>
                        </tr>
                        <?php endforeach;?>
                        <tr>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mx-5 mt-5">
        <div class="col ml-5">
        <h5 style="text-align:center">Usuarios Inactivos</h5>
            <!-- <a class="edit" href="?c=branch&a=Insert"><i class="bi bi-plus-square-fill"></i> Insertar</a> -->
            <div class="row mt-3">
                <table class="table table-bordered">
                    <thead class="Te" style="background-color: #084594">
                        <tr>
                            <th>ID Usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Correo</th>
                            <th>Sucursal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($this->modelo->showdactive() as $r):?>
                        <td><?=$r->ID_Usuario?></td>
                        <td><?=$r->Nombre?></td>
                        <td><?=$r->Apellido?></td>
                        <td><?=$r->Correo?></td>
                        <td><?=$r->Nombre_Sucursal?></td>
                        <td>
                            <a class="edit mx-3" href="?c=worker&a=workeredit&idu=<?=$r->ID_Usuario?>"><i class="bi bi-pencil-square"></i> Editar
                                <i class="fa fa-lg fa-refresh"></i></a>
                            <!-- <a class="edit mx-3" href=""><i class="bi bi-trash-fill"></i> Eliminar
                                <i class="fa fa-lg fa-refresh"></i></a> -->
                        </td>
                        </tr>
                        <?php endforeach;?>
                        <tr>
                        </tr>
                    </tbody>
                </table>
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