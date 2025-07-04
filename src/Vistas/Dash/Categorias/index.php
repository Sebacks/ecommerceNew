
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Vistas/Dash/Categorias/styles/mainStyleDash.css">
    <link rel="icon" type="image/x-icon" href="Vistas/assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <title>Dashboard</title>
</head>
<body class="">
<div class="d-flex flex-row" style="flex-wrap: nowrap!important; padding: 0">
    <ul class="d-flex flex-column justify-content-start align-items-center side-bar" style="max-width: 224px; min-height: 100vh; margin: 0; transition: width 2s;" id="side-bar-Id">
        <a href="" class="side-bar-brand">
            <img src="Vistas/assets/logoHarricks.png" alt="" style="max-width: 100%">
        </a>
        <hr class="divider">
        <li class="side-bar-item link" id="Index">
            <i class="fa-solid fa-gauge"></i>
            <span>Dashboard</span>
        </li>
        <hr class="divider">
        <span class="side-bar-title">
            Ajustes
            </span>
        <li class="side-bar-item  link" id="Productos">
            <i class="fa-solid fa-boxes-stacked"></i>
            <span >Productos</span>
        </li>
        <li class="side-bar-item selected-item link" id="Categorias">
            <i class="fa-solid fa-list"></i>
            <span>Categorias</span>
        </li>
        <li class="side-bar-item link" id="Ofertas">
            <i class="fa-solid fa-tag"></i>
            <span>Ofertas</span>
        </li>
        <hr class="divider">
        <div class="circle" id="circleCollapse">
            <i class="fa-solid fa-angle-left"></i>
        </div>
    </ul>
    <div class="main d-flex flex-column justify-content-start align-items-start w-100" >
        <div class="navbarS" style=" max-height: 90px">
            <li class="nav-item">
                <span><i class="fa-solid fa-bell"></i></span>
            </li>
            <li class="nav-item">
                <span>Juan Alberto</span>
                <div class="circleUser"><i class="fa-solid fa-user"></i></div>
            </li>
        </div>
        <div class="content">
            <div class="d-flex justify-content-between align-items-center flex-row" style="margin-bottom: 40px">
                <span id="title-adminitracion">Administracion de Categorias</span>
                <button class="btn btn-primary" style="width: 150px!important; height: 35px!important;padding:0!important;" id="btnSwitchS">Agregar</button>
            </div>
            <div class="add-products-cont d-none" id="add-products">
                <form action="./index.php?c=Categorias&a=Crear" method="post" class="h-100">
                    <div class="d-flex justify-content-center flex-column align-items-center gap-3 h-100">
                        <input type="hidden" name="id" id="idInput">
                        <div class="d-flex flex-row gap-5 cont-half-form justify-content-center">
                            <div>
                                <label for="nombreInput">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombreInput" required tabindex="1" placeholder="cocoa">
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 cont-half-form justify-content-center">
                            <div>
                                <label for="descripcionInput">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="descripcionInput" required tabindex="2"></textarea>
                            </div>
                        </div>
                        <div class="d-flex flex-row cont-half-form justify-content-center pt-4 mt-4">
                            <button class="btn btn-primary" style="width: 332px" tabindex="9">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main-table-cont" id="main-table">
                <div class="d-flex justify-content-end text-center pb-4" style="font-size: 1.2rem; ">
                    <span style="margin: auto">Lista de categorias</span>
                    <input type="text" class="form-control" placeholder="Buscar..." style="max-width: 350px!important" id="buscarProducto">
                </div>
                <div class="main-table">
                    <table class="table">
                        <thead>
                            <tr>
                               <th scope="col" style="width:auto">Nombre</th>
                               <th scope="col" style="width:auto">Descripcion</th>
                               <th scope="col" style="width:auto">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tableProductos">
                            <?php
                            foreach ($todosCat as $cat)
                            { ?>
                                <tr id="<?php echo $cat->getId()?>">
                                <td>
                                    <span><?php echo $cat->getNombre()?></span>
                                </td>
                                <td>
                                    <span><?php echo $cat->getDescripcion()?></span>
                                </td>
                                <td>
                                    <button class="btn btn-primary editBtn">Editar</button>
                                    <?php
                                    if ($cat->getEstado())
                                    { 
                                    ?>
                                        <button class="btn btn-danger deactivateBtn" data-bs-toggle="modal" data-bs-target="#desactivarProductoModal">Desactivar</button>
                                    <?php
                                    }
                                    else
                                    {?>
                                        <button class="btn btn-success activateBtn" data-bs-toggle="modal" data-bs-target="#desactivarProductoModal">Activar</button>
                                    <?php
                                    }?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
           </div>
        </div>
    </div>
    <div class="modal fade" id="desactivarProductoModal" tabindex="-1" aria-labelledby="desactivarProductoModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmacion</h1>
                </div>
                <div class="modal-body">
                    
                </div>
                <div class="modal-footer">
                    <form action="./index.php?c=Categorias&a=Activar" method="post">
                        <input type="hidden" name="id" id="idInputModal">
                        <input type="hidden" name="estado" id="estadoInputModal">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="https://kit.fontawesome.com/491d7a6bcc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="./Vistas/Dash/Categorias/script/script.js"></script>
</body>
</html>