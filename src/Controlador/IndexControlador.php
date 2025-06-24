<?php
require_once "./Modelo/Conexion.php";
require_once "./Modelo/Metodos/ProductoM.php";

class IndexControlador
{
    function Index()
    {
        /* 
        $pM = new ProductoM();
        $todos = $pM->BuscarTodos();
        if($todos->count()>6) {
            $todos = array_slice($todos, -6);
        }
        */
        require_once "./Vistas/Landing/index.html";
    }
}