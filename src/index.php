<?php
    require_once 'Core/RutaFija.php';
    require_once 'Core/Rutas.php';

    $ruta=new Rutas();

    if(isset($_GET['c']))
    {
        $controlador=$ruta->CargarControlador($_GET['c']);
        if(isset($_GET['a']))
        {
            $ruta->CargarMetodo($controlador,$_GET['a']);
        }
        else
        {
            $ruta->CargarMetodo($controlador,ACCION_PRINCIPAL);
        }
    }
    else
    {
        $ruta->CargarMetodo($ruta->CargarControlador(CONTROLADOR_PRINCIPAL), ACCION_PRINCIPAL);
    }
