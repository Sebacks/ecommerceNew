<?php?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Harricks</title>
    <link rel="icon" type="image/x-icon" href="./Vistas/assets/icon.png">
    <link rel="stylesheet" href="./Vistas/Landing/styles/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container-fluid">
<div class="row header d-flex justify-content-center align-items-start gap-0 ">
    <nav class="navbar navbar-expand-lg navi" style="padding-block: 0">
        <div class="container-fluid d-flex align-content-center justify-content-between navbarBox">
            <a href="../Landing/index.html"><img class="navbar-brand" src="./Vistas/assets/logoHarricks.png" alt="" height="auto" width="258px"></a>
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
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-12 col-md-5 d-flex gap-2 flex-column text-start order-md-1 order-2 textContainer" style="max-width: 740px">
            <span class="textoGrande gradient-orange" style="max-width: 740px">Bienvenidos a la casa del <span style="color: #ED6A0B">comelón</span></span>
            <span class="textoChiquito" style="max-width: 585px; color: #FFDBC2">Prueba nuestros deliciosos productos seleccionados por el mismisimo <span style="color: #ED6A0B">comelón de harricks</span></span>
        </div>
        <div class="col-12 col-md-5  order-md-2 order-1 d-flex flex-row justify-content-center align-items-center comelonCont" style="position: relative">
            <img src="./Vistas/assets/comelon.png" alt="" class="comelon">
            <div class="textBubble">
            </div>
        </div>
    </div>
