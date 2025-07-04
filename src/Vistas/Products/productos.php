
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harricks</title>
    <link rel="icon" type="image/x-icon" href="Vistas/assets/icon.png">
    <link rel="stylesheet" href="Vistas/Products/styles/productos.css">
    <link rel="stylesheet" href="./styles/productos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<!--AQUI EMPIEZA TAL COSA-->
<body class="container-fluid">
    <div class="row header d-flex justify-content-center align-items-start">
        <nav class="navbar navbar-expand-lg navi" style="padding-block: 0">
            <div class="container-fluid d-flex align-content-center justify-content-between navbarBox">
                <a href="../Landing/index.html"><img class="navbar-brand" src="Vistas/assets/logoHarricks.png" alt="" height="auto" width="258px"></a>
                <button class="navbar-toggler" style="margin-right: 3rem" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar-list" id="navbarNavAltMarkup" style="flex-grow: 0;">
                    <div class="navbar-nav options pt-0 d-flex justify-content-center align-items-center">
                        <a class="nav-link opt mx-auto text-center" href="../Products/productos.html">Productos</a>
                        <a class="nav-link opt mx-auto text-center" href="../About/about.html">Nosotros</a>
                        <a class="nav-link opt mx-auto icon text-center"><i class="fa-solid fa-cart-shopping"></i></a>
                        <a class="nav-link opt mx-auto icon text-center" href="../Login/login.html"><i class="fa-solid fa-user"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="w-100 text-center">
            <span class="textoGrande gradient-brown">productos</span>
        </div>
    </div>
    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="modalCarrito" aria-labelledby="modalCarrito">
        <div class="offcanvas-header d-flex">
            <button type="button" class="btn-close text-reset mx-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <h3 class="offcanvas-title" id="offcanvasExampleLabel">Carrito</h3>
        </div>
        <div class="offcanvas-body">
           <ul class="listaCarrito" id="listaCarritoID">
                
           </ul>
           <div class="abajoCarrito d-flex gap-2">
                <div class="subtotalCarrito">
                    <span>Subtotal:</span>
                    <span id="SubtotalCarritoSpan">CRC3950</span>
                </div>
                <div class="divider"></div>
                <div class="totalCarrito">
                    <span>Total:</span>
                    <span id="TotalCarritoSpan">CRC3950</span>
                </div>
                <div class="btnCont mt-4">
                    <button class="btnComprar">Comprar</button>
                </div>
           </div>
        </div>
    </div>
    <div class="modal fade" id="modalAgregarProducto" tabindex="-1" aria-labelledby="modalAgregarProductoLabel">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="textTitleModal">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" style="padding-bottom: 15px;"><i class="fa-solid fa-x" style="width: 16px; height: 16px;"></i></button>
                </div>
                <div class="modal-body" id="textCenterModal">
                    <div class="modalImage">
                        <img src="../assets/choco.png" alt="">
                    </div>
                    <div class="modalText">
                        <span class="modalProductName">Pecaditos</span>
                        <span class="modalProductDesc">Arroz tostado recubierto de chocolate semiamargo del 121, bolsa de 250gr </span>
                        <span class="modalProductPrice">CRC 3950</span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-modalClose" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-modalAcept btnAgregarCarrito">Agregar al Carrito</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row main d-flex justify-content-center">
        <div class="w-65 d-flex justify-content-between align-items-center filter-bar">
            <div class="d-flex justify-content-center align-items-center gap-4" id="categorias">
                <div class="categoria d-flex justify-content-center align-items-center">
                    <span>
                        Coberturas
                    </span>
                </div>
                <div class="categoria d-flex justify-content-center align-items-center">
                    <span>
                        Chocolates
                    </span>
                </div>
                <div class="categoria d-flex justify-content-center align-items-center">
                    <span>
                        Cacao
                    </span>
                </div>
                <div class="categoria d-flex justify-content-center align-items-center">
                    <span>
                        Industrial
                    </span>
                </div>
            </div>
            <label for="busquedaProductos"></label>
            <div class="search-container" style="margin-left: 25px" >
                <input type="text" id="busquedaProductos" class="input" style="width: 100%; padding-right: 40px" placeholder="Buscar...">
                <i class="fa-solid fa-search search-icon"></i>
                <button class="btn-product btn-filtro" data-bs-toggle="modal" data-bs-target="#modalFiltro" style="height:  38px">Filtros</button>
            </div>
            <div class="modal" id="modalFiltro" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered d-flex justify-content-center align-items-center" >
                    <div class="modal-content" style="max-width: 90%; max-height: 100%; height: 250px !important;">
                        <div class="modal-header d-flex justify-content-between">
                            <h5 class="modal-title">Categorias</h5>
                            <button type="button" class="btn fa-solid fa-x" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body gap-3 d-flex justify-content-center align-items-center flex-wrap">
                            <div class="d-flex gap-1 flex-wrap justify-content-center align-items-center" style="height: auto;">
                                <div class="categoria d-flex justify-content-center align-items-center"style="height: auto; background-color: #7D411D">
                                    <span>
                                        Coberturas
                                    </span>
                                </div>
                                <div class="categoria d-flex justify-content-center align-items-center "style="height: auto; background-color: #7D411D">
                                    <span>
                                        Chocolates
                                    </span>
                                </div>
                            </div>
                            <div class="d-flex gap-4 flex-wrap justify-content-center align-items-center" style="height: auto;">
                                <div class="categoria d-flex justify-content-center align-items-center "style="height: auto; background-color: #7D411D">
                                    <span>
                                        Cacao
                                    </span>
                                </div>
                                <div class="categoria d-flex justify-content-center align-items-center "style="height: auto; background-color: #7D411D">
                                    <span>
                                        Industrial
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-modal-sec btn-modalClose" data-bs-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-modal-prin btn-modalAcept" data-bs-dismiss="modal">Guardar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-100 container-fluid mt-5 d-flex justify-content-center" id="productos">
            <div class="row py-3 d-flex justify-content-center productCont" id="contenedorProductosGeneral">
                <div class="col-12 col-sm-8 col-md-6 col-xl-5 col-xxl-3 justify-content-center singProduCont" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">
                    <span hidden>-Coberturas-</span>
                    <div class="singProdu">
                        <input type="hidden" value="1" class="idProductoModal">
                        <div class="h-100 w-100 d-flex justify-content-center align-items-center" style="min-height: 375px;">
                            <img src="Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 360px;">
                        </div>
                        <div class="d-flex gap-3 btn-Cont btn-ContL">
                            <span class="textoChiquito">Bombones</span>
                            <span class="textoChiquito">250gr</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-xl-5 col-xxl-3 justify-content-center singProduCont" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">
                    <span hidden>-Cacao-</span>
                    <div class="singProdu">
                        <input type="hidden" value="2" class="idProductoModal">
                        <div class="h-100 w-100 d-flex justify-content-center align-items-center" style="min-height: 375px;">
                            <img src="Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 360px;">
                        </div>
                        <div class="d-flex gap-3 btn-Cont btn-ContL">
                            <span class="textoChiquito">Pecaditos1</span>
                            <span class="textoChiquito">250gr</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-8 col-md-6 col-xl-5 col-xxl-3 justify-content-center singProduCont" data-bs-toggle="modal" data-bs-target="#modalAgregarProducto">
                    <span hidden>-Cacao-Coberturas-</span>
                    <div class="singProdu">
                        <input type="hidden" value="3" class="idProductoModal">
                        <div class="h-100 w-100 d-flex justify-content-center align-items-center" style="min-height: 375px;">
                            <img src="Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 360px;">
                        </div>
                        <div class="d-flex gap-3 btn-Cont btn-ContL">
                            <span class="textoChiquito">Pecaditos2</span>
                            <span class="textoChiquito">250gr</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-start" style="margin-top: 10rem!important;">
        <div class="rectangle"></div>
        <footer class="footer">
            <div style="border-bottom: #FFDBC2 2px solid; width: 80%" class="d-flex pb-1 footer-content">
                <img src="Vistas/assets/logoHarricks.png" alt="" class="footer-brand">
                <div class="d-flex justify-content-center align-items-center social">
                    <a href="https://www.facebook.com/share/e4BcBaMrRXqqzCwQ/"><img src="../assets/facebook.webp" alt="" class="icon-socialF"></a>
                    <a href="https://ldsls.es/ptemO"><img src="../assets/whatsapp.svg" alt="" class="icon-social"></a>
                    <a href="https://www.instagram.com/asococoaventas?igsh=MTZ4MHpwcjllZ2I2dg=="><img src="../assets/instagram.svg" alt="" class="icon-social"></a>
                </div>
            </div>
        </footer>
    </div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://kit.fontawesome.com/491d7a6bcc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="Vistas/Products/scripts/script.js"></script>
<script src="./scripts/script.js"></script>
</body>
</html>