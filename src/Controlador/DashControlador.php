<?php
require_once 'Modelo/Metodos/ProductoM.php';
require_once 'Modelo/Entidades/Producto.php';
require_once 'Modelo/Metodos/CategoriaM.php';
require_once 'Modelo/Entidades/Categoria.php';
require_once 'Modelo/Metodos/LocalidadM.php';
require_once 'Modelo/Entidades/Localidad.php';
require_once 'Modelo/Conexion.php';

class DashControlador
{
    function ProductosDash(){
        $pM=new ProductoM();
        $cM=new CategoriaM();
        $lM=new LocalidadM();
        $todosProd = $pM->BuscarTodos();
        $todosCat = $cM->BuscarTodos();
        $todosLoc = $lM->BuscarTodos();
        require_once 'Vistas/Dash/Productos/index.php';
    }

    function CategoriasDash(){
        $cM=new CategoriaM();
        $todosCat = $cM->BuscarTodos();
        require_once 'Vistas/Dash/Categorias/index.php';
    }

    function Index()
    {
        if (false)
        {
            $this->ProductosDash();
        }
        else
        {
            $this->CategoriasDash();

        }
    }
}