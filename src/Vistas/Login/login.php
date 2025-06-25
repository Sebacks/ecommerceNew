<?php
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="shortcut icon" href="../assets/icon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <div class="oscuro"></div>
    <div class="container-fluid d-flex justify-content-center align-items-center fondoComida" style="height: 100vh;">
    <div class="row d-flex justify-content-center align-items-center login-box">
        <div class="login-container d-flex flex-row justify-content-center align-items-center">
            <div class="col-md-6 d-flex justify-content-center align-items-center m-0 logoHarricksCont" >
                <a href="../landing/index.html" style="display: flex; justify-content: center"><img src="../assets/logoHarricks.png" alt="" class="logoHarricks"></a>
            </div>
            <div class="col-md-6 d-flex flex-column justify-content-center text-center text-light" style="padding: 50px;" id="formu">
                <div id="loginForm" style="padding: 50px; gap: 22px;">
                    <span class="montserrat-bold">Iniciar Sesion</span>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="inputUsrL" placeholder="name@example.com">
                        <label class="floatingInput" for="inputUsrL"><i class="fa-solid fa-user" style="color: #c67700; margin-right: 10px;"></i>   Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="inputPassL" placeholder="password">
                        <label class="floatingInput" for="inputPassL"><i class="fa-solid fa-lock" style="color: #c67700; margin-right: 10px"></i>   Contraseña</label>
                    </div>
                    <div class="justify-content-center align-items-center olvidoPass pt-3">
                        <span>¿Olvidó su contraseña?</span>
                    </div>
                </div>
                <div id="registroForm" class="d-none" style="padding: 50px; gap: 22px;">
                    <span class="montserrat-bold">Registrarse</span>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="inputUsrR" placeholder="name@example.com">
                        <label class="floatingInput" for="inputUsrR"><i class="fa-solid fa-user" style="color: #c67700; margin-right: 10px;"></i>   Correo</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="inputPassR" placeholder="password">
                        <label class="floatingInput" for="inputPassR"><i class="fa-solid fa-lock" style="color: #c67700; margin-right: 10px"></i>   Contraseña</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="inputCPass" placeholder="password">
                        <label class="floatingInput" for="inputCPass"><i class="fa-solid fa-lock" style="color: #c67700; margin-right: 10px"></i>   Confirmar Contraseña</label>
                    </div>
                </div>
                <div class="d-flex gap-3 justify-content-center">
                    <button class="btn" style="width: 50%" id="btnSwitch">
                        Registrarse
                    </button>
                    <button class="btn" style="width: 50%" id="btnConfirm">
                        Confirmar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
