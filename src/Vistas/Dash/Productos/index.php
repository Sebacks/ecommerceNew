<?php
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Vistas/Dash/Productos/styles/mainStyleDash.css">
    <link rel="stylesheet" href="./styles/mainStyleDash.css">
    <link rel="icon" type="image/x-icon" href="Vistas/assets/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <title>Dashboard</title>
</head>
<body class="">
<div class="d-flex flex-row" style="flex-wrap: nowrap!important; padding: 0">
     <div class="modal fade" id="modalAgregarCategoria" tabindex="-1" aria-labelledby="modalAgregarCategoria">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header d-flex justify-content-between">
                    <h5 class="modal-title" id="textTitleModal">Agregar Categorias</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="padding-bottom: 15px;"><i class="fa-solid fa-x" style="width: 16px; height: 16px;"></i></button>
                </div>
                <div class="modal-body" id="textCenterModal">
                    <div class="modalText w-100 p-0">
                        <span class="modalProductName pb-3">Seleccionar Categorias</span>
                            <div class="d-flex justify-content-end text-center pb-4 w-100" style="font-size: 1.2rem; ">
                                <input type="text" class="form-control" placeholder="Buscar..." style="max-width: 300px!important; max-height:50px" id="buscarProducto">
                            </div>
                            <div class="main-table w-100">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width:16.666666667%">Nombre</th>
                                            <th scope="col" style="width:16.666666667%">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tableProductos">
                                        <tr id="1">
                                            <td>
                                                <span>Cocoa</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary">Agregar</button>
                                            </td>
                                        </tr>
                                        <tr id="2">
                                            <td>
                                                <span>Cobertura</span>
                                            </td>
                                            <td>
                                                <button class="btn btn-secondary">Quitar</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>      
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-modalClose" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-modalAcept btnAgregarCarrito">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
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
            <span class="side-bar-title">Ajustes</span>
        <li class="side-bar-item selected-item link" id="Productos">
            <i class="fa-solid fa-boxes-stacked"></i>
            <span >Productos</span>
        </li>
        <li class="side-bar-item link" id="Categorias">
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
                <span id="title-adminitracion">Administracion de Productos</span>
                <div>
                    <button class="btn btn-primary" style="width: 150px!important; height: 35px!important;padding:0!important;" id="btnSwitchV">Agregar Varios</button>
                    <button class="btn btn-primary" style="width: 150px!important; height: 35px!important;padding:0!important;" id="btnSwitchS">Agregar</button>
                </div>
            </div>
            <div class="add-products-cont d-none" id="add-productsV">
                <form action="" class="h-100">
                    <div class="d-flex justify-content-center flex-column align-items-center gap-3 h-100">
                        <div>
                            <label for="csvFile">Agregar productos desde archivo excel</label>
                            <input type="file" class="form-control" name="csvFile" id="csvFile" accept=".csv" tabindex="3">
                        </div>
                        <button class="btn btn-primary" style="width: 332px" tabindex="9">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="add-products-cont d-none" id="add-products">
                <form action="./index.php?c=Productos&a=Prueba" method="post" class="h-100">
                    <div class="d-flex justify-content-center flex-column align-items-center gap-3 h-100">
                        <input type="hidden" name="id" id="idInput">
                        <div class="d-flex flex-row gap-5 cont-half-form">
                            <div>
                                <label for="nombreInput">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombreInput" required tabindex="1" placeholder="cocoa">
                            </div>
                            <div>
                                <label for="cantidadInput">Cantidad Disponible</label>
                                <input type="number" class="form-control" name="cantidadDisponible" id="cantidadInput" required tabindex="5" placeholder="0">
                            </div>
                            <div>
                                <label>Categorias</label>
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#modalAgregarCategoria">Agregar Categorias</button>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 cont-half-form">
                            <div>
                                <label for="descripcionInput">Descripcion</label>
                                <textarea class="form-control" name="descripcion" id="descripcionInput" required tabindex="2"></textarea>
                            </div>
                            <div>
                                <label for="localidadInput">Localidad</label>
                                <select class="form-control" name="localidad" id="localidadInput" tabindex="6" >
                                    <option disabled value="-1" selected>Seleccione una opcion</option>
                                    <option>x</option>
                                    <option>x</option>
                                    <option>x</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 cont-half-form">
                            <div>
                                <label for="urlImagenInput">Imagen</label>
                                <input type="file" class="form-control" name="urlImagen" id="urlImagenInput" accept="image/*" tabindex="3">
                            </div>
                            <div>
                                <span>¿Tiene descuento?</span>
                                <div class="d-flex justify-content-center flex-column">
                                    <div class="d-flex flex-row-reverse align-items-center justify-content-end gap-1">
                                        <label for="true">Si</label><br>
                                        <input type="radio" id="true" name="hasDescuento" value="true" required tabindex="7">
                                    </div>
                                    <div class="d-flex flex-row-reverse align-items-center justify-content-end gap-1">
                                        <label for="false">No</label><br>
                                        <input type="radio" id="false" name="hasDescuento" value="false" required >
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-row gap-5 cont-half-form">
                            <div>
                                <label for="precioInput">Precio de venta</label>
                                <input type="number" class="form-control" name="precio" id="precioInput" required tabindex="4" placeholder="5500">
                            </div>
                            <div id="descuentoInputCont" class="d-none">
                                <div class="d-flex justify-content-between">
                                    <label for="descuentoInput">Descuento</label>
                                    <span id="porcentajeShow"></span>
                                </div>
                                <input type="range" class="form-control" min="0" max="100" value="50" name="descuento" id="descuentoInput" tabindex="8" step="5">

                            </div>
                        </div>
                        <div class="d-flex flex-row cont-half-form justify-content-end pt-4 mt-4">
                            <button type="submit" class="btn btn-primary" style="width: 332px" tabindex="9">Guardar</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="main-table-cont" id="main-table">
                <div class="d-flex justify-content-end text-center pb-4" style="font-size: 1.2rem; ">
                    <span style="margin: auto">Lista de productos</span>
                    <input type="text" class="form-control" placeholder="Buscar..." style="max-width: 350px!important" id="buscarProducto">
                </div>
                <div class="main-table">
                    <table class="table">
                        <thead>
                            <tr>
                               <th scope="col" style="width:16.666666667%">Nombre</th>
                               <th scope="col" style="width:16.666666667%">Descripcion</th>
                               <th scope="col" style="width:16.666666667%">Precio</th>
                               <th scope="col" style="width:16.666666667%"># Disponible</th>
                               <th scope="col" style="width:16.666666667%">Fecha Creacion</th>
                               <th scope="col" style="width:16.666666667%">Acciones</th>
                            </tr>
                        </thead>
                        <tbody id="tableProductos">
                            <tr id="Cocoa natural 500gr">
                                <td>
                                    <span>Cocoa natural 500gr</span>
                                </td>
                                <td>
                                    <span>Deliciosa cobertura de chocolate preparada con la mejor calidad</span>
                                </td>
                                <td>
                                    <span>CRC4700</span>
                                </td>
                                <td>
                                    <span>6500<span> Unidades</span></span>
                                </td>
                                <td>
                                    <span>20/10/2024</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary editBtn">Editar</button>
                                    <button class="btn btn-success activateBtn">Activar</button>
                                </td>
                            </tr>
                            <tr id="Cobertura de chocolate 70%">
                                <td>
                                    <span>Cobertura de chocolate 70%</span>
                                </td>
                                <td>
                                    <span>Deliciosa cobertura de chocolate preparada con la mejor calidad</span>
                                </td>
                                <td>
                                    <span>CRC8800</span>
                                </td>
                                <td>
                                    <span>6500<span> Unidades</span></span>
                                </td>
                                <td>
                                    <span>20/10/2024</span>
                                </td>
                                <td>
                                    <button class="btn btn-primary editBtn">Editar</button>
                                    <button class="btn btn-danger deactivateBtn" data-bs-toggle="modal" data-bs-target="#desactivarProductoModal">Desactivar</button>
                                </td>
                            </tr>
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
                    <span>¿Esta seguro que desea desactivar el producto?</span>
                    <span>Esta accion se puede revertir luego</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Confirmar</button>
                </div>
            </div>
        </div>
    </div>


</div>
<script src="https://kit.fontawesome.com/491d7a6bcc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="Vistas/Dash/Productos/script/script.js"></script>
<script src="./script/script.js"></script>
</body>
</html>
