<?php
class DashControlador
{
    function productosDash(){
        $pM=new ProductoM();
        $cM=new CategoriaM();
        $lM=new LocalidadM();
        $todos = $pM->BuscarTodos();
        $todosCat = $cM->BuscarTodos();
        $todosLoc = $lM->BuscarTodos();
        require_once '../Vista/dashboard/dashProductos.php';
    }
}