</div>
<div class="row main d-flex justify-content-center">
    <div class="container-fluid">
        <div class="row d-flex justify-content-center align-items-center pt-5 flex-column produCont" style="min-height: 1062px;">
            <div class="d-flex justify-content-center align-items-center pt-5 flex-column">
                <span class="textoGrande gradient-brown" style="width: fit-content; letter-spacing: 3px; ">Nuestros productos</span>
                <span class="textoChiquito gradient-brown" style="width: fit-content; font-size: 15px;">Creados con <span style="color: #ED6A0B">amor</span></span>
            </div>
            <div>
                <div class="row py-3 d-flex justify-content-center mt-5">
                    
                   <div class="col-xl-2 d-flex justify-content-around singProduCont" style="width: 359.74px;">
                        <div class="singProdu d-flex justify-content-between">
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-center align-items-start flex-column">
                                    <span class="nombreProdu text-center">
                                        Surtido de chocolates
                                    </span>
                                </div>
                            </div>
                            <div>
                                <img src="./Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 186px;">
                            </div>
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-around align-items-center flex-row gap-3">
                                    <a href="../productos/productos.html" class="btn-product d-flex justify-content-center align-items-center" style="text-decoration: none">
                                        PEDIR YA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 d-flex justify-content-around singProduCont" style="width: 359.74px;">
                        <div class="singProdu d-flex justify-content-between">
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-center align-items-start flex-column">
                                    <span class="nombreProdu text-center">
                                        Surtido de chocolates
                                    </span>
                                </div>
                            </div>
                            <div>
                                <img src="./Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 186px;">
                            </div>
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-around align-items-center flex-row gap-3">
                                    <a href="../productos/productos.html" class="btn-product d-flex justify-content-center align-items-center" style="text-decoration: none">
                                        PEDIR YA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 d-flex justify-content-around singProduCont" style="width: 359.74px;">
                        <div class="singProdu d-flex justify-content-between">
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-center align-items-start flex-column">
                                    <span class="nombreProdu text-center">
                                        Surtido de chocolates
                                    </span>
                                </div>
                            </div>
                            <div>
                                <img src="./Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 186px;">
                            </div>
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-around align-items-center flex-row gap-3">
                                    <a href="../productos/productos.html" class="btn-product d-flex justify-content-center align-items-center" style="text-decoration: none">
                                        PEDIR YA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 d-flex justify-content-around singProduCont" style="width: 359.74px;">
                        <div class="singProdu d-flex justify-content-between">
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-center align-items-start flex-column">
                                    <span class="nombreProdu text-center">
                                        Surtido de chocolates 
                                    </span>
                                </div>
                            </div>
                            <div>
                                <img src="./Vistas/assets/choco.png" alt="" width="100%" height="auto" style="max-height: 186px;">
                            </div>
                            <div class="w-100 cont-full justify-content-center d-flex">
                                <div class="d-flex justify-content-around align-items-center flex-row gap-3">
                                    <a href="../productos/productos.html" class="btn-product d-flex justify-content-center align-items-center" style="text-decoration: none">
                                        PEDIR YA
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center align-items-center pt-5 flex-column certificadosCont pb-5">
            <div class="containerCertificados">
                <div class="d-flex justify-content-center align-items-center pt-5 flex-column">
                    <span class="textoGrande" style="width: fit-content; letter-spacing: 3px; font-weight: bold; color: #FF9A03;">Nuestros certificados</span>
                </div>
                <div class="row w-75 d-flex align-items-center mt-5 bg-light certificadosBox gap-4 flex-row">
                    <img src="./Vistas/assets/certificaciones/image_1_3x.webp" alt="" class="imgCertificado"> 
                    <img src="./Vistas/assets/certificaciones/image_3_3x.webp" alt="" class="imgCertificado">
                    <img src="./Vistas/assets/certificaciones/image_4_3x.webp" alt="" class="imgCertificado">
                    <img src="./Vistas/assets/certificaciones/image_5_3x.webp" alt="" class="imgCertificado">
                    <img src="./Vistas/assets/certificaciones/image_7_3x.webp" alt="" class="imgCertificado">
                </div>
            </div>
        </div>
        <div class="row d-none">Extras</div>
        <div class="row d-flex justify-content-center align-items-center pt-5 flex-column pb-5 ">
            <div class="container-fluid">
                <div class="d-flex justify-content-center align-items-center pt-5 flex-column">
                    <span class="textoGrande gradient-brown" style="width: fit-content; letter-spacing: 3px; font-weight: bold;">Visitanos en</span>
                </div>
                <div class="d-flex flex-row mt-5 align-items-center justify-content-center" style="min-height: 480px;">
                    <div class="locationCont">
                        <div class="canvasCont">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d245.63454322421632!2d-84.04382143634636!3d9.92123853250712!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3007e565513%3A0x69ad71a69063b509!2sASOCOCOA!5e0!3m2!1ses-419!2scr!4v1750465772932!5m2!1ses-419!2scr" width="370" height="225" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <div class="contTextoLocation">
                                <div>
                                    <span class="textoChiquito " style="color: #ED6A0B;">La Casa del Comelon</span>
                                    <span class="textoChiquito2 " style="color: #ED6A0B">Curridabat-San Jose</span>
                                </div>
                                <span class="textoChiquito btn-orange"><a href="https://www.google.com/maps?ll=9.921139,-84.043644&z=19&t=m&hl=es-419&gl=CR&mapclient=embed&cid=7614867505154340105" style="text-decoration: none; color: white;">Visitanos</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center align-items-start">
    <div class="rectangle"></div>
    <footer class="footer">
        <div style="border-bottom: #FFDBC2 2px solid; width: 80%" class="d-flex pb-1 footer-content">
            <img src="./Vistas/assets/logoHarricks.png" alt="" class="footer-brand" draggable="false">
            <div class="d-flex justify-content-center align-items-center social">
                <a href="https://www.facebook.com/share/e4BcBaMrRXqqzCwQ/"><img src="./Vistas/assets/facebook.webp" alt="" class="icon-socialF"></a>
                <a href="https://ldsls.es/ptemO"><img src="./Vistas/assets/whatsapp.svg" alt="" class="icon-social"></a>
                <a href="https://www.instagram.com/asococoaventas?igsh=MTZ4MHpwcjllZ2I2dg=="><img src="./Vistas/assets/instagram.svg" alt="" class="icon-social"></a>
            </div>
        </div>
    </footer>
</div>
<script src="https://kit.fontawesome.com/491d7a6bcc.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

