<?php
declare(strict_types=1);
namespace Rutas;
require_once __DIR__.'/Routing/rutaDefault.php';

    class Rutas
    {
        public function CargarControlador(string $controlador)
        {
            $direccionControlador = $this->leerArchivoControlador($controlador);   
            require_once $direccionControlador;
            if($direccionControlador==RutaDefault)
            {
                return MetodoDefault.'Controlador';
            }
            return str_replace(".php","",explode("/Controlador/", $direccionControlador)[1]);
        }
        public function cargarMetodo(mixed $controlador,mixed $metodo) 
        {
            if(isset($metodo) && method_exists($controlador,$metodo))
            {
                $controlador->$metodo();
            }
            else
            {
                $controlador=new \Controlador\IndexControlador();
                $controlador->Index();
            }        
        }
        public function leerArchivoControlador($controlador) : string 
        {
            $nombreControlador=ucwords(strtolower($controlador))."Controlador";
            $archivoControlador= "./Controlador/".$nombreControlador.".php";
            if(!is_file($archivoControlador))
            {
             return $archivoControlador = RutaDefault;   
            }
            return $archivoControlador;
        }
    }